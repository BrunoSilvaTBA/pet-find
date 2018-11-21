@extends('layouts.app')

@section('css')
    <link href="{{url('/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('css/basic.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('css/dropzone.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('conteudo')


    <!--//header-->
    <div class="banner-head">
        <div class="banner-1"></div>
        <div class="container">
            <h1>Cadastre seu animal perdido</h1>
        </div>
    </div>


    <!--content-->
    <div class="container">

        <div class="blog">
            <div class="container">
                <div class="blog-top">
                    <div class="col-md-9 blog-grid">
                        <div class="blog-grid3">
                            <div class=" blog-grid1">
                                <div class="text-blog">
                                    <span>01</span>
                                    <small>Jun<br>2015</small>
                                    <div class="clearfix"> </div>
                                </div>
                                <ul>
                                    <li><a href="#"><span>1</span><i class="glyphicon glyphicon-calendar"></i></a></li>
                                    <li><a class="heart" href="#"><i class="glyphicon glyphicon-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class=" blog-grid2">
                                <img src="{{url('/')}}/images/bl.jpg" class="img-responsive" alt="">
                                <div class="blog-text">
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Mauris fermentum dictum magna. </p>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                </div>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!---->
                        <div class="comment-top">
                            <h2>Comment</h2>
                            <div class="media-left">
                                <a href="#">
                                    <img src="{{url('/')}}/images/si.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Richard Spark</h4>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                <!-- Nested media object -->
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="{{url('/')}}/images/si.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joseph Goh</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        <!-- Nested media object -->
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="{{url('/')}}/images/si.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    Melinda Dee</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nested media object -->
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="{{url('/')}}/images/si.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Rackham</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="comment">
                            <h3>Leave a Comment</h3>
                            <div class=" comment-bottom">
                                <form>
                                    <input type="text" placeholder="Name">
                                    <input type="text" placeholder="Email">
                                    <input type="text" placeholder="Subject">
                                    <textarea placeholder="Message" required=""></textarea>
                                    <input type="submit" value="Send">
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3 categories-grid">
                        <div class="search-in">
                            <h2>Search</h2>
                            <div class="search">
                                <form>
                                    <input type="text">
                                    <input type="submit" value="">
                                </form>
                            </div>
                        </div>
                        <div class="grid-categories">
                            <h4>Categories</h4>
                            <ul class="popular">
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Contrary to popular belief</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>There are many variation</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Lorem Ipsum is simply</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Sed ut perspiciatis unde</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Nemo enim ipsam volume</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>At vero eos et accusamus</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Contrary to popular belief</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>There are many variation</a></li>
                            </ul>
                        </div>
                        <div class="blog-bottom">
                            <h4>Recent Posts</h4>
                            <div class="product-go">
                                <a href="single.html" class="fashion"><img class="img-responsive " src="{{url('/')}}/images/bi.jpg" alt=""></a>
                                <div class="grid-product">
                                    <a href="single.html" class="elit">Consectetuer adipiscing</a>
                                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="product-go">
                                <a href="single.html" class="fashion"><img class="img-responsive " src="{{url('/')}}/images/bi1.jpg" alt=""></a>
                                <div class="grid-product">
                                    <a href="single.html" class="elit">Consectetuer adipiscing</a>
                                    <p>Lorem ipsum dolor sit amet, consectetuer </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="product-go">
                                <a href="single.html" class="fashion"><img class="img-responsive " src="{{url('/')}}/images/bi2.jpg" alt=""></a>
                                <div class="grid-product">
                                    <a href="single.html" class="elit">Consectetuer adipiscing</a>
                                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
    </div>

@endsection
