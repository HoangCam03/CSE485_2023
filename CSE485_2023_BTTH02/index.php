<!-- Routing là gì? Định tuyến/Điều hướng -->
<!-- Phân tích xem: URL của người dùng > Muốn gì -->
<!-- Ví dụ: Trang chủ, Quản lý bài viết hay Thêm bài viết -->
<!-- Chuyển quyền cho Controller tương ứng điều khiển tiếp -->
<!-- URL của tôi thiết kế luôn có dạng: -->

<!-- http://localhost/btth02v2/index.php?controller=A&action=B -->
<!-- http://localhost/btth02v2/index.php -->
<!-- http://localhost/btth02v2/index.php?controller=home&action=index -->

<!-- Controller là tên của FILE controller mà chúng ta sẽ gọi -->
<!-- Action là tên cả HÀM trong FILE controller mà chúng ta gọi -->

<?php


$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action = isset($_GET['action'])?$_GET['action']:'index';
if ($controller == 'home'){

    require_once './controllers/HomeController.php';
    $homeController = new HomeController();
    if($action == 'index'){
        $homeController->index();//gọi đến phương thức index trong HomeController và các cái dưới cũng tưng tự là gọi từ PatientController
    }else {
        echo 'Nothing';
    }
} else if ($controller == 'total'){   //controller truyền từ file index trong home sau dấu ? của href="index.php?action=viewAdd&controller=patient"
    require_once './controllers/totalController.php';
    $toTalController = new TotalController();
    // $patientController->index();
    if($action == 'viewLogin'){    //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewAdd"
        $toTalController->viewLogin();
    } else if($action == 'admin'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController->admin();
    }
    else if($action == 'viewCategory'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController->viewCategory();
    }
    else if($action == 'viewEdit'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController->viewEdit();
    }
    else if($action == 'deletecategory'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController->getdelete();
    }
    else if($action == 'detail1'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController->detail1();
    }else if($action == 'updateCategory'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController->updateCategory($_GET['id']);
    }else if($action == 'viewadd'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController-> viewaddcategory();
    }
    else if($action == 'addcategory'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $toTalController-> addcategory();
    }
}else {
    echo 'Nothing';
}