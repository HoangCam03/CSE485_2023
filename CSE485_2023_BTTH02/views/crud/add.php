<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="index.php?action=addcategory&controller=total">
            <label for="category-name">Tên thể loại</label>
            <input type="text" id="ten_tloai" name="ten_tloai">
            <label for="category-name">So luong bai viet</label>
            <input type="text" id="SLBaiViet" name="SLBaiViet">


            <div class="button-container">
                <button type="submit" name="btn_submit" class="btn-save">Lưu lại</button>
                <button type="button" class="btn-back" onclick="window.history.back()">Quay lại</button>
            </div>
        </form>
</body>
</html>