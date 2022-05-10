@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tambahkan Post</h4>
                <form action="{{route('post.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama Event</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title}}" name="title" placeholder="Nama Event">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>Nama event harus diisi.</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" value="{{ $post->category}}">
                        <option value="">Pilih Kategori</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                      @error('category_id')
                        <span class="invalid-feedback" role="alert">
                          <strong>Kategori harus diisi.</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="content">Konten</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" value="{{ $post->content}}" name="content"></textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                          <strong>konten harus diisi.</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="featured">Gambar</label>
                    <input type="file" class="form-control @error('featured') is-invalid @enderror" value="{{ $post->featured}}" name="featured">
                    @error('featured')
                        <span class="invalid-feedback" role="alert">
                          <strong>konten harus diisi.</strong>
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