@extends('adminlte.master')

@section('content')
    <div class="mx-3 pt-3">
        <h2>Pertanyaan - {{ $pertanyaan->judul }}</h2>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>{{ $pertanyaan->judul }}</b></h3>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $pertanyaan->isi }}</p>
                <p class="card-text" style="text-align: right"><i>Tanggal dibuat : {{ $pertanyaan->tanggal_dibuat }} | Tanggal diperbaharui : {{ $pertanyaan->tanggal_diperbaharui }}</i> </p>
            </div>
        </div>
        <h2>Jawaban</h2>
        @foreach ($jawaban as $key => $item)
        <div class="card">
            <div class="card-body">
                <p class="card-text">{{ $item->isi }}</p>
                <p class="card-text" style="text-align: right"><i>Tanggal dibuat : {{ $item->tanggal_dibuat }} | Tanggal diperbaharui : {{ $item->tanggal_diperbaharui }}</i> </p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mx-3 pb-3">
        <form action="/jawaban/{{ $pertanyaan->id }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="isi"><h2>Jawabanmu :</h2></label>
            <textarea class="form-control" id="isi" placeholder="Isi jawaban" name="isi" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection