@extends('adminlte.master')

@section('content')
    <div class="mx-3 py-3">
        <h2>Pertanyaan</h2>
        @foreach ($pertanyaan as $key => $item)
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>{{ $item->judul }}</b></h3>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $item->isi }}</p>
                    <p class="card-text" style="text-align: right"><i>Tanggal dibuat : {{ $item->tanggal_dibuat }} | Tanggal diperbaharui : {{ $item->tanggal_diperbaharui }}</i> </p>
                </div>
                <div class="card-footer clearfix">
                    <form action="/pertanyaan/{{ $item->id }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger float-right ml-3">Hapus</button>
                    </form>
                    <a href="/pertanyaan/{{ $item->id }}/edit" class="btn btn-sm btn-default float-right ml-3" role="button">Ubah</a>
                    <a href="/pertanyaan/{{ $item->id }}" class="btn btn-sm btn-primary float-right ml-3" role="button">Lihat</a>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection