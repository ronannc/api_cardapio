<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $data = $request->all();
        
        return Company::select( 'id', 'name', 'description' )->where( function ( $q ) use ( $data ) {
            if ( isset( $data[ 'search' ] ) and $data[ 'search' ] ) {
                $q->where( 'name', 'like', '%' . $data[ 'name' ] . '%' )
                    ->where( 'description', 'like', '%' . $data[ 'description' ] . '%' );
            }
        } )->simplePaginate();
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCompanyRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( StoreCompanyRequest $request )
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Company $company
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Company $company )
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Company $company
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( Company $company )
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCompanyRequest $request
     * @param \App\Models\Company                     $company
     *
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateCompanyRequest $request, Company $company )
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Company $company
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( Company $company )
    {
        //
    }
}
