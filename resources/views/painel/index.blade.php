@extends('layouts.app')

@section('conteudo')

    <div class="modal fade" id="modal-dadoscontato" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h3 class="title">Entre em contato</h3>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="content">
        <div class="events">
            <div class="container">
                <h2>MEU PAINEL</h2>
            </div>
        </div>

        <div class="events">
            <div class="container">
                <div class="row">
                    @include('messages.index')
                    <div class="col col-md-4">
                        <div onclick="window.location='{{route('cadastrar.pet')}}'" class="btn-pet perdi">
                            <i class="fas fa-dog"></i>
                            <p>PERDI MEU PET</p>
                            <small>Perdi meu pet e não sei aonde encontrar.</small>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="btn-pet encontrei">
                            <i class="fas fa-paw"></i>
                            <p>ENCONTREI UM PET </p>
                            <small>Encontrei um pet perdido, e desejo encontrar o dono.</small>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="btn-pet doar">
                            <i class="fas fa-hand-holding-heart"></i>
                            <p>Doar </p>
                            <small>Desejo doar um pet, pois ele precisa de um novo amigo.</small>
                        </div>
                    </div>
                </div>

                <div class="row mt-30">
                    <div class="col col-md-12">
                        <h2>MEUS PETS</h2>
                    </div>
                </div>

                <div class="row mt-30">

                    <div class="col col-md-12">

                        @foreach($data->meus_pets as $pet)
                            <div id="box-pets">
                                <div class="meu-pet">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-responsive"
                                                 src="{{url('/images/pets/' . $pet->fotos()->first()->nome_imagem)}}"
                                                 alt="">
                                        </div>
                                        <div class="col-md-10">

                                            <h3 class="titlepet">{{$pet->nome_pet}}</h3>
                                            @if($pet->contatos()->count())
                                                    <p data-pet="{{Crypt::encryptString($pet->id_pet)}}"
                                                       class="ttoal-contato">
                                                        <i class="far fa-comment-alt"></i>
                                                        {{$pet->contatos()->count()}}
                                                    </p>
                                                    @endif
                                            
                                                <div class="tags-pet">
                                                    @if(count($pet->caracteristicas))
                                                    @foreach($pet->caracteristicas as $caracteristica)
                                                        <div class="tag">
                                                            <p>
                                                                <strong>{{$caracteristica->detalhe->label->nome_caracteristica}}
                                                                    :</strong> {{$caracteristica->detalhe->nome_opcao}}
                                                            </p>
                                                        </div>
                                                    @endforeach
                                                    @endif

                                                    @if($pet->status == 1)
                                                        <div class="row mt-15">
                                                            <div class="col-md-12">
                                                                <div class=" ">
                                                                    <a class="btn pet-encontrato"
                                                                       href="{{route('pet.encontrei', $pet->id_pet)}}">
                                                                        Encontrei este pet!
                                                                    </a>

                                                                    <p class="descricao-btn-encontreipet">Clique no
                                                                        botão ao lado se realmente você encontrou seu
                                                                        pet, ficaremos felizes em saber!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if($pet->status == 2)
                                                        <div class="row mt-15">
                                                            <div class="col-md-12">
                                                                <p class="descricao-btn-encontreipet color-texto1">
                                                                    Parabéns, ficamos felizes em saber que você
                                                                    reencontrou seu PET que é tão amado!
                                                                </p>

                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            
                                        </div>
                                    </div>


                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


        <!---->
    </div>
@endsection

@section('js')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function htmlContatos(data) {
            return '<div class="box-contatopet">'+
            '<p><strong>Nome: </strong>'+data.nome+'</p>'+
            '<p><strong>Telefone: </strong>'+data.telefone+'</p>'+
            '<p>'+data.mensagem+'</p>'+
            '</div>';
        }

        $('.ttoal-contato').click(function () {
            var pet = $(this).data('pet');
            $.ajax({
                url: '{{route('contatos.pet')}}',
                type: 'POST',
                data: {pet: pet},
                success: function (data) {
                    var html = '';
                    $.each(data, function(item, i){
                        html += htmlContatos(i);
                    })
                    console.log(html)
                    $('#modal-dadoscontato').find('.modal-body').html(html);
                    if(data.length > 0){
                        $('#modal-dadoscontato').modal('show')
                    }
                }
            })
        });
    </script>


@endsection