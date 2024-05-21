<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use App\Models\Processing;
use Illuminate\Http\Request;
use App\Models\Job_Procedure;
use App\Models\JobProcessing;
use App\Models\Status;
use Illuminate\Support\Facades\DB;

class JobProcedureController extends Controller
{   private $jobs;
    private $jobProcessing;
    private $procedure;

    public function __construct(Job_Procedure $job_Procedure, JobProcessing $jobProcessing, Procedure $procedure)
    {
        $this->jobs=$job_Procedure;
        $this->jobProcessing=$jobProcessing;
        $this->procedure=$procedure;
    }  
   
      public function index()
    {
    $jobs = Job_Procedure::all();
    return view('job.index',compact('jobs'));
    }

    public function create()
    {
        $procedures=Procedure::where('parent_id','0')->get();
        return view('job.create',compact('procedures'));
    }
   

    public function store(Request $request, JobProcessing $jobProcessing)
    {
         $this->jobs->create([
        "name"=> $request->name,
        "procedure_id"=> $request->procedure_id
        ]);
        
      $procedure_id = DB::table('job_procedures')
      ->limit(1)
      ->orderBy("procedure_id","desc")
      ->value('procedure_id');

      DB::table("procedures")
        ->select("id")
        ->where("parent_id","=",$procedure_id)
        ->get()
        ->each(function($row){
      DB::table("job_processings")
          ->insert([
            'job_id'=>DB::table("job_procedures")
            ->limit(1)
            ->orderBy("id","desc")
            ->value('id'),
            'procedure_id'=>$row->id,
            'status_id'=>1
            ]);
        });
      return redirect()->route('job.index')->with('success','');   
  }
  public function show($id)
  {
    $job = Job_Procedure::findOrFail($id);
    $job_id=Job_Procedure::where("id",$id)->get();   
    $procedure = JobProcessing::where("job_id",$id)->get();
    $datas = JobProcessing::select('status_id', DB::raw("COUNT('status_id') as count"))
    ->where('job_id',$id)
    ->groupBy('status_id')
    ->get();
    //dd($datas);
    return view('processing.show', compact('job','procedure','job_id','datas'));
  }

  public function showitem($id)
  {
    $processItem = JobProcessing::findOrFail($id);
    $processItemView = JobProcessing::where("id",$id)->get();
    $status = Status::all();
    return view('processing.showitem',compact('processItem','processItemView','status'));
  }

  public function updateprocess(Request $request, $id)
  {
    $this->jobProcessing->findOrFail($id)->update([
      "status_id"=>$request->status_id
    ]);
    return redirect()->route('job.index')->with('success','');
  }
}
