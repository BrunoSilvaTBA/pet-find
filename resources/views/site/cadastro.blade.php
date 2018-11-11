@extends('layouts.app')

@section('conteudo')


    <!--//header-->
    <div class="banner-head">
        <div class="banner-1"></div>
        <div class="container">
            <h1>Cadastre-se ou entre <br>com seu e-mail</h1>
        </div>
    </div>
    <!--content-->
    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <div class="col-md-6 contact-grid">
                    <h3 class="title">Cadastre-se</h3>
                    <form action="{{route('cadastrar')}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Seu nome">
                        <input type="text" name="email" placeholder="Seu e-mail">

                        <div class="row">
                            <div class="col-md-6"><input type="password" placeholder="Digite sua senha"></div>
                            <div class="col-md-6"><input name="password" type="password" placeholder="Confirme sua senha"></div>
                        </div>


                        <div class="send">
                            <input type="submit" value="Cadastrar">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 contact-grid">
                    <h3 class="title">Faça seu login</h3>
                    <form action="{{route('logar')}}" method="POST">
                        @csrf
                        <input name="email" type="text" placeholder="Seu e-mail">
                        <input name="password" type="password" placeholder="Digite sua senha">

                        <div class="send">
                            <input type="submit" value="Entrar">
                        </div>
                    </form>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>

@endsection