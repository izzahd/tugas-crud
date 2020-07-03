@extends('adminlte.master')

@section('content')
    <div class="mx-3 pt-3">
        <h2>Buat Pertanyaan</h2>
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
            <label for="judul">Judul :</label>
            <input type="text" class="form-control" id="judul" placeholder="Judul pertanyaan" name="judul">
            </div>
            <div class="form-group">
            <label for="isi">Isi :</label>
            <textarea class="form-control" id="isi" placeholder="Isi pertanyaan" name="isi" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection