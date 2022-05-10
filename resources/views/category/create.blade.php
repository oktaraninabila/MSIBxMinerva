@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tambahkan Kategori</h4>
                <form action="{{route('category.store')}}" method="POST" class="forms-sample">
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama Kategori</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Kategori">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>Nama Kategori harus diisi.</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>

@endsection