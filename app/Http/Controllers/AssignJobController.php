<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AssignJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todo()
    {
        $todoassignedjob = JobRegister::select('*')
            ->where('job_assign', '!=', 'Storekeeper')
            ->where('job_assign', '!=', '')
            ->where('job_status', '=', '')
            ->where('job_cancel', '=', '')
            ->where('accessories_required', '=', '')
            ->orWhere(function ($query) {
                $query
                    ->where('job_assign', '!=', 'Storekeeper')
                    ->where('job_assign', '!=', '')
                    ->where('job_status', '=', '')
                    ->where('job_cancel', '=', '')
                    ->where('accessories_required', '=', 'No');
            })
            ->orderBy('jobregisterlastmodify_at', 'DESC')
            ->limit(50)
            ->get();
                return response()->json([
                    'status' => true ,
                    'todoassignedjob' => $todoassignedjob,
                    'message' => 'Authentication Successful',
                ], 200); 
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doing()
    {
        $doingassignedjob = JobRegister::select('*')
            ->where('job_assign', '!=', 'Storekeeper')
            ->where('job_assign', '!=', '')
            ->where('job_status', '=', 'Doing')
            ->where('job_cancel', '=', '')
            ->where('accessories_required', '=', '')
            ->orWhere(function ($query) {
                $query
                      ->where('job_assign', '!=', 'Storekeeper')
                      ->where('job_assign', '!=', '')
                      ->where('job_status', '=', 'Doing')
                      ->where('job_cancel', '=', '')
                      ->where('accessories_required', '=', 'No');
            })
            ->orderBy('jobregisterlastmodify_at', 'DESC')
            ->limit(50)
            ->get();
                return response()->json([
                    'status' => true ,
                    'doingassignedjob' => $doingassignedjob,
                    'message' => 'Authentication Successful',
                ], 200); 
    }

}
