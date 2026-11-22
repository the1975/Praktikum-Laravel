<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga()
    {
        return view('segitiga');
    }

    public function hitungSegitiga(Request $request)
    {
        $data = $request->validate([
            'alas'   => 'required|numeric|min:0',
            'tinggi' => 'required|numeric|min:0',
        ]);

        $luas = 0.5 * $data['alas'] * $data['tinggi'];

        return view('segitiga', [
            'alas'   => $data['alas'],
            'tinggi' => $data['tinggi'],
            'luas'   => $luas,
        ]);
    }
}
