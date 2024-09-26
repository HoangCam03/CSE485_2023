<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Category Management</title>
    <!-- Font Awesome for icons -->
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

        /* Main Content */
        .container {
            width: 80%;
            margin: 40px auto;
        }

        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
        }

        /* Button styling */
        button {
            background-color: #28a745;
            /* Green background */
            color: white;
            /* White text */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
            /* Darker green on hover */
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            /* Light border */
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            text-align: center;
            /* Centers the content */
        }

        /* Edit and Delete Icon Styling */
        a.edit,
        a.delete {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            margin: 0 10px;
        }

        a.edit:hover {
            color: #0056b3;
            /* Darker blue on hover */
        }

        a.delete {
            color: #dc3545;
            /* Red color for delete */
        }

        a.delete:hover {
            color: #c82333;
            /* Darker red on hover */
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

        .navbar a.active {
            font-weight: bold;
            color: #007bff;
            /* Blue color to highlight the active page */
            text-decoration: underline;
            /* Optional underline */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="./">Trang chủ</a>
        <a href="#" class="active">Thể loại</a>
        <a href="#">Tác giả</a>
        <a href="#">Bài viết</a>
    </div>

    <!-- Main Container -->
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Quản lý thể loại</h1>
        </div>

        <!-- Button -->
        <a href="index.php?&action=viewadd&controller=total"  >Thêm mới</a>

        <!-- Table -->
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên thể loại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
        <?php
     
        foreach ($categories as $category) {
        ?>
            <tr>
            <td><?= $category['ma_tloai'];?></td>
            <td><?= $category['ten_tloai'];?></td>
            
            <td><a href="index.php?id=<?= $category['ma_tloai'];?>&action=viewEdit&controller=total" class="edit"><i class="fas fa-edit"></i></a></td>
            <td><a href="index.php?id=<?= $category['ma_tloai'];?>&action=deletecategory&controller=total" class="delete"><i class="fas fa-trash"></i></a></td>
          </tr>
        <?php
        }
        ?>
       
    </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        TLU'S MUSIC GARDEN
    </footer>

</body>

</html>