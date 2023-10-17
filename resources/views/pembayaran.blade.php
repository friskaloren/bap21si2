<?php
use App\Models\pembayaran;
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
@section('title','Pembayaran')
@section('content')
<div class= "container">
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Pembayaran</p>     
    {{-- <table style= "margin-right:auto ; margin-left:auto"> --}}
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>Payment Method</th>
        </tr>

        <tr>
                @foreach ($pembayarans as $pembayaran)
                    <tr>
                        <td>
                            {{$pembayaran->id}}
                        </td>
                        <td>
                            {{$pembayaran->studentID}}
                        </td>
                        <td>
                            {{$pembayaran->amount}}
                        </td>
                        <td>
                            {{$pembayaran->paymentDate}}
                        </td>
                        <td>
                            {{$pembayaran->paymentMethod}}
                        </td>
                    </tr>
                @endforeach
        </tr>        
    </table>
</div>
@endsection