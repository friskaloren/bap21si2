@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Matakuliahfriska</div>
                    <div class="card-body">
                        <a href="{{ url('/matakuliah/matakuliah-friska/create') }}" class="btn btn-success btn-sm" title="Add New MatakuliahFriska">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/matakuliah/matakuliah-friska') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>KodeMataKuliah</th><th>NamaMataKuliah</th><th>Sks</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($matakuliahfriska as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kodeMataKuliah }}</td><td>{{ $item->namaMataKuliah }}</td><td>{{ $item->sks }}</td>
                                        <td>
                                            <a href="{{ url('/matakuliah/matakuliah-friska/' . $item->id) }}" title="View MatakuliahFriska"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/matakuliah/matakuliah-friska/' . $item->id . '/edit') }}" title="Edit MatakuliahFriska"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/matakuliah/matakuliah-friska' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete MatakuliahFriska" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $matakuliahfriska->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
