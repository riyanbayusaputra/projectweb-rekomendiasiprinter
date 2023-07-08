@extends('dashboard.layouts.main')
@section('container')

<div class="card shadow mb-4">
        <div class="card-header py-3">
    {{--             <a href="{{route('kriteria.create')}}" class="btn btn-primary float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a> --}}
    <a href="{{route('kriteria.create')}}"><button class="btn btn-primary m-0 my-4">Tambah Data</button></a>
            <h5 class="m-0 font-weight-bold text-primary">Kriteria</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Bobot</th>
                            <th>Jenis</th>
                            <th width="50px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
     {{--                   @php  --}}
                        $no=1;
    {{--                   @endphp   --}}
                        @foreach ($kriteria as $key=>$item)
    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->bobot}}</td>
                            <td>{{$item->type}}</td>
                            <td>
                                <div class="container">
    {{--                                 <a href=" route('kriteria.edit', $item->id )" class="btn btn danger"><i class="fas fa-fw fa-edit"></i></a> --}}
                                    <a href="{{ route('kriteria.edit', $item->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apa kamu yakin akan menghapus data?')">hapus</button></a> </div>
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
