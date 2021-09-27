@extends('layouts.app')

@section('content')
<div class="card mx-auto w-75">
  <div class="card-body">
  <p>Nama: {{ Auth::user()->name }}</p>
  <p>IC: {{ $data->user_ic }}</p>
  <p>Jawatan: {{ $data->jawatan }}</p>
  <p>Taraf Jawatan: {{ $data->taraf_jawatan }}</p>
  <p>Warganegara: {{ $data->warganegara }}</p>
<div>
    <form method="POST" action="{{ route('gaji.store') }}">
        @csrf

  <div class="form-group">
    <label>Tarikh</label>
    <input type="text" class="form-control" name="tarikh" >
  </div>

  <div class="form-group">
    <label>Gaji Pokok</label>
    <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" onchange="calc_gaji()" >
  </div>

  <div class="form-row" id="elaun1">
    <div class="col-md-5">
    <label>Nama Elaun</label>
    <select class="custom-select" id="nama_elaun1" name="nama_elaun1">
        <option hidden selected>Choose...</option>
        <option value="1">ITKA</option>
        <option value="2">Elaun Memangku</option>
        <option value="3">Elaun COLA</option>
      </select>
    </div>
    <div class="col-md-5">
        <label>Jumlah Elaun</label>
            <input type="text" class="form-control" id="jumlah_elaun1" name="jumlah_elaun1" placeholder="RM" onchange="calc_elaun()">
    </div>
    <div class="col-md-auto">
        <label style="visibility: hidden">‎</label>
        <div class="form-group">
            <button type="button" class="btn btn-primary" onclick="createNewElement();">Tambah Elaun</button>
        </div>
    </div>
</div>

<div id="newElement"></div>

  <div class="form-group">
    <label>Jumlah Elaun</label>
    <input type="text" class="form-control" id="jumlah_elaun" name="jumlah_elaun" readonly >
  </div>

  <div class="form-group">
    <label>Potongan 1</label>
    <input type="text" class="form-control" id="potongan1" name="potongan1" onchange="calc_potongan()" >
  </div>

  <div class="form-group">
    <label>Potongan 2</label>
    <input type="text" class="form-control" id="potongan2" name="potongan2" onchange="calc_potongan()" >
  </div>

  <div class="form-group">
    <label>Jumlah Potongan</label>
    <input type="text" class="form-control" id="jumlah_potongan" name="jumlah_potongan" readonly >
  </div>

  <div class="form-group">
    <label>Caruman Majikan</label>
    <input type="text" class="form-control" id="caruman_majikan" name="caruman_majikan" >
  </div>

  <div class="form-group">
    <label>Caruman Pekerja</label>
    <input type="text" class="form-control" id="caruman_pekerja" name="caruman_pekerja" >
  </div>

  <div class="form-group">
    <label>Bank</label>
    <input type="text" class="form-control" name="bank" >
  </div>

  <div class="form-group">
    <label>Gaji Bersih</label>
    <input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih" readonly >
  </div>

  <input type="hidden" class="form-control" name="user_ic" value="{{ $data->user_ic }}" >


  <center>
  <button type="submit" class="btn btn-primary" style="width: 50%;">Submit</button>
  </center>
</form>
</div>
</div>
</div>
<script>

    var count_elaun_element = 1;

    function createNewElement() {
        count_elaun_element++;

        var newDiv = document.createElement('div');
        var newDiv2 = document.createElement('div');
        var newDiv3 = document.createElement('div');
        newDiv.setAttribute('class', 'form-row mb-2');
        newDiv.setAttribute('id', "elaun" + count_elaun_element);
        newDiv2.setAttribute('class', 'col-md-5');
        newDiv3.setAttribute('class', 'col-md-auto');

        newDiv.innerHTML = "<div class='col-md-5'>" + "<label>Nama Elaun</label>" + "<select class='custom-select' id='nama_elaun" + count_elaun_element +"' name='nama_elaun" + count_elaun_element +"'><option hidden selected>Choose...</option><option value='1'>ITKA</option><option value='2'>Elaun Memangku</option><option value='3'>Elaun COLA</option></select>";
        newDiv2.innerHTML = "<label>Jumlah Elaun</label>" + "<input type='text' class='form-control' id='jumlah_elaun" + count_elaun_element +"' placeholder='RM' name='jumlah_elaun" + count_elaun_element +"' onchange='calc_elaun()'>";
        newDiv3.innerHTML = "<label style='visibility: hidden'>‎</label>" + "<div class='form-group'>" + "<button type='button' id='button_elaun" + count_elaun_element +"' class='btn btn-primary' onclick='removeTheElement(this.id);'>Padam Elaun</button>";
        newDiv.appendChild(newDiv2);
        newDiv.appendChild(newDiv3);

        document.getElementById("newElement").appendChild(newDiv);
    }

    function changeElementNameId() {
        i = 2;
        found = 2;

        while (found < count_elaun_element + 1) {

                if(document.getElementById("elaun" + i)) {
                document.getElementById("elaun" + i).id = "elaun" + found;
                document.getElementById("nama_elaun" + i).name = "nama_elaun" + found;
                document.getElementById("jumlah_elaun" + i).name = "jumlah_elaun" + found;
                document.getElementById("nama_elaun" + i).id = "nama_elaun" + found;
                document.getElementById("jumlah_elaun" + i).id = "jumlah_elaun" + found;
                document.getElementById("button_elaun" + i).id = "button_elaun" + found;
                found++;
            }
            i++
        }

    }

    function removeTheElement(x) {
        count_elaun_element--;
        var element = document.getElementById(x.substring('button_'.length));
        element.remove();
        changeElementNameId();
        calc_elaun();
    }

    function calc_elaun() {

        total = 0;

        for (let i = 0; i < count_elaun_element; i++) {
            if (parseInt(document.getElementById("jumlah_elaun" + (i + 1)).value) > 0) {
                total = total + parseInt(document.getElementById("jumlah_elaun" + (i + 1)).value);
            }
        }

        document.getElementById("jumlah_elaun").value = total;
        calc_gaji();
        calc_caruman();
    }

    function calc_potongan() {
        x = document.getElementById("potongan1").value || 0;
        y = document.getElementById("potongan2").value || 0;
        document.getElementById("jumlah_potongan").value = parseInt(x) + parseInt(y);
        calc_gaji();
        calc_caruman();
    }

    function calc_gaji() {
        x = document.getElementById("gaji_pokok").value || 0;
        y = document.getElementById("jumlah_elaun").value || 0;
        z = document.getElementById("jumlah_potongan").value || 0;
        document.getElementById("gaji_bersih").value = parseInt(x) + parseInt(y) - parseInt(z);
        calc_caruman();
    }

    function calc_caruman() {
        x = document.getElementById("gaji_pokok").value || 0;
        y = document.getElementById("jumlah_elaun").value || 0;
        gaji_kasar = parseInt(x) + parseInt(y);
        if ( gaji_kasar > 0 && gaji_kasar <= 1000 ) {
            document.getElementById("caruman_majikan").value = 1000;
            document.getElementById("caruman_pekerja").value = 999;
        }
        if ( gaji_kasar > 1000 && gaji_kasar <= 2000 ) {
            document.getElementById("caruman_majikan").value = 2000;
            document.getElementById("caruman_pekerja").value = 1999;
        }
    }

</script>
@endsection
