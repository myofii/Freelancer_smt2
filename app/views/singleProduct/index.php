
<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<br>
			<br>
			<br>

			<div class="col-lg-6">
<br>
			<br>
				<img class="img-fluid" src="<?= BASEURL; ?>/img/product/<?= $data['product']['ProductImg'] ?>" alt="">

			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h3><?= $data['product']['ProductName'] ?></h3>
					<h2>Rp. <?= $data['product']['ProductPrice'] ?></h2>
					<ul class="list">
						<li><a class="active" href="#"><span>Kategori</span> : <?= $data['joinCategory']['CategoryName'] ?></a></li>
					</ul>
					<p><?= $data['product']['ProductLongDesc'] ?></p>
					<div class="card_area d-flex align-items-center">
						<form action="<?= BASEURL; ?>/cart/tambah" method="post">
							<input type="hidden" name="ProductID" id="ProductID" value="<?= $data['product']['ProductID'] ?>">
							<input type="hidden" name="ProductPrice" id="ProductPrice" value="<?= $data['product']['ProductPrice'] ?>">
							<input type="hidden" name="Quantity" id="Quantity" value="1">

							<button type="submit" class="primary-btn">+ Keranjang</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
</div>
<!--================End Single Product Area =================-->
