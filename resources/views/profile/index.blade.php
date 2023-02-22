@extends('layouts.app')
@section('title')
Halaman Profile
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/profile/create" class="btn btn-success">Tambahkan Profile</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Profile</th>
                                <th>Nama</th>
                                <th>NIK</th>
                            </thead>
                            <tbody>
                                @foreach($profile as $row)
                                <tr>
                                    <td>
                                        <img src="{{asset('/storage/images/profile/'.$row->photo)}}" class="img-thumbnail" width="100px">
                                    </td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->nik}}</td>
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