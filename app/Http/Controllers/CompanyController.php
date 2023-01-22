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
        
        return Company::where( function ( $q ) use ( $data ) {
            if ( isset( $data[ 'search' ] ) and $data[ 'search' ] ) {
                $q->where( 'name', 'ilike', '%' . $data[ 'search' ] . '%' )
                    ->orWhere( 'description', 'ilike', '%' . $data[ 'search' ] . '%' );
            }
            if ( isset( $data[ 'group_id' ] ) and $data[ 'group_id' ] ) {
                $q->where( 'group_id', $data[ 'group_id' ] );
            }
        } )->simplePaginate();
    }
    
    public function itemsMenu( $id )
    {
        $company = Company::with( 'categories_items_menu.items_menu' )->find( $id );
        
        return $company->categories_items_menu;
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
