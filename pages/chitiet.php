<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="stylesheet" href="./vendor/awesome/fontawesome/css/all.min.css">

    <script src="./vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm header-navbar navbar-light">
            <div class="container">
                <a class="navbar-brand logo" href="#">
                    Sáng tạo trẻ
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin Sáng Tạo<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin Khoa Học <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin Công Nghệ <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 search-feld">
                        <button class="btn my-2 my-sm-0 btn-search" type="submit"><i class="fas fa-search"></i></button>
                        <input class="edt-search" type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>Kết Quả Tìm Kiếm</h1>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


</body>

<footer>
    <div class="container">
        <div class="web-info">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand logo" href="#">
                        Sáng tạo trẻ
                    </a>

                    <div class="about">
                        We are a science international healthcare company. We do researches and develop a wide range of
                        innovative products.
                    </div>
                </div>

                <div class="col-md-4 colmn">
                    <h5>Contact Us</h5>

                    <div class="about">
                        53 Vo Van Ngan street
                        <br>
                        Thu Duc, HCM city
                        <br>
                        tdc@tdc.edu.vn
                        <br><br>
                        Tel: <p style="color: #585754; display: inline;">(028) 3897-0023</p>
                        <br>
                        Fax: (028) 3896-2474
                    </div>
                </div>

                <div class="col-md-4 colmn">
                    <h5>Follow Us</h5>
                    <br>
                    <a href="http://facebook.com"><i class="fab fa-facebook-square"></i> </a>
                    <a href="http://youtube.com"><i class="fab fa-youtube"></i> </a>
                    <a href="http://el.tdc.edu.vn"><i class="fas fa-graduation-cap"></i></a>

                </div>
            </div>
        </div>

        <div class="copyr about">
            Le Tuan Anh &copy; 2019; All rights reserved.
        </div>
    </div>
</footer>

<a href="./index.html">
    <div class="gotop" href="#">&uarr;</div>
</a>

</html>