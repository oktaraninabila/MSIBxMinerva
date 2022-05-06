@extends('layouts.layouts-admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Peserta Webinar</h4>
        <p class="card-description">
          Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Instansi</th>
                <th>Domisili</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>0{{ $item->notelp }}</td>
                <td>{{ $item->instansi }}</td>
                <td>{{ $item->domisili }}</td>
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