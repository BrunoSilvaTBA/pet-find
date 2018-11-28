@extends('layouts.app')

@section('css')
    <link href="{{url('/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
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
                <div class="row">
                    @include('messages.index')
                </div>
                <div class="blog-top">
                    <div class="col-md-8 blog-grid">
                        <div class="blog-grid3">
                            <div class=" blog-grid1">
                                <div class="text-blog">
                                    <span>{{date('d', strtotime($pet->created_at))}}</span>
                                    <small>{{date('M', strtotime($pet->created_at))}}
                                        <br>{{date('Y', strtotime($pet->created_at))}}</small>
                                    <div class="clearfix"></div>
                                </div>
                                {{--<ul>--}}
                                {{--<li><a href="#"><span>1</span><i class="glyphicon glyphicon-calendar"></i></a></li>--}}
                                {{--<li><a class="heart" href="#"><i class="glyphicon glyphicon-heart"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class=" blog-grid2">
                                <img src="{{url('/images/pets/' . $pet->fotos()->first()->nome_imagem)}}"
                                     class="img-responsive" alt="">

                                <div class="blog-text">
                                    <h5>{{$pet->nome_pet}}</h5>
                                    <p>{{$pet->detalhes}}</p>
                                </div>


                                <div id="tags">
                                    <ul>
                                        @foreach($pet->caracteristicas as $caracteristica)
                                            <li>
                                                <strong><i class="fas fa-tag"></i> {{$caracteristica->detalhe->label->nome_caracteristica}}
                                                    :</strong> {{$caracteristica->detalhe->nome_opcao}}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!---->
                        @if($pet->comentarios()->count())
                            <div>
                                <h3 style="margin-bottom: 30px" class="title" id="comentarios">Comentários</h3>
                            </div>

                            <div id="box-comentarios">
                                @foreach($pet->comentarios()->orderBy('created_at', 'DESC')->get() as $comentario)
                                    <div class="comment-top mb-15">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="{{$comentario->gravatar()}}" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <h4 class="media-heading">{{$comentario->nome}}</h4>
                                            <p>{{$comentario->mensagem}}<p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    @endif

                    <!---->
                        <div class="comment">
                            <h3 class="title">Deixe seu comentário</h3>
                            <small style="font-size: 1.1em; margin-bottom: 30px">Você encontrou, viu em algum local?
                                Deixe sua informação sobre esse PET até encontrarmos
                            </small>
                            <div class=" comment-bottom">
                                <form method="post" action="{{route('enviar.comentario')}}">
                                    @csrf
                                    <input type="hidden" name="pet_id" value="{{$pet->id_pet}}">
                                    <input type="text" name="nome" placeholder="Digite seu nome">
                                    <input type="text" name="email" placeholder="Digite seu Email">
                                    <textarea name="mensagem" placeholder="Digite sua mensagem" style="width: 100%"
                                              required=""></textarea>
                                    <input class="btn" type="submit" value="Enviar comentário">
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 categories-grid">

                        <div style="margin-bottom: 30px" class="row mb-md-3">
                            <div class="col col-md-12">
                                <h3 class="title">Encontrei este PET</h3>
                                <small>Encontrei o Pet e quero fazer o dono dele feliz novamente. Preencha os campos
                                    abaixo que o dono será notificado! Obrigado
                                </small>
                                <form id="form-encontrei" method="post" action="{{route('contactar.dono.pet')}}">
                                    @csrf
                                    <input type="hidden" name="pet_id" value="{{$pet->id_pet}}">
                                    <input type="text" name="nome" placeholder="Seu nome">
                                    <input type="text" name="telefone" placeholder="Seu celular">
                                    <textarea name="mensagem" style="width: 100%" placeholder="Digite sua mensagem"
                                              required=""></textarea>
                                    <input class="btn pull-right " type="submit" value="Enviar contato">
                                </form>
                            </div>
                        </div>

                        {{--<div class="search-in">--}}
                            {{--<h3 class="title">Procurar</h3>--}}
                            {{--<div class="search">--}}
                                {{--<form>--}}
                                    {{--<input type="text">--}}
                                    {{--<input type="submit" value="">--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="grid-categories">--}}
                            {{--<h3 class="title">Categorias</h3>--}}
                            {{--<ul class="popular">--}}
                                {{--<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Ver cães perdidos</a></li>--}}
                                {{--<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Ver gatos perdidos</a></li>--}}
                                {{--<li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Ver aves perdidas</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <div class="blog-bottom">
                            <h3 class="title">Outros Pets perdidos</h3>

                            @foreach($outrosPets as $oPet)
                                <div class="product-go">
                                    <a href="{{route('ver-pet', $oPet->id_pet)}}" class="fashion">
                                        <img class="img-responsive "
                                             src="{{url('/images/pets/' . $oPet->fotos[0]->nome_imagem)}}" alt=""></a>
                                    <div class="grid-product">
                                        <a href="{{route('ver-pet', $oPet->id_pet)}}"
                                           class="elit">{{$oPet->nome_pet}}</a>
                                        <p>{{str_limit($oPet->detalhes, 60)}}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{url('plugins/sweetalert/sweetalert.js')}}"></script>
    <script>
        $('#form-encontrei').submit(function () {

            var formData = new FormData($(this)[0]);

            $.ajax({
                url: '{{route('contactar.dono.pet')}}',
                data: formData,
                processData: false,
                type: 'POST',
                contentType: false,
                success: function (data) {
                    if(data.retorno == true) {
                        swal("Perfeito", "Obrigado por colaborar para encontrar este PET", "success")
                    }else{
                        swal("Erro", "Aconteceu algum erro, tente novamente", "error")
                    }
                }
            });

            return false;
        })
    </script>
@endsection
