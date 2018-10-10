@extends('layouts.app')

@section('conteudo')


    <!--//header-->
    <div class="banner-head">
        <div class="banner-1"></div>
        <div class="container">
            <h1>Contato</h1>
        </div>
    </div>
    <!--content-->
    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <div class="col-md-8 contact-grid">
                    <form>
                        <input type="text" placeholder="Seu nome">
                        <input type="text" placeholder="Seu e-mail">
                        <input type="text" placeholder="Informe o assunto da sua mensagem">
                        <textarea placeholder="Digite sua mensagem" required=""></textarea>
                        <div class="send">
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 contact-in">
                    <h2>Fale conosco</h2>
                    <p>Precisando de ajuda sobre doações, pet perdido e etc..? Entre em contato e veremos o que podemos fazer por você. Sempre estaremos dispostos a ajudar em tudo que estiver em nosso alcance.</p>
                    <div class="address-grid">
                        <h5>R. Oscar Soares, 15 </h5>
                        <p><b>Nova Iguaçu, RJ</b></p>
                        <p>TL 19034-88974</p>
                        <a href="mailto:mail@example.com">contato@petfinder.com.br</a>

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.1332988162867!2d-43.43346758467604!3d-22.760433885086425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9966f0e0ae7d11%3A0xcac38813e1eee7d5!2sR.+Oscar+Soares%2C+Rio+de+Janeiro!5e0!3m2!1spt-BR!2sbr!4v1539131080279" width="600" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

@endsection