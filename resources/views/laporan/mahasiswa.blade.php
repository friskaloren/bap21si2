@extends('layouts.app2')
 
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Mahasiswa</div>
                    <div class="card-body">
                        <a href="{{ url('/mahasiswa/mahasiswa2/create') }}" class="btn btn-success btn-sm" title="Add New Mahasiswa2">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/mahasiswa/mahasiswa2') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>StudentID</th><th>Nama</th><th>Jurusan</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->studentID }}</td><td>{{ $item->nama }}</td><td>{{ $item->jurusan }}</td>
                                        <td>
                                            <a href="{{ url('/mahasiswa/mahasiswa2/' . $item->id) }}" title="View Mahasiswa2"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/mahasiswa/mahasiswa2/' . $item->id . '/edit') }}" title="Edit Mahasiswa2"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            
                                            <form method="POST" action="{{ url('/mahasiswa/mahasiswa2' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Mahasiswa2" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection