<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        @vite('resources/sass/app.scss')

        <style>
            body::-webkit-scrollbar{
                display: none;
            }
        </style>
    </head>
    <body>
        {{-- Template untuk parrent --}}
        @include("nav")

        <title>Tambah Barang</title>
        <div class="container my-4" style="width: 40%">
            <div class="card">
                <div class="card-header bg-dark text-white text-center p-2">
                    <h4>{{ $pageTitle }}</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('list-barang.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" name="kodeBarang" class="form-control">
                            @error('kodeBarang')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="namaBarang" class="form-control">
                            @error('namaBarang')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Harga Barang</label>
                            <input type="number" name="hargaBarang" class="form-control">
                            @error('hargaBarang')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Barang</label>
                            <input type="text" name="description" class="form-control"></input>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Satuan Barang</label>
                            <select name="satuan" id="satuan" class="form-select">
                                <option value="">-- Pilih Satuan --</option>
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->kode_satuan }}" {{ old('satuan') == $satuan->kode_satuan ? 'selected' : '' }}>
                                        {{ $satuan->kode_satuan . ' - ' . $satuan->nama_satuan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('satuan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('list-barang.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi bi-box-arrow-down"></i>
                                    Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
