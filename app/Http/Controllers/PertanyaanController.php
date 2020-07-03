<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){

        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::save($data);
        if($pertanyaan){
            return redirect('/pertanyaan');
        }
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = JawabanModel::find_by_id($id);
        return view('pertanyaan.show', compact('pertanyaan', 'jawaban'));
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(Request $request, $id){

        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        $pertanyaan = PertanyaanModel::update($data, $id);
        if($pertanyaan){
            return redirect('/pertanyaan');
        }
    }

    public function destroy($id){
        $pertanyaan = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
