@extends('layouts.app')

@section('conteudo')
    <div class="content">


        <div class="events">
            <div class="container">
                <h2>MEU PAINEL</h2>
            </div>
        </div>


        <div class="events">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="btn-pet perdi">
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
            </div>
        </div>


        <!---->
    </div>
@endsection