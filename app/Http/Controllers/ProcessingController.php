<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use App\Models\Processing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProcessingController extends Controller
{
    public function index()
    {
        $processings = Processing::all();
        return view('processing.index',compact('processings'));
    }
    public function show()
    {
        
    }
}
