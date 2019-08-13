<?php


class SingleProduct extends Controller {
    public function index()
    {
        $data['judul'] = 'Rincian Produk';
        $data['product'] = $this->model('SingleProduct_model')->getUserById();
        $this->view('templates/header', $data);
        $this->view('singleProduct/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id) {
        $data['judul'] = 'Rincian Produk';
        $data['joinCategory'] = $this->model('Category_model')->getNameCategory($id);
        $data['product'] = $this->model('Category_model')->getUserById($id);
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $data['grupCategory'] = $this->model('Category_model')->getCategory($id);
        $this->view('templates/header', $data);
        $this->view('singleProduct/index', $data);
        $this->view('templates/footer', $data);
    }
}

?>