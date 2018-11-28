@extends('layouts.app')
@section('css')
    <link href="{{url('/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@endsection
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
                @include('messages.index')


                <div class="col-md-6 contact-grid">
                    <h3 class="title">Cadastre-se</h3>
                    <form id="cadastro" action="{{route('cadastrar')}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Seu nome">
                        <input type="text" name="email" placeholder="Seu e-mail">

                        <div class="row">
                            <div class="col-md-6"><input name="password" type="password" placeholder="Digite sua senha">
                            </div>
                            <div class="col-md-6"><input name="password2" type="password"
                                                         placeholder="Confirme sua senha"></div>
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

@section('js')
    <script src="{{url('plugins/sweetalert/sweetalert.js')}}"></script>
    <script>
        $('#cadastro').submit(function () {

            var form = new FormData($(this)[0]);
            var nome = form.get('name');
            var email = form.get('email');
            var senha = form.get('password');
            var conf_senha = form.get('password2');

            $(this).find('input[name=name]').removeClass('erroinput');
            $(this).find('input[name=email]').removeClass('erroinput');
            $(this).find('input[name=password]').removeClass('erroinput');
            $(this).find('input[name=password2]').removeClass('erroinput');

            var flag = true;

            if (nome == '') {
                $(this).find('input[name=name]').addClass('erroinput');
                flag = false;
            }

            if (email == '') {
                $(this).find('input[name=email]').addClass('erroinput');
                flag = false;
            }

            if (senha == '') {
                $(this).find('input[name=password]').addClass('erroinput');
                flag = false;
            }

            if (conf_senha == '') {
                $(this).find('input[name=password2]').addClass('erroinput');
                flag = false;
            }

            if (senha != conf_senha) {
                swal('Erro', 'As senhas digitadas estão diferentes', 'error');
                $(this).find('input[name=password2]').addClass('erroinput');
                $(this).find('input[name=password]').addClass('erroinput');
                flag = false;
            }

            if (flag == false) {
                return false;
            }


        });
    </script>
@endsection
