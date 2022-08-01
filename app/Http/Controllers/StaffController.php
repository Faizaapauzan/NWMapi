<?php

namespace App\Http\Controllers;

use App\Filters\StaffFilter;
use Illuminate\Http\Request;
use App\Models\StaffRegister;
use App\Http\Controllers\Controller;
use App\Http\Resources\StaffResource;
use App\Http\Resources\StaffCollection;
use App\Http\Requests\StoreStaffRequest;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
            
        $filter = new StaffFilter();
        $queryItems = $filter->transform($request); //[['column','operator','value']]

        if (count($queryItems) == 0) {

    return new StaffCollection(StaffRegister::all());
        } else {
             return new StaffCollection(StaffRegister::where($queryItems)->all());
        }
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {
        return new StaffResource(StaffRegister::create($request->all()));
    }



    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(StaffRegister $staff_register)
    {
        return new StaffResource($staff_register);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
