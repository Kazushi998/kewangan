@extends('layouts.app')

@section('content')
<div class="card mx-auto" style="width: 50%;">
  <div class="card-body">

<div>
    <form>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="name" >
  </div>

  <div class="form-group">
    <label>No IC</label>
    <input type="text" class="form-control" name="user_ic" >
  </div>

  <div class="form-group">
    <label>Jawatan</label>
    <input type="text" class="form-control" name="jawatan" >
  </div>

  <div class="form-group">
    <label>Taraf Jawatan</label>
    <input type="text" class="form-control" name="status" >
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
