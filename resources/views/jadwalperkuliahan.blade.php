<?php
use App\Models\jadwalperkuliahan;
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
@section('title','Jadwal Perkuliahan')
@section('content')
<div class= "container">
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Jadwal Perkuliahan</p>     
    {{-- <table style= "margin-right:auto ; margin-left:auto"> --}}
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Kode Mata Kuliah</th>
            <th>Kode Term</th>
            <th>Kode Dosen</th>
            <th>Day</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Ruangan</th>
        </tr>

        <tr>
                @foreach ($jadwalperkuliahans as $jadwalperkuliahan)
                    <tr>
                        <td>
                            {{$jadwalperkuliahan->id}}
                        </td>
                        <td>
                            {{$jadwalperkuliahan->kodeMataKuliah}}
                        </td>
                        <td>
                            {{$jadwalperkuliahan->kodeTerm}}
                        </td>
                        <td>
                            {{$jadwalperkuliahan->kodeDosen}}
                        </td>
                        <td>
                            {{$jadwalperkuliahan->day}}
                        </td>
                        <td>
                            {{$jadwalperkuliahan->jamMulai}}
                        </td>
                        <td>
                            {{$jadwalperkuliahan->jamSelesai}}
                        </td>
                        <td>
                            {{$jadwalperkuliahan->ruangan}}
                        </td>
                    </tr>
                @endforeach
        </tr>        
    </table>
</div>
@endsection