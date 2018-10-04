<!--header-->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="" ></a>
        </div>
        <div class="head-right">
            <div class="head-grid">
                <ul>
                    <li ><span>(21)5775-5858</span></li>
                    <li ><span>(21)5775-0002</span></li><label>|</label>
                    <li><div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
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
                                        <input type="submit" id="login" value="Sign in">
                                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Cadastrar</i></label>
                                    </fieldset>
                                    <span><a href="#">Esqueceu sua senha?</a></span>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="images/menu.png" alt=""> </span>
                <ul>
                    <li class="active"><a href="index.html">Início</a></li>
                    <li><a href="about.html">Sobre</a></li>
                    <li><a href="gallery.html">Galeria</a></li>
                    <li><a href="adocao.html">Adote</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <!-- <li><a href="codes.html">Short Codes</a></li> -->
                    <li><a href="contact.html">Contato</a></li>
                    <div class="clearfix"> </div>
                </ul>

                <!--script-->
                <script>
                    $("span.menu").click(function(){
                        $(".top-nav ul").slideToggle(500, function(){
                        });
                    });
                </script>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>