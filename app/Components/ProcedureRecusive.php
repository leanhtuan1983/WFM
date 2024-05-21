<?php
namespace App\Components;
use App\Models\Procedure;
class ProcedureRecusive 
{
    private $html;
    public function __construct() 
    {
        $this->html ="";
    }
    public function ProcedureRecusiveAdd($parentId=0, $subMark='') {
        $data=Procedure::where('parent_id',$parentId)->get();
        foreach ($data as $dataItem) 
        {
            $this->html .= '<option value="' . $dataItem->id .'">' . $subMark . $dataItem->name . '</option>';
            $this->ProcedureRecusiveAdd( $dataItem->id, $subMark . '--' );
        }
        return $this->html;
    }

    public function ProcedureRecusiveEdit($parentIdProcudureEdit, $parentId= 0, $subMark= '')
    {
        $data=Procedure::where('parent_id',$parentId)->get();
        foreach ($data as $dataItem) {
            if($parentIdProcudureEdit== $dataItem->id) {
                $this->html .= '<option selected value="' . $dataItem->id .'">' . $subMark . $dataItem->name . '</option>';
            }   else {
                $this->html .= '<option value="' . $dataItem->id .'">' . $subMark . $dataItem->name . '</option>';
            }

            $this->ProcedureRecusiveEdit($parentIdProcudureEdit, $dataItem->id, $subMark . '--' );     
        }
        
        return $this->html;
    }
}