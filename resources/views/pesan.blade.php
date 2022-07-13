@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Daftar Pesan Pengguna Minerva Indonesia</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Subjek</th>
                <th>Isi Pesan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Agus Bayu Pamungkas</td>
                <td>abay@students.unnes.ac.id</td>
                <td>Konfirmasi Pembayaran</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisici</td>
              </tr>
            </tbody>
            {{-- <tbody>
              @foreach ($categories as $item)
              <tr>
                <td>{{$item->name}}</td>
                <td><a href="{{ route('category.edit', ['id'=> $item->id ])}}" class="btn btn-m btn-info">Edit</a>
                  <a href="{{ route('category.delete', ['id'=> $item->id ])}}" class="btn btn-m btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody> --}}
          </table>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
@endsection