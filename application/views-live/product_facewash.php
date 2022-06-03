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
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/face-wash-2.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/face-wash-3.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/face-wash-4.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Hydra Cleansing Face Wash</h1>
						<div class="ingredient">Agave Leaf │ Calendula Flower │ Mugwort</div>

						<div class="price">IDR 79.000</div>

						<div class="description">
							<p>Basic skincare untuk membersihkan wajah. Diformulasikan menggunakan agave leaf, calendula flower, dan mugwort yang  efektif membersihkan kotoran, mengurangi minyak berlebih, serta menjadikan kulit bersih dan lembut.</p>
							<p>Cocok untuk semua jenis kulit.</p>
						</div>

						<div class="coming-soon-text">COMING SOON</div>

						<!-- <div class="price-container margin-top-15px">
							<div class="price-box product text-center price-product-18 active" data-product-id="18" data-quantity="1" data-price="79000">
								<div class="checklist">
									<img src="<?= base_url(); ?>assets/images/main/check.png">
								</div>

								<div>1 bulan perawatan</div>
								<div class="price">IDR 79.000</div>
							</div>
							<div class="price-box product text-center margin-left-15px price-product-18" data-product-id="18" data-quantity="3" data-price="79000">
								<div class="checklist">
									<img src="<?= base_url(); ?>assets/images/main/check.png">
								</div>
								<div class="floating">5% off</div>

								<div>3 bulan perawatan</div>
								<div class="price">IDR 225.150</div>
							</div>
						</div>

						<div class="button">
							<button class="main width-100 cart-button-18" onclick="prescriptionAddCart(18);">Add to Cart</button>
						</div>

						<div class="margin-top-15px">
							<div class="row small-gap e-commerce-container">
								<div class="col-3 small-gap">
									<div class="e-commerce-box text-center">
										<a href="#">
											<img class="width-80 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/shopee-logo.png">
										</a>
									</div>
								</div>
								<div class="col-3 small-gap">
									<div class="e-commerce-box text-center">
										<a href="#">
											<img class="width-80 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/tokopedia-logo.png">
										</a>
									</div>
								</div>
								<div class="col-3 small-gap">
									<div class="e-commerce-box text-center">
										<a href="#">
											<img class="width-80 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/lazada-logo.png">
										</a>
									</div>
								</div>
								<div class="col-3 small-gap">
									<div class="e-commerce-box text-center">
										<a href="#">
											<img class="width-80 margin-auto" src="<?= base_url(); ?>assets/images/main/ecommerce/bukalapak-logo.png">
										</a>
									</div>
								</div>
							</div>
						</div> -->

						<div class="margin-top-30px">
							<div class="panel active">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Helps With</div>
								<div class="content">
									<div class="row">
										<div class="col-4 text-center">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/excess-oil.png">
											<div class="margin-top-15px icon-text">Mengurangi minyak berlebih</div>
										</div>
										<div class="col-4 text-center">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/acne-prevention.png">
											<div class="margin-top-15px icon-text">Mencegah jerawat</div>
										</div>
										<div class="col-4 text-center">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/brightening.png">
											<div class="margin-top-15px icon-text">Mencerahkan wajah</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">How to Use</div>
								<div class="content">
									<p>Aplikasikan secukupnya pada wajah yang telah dibasahi, pijat secara lembut dan merata dengan gerakan memutar di seluruh bagian wajah. Bilas hingga bersih.</p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Key Ingredients</div>
								<div class="content">
									<ul>
										<li>
											<div><strong>Agave Leaf</strong></div>
											<ul class="margin-bottom-15px">
												<li>Membantu melembabkan kulit</li>
												<li>Kaya vitamin B1, B2, C, D, K, dan provitamin A untuk kulit sehat</li>
											</ul>
										</li>
										<li>
											<div><strong>Calendula Flower</strong></div>
											<ul class="margin-bottom-15px">
												<li>Melembutkan kulit wajah</li>
												<li>Mengurangi minyak berlebih</li>
											</ul>
										</li>
										<li>
											<div><strong>Mugwort</strong></div>
											<ul class="margin-bottom-15px">
												<li>Sebagai anti-mikroba dan melembutkan kulit</li>
												<li>Kaya antioksidan untuk mencegah inflamasi kulit</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $this->load->view('skincare_footer_banner'); ?>

	<section>
		<div class="container normal">
			<div class="title text-center">You might also like</div>

			<div class="row margin-top-30px small-gap">
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>face-scrub/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-scrub-1.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Formulasi scrub mengandung cellulose microbeads, biji aprikot, serta sage dan maca.</div>

							<!-- <div class="cart-button cart-19" onclick="addToCart(19, 0, 1, 89000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Deep Exfoliation Face Scrub</div>
						<div class="price">IDR 89.000</div>
						<div class="stars">
							<div class="img">
								<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
							</div>
							<div class="review">(3)</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>moisturizer/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Moisturizer yang menghidrasi dan melindungi kulit dari sinar matahari serta menutrisi dan mengurangi penuaan kulit.</div>

							<!-- <div class="cart-button cart-20" onclick="addToCart(20, 0, 1, 99000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Daily Defense Moisturizer</div>
						<div class="price">IDR 99.000</div>
						<div class="stars">
							<div class="img">
								<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
							</div>
							<div class="review">(3)</div>
						</div>
					</div>
				</div>
				<div class="w-100 d-block d-sm-none"></div>
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>shampoo/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/shampoo-1.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Perpadukan bahan yang sudah teruji dan dikenal baik untuk rambut.</div>

							<!-- <div class="cart-button cart-21" onclick="addToCart(21, 0, 1, 109000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Pure Performance Shampoo</div>
						<div class="price">IDR 109.000</div>
						<div class="stars">
							<div class="img">
								<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
							</div>
							<div class="review">(3)</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-3 small-gap">
					<div class="product-category-container">
						<div class="image">
							<a href="<?= base_url(); ?>body-wash/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/body-wash-1.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Formula efektif membersihkan, menghidrasi, dan menyegarkan kulit</div>

							<!-- <div class="cart-button cart-22" onclick="addToCart(22, 0, 1, 99000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Fortifying Body Wash</div>
						<div class="price">IDR 99.000</div>
						<div class="stars">
							<div class="img">
								<img src="<?= base_url(); ?>assets/images/main/stars-black.png">
							</div>
							<div class="review">(3)</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
			discount = total * 0.05;
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