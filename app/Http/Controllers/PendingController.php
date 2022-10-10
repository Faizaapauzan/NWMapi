<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PendingController extends Controller
{
     public function pending()
    {
        $pendingjob = JobRegister::select('*')
            ->where('job_assign', '!=', 'Storekeeper')
            ->where('job_status', '=', 'Pending')
            ->where('job_cancel', '=', '')
            ->orderBy('jobregisterlastmodify_at', 'DESC')
            ->limit(50)
            ->get();
            return response()->json($pendingjob);
    }
}
