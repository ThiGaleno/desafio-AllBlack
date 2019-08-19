@extends('template.main')

@section('title', 'Formulário - editar')

@section('content')
<div class="container">
    <form action="{{route('fan.update',$dados->id)}}" method="put" enctype="multipart/form-data">
        
    @include('form')
    </form>
</div>
@endsection