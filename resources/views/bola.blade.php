@extends('home')

@section('content')
<h2>menghitung volume bola</h2>
<div class="column">
    <div class="col-md-3">
    <h5>Masukkan jari-jari :
        <input type="number" name="first" class="form-control" placeholder="masukkan luas alas">
    </h5>
    </div>
    <div class="col-md-3">
        <h5>Masukkan jari-jari :
            <input type="number" name="second" class="form-control" placeholder="masukkan luas alas">
        </h5>
    </div>
    <div class="col-md-3">
    <h5>Masukkan Tinggi :
        <input type="number" name="third" class="form-control" placeholder="masukkan tinggi">
    </h5>
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-info mt-4" value="hitung">Hitung</button>
    </div>
</div>
@endsection