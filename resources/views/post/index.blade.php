@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Daftar Course yang Berjalan</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered" style="text-align:center">
            <thead>
              <tr>
                <th>Nama Event</th>
                <th>Kategori</th>
                <th>Poster</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($post as $item)
              <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->category->name}}</td>
                <td>
                  <img src="{{ asset($item->featured)}}" alt="Image" style="width:200px; height:200px;">
                </td>
                <td><a href="{{ route('post.edit', ['id'=> $item->id ])}}" class="btn btn-m btn-info">Edit</a>
                  <a href="{{ route('post.delete', ['id'=> $item->id ])}}" class="btn btn-m btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
@endsection