<?php


class Profile extends Controller
{
    public function index()
    {
        $data['judul'] = 'Profile';
        $data['product'] = $this->model('Category_model')->getAllProductByID($_SESSION['id']);
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');   
    }
    public function tambahpostingan()
    {
        $data['judul'] = 'Tambah Postingan';
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        # tambah disini
        $this->view('templates/header', $data);
        $this->view('profile/tambahpostingan', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $target_dir = $_SERVER['DOCUMENT_ROOT'].'/Freelancer/public/img/product/';
        $file = basename(($_FILES['productImg']['name']));
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['productImg']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
        $gb = $filename . '.' . $ext;
        if (file_exists($path_filename_ext)) {
            echo "Maaf, gambar yang anda upload sudah ada, mohon ganti nama file.";
        }else{
            move_uploaded_file($temp_name,$path_filename_ext);
            $data['productName'] = $_POST['productName'];
            $data['productPrice'] = $_POST['productPrice'];
            $data['productDesc'] = $_POST['productDesc'];
            $data['categoryID'] = $_POST['categoryID'];
            $data['productImg'] = $gb;
            $data['userID'] = $_POST['userID'];
            if ($this->model('Profile_model')->insertProduct($data) > 0) {
                header('Location: ' . BASEURL . '/profile');
            } else {
                echo "eror";
            }
       }
    }

    public function delete($id)
    {
        $this->model('Category_model')->deleteProduct($id);
        $data['judul'] = 'Profile';
        $data['product'] = $this->model('Category_model')->getAllProductByID($_SESSION['id']);
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }
}
