
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h1>Konfirmasi</h1>
			<br><br><br><br><br><br><br>
			<?php if($data['cart']==null) {?>
				<center><p>Tidak ada Pesanan</p></center>
			<?php } else { ?>
			<h3 class="title_confirmation">Terima kasih, pesanan anda sedang di proses.</h3>
			<div class="order_details_table">
				<h2>Detail Pesanan</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Produk</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Harga</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach( $data['cart'] as $cart ) : ?>
							<tr>
								<td>
									<p><?=$cart['ProductName']?></p>
								</td>
								<td>
									<h5><?=$cart['Quantity']?></h5>
								</td>
								<td>
									<p>Rp. <?=$cart['ProductPrice']?></p>
								</td>
							</tr>
						<?php endforeach; ?>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp.<?= $data['shoppingcart']['total'] ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p><a href="<?= BASEURL; ?>/Confirmation/deleteOrder">Selesai, Kembali ke Home</a></p>
			<?php } ?>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
