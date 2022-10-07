<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UnassignedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function UnassignedJob()
    {
        $UnassignedJob = JobRegister::select('*')
            ->where('accessories_required', '=', '')
            ->where('job_status', '=', '')
            ->where('job_assign', '=', '')
            ->where('job_cancel', '=', '')
            ->orWhere(function ($query) {
                $query
                      ->where('accessories_required', '=', 'No')
                      ->where('job_status', '=', '')
                      ->where('job_assign', '=', '')
                      ->where('job_cancel', '=', '');     
            })
            ->orWhere(function ($query1) {
                $query1
                      ->where('job_assign', '=', '')
                      ->where('job_status', '=', 'Ready')
                      ->where('job_cancel', '=', '');     
            })
            ->orderBy('jobregisterlastmodify_at', 'DESC')
            ->limit(50)
            ->get();
                return response()->json([
                    'status' => true ,
                    'UnassignedJob' => $UnassignedJob,
                    'message' => 'Authentication Successful',
                ], 200); 
    }
}
