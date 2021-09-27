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
        <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">RM</div>
            </div>
            <input type="text" class="form-control" id="jumlah_elaun1" name="jumlah_elaun1" onchange="calc_elaun()">
          </div>

    </div>
    <div class="col-md-auto">
        <label style="visibility: hidden">‎</label>
        <div class="form-group">
            <button type="button" class="btn btn-primary" onclick="createNewElaunElement();">Tambah Elaun</button>
        </div>
    </div>
</div>

<div id="newElaunElement"></div>

  <div class="form-group">
    <label>Jumlah Elaun</label>
    <input type="text" class="form-control" id="jumlah_elaun" name="jumlah_elaun" readonly >
  </div>

  <div class="form-row" id="potongan1">
    <div class="col-md-5">
    <label>Nama Potongan</label>
    <select class="custom-select" id="nama_potongan1" name="nama_potongan1">
        <option hidden selected>Choose...</option>
        <option value="1">ITKA</option>
        <option value="2">Elaun Memangku</option>
        <option value="3">Elaun COLA</option>
      </select>
    </div>
    <div class="col-md-5">
        <label>Jumlah Potongan</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">RM</div>
            </div>
            <input type="text" class="form-control" id="jumlah_potongan1" name="jumlah_potongan1" onchange="calc_potongan()">
          </div>
    </div>
    <div class="col-md-auto">
        <label style="visibility: hidden">‎</label>
        <div class="form-group">
            <button type="button" class="btn btn-primary" onclick="createNewPotonganElement();">Tambah Potongan</button>
        </div>
    </div>
</div>

<div id="newPotonganElement"></div>

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
    var count_potongan_element = 1;

    function createNewElaunElement() {
        count_elaun_element++;
        // First create a DIV element.
        var newDiv = document.createElement('div');
        var newDiv2 = document.createElement('div');
        var newDiv3 = document.createElement('div');
        newDiv.setAttribute('class', 'form-row mb-2');
        newDiv.setAttribute('id', "elaun" + count_elaun_element);
        newDiv2.setAttribute('class', 'col-md-5');
        newDiv3.setAttribute('class', 'col-md-auto');
        // Then add the content (a new input box) of the element.
        newDiv.innerHTML = "<div class='col-md-5'>" + "<label>Nama Elaun</label>" + "<select class='custom-select' id='nama_elaun" + count_elaun_element +"' name='nama_elaun" + count_elaun_element +"'><option hidden selected>Choose...</option><option value='1'>ITKA</option><option value='2'>Elaun Memangku</option><option value='3'>Elaun COLA</option></select>";
        newDiv2.innerHTML = "<label>Jumlah Elaun</label><div class='input-group mb-2'><div class='input-group-prepend'><div class='input-group-text'>RM</div></div><input type='text' class='form-control' id='jumlah_elaun" + count_elaun_element +"' name='jumlah_elaun" + count_elaun_element +"' onchange='calc_elaun()'></div>";
        newDiv3.innerHTML = "<label style='visibility: hidden'>‎</label>" + "<div class='form-group'>" + "<button type='button' id='button_elaun" + count_elaun_element +"' class='btn btn-primary' onclick='removeElaunElement(this.id);'>Padam Elaun</button>";
        newDiv.appendChild(newDiv2);
        newDiv.appendChild(newDiv3);
        // Finally put it where it is supposed to appear.
        document.getElementById("newElaunElement").appendChild(newDiv);
    }

    function createNewPotonganElement() {
        count_potongan_element++;
        // First create a DIV element.
        var newDiv = document.createElement('div');
        var newDiv2 = document.createElement('div');
        var newDiv3 = document.createElement('div');
        newDiv.setAttribute('class', 'form-row mb-2');
        newDiv.setAttribute('id', "potongan" + count_potongan_element);
        newDiv2.setAttribute('class', 'col-md-5');
        newDiv3.setAttribute('class', 'col-md-auto');
        // Then add the content (a new input box) of the element.
        newDiv.innerHTML = "<div class='col-md-5'>" + "<label>Nama Potongan</label>" + "<select class='custom-select' id='nama_potongan" + count_potongan_element +"' name='nama_potongan" + count_potongan_element +"'><option hidden selected>Choose...</option><option value='1'>ITKA</option><option value='2'>Elaun Memangku</option><option value='3'>Elaun COLA</option></select>";
        newDiv2.innerHTML = "<label>Jumlah Potongan</label><div class='input-group mb-2'><div class='input-group-prepend'><div class='input-group-text'>RM</div></div><input type='text' class='form-control' id='jumlah_potongan" + count_potongan_element +"' name='jumlah_potongan" + count_potongan_element +"' onchange='calc_potongan()'></div>";
        newDiv3.innerHTML = "<label style='visibility: hidden'>‎</label>" + "<div class='form-group'>" + "<button type='button' id='button_potongan" + count_potongan_element +"' class='btn btn-primary' onclick='removePotonganElement(this.id);'>Padam Potongan</button>";
        newDiv.appendChild(newDiv2);
        newDiv.appendChild(newDiv3);
        // Finally put it where it is supposed to appear.
        document.getElementById("newPotonganElement").appendChild(newDiv);
    }

    function changeElementNameId() {
        i = 2;
        elaun_found = 2;

        while (elaun_found < count_elaun_element + 1) {

                if(document.getElementById("elaun" + i)) {
                document.getElementById("elaun" + i).id = "elaun" + elaun_found;
                document.getElementById("nama_elaun" + i).name = "nama_elaun" + elaun_found;
                document.getElementById("jumlah_elaun" + i).name = "jumlah_elaun" + elaun_found;
                document.getElementById("nama_elaun" + i).id = "nama_elaun" + elaun_found;
                document.getElementById("jumlah_elaun" + i).id = "jumlah_elaun" + elaun_found;
                document.getElementById("button_elaun" + i).id = "button_elaun" + elaun_found;
                elaun_found++;
            }
            i++
        }

        j = 2;
        potongan_found = 2;

        while (potongan_found < count_potongan_element + 1) {

                if(document.getElementById("potongan" + j)) {
                document.getElementById("potongan" + j).id = "potongan" + potongan_found;
                document.getElementById("nama_potongan" + j).name = "nama_potongan" + potongan_found;
                document.getElementById("jumlah_potongan" + j).name = "jumlah_potongan" + potongan_found;
                document.getElementById("nama_potongan" + j).id = "nama_potongan" + potongan_found;
                document.getElementById("jumlah_potongan" + j).id = "jumlah_potongan" + potongan_found;
                document.getElementById("button_potongan" + j).id = "button_potongan" + potongan_found;
                potongan_found++;
            }
            j++
        }

    }

    function removeElaunElement(x) {
        count_elaun_element--;
        var element = document.getElementById(x.substring('button_'.length));
        //alert(x.substring('button_'.length));
        element.remove();
        changeElementNameId();
        calc_elaun();
        calc_potongan();
    }

    function removePotonganElement(x) {
        count_potongan_element--;
        var element = document.getElementById(x.substring('button_'.length));
        //alert(x.substring('button_'.length));
        element.remove();
        changeElementNameId();
        calc_elaun();
        calc_potongan();
    }

    function calc_elaun() {

        total_elaun = 0;

        for (let i = 0; i < count_elaun_element; i++) {
            if (parseInt(document.getElementById("jumlah_elaun" + (i + 1)).value) > 0) {
                total_elaun = total_elaun + parseInt(document.getElementById("jumlah_elaun" + (i + 1)).value);
            }
        }

        document.getElementById("jumlah_elaun").value = total_elaun;
        calc_gaji();
        calc_caruman();
    }

    function calc_potongan() {

        total_potongan = 0;

        for (let i = 0; i < count_potongan_element; i++) {
            if (parseInt(document.getElementById("jumlah_potongan" + (i + 1)).value) > 0) {
                total_potongan = total_potongan + parseInt(document.getElementById("jumlah_potongan" + (i + 1)).value);
            }
        }

        document.getElementById("jumlah_potongan").value = total_potongan;
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
