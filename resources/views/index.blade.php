@extends('layouts.master')

@section('content')
    <div class="ml-3 mr-3">
        <table class="table">
        <thead>
            <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tag</th>
            <th>Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikel as $key => $article)
            <tr>
            <td>{{$key + 1}}</td>
            <td>{{$article->judul}}</td>
            <td>{{$article->isi}}</td>
            <td>{{$article->tag}}</td>
            <td>
                <a href="/artikel/{{$article->id}}" class="btn btn-primary">Detail</a>
                <a href="/artikel/{{$article->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="/artikel/{{$article->id}}" method="POST" style="display : inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <hr>
        <a href="/artikel/create" class="btn btn-primary">Buat artikel baru disini!</a>
    </div>

    
    @endsection
    
    @push('alert')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
    @endpush