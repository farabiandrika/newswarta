@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>{{ $title }}</h2>
    </div>
</div>
<ol class="breadcrumb">
    <li>
        <a href="{{ url('/admin') }}">
            <i class="material-icons">home</i> Home
        </a>
    </li>
    <li>
        <a href="{{ url('/admin/pos') }}">
            <i class="material-icons">push_pin</i> Pos
        </a>
    </li>
    <li class="active">
        <i class="material-icons">edit</i> {{  $title }}
    </li>
</ol>

    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ url('admin/pos/add') }}">
                    {{ csrf_field() }}
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="judul" value="{{ old('judul') }}"/>
                            <label class="form-label">Judul Berita</label>
                        </div>
                    </div><br/>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <div id="summernote"></div>
                            <script>
                            $('#summernote').summernote({
                                placeholder: 'Isi berita',
                                tabsize: 2,
                                height: 400,
                                toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                                ]
                            });
                            </script>
                        </div>
                    </div>
            </div>
        </div>
    </div>



    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="text-center">Kategori & Tag</h5><hr/><br/>
                            <div class="form-group">
                                <div class="form-line">
                                    <p>Kategori</p>
                                    <select name="kategori_id_kategori">
                                        <option value="{{ old('kategori_id_kategori') }}">Pilih</option>
                                        @foreach ($kategori as $kt)
                                        <option value="{{ $kt->id_kategori }}">{{ $kt->nama }}</option>
                                        @endforeach
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <p>Tag</p>
                                    <select name="tag_id_tag">
                                        <option value="{{ old('tag_id_tag') }}">Pilih</option>
                                        @foreach ($tag as $tg)
                                        <option value="{{ $tg->id_tag }}">{{ $tg->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="text-center">Banner & visibility</h5><hr/><br/>
                            <div class="form-group">
                                <div class="form-line">
                                    <p>Gambar Utama</p>
                                    <input type="file" name="gambar" class="form-control" placeholder="Gambar" value="{{ old('gambar') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <p>Tanggal Terbit</p>
                                    <input type="datetime-local" name="tanggal" class="form-control" placeholder="Nama Kategori" value="{{ old('tanggal') }}">
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="switch">
                                    <label>Draft<input type="checkbox" unchecked><span class="lever"></span>Publish</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection
