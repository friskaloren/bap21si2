<?php
use App\Models\khs;
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
@section('title','KHS')
@section('content')
<div class= "container">
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">DATA KHS</p>     
    {{-- <table style= "margin-right:auto ; margin-left:auto"> --}}
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Kode KHS</th>
            <th>Keterangan</th>
            <th>Keterangan Singkat</th>
        </tr>

        <tr>
                @foreach ($khss as $khs)
                    <tr>
                        <td>
                            {{$khs->id}}
                        </td>
                        <td>
                            {{$khs->kodeKhs}}
                        </td>
                        <td>
                            {{$khs->keterangan}}
                        </td>
                        <td>
                            {{$khs->keteranganSingkat}}
                        </td>
                    </tr>
                @endforeach
        </tr>        
    </table>
</div>
@endsection