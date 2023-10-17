<?php
use App\Models\programstudi;
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
@section('title','Program Studi')
@section('content')
<div class= "container">
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Program Studi</p>     
    {{-- <table style= "margin-right:auto ; margin-left:auto"> --}}
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Nama Program Studi</th>
            <th>Deskripsi</th>
        </tr>

        <tr>
                @foreach ($programstudis as $programstudi)
                    <tr>
                        <td>
                            {{$programstudi->id}}
                        </td>
                        <td>
                            {{$programstudi->nama}}
                        </td>
                        <td>
                            {{$programstudi->deskripsi}}
                        </td>
                    </tr>
                @endforeach
        </tr>        
    </table>
</div>
@endsection