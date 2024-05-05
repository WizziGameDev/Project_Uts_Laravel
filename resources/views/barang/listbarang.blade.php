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

        <div class="container-md my-4">
            <div class="d-flex justify-content-center">
                <h2 >MANAGEMENT ITEM</h2>
            </div>

            <div class="d-flex justify-content-end my-2">
                <a href="{{route('list-barang.create')}}" class="btn btn-success">ADD ITEM</a>
            </div>

            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Satuan</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->harga_barang }}</td>
                                <td>{{ $barang->description_barang }}</td>
                                <td>{{ $barang->satuan->nama_satuan }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{--{{ route('barangs.show', ['barang' => $barang->id]) }}--}}"
                                           class="btn btn-outline-info btn-sm me-2">Detail</a>
                                        <a href="{{--{{ route('barangs.edit', ['barang' => $barang->id]) }}--}}"
                                           class="btn btn-outline-success btn-sm me-2">Edit</a>
                                        <form action="{{ route('list-barang.destroy', ['barang' => $barang]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm me-2">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
