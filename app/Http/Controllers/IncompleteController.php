<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IncompleteController extends Controller
{
     public function incomplete()
    {
        $incompletedjob = JobRegister::select('*')
            ->where('job_status', '=', 'Incomplete')
            ->where('job_cancel', '=', '')
            ->orderBy('jobregisterlastmodify_at', 'DESC')
            ->limit(50)
            ->get();
               return response()->json($incompletedjob);
    }
}
