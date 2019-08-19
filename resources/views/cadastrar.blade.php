@extends('template.main')

@section('title', 'Formulário - Cadastrar')

@section('content')
<div class="container">
    <form action="{{route('fan.store')}}" method="POST" enctype="multipart/form-data">
    @include('form')
    </form>
</div>
@endsection