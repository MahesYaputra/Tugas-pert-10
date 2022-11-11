<!--
//Nama : MahesYaputra
//StudentID : 03081200047 
-->
<?php
use App\Models\mahasiswa;
use App\Models\mahasiswaMAHESYAPUTRA;
?>
@extends('layouts.app')

@section('title','KHS')

@section('content')
<h1>KHS</h1>

        <p>Nama : Mahes Yaputra</p>
        <p>Student ID : 03081200047</p>
        <p>Term : 1212</p>
        <p>IP = 4.00</p>
        <style>
            table tr td{
                padding: 10px;
                border : 1px solid black;
            }
        </style>
        <table style="padding: 10px;">
            <tr>
                <td>No</td>
                <td>Kode Mata Kuliah</td>
                <td>Nama Mata Kuliah</td>
                <td>SKS</td>
                <td>Nilai Huruf</td>
                
            </tr>
            <?php
            $mahasiswas = mahasiswaMAHESYAPUTRA::get();
            $no=1;
            foreach ($mahasiswas as $mahasiswaMAHESYAPUTRA) {
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$mahasiswaMAHESYAPUTRA->kode_matakuliah."</td>";
                echo "<td>".$mahasiswaMAHESYAPUTRA->nama_matakuliah."</td>";
                echo "<td>".$mahasiswaMAHESYAPUTRA->sks."</td>";
                echo "<td>".$mahasiswaMAHESYAPUTRA->NilaiHuruf ."</td>";
                echo "</tr>";
                $no+=1;
            }
            ?>
        </table>
@endsection


</html>