<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Izin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IzinController extends Controller
{
    public function addIzin(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'tgl_mulai_izin' => 'required',
            'tgl_akhir_izin' => 'required',
            'permohonan' => 'required',
        ]);
        $colVal = [
            'id_user' => $request->id_user,
            'tgl_mulai_izin' => $request->tgl_mulai,
            'tgl_akhir_izin' => $request->tgl_akhir,
            'permohonan' => $request->permohonan
        ];
        DB::table('izin')->insert($colVal);
        return response()->json($colVal);
    }

    public function getIzinById($id)
    {
        $data = DB::table('izin')->where(['id_izin' => $id]);
        return response()->json($data);
    }
}
