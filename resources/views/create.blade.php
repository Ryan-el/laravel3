@extends('layouts.app')

@section('title', 'Friends')
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
        <a class="nav-link" href="/friends">Friends</a>
      </div>
    </div>
</nav> 

@section('content')
<form action="/friends"  method="POST">
@csrf


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="Text" class="form-control" name="nama" id="Nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Tlp</label>
    <input type="Text" class="form-control" name="no_tlp" id="No Tlp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="Text" class="form-control" name="alamat" id="Alamat">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection