@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Contato</h1>

    @component('site.layouts._components.form_contato')
        
    @endcomponent

@endsection
