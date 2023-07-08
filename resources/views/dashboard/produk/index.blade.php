@extends('dashboard.layouts.main')
@section('container')
<div class="card shadow mb-4">
        <div class="card-header py-3">
    {{--             <a href="{{route('produk.create')}}" class="btn btn-primary float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a> --}}
            <a href="{{route('produk.create')}}"><button class="btn btn-primary m-0 my-4">Tambah Data</button></a>
            <h5 class="m-0 font-weight-bold text-primary">Produk</h5>
        </div>
        <div class="card-body mb-3">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            @foreach ($kriteria as $item)
                            <th>{{$item->nama}}</th>
                            @endforeach
                            <th width="10px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
    {{--                     @php --}}
                        $no=1;
    {{--                     @endphp --}}
                        @foreach ($produk as $key=>$item)
    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->C1}}</td>
                            <td>{{$item->C2}}</td>
                            <td>{{$item->C3}}</td>
                            <td>{{$item->C4}}</td>
                            <td>{{$item->C5}}</td>
                            <td>
                                <div class="ml-4">
                                    <form action="{{ route('produk.destroy', $item->id )}}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('produk.edit', $item->id ) }}"><button type="button" class="btn btn-warning">Edit</button></a> </div>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apa kamu yakin akan menghapus data?')">hapus</button></a> </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection