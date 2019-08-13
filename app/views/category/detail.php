
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
						<br>
						<br>
					<div class="row" style="text-align: center;width:1050px">
						<!-- single product -->
						<?php foreach( $data['grupCategory'] as $product ) : ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img src="<?= BASEURL; ?>/img/product/<?= $product['ProductImg'] ?>" alt="" width="100" height="230">
								<div class="product-details">
									<h6><a href="<?= BASEURL; ?>/singleProduct/detail/<?= $product['ProductID'] ?>" class="social-info"><?= $product['ProductName'] ?></a></h6>
									<div class="price">
										<h6>Rp. <?= $product['ProductPrice'] ?>
									</div>
									<div class="prd-bottom">
									<form action="<?= BASEURL; ?>/cart/tambah" method="post">
										<input type="hidden" name="ProductID" id="ProductID" value="<?= $product['ProductID']?>">
										<input type="hidden" name="ProductPrice" id="ProductPrice" value="<?= $product['ProductPrice']?>">
										<button type="submit" class="btn btn-secondary mb-2">+ Keranjang</button>
									</form>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</section>
			</div>
		</div>
	</div>

    
