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
                {{--<div class="content-top">--}}
                    {{--<div class="col-md-4 wel">--}}
                        {{--<div class="content-ic">--}}
                            {{--<i class="glyphicon glyphicon-leaf"></i>--}}
                        {{--</div>--}}
                        {{--<div class="content-text">--}}
                            {{--<h5>It is a long established </h5>--}}
                            {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a--}}
                                {{--piece of classical Latin literature from 45 BC, making it over 2000 years old</p>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 wel">--}}
                        {{--<div class="content-ic">--}}
                            {{--<i class="glyphicon glyphicon-erase"></i>--}}
                        {{--</div>--}}
                        {{--<div class="content-text">--}}
                            {{--<h5>It is a long established </h5>--}}
                            {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a--}}
                                {{--piece of classical Latin literature from 45 BC, making it over 2000 years old</p>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 wel">--}}
                        {{--<div class="content-ic">--}}
                            {{--<i class="glyphicon glyphicon-grain"></i>--}}
                        {{--</div>--}}
                        {{--<div class="content-text">--}}
                            {{--<h5>It is a long established </h5>--}}
                            {{--<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a--}}
                                {{--piece of classical Latin literature from 45 BC, making it over 2000 years old</p>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
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
                <h2>Animais desaparecidos</h2>
                <div class="events-top">
                    <div class="col-sm-4 top-event">
                        <a href="single.html"><img src="images/ev.jpg" class="img-responsive" alt=""></a>
                        <h4><a href="single.html">Pupy</a></h4>
                        <span><i class="glyphicon glyphicon-calendar"></i>08/08/2015 11:00 Am</span>
                        <p>Masagni dolores eoquie voluptaquisquam estqui dolorem ipsumquia dolor sitamnetase adipiscquam
                            eiuse. </p>
                    </div>
                    <div class="col-sm-4 top-event">
                        <a href="single.html"><img src="images/ev1.jpg" class="img-responsive" alt=""></a>
                        <h4><a href="single.html">Nininha</a></h4>
                        <span><i class="glyphicon glyphicon-calendar"></i>08/08/2015 11:00 Am</span>
                        <p>Masagni dolores eoquie voluptaquisquam estqui dolorem ipsumquia dolor sitamnetase adipiscquam
                            eiuse. </p>
                    </div>
                    <div class="col-sm-4 top-event">
                        <a href="single.html"><img src="images/ev2.jpg" class="img-responsive" alt=""></a>
                        <h4><a href="single.html">Thor</a></h4>
                        <span><i class="glyphicon glyphicon-calendar"></i>08/08/2015 11:00 Am</span>
                        <p>Masagni dolores eoquie voluptaquisquam estqui dolorem ipsumquia dolor sitamnetase adipiscquam
                            eiuse. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="events-top">
                    <div class="col-sm-4 top-event">
                        <a href="single.html"><img src="images/ev3.jpg" class="img-responsive" alt=""></a>
                        <h4><a href="single.html">Duck</a></h4>
                        <span><i class="glyphicon glyphicon-calendar"></i>08/08/2015 11:00 Am</span>
                        <p>Masagni dolores eoquie voluptaquisquam estqui dolorem ipsumquia dolor sitamnetase adipiscquam
                            eiuse. </p>
                    </div>
                    <div class="col-sm-4 top-event">
                        <a href="single.html"><img src="images/ev4.jpg" class="img-responsive" alt=""></a>
                        <h4><a href="single.html">Doug</a></h4>
                        <span><i class="glyphicon glyphicon-calendar"></i>08/08/2015 11:00 Am</span>
                        <p>Masagni dolores eoquie voluptaquisquam estqui dolorem ipsumquia dolor sitamnetase adipiscquam
                            eiuse. </p>
                    </div>
                    <div class="col-sm-4 top-event">
                        <a href="single.html"><img src="images/ev5.jpg" class="img-responsive" alt=""></a>
                        <h4><a href="single.html">Mocinha</a></h4>
                        <span><i class="glyphicon glyphicon-calendar"></i>08/08/2015 11:00 Am</span>
                        <p>Masagni dolores eoquie voluptaquisquam estqui dolorem ipsumquia dolor sitamnetase adipiscquam
                            eiuse. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

@endsection