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
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/daily-set-1.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/face-wash-3.jpg">
							</div>
							<div class="item">
								<img class="width-100 margin-bottom-30px" src="<?= base_url(); ?>assets/images/main/product/moisturizer-3.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 small-gap">
					<div class="product-detail-container">
						<h1 class="title">Daily Maintenance Set</h1>

						<div class="price">IDR 169.000</div>

						<div class="description">
							<p>Perawatan wajah harian sangat penting sebelum dan setelah beraktifitas. Daily Maintenance Set adalah kebutuhan harian kamu untuk membantu wajah bebas jerawat, lembab, dan terlihat lebih muda.</p>
						</div>

						<div class="bundle-content">
							<div class="bundle">Whats in it</div>
							<div class="icon">
								<img src="<?= base_url(); ?>assets/images/main/collapse.png">
							</div>
							<div class="bundle-container">
								<div class="fill">
									<div class="image">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/face-wash-1.jpg">
									</div>
									<div class="content">
										<div class="name">Hydra Cleansing Face Wash</div>
										<div>
											<a class="animate black" href="<?= base_url(); ?>face-wash/">Learn More</a>
										</div>
									</div>
								</div>
								<div class="fill">
									<div class="image">
										<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/moisturizer-1.jpg">
									</div>
									<div class="content">
										<div class="name">Daily Defense Moisturizer</div>
										<div>
											<a class="animate black" href="<?= base_url(); ?>moisturizer/">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="coming-soon-text">COMING SOON</div>

						<!-- <div class="button">
							<button class="main width-100 cart-30" onclick="addToCart(30, 0, 1, 169000);">Add to Cart</button>
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

						<div class="margin-top-15px">
							<div class="panel active">
								<div class="panel-collapse">
									<img src="<?= base_url(); ?>assets/images/main/collapse.png">
								</div>
								<div class="menu">Helps With</div>
								<div class="content">
									<div class="row small-gap">
										<div class="col-4 text-center">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/excess-oil.png">
											<div class="margin-top-15px icon-text">Excess Oil</div>
										</div>
										<div class="col-4 text-center">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/acne-prevention.png">
											<div class="margin-top-15px icon-text">Acne Prevention</div>
										</div>
										<div class="col-4 text-center">
											<img class="help-icon" src="<?= base_url(); ?>assets/images/main/icon/brightening.png">
											<div class="margin-top-15px icon-text">Brightening</div>
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
									<p>Wet face and apply a small amount to your face and eyes area with vigorous, yet gentle, circular motions. Rinse well.</p>
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
											<p><strong>Agave Leaf</strong></p>
											<p>Agave helps to moisturize the skin and is rich in vitamins B1, B2, C, D, K, and provitamin A.</p>
										</li>
										<li>
											<p><strong>Calendula Flower</strong></p>
											<p>Native to the Mediterranean, Calendula Extract is known for its skin soothing properties and are commonly used in skincare products for oily skin types.</p>
										</li>
										<li>
											<p><strong>Mugwort</strong></p>
											<p>Mugwort functions as an anti-microbrial and soothing skin agent full of antioxidants with anti-inflammation properties.</p>
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
							<a href="<?= base_url(); ?>complete-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/complete-maintenance-set-square.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Pilihan tepat dan lengkap untuk kamu mendapatkan penampilan yang lebih segar dan harum serta wajah bersih yang bersih, cerah, dan tampak lebih muda.</div>

							<!-- <div class="cart-button cart-23" onclick="addToCart(23, 0, 1, 459000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Ultimate Gentleman Set</div>
						<div class="price">IDR 459.000</div>
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
							<a href="<?= base_url(); ?>maintenance-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-maintenance-set-square.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Perawatan rutin wajah sangat perlu supaya tetap bersih dan membuatmu terus percaya diri.</div>

							<!-- <div class="cart-button cart-24" onclick="addToCart(24, 0, 1, 259000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Complete Maintenance Set</div>
						<div class="price">IDR 259.000</div>
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
							<a href="<?= base_url(); ?>shower-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/gentleman-shower-set-square.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Complete Shower Set melengkapi rutinitas sebelum dan sesudah beraktifitas untuk menjaga tubuh dan rambut tetap sehat dan harum.</div>

							<!-- <div class="cart-button cart-25" onclick="addToCart(25, 0, 1, 199000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Complete Shower Set</div>
						<div class="price">IDR 199.000</div>
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
							<a href="<?= base_url(); ?>starter-set/">
								<img class="width-100" src="<?= base_url(); ?>assets/images/main/product/starter-set-1.jpg">
							</a>

							<div class="coming-soon">Coming Soon</div>

							<div class="description small">Starter Maintenance Set sebagai langkah awal kamu melakukan perawatan untuk mendapatkan wajah yang bersih dan cerah.</div>

							<!-- <div class="cart-button cart-29" onclick="addToCart(29, 0, 1, 159000);">
								<div>
									<img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png">
								</div>
								<div>Add to Cart</div>
							</div> -->
						</div>
						<div class="name">Starter Maintenance Set</div>
						<div class="price">IDR 159.000</div>
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

		$('.product-detail-container .bundle-content').click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$('.product-detail-container .bundle-content .bundle-container').slideUp();
			}
			else {
				$(this).addClass('active');
				$('.product-detail-container .bundle-content .bundle-container').slideDown();
			}
		});
	}
</script>
</html>