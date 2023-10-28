@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">MatakuliahFriska {{ $matakuliahfriska->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/matakuliah/matakuliah-friska') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/matakuliah/matakuliah-friska/' . $matakuliahfriska->id . '/edit') }}" title="Edit MatakuliahFriska"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('matakuliah/matakuliahfriska' . '/' . $matakuliahfriska->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MatakuliahFriska" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $matakuliahfriska->id }}</td>
                                    </tr>
                                    <tr><th> KodeMataKuliah </th><td> {{ $matakuliahfriska->kodeMataKuliah }} </td></tr><tr><th> NamaMataKuliah </th><td> {{ $matakuliahfriska->namaMataKuliah }} </td></tr><tr><th> Sks </th><td> {{ $matakuliahfriska->sks }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
