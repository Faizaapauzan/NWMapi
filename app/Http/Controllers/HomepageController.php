<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $job=JobRegister::all();
        return response()->json($job);
    }

    public function todo()
    {
      $todosatus = JobRegister::select('*')
      ->where('job_assign', '=', auth()->user()->username)
      ->where('job_status', '=', '')
      ->where('job_cancel', '=', '')
        ->orWhere(function ($query) {
          $query
            ->where('job_assign', '=', auth()->user()->username)
            ->where('job_status', '=', 'Ready')
            ->where('job_cancel', '=', '');
        })
      ->orderBy('jobregisterlastmodify_at', 'DESC')
      ->limit(50)
      ->get();
      return response()->json($todosatus);
    }

    public function doing()
    {
        $doingstatus=JobRegister::select('*')
            ->where('job_assign', '=', auth()->user()->username)
            ->where('job_status', '=', 'Doing')
            ->where('job_cancel', '=', '')
            ->orderBy('jobregisterlastmodify_at', 'DESC')
            ->limit(50)
            ->get();
            return response()->json($doingstatus);
    }
    
    public function pending()
    {
      $pendingstatus=JobRegister::select('*')
        ->where('job_assign', '=', auth()->user()->username)
        ->where('job_status', '=', 'Pending')
        ->orderBy('jobregisterlastmodify_at', 'DESC')
        ->limit(50)
        ->get();
        return response()->json($pendingstatus);
    }

    public function completed()
    {
      $completestatus=JobRegister::select('*')
        ->where('job_assign', '=', auth()->user()->username)
        ->where('job_status', '=', 'Completed')
        ->orderBy('jobregisterlastmodify_at', 'DESC')
        ->limit(50)
        ->get();
        return response()->json($completestatus);
    }

    }




