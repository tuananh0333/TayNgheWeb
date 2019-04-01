<?php
    include_once './models/posts.php';

    $posts = new Posts;
    echo($posts->getListPost());
?>

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

    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
            <li data-target="#carouselId" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="./images/h01.jpg" alt="First slide" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="./images/h02.jpg" alt="Second slide" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="./images/h03.jpg" alt="Third slide" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="./images/home-slide-3.jpg" alt="Fourth slide" class="img-fluid">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">

        <div class="news">
            <h1>Tin Chính</h1>
            <article>
                <a href="">
                    <div class="avatar-main">
                        <img src="./images/h31.jpg" class="mx-auto d-block" width="100%" height="100%">
                    </div>

                    <h3>Tieu de</h3>

                    <p class="noidung-main">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum perspiciatis ut eligendi animi
                        aut
                        sequi
                        possimus cum quia magnam asperiores voluptas atque quod laudantium ipsum esse ex, aperiam
                        voluptates
                        odit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic expedita iste dolorum dolor
                        quidem,
                        provident architecto quisquam deserunt, reiciendis beatae eaque veniam ipsum corporis eligendi
                        debitis
                        explicabo cumque rerum fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                        distinctio
                        inventore velit. In hic necessitatibus, mollitia impedit aut voluptate aliquam! In non rerum
                        placeat
                        doloremque cupiditate a quod eum tempore?
                    </p>

                    <span class="ngaydang">24 - 03 - 2019</span>
                </a>
            </article>
        </div>

        <div class="news">
            <h1>Tin Sáng Tạo</h1>

            <div class="row">
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h01.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 1</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h02.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 2</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h03.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 3</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
            </div>
        </div>

        <div class="news">
            <h1>Tin Khoa học</h1>

            <div class="row">
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h31.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 1</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h21.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 2</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h06.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 3</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
            </div>
        </div>

        <div class="news">
            <h1>Tin Công Nghệ</h1>

            <div class="row">
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h40.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 1</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h31.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 1</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <a href="#">
                            <div class="avatar">
                                <img src="./images/h26.jpg" alt="" class="rounded-circle" width="100%" height="100%">
                            </div>

                            <h3>tin 1</h3>

                            <p class="noidng">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores facere,
                                eum
                                aliquam
                                minus cumque ipsam repellat ullam nesciunt, impedit, esse doloremque! Nisi impedit fugit
                                explicabo,
                                assumenda consequatur dolore quisquam nostrum.</p>

                            <span class="ngaydang">24 - 03 - 2019</span>
                        </a>
                    </article>
                </div>
            </div>
        </div>
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