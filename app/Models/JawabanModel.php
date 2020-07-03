<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel {

    public static function get_all($id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->get();
        return $jawaban;
    }

    public static function find_by_id($id){
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->get();
        return $jawaban;
    }

    public static function save($data, $pertanyaan_id){
        $data += ["pertanyaan_id" => $pertanyaan_id];
        $jawaban_baru = DB::table('jawaban')->insert($data);
        return $jawaban_baru;
    }
}

?>