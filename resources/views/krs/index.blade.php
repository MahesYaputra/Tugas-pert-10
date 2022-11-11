<?php
use App\Models\mahasiswa;
use App\Models\vmhs_term_test4;
?>
@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')
<h1>Index Mahasiswa</h1>
        <style>
            table tr td{
                padding: 10px;
                border : 1px solid black;
            }
        </style>
        <table style="padding: 10px;">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Student ID </td>
                <td>Kode Mata Kuliah</td>
                <td>Nama Mata Kuliah</td>
                <td>SKS</td>
                <td>Total SKS</td>
                
            </tr>
            <?php
            $mahasiswas = vmhs_term_test4::get();
            $no=1;
            foreach ($mahasiswas as $vmhs_term_test4) {
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$vmhs_term_test4->Nama."</td>";
                echo "<td>".$vmhs_term_test4->StudentID."</td>";
                echo "<td>".$vmhs_term_test4->kode_matakuliah."</td>";
                echo "<td>".$vmhs_term_test4->nama_matakuliah."</td>";
                echo "<td>".$vmhs_term_test4->sks."</td>";
                echo "<td>".$vmhs_term_test4->totalsks."</td>";
                echo "</tr>";
                $no+=1;
            }
            ?>
        </table>
@endsection


</html>