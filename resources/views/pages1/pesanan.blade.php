<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    Hallo pesanan anda : {{$material}}
    @if ($material == 'pasir urug')
    <br> Harga {{$material}} : Rp.50.000
    @elseif ($material == 'batako besar')
    <br> Harga {{$material}} : Rp.30.000
    @elseif ($material == 'bata merah')
    <br> Harga {{$material}} : Rp.40.000
    @elseif ($material == 'batu apung')
    <br> Harga {{$material}} : Rp.65.000
    @else
    <br>
    Mohon maaf material anda tidak ada
    @endif
    <br>
    <br>
    Hallo pesanan anda : {{$material1}}
    @if ($material1 == 'pasir urug')
    <br> Harga {{$material1}} : Rp.50.000
    @elseif ($material1 == 'batako besar')
    <br> Harga {{$material1}} : Rp.30.000
    @elseif ($material1 == 'bata merah')
    <br> Harga {{$material1}} : Rp.40.000
    @elseif ($material1 == 'batu apung')
    <br> Harga {{$material1}} : Rp.65.000
    @else
    <br>
    Mohon maaf material anda tidak ada
    @endif
    </center>
</body>
</html>