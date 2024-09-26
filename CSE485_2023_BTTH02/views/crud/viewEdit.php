<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <!-- Font Awesome for icons (if needed) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        /* Navbar */
        .navbar {
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-bottom: 2px solid #e7e7e7;
            display: flex;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            padding: 10px 15px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #007bff;
        }

        .navbar a.active {
            font-weight: bold;
            color: #007bff;
            text-decoration: underline;
        }

        /* Main Container */
        .container {
            width: 50%;
            margin: 40px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 20px 0;
        }

        /* Form Styling */
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        /* Button styling */
        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-save {
            background-color: #28a745;
            color: white;
        }

        .btn-save:hover {
            background-color: #218838;
        }

        .btn-back {
            background-color: #ffc107;
            color: white;
        }

        .btn-back:hover {
            background-color: #e0a800;
        }

        /* Footer Styling */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 18px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#">Trang chủ</a>
        <a href="#">Trang ngoài</a>
        <a href="#" class="active">Thể loại</a>
        <a href="#">Tác giả</a>
        <a href="#">Bài viết</a>
    </div>

    <!-- Main Container -->
    <div class="container">
        <!-- Header -->
        <div class="header">
            SỬA THÔNG TIN THỂ LOẠI
        </div>


        <?php
        // include "./configs/DBConnection.php";
        
        // $conn = getDatabaseConnection();
        // if(isset($_GET['id'])){
        //     $id = $_GET['id'];
        //     $query="SELECT * FROM theloai where `id` ='$id'";
        //     $stmt = $conn->query($sql);
        
        // }
        

        ?>




        <!-- Form -->
        <form method="POST" action="index.php?action=updateCategory&controller=total&id=<?=$_GET['id']; ?>".>
            <label for="category-id">Mã thể loại</label>
            <input type="text" id="ma_tloai" name="ma_tloai" value="<?= $_GET['id'] ?>" readonly>

            <label for="category-name">Tên thể loại</label>
            <input type="text" id="ten_tloai" name="ten_tloai" value="<?= $row ?>">

            <div class="button-container">
                <button type="submit" name="btn_submit" class="btn-save">Lưu lại</button>
                <button type="button" class="btn-back" onclick="window.history.back()">Quay lại</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        TLU'S MUSIC GARDEN
    </footer>

</body>

</html>