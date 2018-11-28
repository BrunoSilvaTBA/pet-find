@extends('layouts.app')

@section('conteudo')
    <div class="content">


        <div class="events">
            <div class="container">
                <h2>Desaparecidos <br>
                    <small>Ajundem a encontrar, pois esses Pets estão carentes de seus donos.</small>
                </h2>
                <div class="events-top">

                    @foreach($pets as $pet)
                        <div class="col-sm-4 top-event">
                            <a href="{{route('ver-pet', $pet->id_pet)}}">
                                <img src="{{url('/images/pets/' . $pet->fotos()->first()->nome_imagem)}}"
                                     class="img-responsive" alt=""></a>
                            <h4><a href="{{route('ver-pet', $pet->id_pet)}}">{{$pet->nome_pet}}</a></h4>
                            <span><i class="glyphicon glyphicon-calendar"></i>{{date('d/m/Y', strtotime($pet->created_at))}}</span>
                            <p>{{ str_limit($pet->detalhes, 80)}}</p>
                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>

            </div>
        </div>

        <div class="events">
            <div class="container">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


        <!---->
    </div>
@endsection
