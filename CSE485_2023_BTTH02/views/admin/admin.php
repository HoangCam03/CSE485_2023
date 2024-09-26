<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music for Life</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/category.css">
    </head>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo2.png" alt="" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=total&action=viewCategory">Thể loại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">tác giả</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="admin-dashboard">
        <div class="dashboard-item">
            <h3>Người dùng</h3>
            <p>Số lượng người dùng: <?php echo $categories['so_luong_nguoi_dung']; ?></p>
        </div>
        <div class="dashboard-item">
            <h3>Thể loại</h3>
            <p>Số lượng the loại: <?php echo $categories['so_luong_the_loai']; ?></p>
        </div>
        <div class="dashboard-item">
            <h3>Tác giả</h3>
            <p>Số lượng tác giả: <?php echo $categories['so_luong_tac_gia']; ?></p>
        </div>
        <div class="dashboard-item">
            <h3>Bài viết</h3>
            <p>Số lượng bài viết: <?php echo $categories['so_luong_bai_viet']; ?></p>

        </div>
    </div>
</body>

</html>

<body>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2"
        style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>