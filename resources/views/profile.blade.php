<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Profil</title>
</head>
<body>

    <h1>Profile &#128135;</h1>
    <hr>
    <table border="1">
    <tr>
            <th bgcolor="pink" rowspan= "1">Nama Lengkap = Meike Nadya Chandra
            
            

        @if($nama == "Meike")
            <tr>
                <td>Nama Saya :</td>
                <td>{{ $nama }} </td>
            </tr>
        @endif
    </table>

    <hr>
    <table border="0">
        <tr>
            <td>NAMA-NAMA MAHASISWA STMIK MARDIRA</td>
            </tr>
    <h1>Contoh Pengulangan
        <br> Nama= Meike Nadya Chandra
        <br> Nama= Rian Kurniawan
        <br> Nama= Insania Kamila
     </head>

     <h1>Contoh forelse </h1>
<table>
        @forelse([' = Hani Multi Rahayu'] as $data)
        <br> Nama= Meike Nadya Chandra
        <br> Nama= Rian Kurniawan
        <br> Nama= Insania Kamila
     </head>
    <tr>
        <td> Nama </td>
        <td> {{ $data }} </td>
    </tr>
    @empty
    data tidak ditemukan
    @endforelse

</table>

<h1>Contoh for<h1>
<table>
    @for($i=0;$i<5;$i++)
        {{$i}}<br>
    @endfor
</table>