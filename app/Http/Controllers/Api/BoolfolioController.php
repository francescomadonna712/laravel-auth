<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\boolfolio;
use Illuminate\Http\Request;


class BoolfolioController extends Controller
{
    public function index()
    {

        //opzione1
        //se passi una collezzione di dati o un oggetto verranno convertiti in json
        // return boolfolio::all();

        //opzione2
        //(return/response/json)
        return response()->json([

            'success' => true,
            'boolfolio' => boolfolio::with(['technologies'])->orderByDesc('id')->paginate(),
        ]);
    }
}
