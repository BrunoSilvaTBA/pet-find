@extends('layouts.app')

@section('conteudo')
    <div class="banner-head">
        <div class="banner-1"></div>
        <div class="container">
            <h1>Sobre a Pet Finder</h1>
        </div>
    </div>


        <div class="content-middle mt-50">
            <div class="col-md-6 content-middle1">
                <img src="{{url('images/ab.jpg')}}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="title">Sobre</h3>
                <p class="mt-20">A “NetPet Soluções Informatizadas” iniciou suas atividades no dia 9 de agosto de 2018, na cidade de
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

    <!--content-->
    <div class="about">
        <!--content-top-->

        <div class="team">
            <h3>Equipe</h3>
            <div class="container" style="display: flex">

                <div class="col-md-3 team-top">
                    <img src="{{url('images/equipe/bruno.jpg')}}" class="img-responsive" alt="">
                    <div class="team-text">
                        <h5>Bruno Ferreira</h5>
                        <p>Desenvolvedor</p>
                    </div>

                </div>
                <div class="col-md-3 team-top">
                    <img src="{{url('images/equipe/felipe.jpg')}}" class="img-responsive" alt="">
                    <div class="team-text">
                        <h5>Felipe Monteiro</h5>
                        <p>Web Designer</p>
                    </div>

                </div>
                <div class="col-md-3 team-top">
                    <img src="{{url('images/equipe/george.jpg')}}" class="img-responsive" alt="">
                    <div class="team-text">
                        <h5>George Santos</h5>
                        <p>Analista de Sistemas</p>
                    </div>

                </div>
                <div class="col-md-3 team-top">
                    <img src="{{url('images/equipe/marcos.jpg')}}" class="img-responsive" alt="">
                    <div class="team-text">
                        <h5>Marcos Nobre</h5>
                        <p>Gerente de Projetos</p>
                    </div>

                </div>
                <div class="col-md-3 team-top">
                    <img src="{{url('images/equipe/wallace.jpg')}}" class="img-responsive" alt="">
                    <div class="team-text">
                        <h5>Wallace Santos</h5>
                        <p>Analista de Testes</p>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection