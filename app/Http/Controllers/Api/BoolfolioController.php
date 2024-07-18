<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\boolfolio;
use Illuminate\Http\Request;


class BoolfolioController extends Controller
{
    public function index()
    {
        return response()->json([
            'succes' => true,
            'projects' =>
            boolfolio::orderByDesc('id')
                ->paginate(3)
        ]);
    }
}
