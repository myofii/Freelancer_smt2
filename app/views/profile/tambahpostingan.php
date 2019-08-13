<!--================tambah postingan Box Area =================-->
<section class="login_box_area section_gap">
	<div class="container">
<CENTER>
		<div class="login_form_inner">
			<div style="font-family: arial" >
				<h3>TAMBAH POSTINGAN</h3>
			</div>
			<form class="row login_form" action="<?= BASEURL ?>/profile/tambah" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
				<div class="col-md-12 form-group">
					<input type="text" class="form-control" id="productName" name="productName" placeholder="NAMA POSTINGAN" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NAMA POSTINGAN'">
					<input type="hidden" name="userID" value="<?= $_SESSION['id'] ?>">
				</div>
				<div class="col-md-12 form-group">

					<input type="radio" name="categoryID" value="1">LOGO
					<input type="radio" name="categoryID" value="2">POSTER
					<input type="radio" name="categoryID" value="3">SPANDUK 
				</div>
				<div class="col-md-12 form-group">
					<input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="HARGA POSTINGAN" onfocus="this.placeholder = ''" onblur="this.placeholder = 'HARGA POSTINGAN'">
				</div>
				<div class="col-md-12 form-group">
					<textarea name="productDesc"  class="form-control"  placeholder="DESKRIPSI POSTINGAN" rows="5" cols="40"></textarea>
				</div>

				<div class="col-md-12 form-group">
					<input type="file" class="form-control" name="productImg" >
				</div>

				<div class="col-md-12 form-group">
					<button type="submit" name="submit" value="submit" class="primary-btn">POST</button>

				</div>
			</form>
		</div>

</CENTER>
	</div>
</section>
<!--================End Login Box Area =================-->