<?php include_once('inc/header.php'); ?>
<?php include_once('inc/menu.php'); ?>
<div class="container">
    <div class="contact">
        <div class="contact-form">
            <div class="col-md-4 contact-in">
                <h2>Perdi meu Pet</h2>
                <p>Preencha o formulário ao lado para divulgar o desaparecimento do seu bixano</p>

            </div>
            <div class="col-md-8 contact-grid">
                <form>
                    <h3 class="title">Preencha os dados do seu pet</h3>
                    <input type="text" placeholder="Informe o nome do PET">
                    <input type="text" placeholder="Informe a idade">

                    <select name="" id="">
                        <option value="">Selecione a espécie</option>
                        <option value="">Gato</option>
                        <option value="">Cachorro</option>
                    </select>


                    <h3 class="title mt-30">Informe o local provavel do desaparecimento</h3>
                    <select name="" id="">
                        <option value="">Selecione a UF</option>
                        <option value="">RJ</option>
                        <option value="">SP</option>
                    </select>

                    <select name="" id="">
                        <option value="">Selecione a Cidade</option>
                        <option value="">Nova Iguaçu</option>
                        <option value="">Queimados</option>
                    </select>

                    <select name="" id="">
                        <option value="">Selecione o Bairro</option>
                        <option value="">Nova Iguaçu</option>
                        <option value="">Queimados</option>
                    </select>

                    <div class="send mt-30">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>


            <div class="clearfix"></div>
        </div>

    </div>
</div>
<?php include_once('inc/footer.php'); ?>
