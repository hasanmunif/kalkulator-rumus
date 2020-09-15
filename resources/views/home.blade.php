<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Menghitung Volume Tabung</h2>
        <form action="/kalkul" method="post">
        @csrf
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
                <h5>Phi</h5>
                <input class="form-control" placeholder="3.14" readonly>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-info mt-4" value="hitung">Hitung</button>
            </div>
        </div>
       
        </form>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                @if (session('info'))
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
               @endif
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>