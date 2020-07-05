@extends('layouts.master')

@section('content')
<div class="ml-3 mr-3">
    <form action="/artikel/{{$artikel->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" value="{{$artikel->judul}}" class="form-control" placeholder="Judul">
        </div>
        <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" name="isi" value="{{$artikel->isi}}" class="form-control" placeholder="Ubah Artikelmu">
        </div>
        <div class="form-group">
        <label for="tag">Tag:</label>
        <input type="text" name="tag" value="{{$artikel->tag}}" class="form-control" placeholder="Ubah Tag">
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
@endsection