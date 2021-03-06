@extends('layouts.app')

@section('title','Friends')

@section('content')
<form action="/friends/store" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="nama" aria-describedby="emailHelp" value="{{ old('nama') }}">    
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">No Telpon</label>
    <input type="text" class="form-control" name="no_tlpn" id="exampleInputPassword1" value="{{ old('no_tlpn') }}">
    @error('no_tlpn')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  @endsection
  

