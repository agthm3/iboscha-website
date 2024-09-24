@extends('layouts.dashboard')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Artikel</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('artikel-dashboard.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="judulArtikel" class="col-lg-2 col-form-label">Judul Artikel</label>
                                <div class="col-lg-10">
                                    <input type="text" id="judulArtikel" name="judul" class="form-control" value="{{ $artikel->judul }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="uploadGambar" class="col-lg-2 col-form-label">Upload Gambar</label>
                                <div class="col-lg-10">
                                    <input type="file" id="uploadGambar" name="gambar" class="form-control">
                                    @if($artikel->gambar)
                                        <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="Gambar Artikel" style="max-width: 200px; margin-top: 10px;">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategoriArtikel" class="col-lg-2 col-form-label">Kategori</label>
                                <div class="col-lg-10">
                                    <select id="kategoriArtikel" name="kategori" class="form-control select2" required>
                                        <option value="tech" {{ $artikel->kategori == 'tech' ? 'selected' : '' }}>Teknologi</option>
                                        <option value="life" {{ $artikel->kategori == 'life' ? 'selected' : '' }}>Gaya Hidup</option>
                                        <option value="health" {{ $artikel->kategori == 'health' ? 'selected' : '' }}>Kesehatan</option>
                                        <option value="news" {{ $artikel->kategori == 'news' ? 'selected' : '' }}>Berita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Isi Artikel</label>
                                <div class="col-lg-10">
                                    <textarea class="summernote" name="konten" required>{{ $artikel->konten }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn btn-primary">Update Artikel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300, // set editor height
                minHeight: null,
                maxHeight: null,
                focus: true
            });

            $('#kategoriArtikel').select2({
                tags: true,
                placeholder: "Pilih atau Tambah Kategori",
                allowClear: true
            });
        });
    </script>
@endsection
