@extends('layouts.app')

@section('content')
<div class="card mx-auto" style="width: 50%;">
  <div class="card-body">

<div>
    <form method="POST" action="{{ route('elaun.store') }}">
        @csrf

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun1" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun2" value="I.T.P" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun3" value="KWAP" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun4" value="EP/EGB/EPK" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun5" value="ELAUN MEMANGKU" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun6" value="ELAUN KERAIAN" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun7" value="ELAUN TAIP JAWI" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun8" value="ELAUN BITK" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun9" value="ELAUN COLA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_elaun10" value="INSENTIF" readonly >
  </div>

  <hr>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan1" value="KWAP" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan2" value="PINJAMAN KOMPUTER" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan3" value="PNJAMAN PERUMAHAN" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan4" value="KOPERASI YIK" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan5" value="BIRO PERKHIDMATAN ANGKASA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan6" value="YAYASAN KELANTAN" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan7" value="YPEIM" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan8" value="ZAKAT MAIK" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan9" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan10" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan11" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan12" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan13" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan14" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan15" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan16" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan17" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan18" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan19" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan20" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan21" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan22" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan23" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan24" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan25" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan26" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan27" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan28" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan29" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan30" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan31" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan32" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan33" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan34" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan35" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan36" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan37" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan38" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan39" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan40" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan41" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan42" value="ITKA" readonly >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="nama_potongan43" value="ITKA" readonly >
  </div>

  <center>
  <button type="submit" class="btn btn-primary" style="width: 50%;">Submit</button>
  </center>
</form>
</div>
</div>
</div>
@endsection
