@extends('layouts.app')

@section('conteudo')
    @include('inc.banner')
    <div class="content">
        <div class="container">
            <div class="content-top-top">
                <div class="content-top">
                    <div class="col-md-4 wel">
                        {{--<div class="content-ic">--}}
                            {{--<i class="glyphicon glyphicon-cog"></i>--}}

                        {{--</div>--}}
                        <div class="content-text">
                            <h5 class="title">Adote um animal </h5>
                            <p>Nosso site possui um espaço onde você pode encontrar um pet que precise de um lar, pois
                                são carentes e precisam de um dono que o faça feliz e saudável, cadastre-se na fila para
                                você ter essa grande oportunidade.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 wel">
                        {{--<div class="content-ic">--}}
                            {{--<i class="glyphicon glyphicon-user"></i>--}}
                        {{--</div>--}}
                        <div class="content-text">
                            <h5 class="title">Encontre seu pet</h5>
                            <p>Através da comunidade de usuários você pode ter informações importantes do seu pet
                                perdido, te ajudando a encontrá-lo.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 wel">
                        {{--<div class="content-ic">--}}
                            {{--<i class="glyphicon glyphicon-time"></i>--}}
                        {{--</div>--}}
                        <div class="content-text">
                            <h5 class="title">Encontrei um pet </h5>
                            <p>Nosso site fornece um espaço onde você pode enviar informações de animais perdidos que
                                foram encontrados pelos usuários.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
            <!---->
        </div>
        <!---->
        <div class="content-middle">
            <div class="col-md-6 content-middle1">
                <img src="images/ab.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 content-middle2">
                <h3>Sobre</h3>
                <p>A “NetPet Soluções Informatizadas” iniciou suas atividades no dia 9 de agosto de 2018, na cidade de
                    Nova Iguaçu, Rio de Janeiro. Essa empresa tem como missão providenciar soluções informatizadas
                    voltadas principalmente para o ramo dos pets, mas também providencia auxilio tecnológico para outras
                    empresas que atuem na cidade do Rio de Janeiro e nas proximidades da Baixada Fluminense. A empresa é
                    conhecida por suas abordagens criativas e de grande utilização de técnicas visuais que ajudam o
                    usuário a não se perder no programa que estará utilizando e também fugindo do atual paradigma de
                    design.</p>
                <p>A Empresa provê Soluções Informatizadas para qualquer tipo de negócio, mas voltada especificamente
                    para o ramo dos pets e bichos de estimação, desde aplicações de desktop para o ramo de vendas,
                    saúde, adestramento e outros, até aplicativos o âmbito de Smartphones.</p>

            </div>
            <div class="clearfix"></div>
        </div>
        <!---->
        <div class="events">
            <div class="container">
                <h2>Pets desaparecidos</h2>

                <div class="events-top">
                    @foreach($pets->desaparecidos as $pet)
                    <div class="col-sm-4 top-event">
                        <a href="{{route('ver-pet', $pet->id_pet)}}">
                            <img src="{{url('/images/pets/' . $pet->fotos()->first()->nome_imagem)}}" class="img-responsive" alt=""></a>
                        <h4><a href="single.html">{{$pet->nome_pet}}</a></h4>
                        <span><i class="glyphicon glyphicon-calendar"></i>{{date('d/m/Y', strtotime($pet->created_at))}}</span>
                        <p>{{$pet->detalhes}}</p>
                    </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>

@endsection