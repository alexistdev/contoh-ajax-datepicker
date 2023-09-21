<?php

namespace App\Http\Controllers;

use App\Models\Contoh;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {
        return view('data', array());
    }

    public function getData($tanggal)
    {
        $data = Contoh::where('tanggal', $tanggal)->get();
        return response()->json([
            'status' => 'success',
            'data' => $data,
        ], 200);
    }
}
