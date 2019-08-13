<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">

    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        
        <button><a href="<?= BASEURL; ?>/profile/tambahpostingan">Tambah Postingan</a></button>
        <div class="cart_inner">
            <div class="table-responsive">
                <?php if(empty($data['product'])) { ?>
                    <center><p>Tidak Ada Postingan</p></center>
                <?php } else { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col"></th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['product'] as $product) : ?>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img with="100" height="150" src="<?= BASEURL; ?>/img/product/<?= $product['ProductImg'] ?>" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p><?= $product['ProductName'] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5><?= $product['ProductPrice'] ?></h5>
                                    </td>
                                    <tds>
                                    </td>
                                    <td>
                                        <h5><?= $product['ProductLongDesc'] ?></h5>
                                    </td>
                                    <td>
                                        <a href="<?= BASEURL;?>/profile/delete/<?=$product['ProductID']?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->