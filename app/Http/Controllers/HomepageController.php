<?php

namespace App\Http\Controllers;

use App\Models\JobRegister;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
}
