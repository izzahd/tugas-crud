<?php

namespace App\Http\Controllers;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($pertanyaan_id){
        $jawaban = JawabanModel::get_all($pertanyaan_id);
        return view('jawaban.index', compact('jawaban', 'pertanyaan_id'));
    }

    public function store(Request $request, $pertanyaan_id){
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = JawabanModel::save($data, $pertanyaan_id);
        if($jawaban){
            $pertanyaan = PertanyaanModel::find_by_id($pertanyaan_id);
            $jawaban = JawabanModel::find_by_id($pertanyaan_id);
            return view('pertanyaan.show', compact('pertanyaan', 'jawaban'));
        }
    }
}
