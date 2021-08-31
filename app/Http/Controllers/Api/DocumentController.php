<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    public function addDocument(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|jpg|pdf|png',
        ]);
        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . ' . ' . $extension;

        $colVal = [
            'id_izin' => $request->id_izin,
            'file' => $filenameSimpan
        ];
        DB::table('document')->insert($colVal);
        return response()->json($colVal);
    }
}
