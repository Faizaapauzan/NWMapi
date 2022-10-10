<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CompleteController extends Controller
{
    public function completed()
    {
        $completedjob = JobRegister::select('*')
            ->where('job_status', '=', 'Completed')
            ->where('job_cancel', '=', '')
            ->orderBy('jobregisterlastmodify_at', 'DESC')
            ->limit(50)
            ->get();
return response()->json($completedjob);
    }
}
