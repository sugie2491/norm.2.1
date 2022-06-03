<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upgrade_1_0_0_to_1_0_1 extends CI_Controller
{
	private $_setting;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
	}




	public function index()
	{
		set_time_limit(0);

		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->_setting->system_version != '1.0.0')
			{
				return;
			}

			$this->_update();
			$this->_upgrade();
			$this->_patch();
			$this->_patch_user_access();
			$this->_alter_index();

			$this->db->trans_complete();
		}
		catch (Exception $e)
		{
			$json['message'] = $e->getMessage();
			$json['status'] = 'error';

			if ($json['message'] == '')
			{
				$json['message'] = 'Server error.';
			}
		}

		echo json_encode($json);
	}




	private function _alter_index()
	{
		$this->db->simple_query("USE `webapps_1_payroll`");

		$query = $this->db->query('SHOW TABLES');

		foreach ($query->result_array() as $arr_table)
		{
			$table = $arr_table["Tables_in_webapps_1_payroll"];

			$query2 = $this->db->query("SHOW INDEX FROM `{$table}`");

			$arr_old_index = array();

			foreach ($query2->result_array() as $arr_index)
			{
				if ($arr_index['Key_name'] == 'PRIMARY')
				{
					continue;
				}

				$arr_old_index[][$arr_index['Column_name']] = $arr_index['Key_name'];
			}

			$arr_field = $this->db->field_data($table);

			$arr_new_index = array();

			foreach ($arr_field as $field)
			{
				if (!(preg_match('/_id$/', $field->name) && $field->type == 'int' && $field->max_length == 10) && !(preg_match('/date$/', $field->name)) && $field->name != 'module_id')
				{
					continue;
				}

				$arr_new_index[] = $field->name;
			}

			foreach ($arr_new_index as $key => $new_index)
			{
				if (!(isset($arr_old_index[$key][$new_index]) && $arr_old_index[$key][$new_index] == $new_index))
				{
					break;
				}

				unset($arr_old_index[$key][$new_index]);
				unset($arr_new_index[$key]);
			}

			foreach ($arr_old_index as $old_index)
			{
				foreach ($old_index as $index)
				{
					$this->db->simple_query("ALTER TABLE `{$table}` DROP INDEX `{$index}`");
				}
			}

			foreach ($arr_new_index as $new_index)
			{
				$this->db->simple_query("ALTER TABLE `{$table}` ADD INDEX `{$new_index}` (`{$new_index}`)");
			}
		}
	}

	private function _patch()
	{
	}

	private function _patch_user_access()
	{
		$arr_user_id = array(1, 2);

		$this->db->where_in('user_id', $arr_user_id);
		$this->core_model->delete('user_access');

		$this->db->select('id');
		$arr_user = $this->core_model->get('user', $arr_user_id);

		$this->db->select('id, add, delete, edit, list');
		$arr_module = $this->core_model->get('module');

		foreach ($arr_user as $user)
		{
			foreach ($arr_module as $module)
			{
				unset($user_access_record);

				$user_access_record['user_id'] = $user->id;
				$user_access_record['module_id'] = $module->id;
				$user_access_record['add'] = $module->add;
				$user_access_record['delete'] = $module->delete;
				$user_access_record['edit'] = $module->edit;
				$user_access_record['list'] = $module->list;

				$this->core_model->insert('user_access', $user_access_record);
			}
		}
	}

	private function _update()
	{
		$this->db->simple_query("UPDATE `setting` SET `value` = '1.0.1' WHERE `name` = 'system_version';");
	}

	private function _upgrade()
	{
		$this->db->simple_query("CREATE TABLE `category` (
		  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
		  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
		  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
		  `editable` tinyint(1) NOT NULL DEFAULT '1',
		  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
		  `type` varchar(128) NOT NULL DEFAULT '',
		  `number` varchar(128) NOT NULL DEFAULT '',
		  `name` varchar(255) NOT NULL DEFAULT '',
		  `date` int(10) unsigned NOT NULL DEFAULT '0',
		  `status` varchar(128) NOT NULL DEFAULT '',
		  `author_name` varchar(255) NOT NULL DEFAULT '',
		  PRIMARY KEY (`id`),
		  KEY `author_id` (`author_id`),
		  KEY `date` (`date`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->simple_query("INSERT INTO `category` (`created`, `updated`, `author_id`, `number`, `name`, `author_name`) VALUES ('2000-01-01 00:00:00', '2000-01-01 00:00:00', '1', '0001', 'S.O.P', 'Super Admin');");
		$this->db->simple_query("INSERT INTO `category` (`created`, `updated`, `author_id`, `number`, `name`, `author_name`) VALUES ('2000-01-01 00:00:00', '2000-01-01 00:00:00', '1', '0002', 'Product Knowledge', 'Super Admin');");
		$this->db->simple_query("INSERT INTO `category` (`created`, `updated`, `author_id`, `number`, `name`, `author_name`) VALUES ('2000-01-01 00:00:00', '2000-01-01 00:00:00', '1', '0003', 'Customer Care', 'Super Admin');");
		$this->db->simple_query("INSERT INTO `category` (`created`, `updated`, `author_id`, `number`, `name`, `author_name`) VALUES ('2000-01-01 00:00:00', '2000-01-01 00:00:00', '1', '0004', 'Frequently Asked Question', 'Super Admin');");

		$this->db->simple_query("CREATE TABLE `article` (
		  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
		  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
		  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
		  `editable` tinyint(1) NOT NULL DEFAULT '1',
		  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
		  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
		  `type` varchar(128) NOT NULL DEFAULT '',
		  `number` varchar(128) NOT NULL DEFAULT '',
		  `name` varchar(255) NOT NULL DEFAULT '',
		  `date` int(10) unsigned NOT NULL DEFAULT '0',
		  `status` varchar(128) NOT NULL DEFAULT '',
		  `content` text NOT NULL,
		  `author_name` varchar(255) NOT NULL DEFAULT '',
		  `category_type` varchar(128) NOT NULL DEFAULT '',
		  `category_number` varchar(128) NOT NULL DEFAULT '',
		  `category_name` varchar(255) NOT NULL DEFAULT '',
		  `category_date` int(10) unsigned NOT NULL DEFAULT '0',
		  `category_status` varchar(128) NOT NULL DEFAULT '',
		  PRIMARY KEY (`id`),
		  KEY `author_id` (`author_id`),
		  KEY `date` (`date`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		$this->db->simple_query("ALTER TABLE `image` ADD COLUMN `article_id` INT(10) UNSIGNED DEFAULT 0 NOT NULL AFTER `author_id`, ADD COLUMN `article_type` VARCHAR(128) DEFAULT '' NOT NULL AFTER `author_name`, ADD COLUMN `article_number` VARCHAR(128) DEFAULT '' NOT NULL AFTER `article_type`, ADD COLUMN `article_name` VARCHAR(255) DEFAULT '' NOT NULL AFTER `article_number`, ADD COLUMN `article_date` INT(10) UNSIGNED DEFAULT 0 NOT NULL AFTER `article_name`, ADD COLUMN `article_status` VARCHAR(128) DEFAULT '' NOT NULL AFTER `article_date`;");
	}
}