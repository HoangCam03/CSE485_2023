<?php
require './configs/DBConnection.php';

function countAuthors(): mixed {
    $conn = getDatabaseConnection(); // Lấy kết nối từ DBConnection.php

    $sql_tac_gia = "SELECT COUNT(*) AS so_luong_tac_gia FROM tacgia";
    $sql_nguoi_dung = "SELECT COUNT(*) AS so_luong_nguoi_dung FROM users";
    $sql_the_loai = "SELECT COUNT(*) AS so_luong_the_loai FROM theloai";
    $sql_bai_viet = "SELECT COUNT(*) AS so_luong_bai_viet FROM baiviet";

    ;
    $results = []; // Mảng để lưu kết quả

    // Thực thi từng câu lệnh SQL và lưu kết quả
    $results['so_luong_tac_gia'] = $conn->query($sql_tac_gia)->fetch_assoc()['so_luong_tac_gia'];
    $results['so_luong_nguoi_dung'] = $conn->query($sql_nguoi_dung)->fetch_assoc()['so_luong_nguoi_dung'];
    $results['so_luong_the_loai'] = $conn->query($sql_the_loai)->fetch_assoc()['so_luong_the_loai'];
    $results['so_luong_bai_viet'] = $conn->query($sql_bai_viet)->fetch_assoc()['so_luong_bai_viet'];


    $conn->close();
     // Luôn trả về mảng kết quả, ngay cả khi không có dữ liệu
     return $results;
     
}


function getAllCategory() {
    $conn = getDatabaseConnection();

    if ($conn != null) {
        $sql = "SELECT ma_tloai, ten_tloai FROM theloai";
        $stmt = $conn->query($sql);

        $categories = [];
        while ($row = $stmt->fetch_assoc()) {
            $categories[] = $row; // Thêm trực tiếp mảng kết hợp vào mảng categories
        }
        return $categories;
    }
}



function add() {
    $conn = getDatabaseConnection();
    $ten_tloai = $_POST['ten_tloai'];
    $SL_baiviet = $_POST['SLBaiViet'];
    if ($conn != null) {
        $sql = "INSERT INTO ` btth01_cse485`.`theloai` (`ten_tloai`, `SLBaiViet`) VALUES ('$ten_tloai', '$SL_baiviet')";
        $stmt = $conn->query($sql);
        if($stmt){

            return $stmt;
        }
        else{

            return false;
        }
    }
}

// function updateCategory($ma_tloai, $ten_tloai){
//     $catagory = [];
//     //Hàm này nên viết kiểu mysqli cho dễ sử dụng
//        $conn = getDatabaseConnection();
//         // $id = $_GET['id'];
//         if ($conn != null){
//             $sql = "UPDATE ` btth01_cse485`.`theloai` SET `ten_tloai`='$ten_tloai' WHERE  `ma_tloai`=$ma_tloai;";
//             $stmt = $conn->query($sql);
//             if($stmt) {
//                 echo "sắc sét";
//             }else {
//                 echo "phêu";
//             }
//             return $catagory;
//         }

// }
function viewUpdate() {
    $conn = getDatabaseConnection();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT ten_tloai FROM theloai WHERE ma_tloai = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id); // "i" chỉ rõ $id là một số nguyên
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['ten_tloai'];
        } else {
            return "Không tìm thấy thể loại";
        }
    }
}

function Update($id) {
    $conn = getDatabaseConnection();
    
    if(isset($_POST['btn_submit'])){
        $id = $_POST['ma_tloai'];
        $ten_tloai = $_POST['ten_tloai'];
        // var_dump($id, $ten_tloai);
        $sql = "UPDATE theloai SET ten_tloai = ? WHERE ma_tloai = ?";
        $stmt = $conn->prepare($sql); // "i" chỉ rõ $id là một số nguyên
        $stmt->bind_param("si", $ten_tloai,$id); // "i" chỉ rõ $id là một số nguyên
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result) {
            $row = $result->fetch_assoc();
            return $row['ten_tloai'];
        } else {
            return "Không tìm thấy thể loại";
        }
    }
}

function delete($id) {
    $conn = getDatabaseConnection();

    if ($conn != null) {
        $sql = "DELETE FROM ` btth01_cse485`.`theloai` WHERE  `ma_tloai`= $id;";
        $stmt = $conn->query($sql);
        return $stmt;
    }
}



// $sql = "UPDATE theloai SET ten_tloai = ? WHERE ma_tloai = ?";



// Gọi hàm để lấy số lượng tác giả
// $soLuongTacGia = countAuthors();
// echo "Số lượng tác giả: " . $soLuongTacGia;
// SELECT COUNT(*) AS so_luong_nguoi_dung FROM users
//         UNION ALL
//         SELECT COUNT(*) AS so_luong_the_loai FROM theloai
//         UNION ALL
//         SELECT COUNT(*) AS so_luong_tac_gia FROM tacgia
//         UNION ALL
//         SELECT COUNT(*) AS so_luong_bai_viet FROM baiviet;