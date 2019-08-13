<?php


class Confirmation extends Controller {
    public function index($id=1)
    {
        $data['judul'] = 'Konfirmasi';
        $data['cart'] = $this->model('Cart_model')->getCartProduct($_SESSION['id']);
        $data['shoppingcart'] = $this->model('Cart_model')->getShopCart($_SESSION['id']);
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $data['product'] = $this->model('Category_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('confirmation/index', $data);
        $this->view('templates/footer');
    }

    public function insertOrder()
    {
        if( $this->model('Confirmation_model')->insertOrder($_POST) > 0 ) {
            header('Location: '. BASEURL .'/confirmation');
            exit;
        } else {
            echo "error";
            exit;
        }
    }

    public function deleteOrder()
    {
        $this->model('Cart_model')->deleteCartByID($_SESSION['id']);
        header('Location: ' .  BASEURL);
    }

}

?>