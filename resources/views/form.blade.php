@extends('layouts.master')

@section('content')
<div class="ml-3 mr-3">
    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul">
        </div>
        <div class="form-group">
        <label for="isi">Isi:</label>
        <textarea class="form-control" name="isi" rows="5" id="isi"></textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag :</label>
            <input type="text" name="tag" class="form-control" placeholder="Tag">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection