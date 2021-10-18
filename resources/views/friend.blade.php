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
    <a href="/friends/create" class="card-link btn-primary">Tambah teman</a>

@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$friend['nama']}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$friend['no_tlp']}}</h6>
    <p class="card-text">{{$friend['alamat']}}</p>
    
    <a href="/friends/edit" class="card-link btn-warning">Edit teman</a>
    <a href="/friends/delete" class="card-link btn-danger">Delete teman</a>
  </div>
</div>
<h1></h1>
@endforeach
{{ $friends->onEachSide(5)->links() }}
@section('content')

@endsection