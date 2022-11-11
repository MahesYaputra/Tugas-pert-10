@extends('layouts.app')

@section('title','Dosen')

@section('content')
    <div class="container">
        <div class="row">   

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">dosen {{ $dosen->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/dosen') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/dosen/' . $dosen->id . '/edit') }}" title="Edit dosen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/dosen' . '/' . $dosen->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete dosen" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dosen->id }}</td>
                                    </tr>
                                    <tr><th> IdDosen </th><td> {{ $dosen->idDosen }} </td></tr><tr><th> Nama </th><td> {{ $dosen->Nama }} </td></tr><tr><th> Tahun Masuk </th><td> {{ $dosen->Tahun_masuk }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
