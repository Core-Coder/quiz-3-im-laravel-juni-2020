@extends('layouts.master')
@section('content')
    <div class="ml-3 mr-3">
            <div class="card card-info mt-3">
                <div class="card-header">
                <h3 class="card-title mt-3">Judul: <b>{{$tampil->judul}}</b></h3>
                <h5 class="card-title">Slug: {{$tampil->slug}}</h5>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <div class="card-body">
                      <div class="col-sm-10">
                        {{$tampil->isi}}
                      </div>
                    </div>
                    <div class="form-group row ml-3"> 
                        <a href="#" class="btn btn-success">{{$tampil->tag}}</a>
                    </div>
                  <!-- /.card-footer -->
            </div>
    </div>
@endsection