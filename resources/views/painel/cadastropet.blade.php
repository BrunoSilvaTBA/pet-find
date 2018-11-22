@extends('layouts.app')

@section('css')
    <link href="{{url('/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('css/basic.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('css/dropzone.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('conteudo')


    <!--//header-->
    <div class="banner-head">
        <div class="banner-1"></div>
        <div class="container">
            <h1>Cadastre seu animal perdido</h1>
        </div>
    </div>


    <!--content-->
    <div class="container">

        <div class="contact">

            <div class="contact-form">
                @include('messages.index')

                <div class="col col-md-12">
                    <p class="texto-descritivo">Perdeu seu pet? Então, preencha este cadastro para podermos fazer o
                        possível para encontra-lo. Com este cadastro podemos divulgar em nosso site, onde várias pessoas
                        podem ajudar com informações preciosas para encontrar seu animal!</p>
                </div>

                <form action="{{route('cadastrar.pet.post')}}" id='formCadastroPet' class="" method="POST">

                    <div class="col-md-6 contact-grid">
                        <h3 class="title">Sobre seu PET</h3>

                        @csrf
                        <input type="text" name="name" placeholder="Nome do Pet">
                        <input type="hidden" name="status" value="{{$status}}">

                        <div class="row">
                            <div class="col col-md-6">
                                <select name="especie" id="especie">
                                    <option value="00">Selecione a espécie</option>

                                </select>
                            </div>
                            <div class="col col-md-6">
                                <select name="raca" id="raca">
                                    <option value="">Selecione ..</option>
                                    <option value="">Cão</option>
                                </select>
                            </div>

                            <div class="col col-md-12">
                                <textarea name="detalhes" placeholder="Falei mais sobre seu pet"></textarea>
                            </div>

                            <div id="box-caracteristica" class="col-md-12 mt-30 contact-grid">
                                <h3 class="title">Caracteristicas</h3>

                                <div class="row" id="caracteristicas">
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-6 contact-grid">
                        <h3 class="title">ÚLTIMO LOCAL VISTO</h3>

                        <div class="row">
                            <div class="col col-md-6">
                                <select name="uf" id="uf">
                                </select>
                            </div>

                            <div class="col col-md-6">
                                <select disabled name="cidade" id="cidade">
                                    <option value="00">Cidade...</option>
                                </select>
                            </div>

                            <div class="col col-md-6">
                                <select disabled name="bairro" id="bairro">
                                    <option value="00">Bairro...</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="box-fotos-pet" class="col-md-6 contact-grid">
                        <h3 class="title">FOTOS DO SEU PET</h3>

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="dropzone"></div>
                            </div>
                        </div>
                    </div>




                    <div class="col m-top-30 col-md-12">
                        <div class="send">
                            <input type="submit" id="salvardadospet" class='btn btn-pet' value="Cadastrar">
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>

@endsection

@section('js')
    <script>
        uf = '';
        cidade = '';
        bairro = '';

        function listarEspecies(especie) {
            $.ajax({
                url: '{{url('api/raca/')}}/' + especie,
                success: function (data) {

                    var label = especie == 3 ? 'a espécie' : 'raça';

                    var opcoes = '<option value="00">Selecione ' + label + '</option>';
                    $.each(data, function (item, i) {
                        opcoes += '<option value="' + i.id_raca + '">' + i.nome_raca + '</option>';
                    });
                    $('#raca').html(opcoes)
                }
            })
        }

        function createSelect(name, options) {
            var html = '<select name="' + name + '">' + options + '</select>';
            return html;
        }

        function montarhtmlBoxCaracteristica(id, label) {
            var html = '<div class="col col-md-6">' +
                '<input type="text" name="caracteristicas[' + id + ']" placeholder="' + label + '">' +
                '</div>';
            return html;
        }


        function listarCaracteristicas(especie) {
            $.ajax({

                url: '{{url('api/caracteristicas/')}}/' + especie,

                success: function (data) {
                    var opcoes = '<option value="00">Selecione.. </option>';
                    var html = '';


                    $.each(data, function (item, i) {
                        if (i.tipo == 1) {
                            html += montarhtmlBoxCaracteristica(i.id_caracteristica, i.nome_caracteristica);
                        }

                        if (i.tipo == 2) {
                            var opcoes = '<option value="00">' + i.nome_caracteristica + ' ..</option>';
                            html += '<div class="col col-md-6">';
                            $.each(i.opcoes, function (o, opcao) {

                                opcoes += '<option value="' + opcao.id_opcao + '">' + opcao.nome_opcao + '</option>';

                            });
                            html += createSelect('caracteristica[' + i.id_caracteristica + ']', opcoes);
                            html += '</div>';
                        }
                    });

                    $('#caracteristicas').html(html);

                }
            })
        }

        $.ajax({
            url: '{{route('api.especies')}}',
            success: function (data) {
                var opcoes = '<option value="00">Selecione a espécie</option>';
                $.each(data, function (item, i) {
                    opcoes += '<option value="' + i.id_especie + '">' + i.nome_especie + '</option>';
                });
                $('#especie').html(opcoes)
            },
        });


        $('#especie').change(function () {
            var ele = $(this);
            if (ele.val() == '00') {
                $('#box-caracteristica').hide();
            } else {
                $('#box-caracteristica').show();
            }

            listarEspecies(ele.val());
            listarCaracteristicas(ele.val());
        });

        $.ajax({
            url: '{{url('json/estados.json')}}',
            success: function (data) {
                var opcoes = '<option value="00">UF</option>';
                $.each(data.data, function (item, i) {
                    opcoes += '<option value="' + i.Uf + '">' + i.Uf + '</option>';
                });
                $('#uf').html(opcoes)
            }
        });

        function getMunicipiosByUF(uf) {
            $.ajax({
                url: '{{url('municipios/')}}/' + uf,
                type: 'GET',
                success: function (municipios) {
                    var opcoes = '<option value="00">Selecione a cidade..</option>';
                    $.each(municipios, function (item, i) {
                        opcoes += '<option value="' + i.Codigo + '">' + i.Nome + '</option>';
                    });
                    $('#cidade').html(opcoes)
                }
            })
        }

        function getBairros(code, uf) {
            $.ajax({
                url: '{{url('bairros/')}}/' + uf + '/' + code,
                type: 'GET',
                success: function (bairros) {
                    var opcoes = '<option value="00">Selecione o bairro..</option>';
                    $.each(bairros, function (item, i) {
                        opcoes += '<option value="' + i.Id + '">' + i.Nome + '</option>';
                    });
                    $('#bairro').html(opcoes)
                }
            })
        }

        $('#uf').change(function () {
            uf = $(this).val();
            getMunicipiosByUF(uf);
            $('#cidade').removeAttr('disabled');
        })

        $('#cidade').change(function () {
            cidade = $(this).val();
            getBairros(cidade, uf);
            $('#bairro').removeAttr('disabled');
        })


    </script>
    <script src="{{url('plugins/sweetalert/sweetalert.js')}}"></script>
    <script src="{{url('js/dropzone.js')}}"></script>
    <script>

        names_imgs = [];

        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", {
            url: "{{route('carregar-foto-pet')}}",
            dictDefaultMessage: 'Clique aqui ou arraste 6 fotos do seu PET',
            acceptedFiles: 'image/*',
            maxFiles: 3,
            minImageWidth: 500,
            minImageHeight: 320,
            maxFilesize: 2,
            addRemoveLinks: true,
            dictRemoveFile: 'Remover',
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{ csrf_token() }}");
            },
            success: function (data, i, e) {
                names_imgs.push(i.nome);
            },
            error: function (data, i, e) {
                var ele = this;
                ele.removeFile(data)
                swal("Ops, aconteceu algum erro", i.toString(), "error")
            }

        });

        function validarFormulario(){
            var nome_pet = $('input[name=name]');
            var especie  = $('select[name=especie]');
            var raca  = $('select[name=raca]');

            var uf  = $('select[name=uf]');
            var cidade  = $('select[name=cidade]');

            nome_pet.removeClass('erroinput');
            especie.removeClass('erroinput');
            raca.removeClass('erroinput');
            uf.removeClass('erroinput');
            cidade.removeClass('erroinput');

            if(nome_pet.val() == ''){
                swal("Ops, cadastro incompleto", 'Informe o nome do seu pet', "error");
                nome_pet.focus();
                nome_pet.addClass('erroinput');
                return false;
            }

            if(especie.val() == '00'){
                swal("Ops, cadastro incompleto", 'Informe a especie do seu pet', "error");
                especie.focus();
                especie.addClass('erroinput');
                return false;
            }

            if(raca.val() == '00'){
                var label  = especie.val() == 3 ? ' espécie da ave '  :' raça ';
                swal("Ops, cadastro incompleto", 'Informe a '+label+' do seu pet', "error");
                raca.focus();
                raca.addClass('erroinput');
                return false;
            }

            if(uf.val() == '00'){
                swal("Ops, cadastro incompleto", 'Informe a UF que o animal foi perdido', "error");
                uf.focus();
                uf.addClass('erroinput');
                return false;
            }

            if(cidade.val() == '00'){
                swal("Ops, cadastro incompleto", 'Informe a Cidade que o animal foi perdido', "error");
                cidade.focus();
                cidade.addClass('erroinput');
                return false;
            }

            return true;

        }



        $('#formCadastroPet').submit(function () {

            if(validarFormulario() == false){
                return false;
            }

            var formData = new FormData($(this)[0]);
            formData.append('names_imgs', names_imgs);

            $.ajax({
                url: '{{route('cadastrar.pet.post')}}',
                data: formData,
                processData: false,
                type: 'POST',
                contentType: false,
                success: function (data) {
                    myDropzone.removeAllFiles(true)
                    $('#box-caracteristica').hide();
                    $('#formCadastroPet')[0].reset();
                    swal("Perfeito", "Faremos o possível para encontrarmos seu pet", "success")
                }
            });

            return false;
        })

    </script>
@endsection