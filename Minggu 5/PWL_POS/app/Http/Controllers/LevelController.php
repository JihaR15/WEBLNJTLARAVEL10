<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(){
        // DB::insert('INSERT INTO m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS','Pelanggan', now()]);
        // return 'insert data baru berhasil';

        // $row = DB::update('UPDATE m_level set level_nama = ? where level_kode = ?',['Customer','CUS']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row.'baris';

        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: '. $row . ' baris';

        $data = DB::select('SELECT * from m_level');
        return view('level', ['data' => $data]);
    }
}
