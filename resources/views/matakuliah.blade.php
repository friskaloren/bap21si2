<?php
use App\Models\matakuliah;
?>

@extends('layouts.app')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
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
    </style>
@section('title','Mata kuliah')
@section('content')
<div class= "container">
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">MATA KULIAH</p>     
    <table style= "margin-right:auto ; margin-left:auto">
        <tr>
            <th>ID</th>
            <th>Kode Mata Kuliah</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
        </tr>

        <tr>
        <?php
            $matakuliahs = matakuliah::all();
        ?>
            @foreach ($matakuliahs as $matakuliah)
                <tr>
                    <td>
                        {{$matakuliah->id}}
                    </td>
                    <td>
                        {{$matakuliah->kodeMataKuliah}}
                    </td>
                    <td>
                        {{$matakuliah->namaMataKuliah}}
                    </td>
                    <td>
                        {{$matakuliah->sks}}
                    </td>
                </tr>
            @endforeach
    </table>
</div>
@endsection
