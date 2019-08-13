<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
     
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['cart'] as $cart) : ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img with="100" height="150" src="<?= BASEURL; ?>/img/product/<?= $cart['ProductImg'] ?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?= $cart['ProductName'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5><?= $cart['ProductPrice'] ?></h5>
                                </td>
                                <td>
                                    <!-- <h5><?= $cart['Quantity'] ?></h5> -->
                                    <div class="product_count">
                                        <form action="<?= BASEURL; ?>/cart/update" method="post">
                                            <input type="number" name="quantity" id="quantity" placeholder="<?= $cart['Quantity'] ?>">
                                            <input type="hidden" name="id" id="id" value="<?= $cart['ProductID'] ?>">
                                            <input type="hidden" name="price" id="price" value="<?= $cart['ProductPrice'] ?>">
                                </td>
                                <td>
                                    <h5><?= $cart['TotalPice'] ?></h5>
                                </td>
                                <td>
                                    <a href="<?= BASEURL;?>/cart/delete/<?=$data['id']['CartID']?>">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr class="bottom_button">
                            <td>
                                <button type="submit" class="gray_btn">Perbarui Keranjang</button>
                                </form>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>Rp.<?= $data['shoppingcart']['total'] ?></h5>
                            </td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="<?= BASEURL; ?>">Lanjutkan Belanja</a>

                                    <form action="<?= BASEURL; ?>/Confirmation/insertOrder" method="post">
                                        <input type="hidden" name="total" id="total" value="<?= $data['shoppingcart']['total'] ?>">
                                        <button type="submit" class="gray_btn">Proses ke Checkout</button>
                                    </form>


                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->