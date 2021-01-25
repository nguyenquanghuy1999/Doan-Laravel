<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.frontend.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
</head>

<body>
    <header id="header" style="background-color: black;">
        <div class="container">
            <div class="row-logo">
                <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                    <p>
                        <a href="{{ url('/') }}" style="color: white;font-family: cursive;font-weight: bold; font-size:25px">
                        <img src="{{asset('image/logo.jpg')}}" style="width:38%;">Apple Store</a>
                        
                    <p>
                </div>
                <div id="search" class="col-md-6 col-sm-12 col-xs-12">
                    <form class="navbar-form" role="search" method="get" action="{{asset('search/')}}" style="margin-left: 80px;">
                        <input type="text" class="form-control" name="result" placeholder="Nhập từ khóa ..." style="color:black">
                        <button type="submit" class="btn btn-defalt" style="margin-top:28px; "><i class="fas fa-search" style="margin-left:-3em;color: black;"></i></button>
                    </form>
                </div>
                <div id="cart" class="col-md-2 col-sm-12 col-xs-12" style="margin-left: 87px;">
                    <a class="display" href="{{asset('cart/show')}}">
                        <img src="{{asset('image/icon-cart.png')}}">
                       <a style="margin-left: -25%;color: black;">{{Cart::count()}}</a></a>
                </div>
                <div>
                    <h4 style="margin-top: 60%;font-family: auto;"><a href="{{ route('login') }}" style="color: white;">Login</a></h4>
                </div>
            </div>   
        </div>
    </header><!-- /header -->
    <div>
        
    </div>

    <section id="body">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-md-3" >
                    <nav id="menu">
                        <ul style="font-weight: bold;">
                            <li class="menu-item" >Danh mục sản phẩm</li>
                            @foreach($types as $types)
                            <li class="menu-item" ><a href="{{asset('types/'.$types->id.'.html')}}">{{$types->name}}</a></li>
                            @endforeach
                        </ul>
                        
                    </nav>
                        <div id="img-quangcao"> 
                            <img src="{{asset('image/quangcao1.jpg')}}" style="width: 100% ;height: 22em; margin-top: 1em;">
                            <img src="{{asset('image/quangcao2.jpg')}}" style="width: 100% ;height: 22em;">
                            <img src="{{asset('image/quangcao3.jpg')}}" style="width: 100% ;height: 22em;">
                            <img src="{{asset('image/slide-3.png')}}" style="width: 100% ;height: 22em;">
                        </div>

                </div>
                <div id="main" class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('image/banner1.jpg')}}" alt="First slide" style="height:27em;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('image/banner2.jpg')}}" alt="Second slide" style="height:27em;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('image/banner3.jpg')}}" alt="Third slide" style="height:27em;" >
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    @yield('main')
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>Đồ Án PHP & Mysql Nâng Cao </h6>
                    <h5 class="text-justify">NGUYỄN QUANG HUY</h5>
                    <p> 18CDTH11</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Danh Mục</h6>
                    <ul class="footer-links">
                        <li><a href="#"></a></li>
                        <li><a href="http://127.0.0.1:8000/types/1.html">Macbook</a></li>
                        <li><a href="http://127.0.0.1:8000/types/2.html">Iphone</a></li>
                        <li><a href="http://127.0.0.1:8000/types/3.html">IPad</a></li>
                        <li><a href="http://127.0.0.1:8000/types/4.html">Watch</a></li>
                     
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Liên Hệ</h6>
                    <ul class="footer-links">
                        <li><a href="#">Nguyễn Quang Huy</a></li>
                        <li><a href="#">Phone: 0935169975</a></li>
                        <li><a href="#">Email: huyquang1013@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright © 2020 by Apple Store </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12" >
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/ghosterkrilex"><i class="fab fa-facebook-square" ></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-dribbble-square"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>