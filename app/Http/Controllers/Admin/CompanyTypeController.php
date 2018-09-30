<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Resources\Admin\CompanyTypeResource;
use App\Models\CompanyType;

class CompanyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_types = CompanyType::all();

        return CompanyTypeResource::collection($company_types);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company_type = CompanyType::findOrFail($id);

        //return collection of a company type as resource
        return new CompanyTypeResource($company_type);
    }

   
}
