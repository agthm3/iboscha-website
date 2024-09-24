@extends('layouts.dashboard')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-9 card-header">
                            <h4 class="card-title">Daftar Artikel</h4>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-end">
                            <button class="btn btn-primary mt-2">
                                <a href="{{ route('artikel-dashboard.create') }}">+ Tambah Artikel </a>
                            </button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal Post</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($artikels as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                               {{$item->created_at}}
                                            </td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->kategori }}
                                            </td>
                                            <td>
                                                <span>
                                                    <a href="{{ route('artikel-dashboard.show', $item->id) }}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Lihat">
                                                        <i class="fa fa-eye color-muted"></i>
                                                    </a>
                                                    <a href="{{ route('artikel-dashboard.edit', $item->id) }}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-pencil color-muted"></i>
                                                    </a>
                                                    <form action="{{ route('artikel-dashboard.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                            <i class="fa fa-close color-danger"></i>
                                                        </button>
                                                    </form>
                                                </span>
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
</div>
@endsection