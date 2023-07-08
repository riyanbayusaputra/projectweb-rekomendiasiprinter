@extends('dashboard.layouts.main')

@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['kriterias'] }}</th>
                    <th>{{ $widget2['kriterias'] }}</th>
                    <th>{{ $widget3['kriterias'] }}</th>
                    <th>{{ $widget4['kriterias'] }}</th>
                    <th>{{ $widget5['kriterias'] }}</th>
                    <th>{{ $widget1['kriterias'] + $widget2['kriterias']+$widget3['kriterias']+$widget4['kriterias']+$widget5['kriterias']}}
                </tr>
            </thead>

        </table>

    </div>
</div>



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Normalisasi</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tbody>
                    <tr>
                           {{-- @if ($item->kriteria->atribut = "benefit" != "benefit" ) 

                             <td>{{$item->nama }}</td>
                            <td>{{$C1min['produks'] }}</td>
                            <td>{{$C2min['produks'] }}</td>
                            <td>{{$C3min['produks'] }}</td>
                            <td>{{$C4min['produks'] }}</td>
                            <td>{{$C5min['produks'] }}</td>
                        @else   --}}
                            <td>{{$item->nama }}</td>

                             <td>{{$C1min['produks'] / $item->C1}}</td>
                            <td>{{$item->C2 / $C2max['produks'] }}</td>
                            <td>{{$item->C3 / $C3max['produks']}}</td>
                            <td>{{$item->C4 / $C4max['produks']}}</td>
                            <td>{{$item->C5 / $C5max['produks']}}</td>
                        {{-- @endif   --}}
                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Produk</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Printer terbaik</th>
                    {{-- <th>WSM</th>
                     <th>WPM</th>
                    <th>Qi</th> --}}
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                <tbody>
                    <tr>
                        <td>{{$item->nama}}</td>
                            {{-- WSM --}}
                            <td>
                                {{(($C1min['produks'] / $item->C1)*$widget1['kriterias'])+
                                (($item->C2 / $C2max['produks'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['produks'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['produks'])*$widget4['kriterias'])+
                                (($item->C5 / $C5max['produks'])*$widget5['kriterias'])}}
                            </td>
                            {{-- WPM
                            <td>
                                {{(($item->C1 / $C1min['produks'])**$widget1['kriterias'])*
                                (($item->C2 / $C2max['produks'])**$widget2['kriterias'])*
                                (($item->C3 / $C3max['produks'])**$widget3['kriterias'])*
                                (($item->C4 / $C4max['produks'])**$widget4['kriterias'])*
                                (($item->C5 / $C5max['produks'])**$widget5['kriterias'])}}
                            </td>
                            {{-- Qi --}}
                            {{-- <td>
                                {{
                                (((($item->C1 / $C1min['produks'])*$widget1['kriterias'])+
                                (($item->C2 / $C2max['produks'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['produks'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['produks'])*$widget4['kriterias'])+
                                (($item->C5 / $C5max['produks'])*$widget5['kriterias']))*0.5)
                                    +
                                ((($item->C1 / $C1min['produks'])**$widget1['kriterias'])*
                                (($item->C2 / $C2max['produks'])**$widget2['kriterias'])*
                                (($item->C3 / $C3max['produks'])**$widget3['kriterias'])*
                                (($item->C4 / $C4max['produks'])**$widget4['kriterias'])*
                                (($item->C5 / $C5max['produks'])**$widget5['kriterias'])*0.5)
                                }}
                            </td> --}} 
                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
        {{-- <a class="btn btn-primary float-right" href="{{route('normalisasi.create')}}">Save Data</a> --}}
    </div>
</div>

@endsection