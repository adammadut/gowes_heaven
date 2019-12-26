<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start mt-5">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					<!-- single-slide -->
					<div class="row single-slide align-items-center d-flex mt-5">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>United New <br>Collection!</h1>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="<?= base_url('assets/') ?>img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
					<!-- single-slide -->
					<div class="row single-slide mt-5">
						<div class="col-lg-5">
							<div class="banner-content">
								<h1>United New <br>Collection!</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="<?= base_url('assets/') ?>img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->


<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
				</div>
			</div>
			<!-- /section title -->

			<?php foreach ($product_index as $pindex) : ?>
				<!-- Products tab & slick -->
				<div class="col-3 my-3">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1">
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="<?= base_url('assets/img/product/') . $pindex['gambar']; ?>" alt="" style="width: 250px;height: 250px;">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category">Category</p>
											<h3 class="product-name"><a href="#"><?= $pindex['nama'] ?></a></h3>
											<h4 class="product-price">Rp. <?= $pindex['harga'] ?></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<!-- <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
												<a class="quick-view" href="<?=base_url('home/detailProduct/') . $pindex['id']?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
									<!-- /product -->
								</div>
								<div id="slick-nav-1" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
			<?php endforeach; ?>
		</div>

		<!-- /row

	</div>
	<!-- /container -->

	</div>
	<!-- /SECTION