<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use DB;

class RoleController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //    $this->middleware('permission:create-role|edit-role|delete-role', ['only' => ['index','show']]);
    //    $this->middleware('permission:create-role', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-role', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-role', ['only' => ['destroy']]);
    //}

    public function index()
    {
        $roles = Role::all();
        return view('setting.role.index', compact('roles')); 
    }
}
