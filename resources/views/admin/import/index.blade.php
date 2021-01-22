@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Importar Planilha</h1>
@stop

@section('content')
    <form action="{{ route('admin.import.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="file">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Importar</button>
        </div>
    </form>
@stop