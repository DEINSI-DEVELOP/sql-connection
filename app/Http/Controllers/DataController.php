<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getData()
    {
        $data = Data::all();


        return response()->json($data);
    }
}
