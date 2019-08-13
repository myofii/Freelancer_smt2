<?php


class Cart extends Controller {
    public function index()
    {
        $data['judul'] = 'Keranjang';
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $data['product'] = $this->model('Category_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('cart/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Keranjang';
        $data['cart'] = $this->model('Cart_model')->getCartProduct($id);
        $data['shoppingcart'] = $this->model('Cart_model')->getShopCart($id);
        $data['id'] = $this->model('Cart_model')->getCartByID();
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $data['grupCategory'] = $this->model('Category_model')->getCategory($id);
        $data['product'] = $this->model('Category_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('cart/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Cart_model')->setCart($_POST) > 0 ) {
            header('Location: '. BASEURL .'/cart/detail/' . $_SESSION['id']);
            exit;
        } else {
            header('Location: '. BASEURL . '/cart/detail/');
            exit;
        }
    }

    public function update()
    {
        if( $this->model('Cart_model')->updateCart($_POST) > 0 ) {
            header('Location: '. BASEURL . '/cart/detail/' . $_SESSION['id']);
            exit;
        } else {
            echo "Something wrong";
            exit;
        }
    }

    public function delete($id)
    {
        if( $this->model('Cart_model')->deleteCart($id) > 0 ) {
            header('Location: '. BASEURL . '/cart/detail/' . $_SESSION['id']);
            exit;
        } else {
            echo "Something wrong";
            exit;
        }
    }
}
