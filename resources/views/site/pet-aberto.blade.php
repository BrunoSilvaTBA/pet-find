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
            <h1>AJUDE ESTE PET VOLTAR PARA CASA</h1>
        </div>
    </div>


    <!--content-->
    <div class="container">

        <div class="blog">
            <div class="container">
                <div class="blog-top">
                    <div class="col-md-8 blog-grid">
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
                                <img src="{{url('/images/pets/' . $pet->fotos()->first()->nome_imagem)}}" class="img-responsive" alt="">

                                <div class="blog-text">
                                    <h5>{{$pet->nome_pet}}</h5>
                                    <p>{{$pet->detalhes}}</p>
                                </div>


                                <div id="tags">
                                    <ul>
                                        @foreach($pet->caracteristicas as $caracteristica)
                                        <li><strong><i class="fas fa-tag"></i> {{$caracteristica->detalhe->label->nome_caracteristica}}:</strong> {{$caracteristica->detalhe->nome_opcao}}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!---->
                        <div class="comment-top">
                            <h3 style="margin-bottom: 30px" class="title">Comentários</h3>
                            <div class="media-left">
                                <a href="#">
                                    <img src="{{url('/')}}/images/si.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Willian Matheus</h4>
                                <p>Acho que vi ele aqui na minha rua, no mesmo local aonde foi visto pela ultima vez pelo dono, vcs podem vim aqui dá umas voltas pelas redondezas pra ver se encontra ele.</p>
                            </div>
                        </div>
                        <!---->
                        <div class="comment">
                            <h3  class="title">Deixe seu comentário</h3>
                            <small style="font-size: 1.1em; margin-bottom: 30px">Você encontrou, viu em algum local? Deixe sua informação sobre esse PET até encontrarmos</small>
                            <div class=" comment-bottom">
                                <form>
                                    <input type="text" placeholder="Digite seu nome">
                                    <input type="text" placeholder="Digite seu Email">
                                    <textarea placeholder="Digite sua mensagem" style="width: 100%" required=""></textarea>
                                    <input class="btn" type="submit" value="Enviar comentário">
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 categories-grid">

                        <div style="margin-bottom: 30px" class="row mb-md-3">
                            <div class="col col-md-12">
                                <h3 class="title">Encontrei este PET</h3>
                                <small>Encontrei o Pet e quero fazer o dono dele feliz novamente. Preencha os campos abaixo que o dono será notificado! Obrigado</small>
                                <form>
                                    <input type="text" placeholder="Seu nome">
                                    <input type="text" placeholder="Seu celular">
                                    <textarea style="width: 100%" placeholder="Digite sua mensagem" required=""></textarea>
                                    <input  class="btn pull-right " type="submit" value="Enviar contato">
                                </form>
                            </div>
                        </div>

                        <div class="search-in">
                            <h3 class="title">Procurar</h3>
                            <div class="search">
                                <form>
                                    <input type="text">
                                    <input type="submit" value="">
                                </form>
                            </div>
                        </div>
                        <div class="grid-categories">
                            <h3 class="title">Categorias</h3>
                            <ul class="popular">
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Ver cães perdidos</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Ver gatos perdidos</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Ver aves perdidas</a></li>
                            </ul>
                        </div>
                        <div class="blog-bottom">
                            <h3 class="title">Outros Pets perdidos</h3>
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
