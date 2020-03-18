<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>TTN Shop - Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/detail.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
   <!--  thu vien cho silde -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/2703c57f79.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function() {
            var pull        = $('#pull');
            menu        = $('nav ul');
            menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
</head>
<body>
    <header id="header">
        <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-2 ">
                    <p><i class="fas fa-home" style="margin-right: 10px;"></i>TTN-SHOP</p>
                </div>
                 <div  class="submit" class="col-xs-12 col-sm-12 col-md-4 ">
                    <form class="navbar-form pull-right">
                        <input type="text" style="width: 200px;" placeholder="Tìm kiếm">
                        <button class="btn" type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <p class="link" class="navbar-text pull-right">
                        <a href="#" class="navbar-link"><i class="fas fa-user"></i>Đăng ký</a>
                        <a href="#" class="navbar-link"><i class="fas fa-user"></i>Đăng nhập</a>
                    </p>
                </div>
                <div id="cart" class="col-xs-12 col-sm-12 col-md-2 ">
                    <p>Giỏ hàng</p>
                   <img src="img/home/giohang.png">
                    <a href="#">6</a>   
                </div>
            </div>
        </div>
    </header>

    <section  id="body">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav id="menu">
                        <ul>
                            <li class="menu-item">danh mục sản phẩm</li>
                            <li class="menu-item"><a href="#" title=""><i class="fas fa-mobile-alt"></i>iPhone</a></li>
                            <li class="menu-item"><a href="#" title=""><i class="fas fa-mobile-alt"></i>Samsung</a></li>
                            <li class="menu-item"><a href="#" title=""><i class="fas fa-mobile-alt"></i>Sony</a></li>
                            <li class="menu-item"><a href="#" title=""><i class="fas fa-mobile-alt"></i>HTC</a></li>
                            <li class="menu-item"><a href="#" title=""><i class="fas fa-mobile-alt"></i>LG</a></li>
                            <li class="menu-item"><a href="#" title=""><i class="fas fa-mobile-alt"></i>OPPO</a></li>
                            <li class="menu-item"><a href="#" title=""><i class="fas fa-mobile-alt"></i>Blackberry</a></li>                      
                        </ul>
                        <!-- <a href="#" id="pull">Danh mục</a> -->
                    </nav>
                </div>

                <div  id="main" class="col-md-9">
                   <!-- main -->
                    <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
                    <div id="slider">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/home/slide-1.png" alt="Los Angeles" >
                                </div>
                                <div class="carousel-item">
                                    <img src="img/home/slide-2.png" alt="Chicago">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/home/slide-3.png" alt="New York" >
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>

                   
                </div>
                <div id="main" class="col-md-12">
                    <div id="wrap-inner">
                        <div id="product-info">
                            <div class="clearfix"></div>
                            <h3>Điện thoại Apple iPhone 7 Plus - 32GB</h3>
                            <div class="row">
                                <div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
                                    <img src="img/detail/product.jpg">
                                </div>
                                <div id="product-details" class="col-xs-12 col-sm-12 col-md-6">
                                    <p>Giá: <span class="price">10.000.000</span></p>
                                    <p>Bảo hành: 1 đổi 1 trong 12 tháng</p> 
                                    <p>Phụ kiện: Dây cáp sạc, tai nghe</p>
                                    <p>Tình trạng: Máy mới 100%</p>
                                    <p>Khuyến mại: Hỗ trợ trả góp 0% dành cho các chủ thẻ Ngân hàng Sacombank</p>
                                    <p>Còn hàng: Còn hàng</p>
                                    <p class="add-cart text-center"><a href="#"><i class="fas fa-shopping-cart"></i>Đặt hàng online</a></p>
                                </div>
                            </div>                          
                        </div>
                        <div id="product-detail">
                            <h3>Chi tiết sản phẩm</h3>
                            <table class="table table-bordered">
                                <thead >
                                    <tr class="bg-info">
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                         <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                         <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="comment">
                            <h3>Bình luận</h3>
                            <div class="col-md-6 comment">
                                <form>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input required type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tên:</label>
                                        <input required type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="cm">Bình luận:</label>
                                        <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-default">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="comment-list">
                            <ul>
                                <li class="com-title">
                                    Vietpro Education
                                    <br>
                                    <span>2017-19-01 10:00:00</span>    
                                </li>
                                <li class="com-details">
                                    HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
                                </li>
                            </ul>
                            <ul>
                                <li class="com-title">
                                    Vietpro Education
                                    <br>
                                    <span>2017-19-01 10:00:00</span>    
                                </li>
                                <li class="com-details">
                                    HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
                                </li>
                            </ul>
                            <ul>
                                <li class="com-title">
                                    Vietpro Education
                                    <br>
                                    <span>2017-19-01 10:00:00</span>    
                                </li>
                                <li class="com-details">
                                    HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
                                </li>
                            </ul>
                        </div>
                    </div>                  
                    <!-- end main -->
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">  
    <div class="row footer1">
       <div class="container">
            <div class="row info">
                <div class="col-md-4">
                    <div class="logo">
                          <h4> <i class="fas fa-home"></i>Logo trang chủ</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="diachi">
                        <h5>Địa chỉ</h5>
                        <p>Tô ký-Quận 12-Thành phố Hồ Chí Minh</p>
                    </div>
                </div>
                <div  class="col-md-4">
                    <div class="hotline">
                        <h5>Hotline</h5>
                        <p>0987653728</p>
                    </div>
                </div> 
            </div>
        </div>
       
        <div id="scroll">
             <a href="#"><img src="img/home/scroll.png"></a>
         </div>  
    </div>          
    </footer>
    <!-- endfooter -->
</body>
</html>