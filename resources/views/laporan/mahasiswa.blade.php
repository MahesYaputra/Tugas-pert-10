@extends('layouts.app')

@section('title','KHS')
@section('content')

<html>
    
    <head>
        <title>Laporan Mahasiswa</title>
    </head>
    <body>
        <h3>Laporan Mahasiswa</h3>
        <table>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{$mhs->StudentID}}</td>
                <td>{{$mhs->Nama}}</td>
                <td>{{$mhs->Jurusan}}</td>
                <td>{{$mhs->Tahun_masuk}}</td>
            </tr>
            
            @endforeach
        </table>
    </body>
</html>
@endsection














