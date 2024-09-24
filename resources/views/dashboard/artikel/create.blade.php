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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Summernote</a></li>
                </ol>
            </div>
        </div>

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Buat Artikel Baru</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('artikel-dashboard.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Tambahkan CSRF protection -->
                            <div class="form-group row">
                                <label for="judulArtikel" class="col-lg-2 col-form-label">Judul Artikel</label>
                                <div class="col-lg-10">
                                    <input type="text" id="judulArtikel" name="judul" class="form-control" placeholder="Masukkan Judul Artikel" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="uploadGambar" class="col-lg-2 col-form-label">Upload Gambar</label>
                                <div class="col-lg-10">
                                    <input type="file" id="uploadGambar" name="gambar" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategoriArtikel" class="col-lg-2 col-form-label">Kategori</label>
                                <div class="col-lg-10">
                                    <select id="kategoriArtikel" name="kategori" class="form-control select2" placeholder="Pilih atau Tambah Kategori" required>
                                        <option value="tech">Teknologi</option>
                                        <option value="life">Gaya Hidup</option>
                                        <option value="health">Kesehatan</option>
                                        <option value="news">Berita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Isi Artikel</label>
                                <div class="col-lg-10">
                                    <textarea class="summernote" name="konten"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
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
            // Initialize Summernote
            $('.summernote').summernote({
                height: 300, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });

            // Inisialisasi select2
            $('#kategoriArtikel').select2({
                tags: true,
                placeholder: "Pilih atau Tambah Kategori",
                allowClear: true
            });
        });
    </script>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi Summernote
            $('.summernote').summernote({
                height: 300, // set editor height
                minHeight: null,
                maxHeight: null,
                focus: true
            });

            // Inisialisasi Select2
            $('#kategoriArtikel').select2({
                tags: true,
                placeholder: "Pilih atau Tambah Kategori",
                allowClear: true
            });
        });
    </script>
@endsection
