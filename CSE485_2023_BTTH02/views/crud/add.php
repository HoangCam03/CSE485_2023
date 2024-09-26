<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* General form styles */
        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        form p{
            text-align: center;
            font-weight: 600;
            font-size: 35px;
        }

        /* Label styles */
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1rem;
            font-weight: 500;
            font-weight: 600;
            color: #333;
        }

        /* Input field styles */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            color: #333;
            background-color: #fff;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Button container styles */
        .button-container {
            display: flex;
            justify-content: space-between;
        }

        /* Save button styles */
        .btn-save {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-save:hover {
            background-color: #0056b3;
        }

        /* Back button styles */
        .btn-back {
            background-color: #6c757d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            form {
                width: 90%;
            }

            .button-container {
                flex-direction: column;
            }

            .button-container button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>

        <form method="POST" action="index.php?action=addcategory&controller=total">
        <p>Thêm mới một thể </p>
            <label for="category-name">Tên thể loại</label>
            <input type="text" id="ten_tloai" name="ten_tloai">
            <label for="category-name">Số lượng bài viết</label>
            <input type="text" id="SLBaiViet" name="SLBaiViet">
    
    
            <div class="button-container">
                <button type="submit" name="btn_submit" class="btn-save">Lưu lại</button>
                <button type="button" class="btn-back" onclick="window.history.back()">Quay lại</button>
            </div>
    </div>
</body>

</html>