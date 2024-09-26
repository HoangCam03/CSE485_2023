<?php
// require_once '../models/Category.php';
require_once './models/total.php';

// CategoryController.php
class TotalController{
    public function admin() {
        // Giả sử dữ liệu đã được lấy từ category.php hoặc cơ sở dữ liệu
        $categories = countAuthors();
        include './views/admin/admin.php';
        // include 'CSE485_2023_BTTH02\views\user\user.php';
    }

    public function viewLogin() {

        include 'views/login.php';
    }
    public function viewCategory(){
        $categories =  getAllCategory();
        include 'views/admin/category.php';
    }

    public function viewaddcategory(){
        include 'views/crud/add.php';
    }
    public function addcategory(){
        $result = add();
        header("Location: "."index.php?action=viewCategory&controller=total");
    }


    public function viewEdit(){
        $row = viewUpdate();
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
        include 'views/crud/viewEdit.php';
    }
    public function getdelete(){
        $id = $_GET['id'];
        $categories =   delete($id);
        header("Location: "."index.php?action=viewCategory&controller=total");
    }
    public function detail1(){
        include 'views/detail.php';
    }
    public function updateCategory($id) {
        // Gọi hàm Update để xử lý việc cập nhật thể loại
        Update($id);
    //       echo "<pre>";
    // echo "</pre>";
    //     // Include view (trang sẽ chuyển hướng sau khi cập nhật thành công)
    //     include 'views/admin/category.php';
        header("Location: "."index.php?action=viewCategory&controller=total");

    }
}