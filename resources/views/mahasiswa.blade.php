<?php
use App\Models\mahasiswa;
?>

@extends('layouts.app2')
{{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    {{-- <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style> --}}
@section('title','Mahasiswa')
@section('content')
<div class= "container">
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">DATA MAHASISWA</p>     
    {{-- <table style= "margin-right:auto ; margin-left:auto"> --}}
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>StudentID</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
        </tr>

        <tr>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>
                            {{$mahasiswa->id}}
                        </td>
                        <td>
                            {{$mahasiswa->studentID}}
                        </td>
                        <td>
                            {{$mahasiswa->nama}}
                        </td>
                        <td>
                            {{$mahasiswa->jurusan}}
                        </td>
                        <td>
                            {{$mahasiswa->tahunMasuk}}
                        </td>
                    </tr>
                @endforeach
        </tr>        
    </table>
</div>
@endsection