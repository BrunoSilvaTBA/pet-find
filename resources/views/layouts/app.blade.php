<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Pet Finder</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Fidele Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!---->
    <script src="js/menu_jquery.js"></script>
</head>
<body>

@include('inc.menu')

@yield('conteudo')


<div class="footer ">
    <div class="footer-1"></div>
    <div class="container">
        <div class="footer_top">
            <div class="col-md-3 footer-head">
                <h4>Navegação</h4>
                <ul class="list1">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="about.html">Sobre</a></li>
                    <li><a href="gallery.html">Galeria</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contato</a></li>
                </ul>
            </div>

            <div class="col-md-3 footer-head">
                <h4>Posts Recentes</h4>
                <div class="footer-new">
                    <div class="footer-new1">
                        <a href="single.html"><img src="images/te.jpg" class="img-responsive" alt=""></a>
                    </div>
                    <div class="footer-new2">
                        <p><a href="single.html">Masagni dolores eoquie voluptaquisquam.</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="footer-new">
                    <div class="footer-new1">
                        <a href="single.html"><img src="images/te2.jpg" class="img-responsive" alt=""></a>
                    </div>
                    <div class="footer-new2">
                        <p><a href="single.html">Masagni dolores eoquie voluptaquisquam.</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="footer-new">
                    <div class="footer-new1">
                        <a href="single.html"><img src="images/te3.jpg" class="img-responsive" alt=""></a>
                    </div>
                    <div class="footer-new2">
                        <p><a href="single.html">Masagni dolores eoquie voluptaquisquam. </a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-3 footer-head">
                <h4>Siga-nos</h4>
                <ul class="socials">
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="dribbble"></i></a></li>
                    <li><a href="#"><i class="twitter"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-head1">
                <h4>Localização</h4>
                <p><b>Pet Find</b></p>
                <!-- <p>Masagni dolores</p>
             <p>+17478895959</p> -->
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer-bottom">
            <!-- <p> © 2015 Fidele. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p> -->
        </div>
    </div>
</div>
<!--//footer-->
@yield('js')
</body>
</html>

