<?php


class Category extends Controller
{
    public function index()
    {
        if ( isset($_SESSION['user'])) {
            $data['judul'] = 'Beranda';
            $data['category'] = $this->model('Category_model')->getAllCategoriesName();
            $data['product'] = $this->model('Category_model')->getAllProduct();
            $this->view('templates/header', $data);
            $this->view('category/index', $data);
            $this->view('templates/footer');
        } else {    
            header('Location: ' . BASEURL . '/login');
        }   
    }
    public function detail($id)
    {
        $data['judul'] = 'Rincian Produk';
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $data['grupCategory'] = $this->model('Category_model')->getCategory($id);
        $data['product'] = $this->model('Category_model')->getAllProduct();
        $this->view('templates/header', $data);
        $this->view('category/detail', $data);
        $this->view('templates/footer');
    }
}
