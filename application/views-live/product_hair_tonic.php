<? $this->load->view('header'); ?>

<body>
	<? $this->load->view('navigation'); ?>

	<section class="product-section">
		<div class="container margin-top-90px">
			<div class="row product-container small-gap">
				<div class="col-12 small-gap">
					<a class="animate black" href="<?= $referrer_url; ?>">
						<div class="product-referrer">
							<div class="image">
								<img src="<?= base_url(); ?>assets/images/main/arrow-left.png">
							</div>
							<div>Back</div>
						</div>
					</a>
				</div>
			</div>

			<div class="row product-container small-gap margin-top-30px">
				<div class="col-12 col-sm-6 small-gap">
					<div class="image">
						<div class="product-image-carousel owl-carousel owl-theme">
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/hair-tonic-norm.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Hair Tonic</h1>

						<!-- <div class="price">IDR 169.000</div> -->

						<div class="description">
							<p>Tonic untuk merangsang pertumbuhan dan menghentikan kerontokan rambut.</p>
						</div>

						<div class="price-container margin-top-15px">
							<div class="price-box product text-center price-product-3 active" data-product-id="3" data-quantity="1" data-price="169000">
								<div class="checklist">
									<img src="<?= base_url(); ?>assets/images/main/check.png">
								</div>

								<div>1 bulan perawatan</div>
								<div class="price">IDR 169.000</div>
							</div>
							<div class="price-box product text-center margin-left-15px price-product-3" data-product-id="3" data-quantity="3" data-price="169000">
								<div class="checklist">
									<img src="<?= base_url(); ?>assets/images/main/check.png">
								</div>
								<div class="floating">10% off</div>

								<div>3 bulan perawatan</div>
								<div class="price">IDR 456.300</div>
							</div>
						</div>

						<div class="button">
							<button class="main width-100 cart-button-3" onclick="prescriptionAddCart(3);">Add to Cart</button>
						</div>

						<div class="margin-top-30px">
							<div class="panel active">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Cara Pemakaian</div>
								<div class="content">
									<ul>
										<li>Aplikasikan 1 ml 2 kali sehari (pagi dan malam).</li>
										<li>Pakai pada kulit kepala dalam kondisi kering yang mengalami penipisan rambut atau kerontokan berlebih.</li>
										<li>Hindari membasahi rambut setidaknya 4 jam setelah pengaplikasian.</li>
										<li>Pengunaan bisa tanpa keramas terlebih dahulu.</li>
									</ul>
									<p>Jika sudah mendekati dosis berikutnya, gunakan dosis yang sama. Jangan gunakan dosis ekstra atau lebih dari yang disarankan.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Waktu Perawatan</div>
								<div class="content">
									<p>Diperlukan setidaknya 3-4 bulan penggunaan rutin untuk melihat perubahan terjadi pada rambut.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Penyimpanan</div>
								<div class="content">
									<ul>
										<li>Jauhkan dari jangkauan anak-anak.</li>
										<li>Simpan pada suhu kamar.</li>
										<li>Beberapa produk mungkin mudah terbakar. Jauhkan dari panas, api atau nyala api.</li>
										<li>Buang semua perawatan yang tidak digunakan setelah tanggal kedaluwarsa.</li>
									</ul>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Informasi Penting Lainnya</div>
								<div class="content">
									<p><b><u>Peringatan</u></b></p>
							  		<p>Wanita tidak disarankan untuk menggunakan produk hair-tonic-norm 5%. Jauhkan dari jangkauan anak-anak.</p>
							  		<p>Jangan menggunakan perawatan ini di mata, hidung, mulut, atau area sensitif lainnya. Jika terkena, bilas dengan air dingin hingga bersih. Selalu cuci tangan setelah menggunakannya. Jangan gunakan jika kulit kepala Kamu terluka, tergores, atau terbakar sinar matahari.</p>
							  		<p>Beberapa orang mungkin melihat perubahan warna atau tekstur rambut setelah menggunakan perawatan ini.</p>

							  		<p><b><u>Efek Samping</u></b></p>
							  		<p>Meskipun perawatan ini umumnya aman, perawatan ini terkait dengan efek samping yang jarang tetapi serius. Hubungi dokter atau profesional kesehatan segera jika anda mengalami salah satu dari yang berikut:</p>
							  		<ul>
							  			<li>Nyeri dada atau jantung berdebar.</li>
							  			<li>Pusing atau pingsan.</li>
							  			<li>Ruam kulit, lepuh, atau gatal-gatal.</li>
							  			<li>Berat badan tiba-tiba meningkat.</li>
							  			<li>Pembengkakan tangan atau kaki.</li>
							  		</ul>
							  		<p>Efek samping berikut ini biasanya tidak memerlukan perhatian medis (walaupun Kamu dapat melaporkannya ke dokter atau profesional kesehatan jika terus-menerus):</p>
							  		<ul>
							  			<li>Sakit kepala.</li>
							  			<li>Kemerahan, iritasi dan gatal di lokasi aplikasi</li>
							  			<li>Pertumbuhan rambut yang tidak biasa, pada wajah, lengan, dan punggung ​.</li>
							  		</ul>
							  		<p>Daftar diatas mungkin tidak menjelaskan semua kemungkinan efek samping</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('hairbody_footer_banner'); ?>

	<div class="screen-blocker"></div>
</body>

<? $this->load->view('footer'); ?>
<? $this->load->view('js'); ?>

<!-- JS INTERNAL PLUGIN -->
<script type="text/javascript">
	$(function() {
		initProductCarousel();
		initProductPanel();
	});

	function initProductCarousel() {
		$('.product-image-carousel').owlCarousel({
			dots: true,
			items: 1,
			lazyLoad: true,
		    loop: true,
		    margin: 10,
		    nav: false,
		    responsiveClass: true,
		});
	}

	function initProductPanel() {
		$('.panel').click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
			else {
				$('.panel').removeClass('active');
				$(this).addClass('active');
			}
		});

		$('.price-box').click(function() {
			const productId = $(this).attr('data-product-id');

			$('.price-product-'+ productId).removeClass('active');
			$(this).addClass('active');
		});
	}

	function prescriptionAddCart(productId) {
		const quantity = $('.price-product-'+ productId +'.active').attr('data-quantity');
		const price = $('.price-product-'+ productId +'.active').attr('data-price');

		let discount = 0;
		let total = price * quantity;

		if (quantity >= 3) {
			discount = total / 10;
		}

		$('.cart-button-'+ productId).html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	product_id: productId,
            	category_id: 5,
            	quantity: quantity,
            	discount: discount,
            	price: price,
            	total: total,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.cart-'+ productId).html(`Add To Cart`);
            },
            success: function(data) {
                if (data.status == 'success') {
                	$('.cart-detail').empty();

                    $('.cart-detail').append(data.cart_list);
                    $('.cart-total').removeClass('d-none');

                    $('.cart-total-subtotal').html(data.subtotal_display);

                    $('.quantity .minus, .quantity .plus, .cart-list .remove').unbind('click');
                    cartInit();

                    $('.cart-icon').attr('src', '<?= base_url(); ?>assets/images/main/cart-fill-<?= $navbar; ?>.png');

                    $('html body').css('overflow', 'hidden');
                    $('.cart-container, .screen-blocker').addClass('active');

                    $('.cart-button-'+ productId).html(`Add to Cart`);
                }
                else {
                    alert(data.message);
                    $('.cart-'+ productId).html(`Add To Cart`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_add_to_cart/'
        });
	}
</script>
</html>