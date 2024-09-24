@extends('layouts.dashboard')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Detail Artikel</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $artikel->judul }}</h4>
                        <p><strong>Kategori:</strong> {{ $artikel->kategori }}</p>
                        @if($artikel->gambar)
                            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="Gambar Artikel" style="max-width: 300px; margin-bottom: 20px;">
                        @endif
                        <div>{!! $artikel->konten !!}</div> 
                        <a href="{{ route('artikel-dashboard.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
