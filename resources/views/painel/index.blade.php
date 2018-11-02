@extends('layouts.app')

@section('conteudo')
    <div class="content">
        <h1>PAINEL </h1>
        Ola {{auth()->user()->name}}, vc estáa logado!
    </div>
@endsection
