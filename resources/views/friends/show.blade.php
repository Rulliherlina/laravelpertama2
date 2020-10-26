@extends('layouts.app')

@section('title','cobaaaaaaa')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Nama teman : {{$friend['nama']}}</h3>
    <h3>No tlpn teman : {{$friend['no_tlpn']}}</h3>
    <h3>Alamat teman : {{$friend['alamat']}}</h3>
    </div>
</div>
@endsection
  

