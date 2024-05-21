<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Components\ProcedureRecusive;

class ProcedureController extends Controller
{
    private $proceduresRecusive;
    private $procedures;
    public function __construct(ProcedureRecusive $procedureRecusive, Procedure $procedure)
    {
        $this->proceduresRecusive = $procedureRecusive;
        $this->procedures = $procedure;
    }


    public function index()
    {
        $procedures = Procedure::where('parent_id',0)->get();
        return view('procedure.index',compact('procedures'));
    }
    public function create()
    {
        $optionSelect=$this->proceduresRecusive->ProcedureRecusiveAdd();
        return view("procedure.create",compact("optionSelect"));
    }
    public function store(Request $request)
    {
        $this->procedures->create([
            "name"=> $request->name,
            "description"=>$request->description,
            "parent_id"=> $request->parent_id,
        ]);
        return redirect()->route("procedure.index")->with("success","");
    }
}
