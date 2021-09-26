@extends('layouts.app')

@section('content')
<div class="card mx-auto" style="width: 50%;">
  <div class="card-body">

<div>
    <form method="POST" action="{{ route('profile.store') }}">
        @csrf

  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" readonly >
  </div>

  <div class="form-group">
    <label>No IC</label>
    <input type="text" class="form-control" name="user_ic" value="{{ Auth::user()->ic }}" readonly >
  </div>

  <div class="form-group">
    <label>Jawatan</label>
    <input type="text" class="form-control" name="jawatan" >
  </div>

  <div class="form-group">
    <label>Taraf Jawatan</label>
    <input type="text" class="form-control" name="taraf_jawatan" >
  </div>

  <div class="form-group">
    <label>Penempatan</label>
    <input type="text" class="form-control" name="penempatan" >
  </div>

  <div class="form-group">
    <label>Warganegara</label>
    <input type="text" class="form-control" name="warganegara" >
  </div>


  <center>
  <button type="submit" class="btn btn-primary" style="width: 50%;">Submit</button>
  </center>
</form>
</div>
</div>
</div>
@endsection
