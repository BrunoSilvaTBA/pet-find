<!--header-->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{route('home')}}"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="head-right">
            <div class="head-grid">
                <ul>
                    <li><span>(21)5775-5858</span></li>
                    <li><span>(21)5775-0002</span></li>
                    <label>|</label>
                    <li>
                        <div id="loginContainer">

                            @if(auth()->check())
                                <a href="{{route('sair')}}" id="sairButton"><span>Sair</span></a>
                            @else
                                <a href="#" id="loginButton"><span>Login</span></a>
                            @endif

                            <div id="loginBox">
                                <form id="loginForm">
                                    <fieldset id="body">
                                        <fieldset>
                                            <label for="email">E-mail</label>
                                            <input type="text" name="email" id="email">
                                        </fieldset>
                                        <fieldset>
                                            <label for="password">Senha</label>
                                            <input type="password" name="password" id="password">
                                        </fieldset>
                                        <input type="submit" id="login" value="Entrar">
                                        <label for="checkbox"><a href="{{route('cadastro')}}">Cadastrar</a></label>
                                    </fieldset>
                                    <span><a href="#">Esqueceu sua senha?</a></span>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="{{url('/')}}/images/menu.png" alt=""> </span>
                <ul>
                    <li><a href="{{route('home')}}">Início</a></li>
                    <li><a href="{{route('pets.desaparecidos')}}">Desaparecidos</a></li>
                    <li><a href="{{route('sobre')}}">Sobre</a></li>
                    <li><a href="{{route('contato')}}">Contato</a></li>
                    @if(auth()->check())
                        <li><a href="{{route('painel')}}">Meu painel</a></li>
                        <div class="clearfix"></div>
                    @endif
                </ul>

                <!--script-->
                <script>
                    $("span.menu").click(function () {
                        $(".top-nav ul").slideToggle(500, function () {
                        });
                    });
                </script>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>