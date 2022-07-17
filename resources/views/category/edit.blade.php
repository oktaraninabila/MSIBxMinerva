@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Kategori <strong>{{ $categories->name}}</strong></h4>
                <form action="{{route('category.update', ['id'=> $categories->id])}}" method="POST" class="forms-sample">
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama Kategori</label>
                    <input type="text" class="form-control" name="name" value="{{ $categories->name}}">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Update</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
@include('sweetalert::alert')
@endsection