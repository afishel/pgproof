<?php

namespace App\Http\Controllers\API;

use App\Inspection;
use App\Http\Requests\Inspection AS InspectionRequest;
use App\Http\Controllers\Controller;

class InspectionController extends Controller
{

    protected $with = [
        'inspectionRecurrence',
        'inspectionStatus',
        'inspectionType',
        'inspector',
        'site.organization',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspections = Inspection::sortable()->with($this->with);
        return $inspections->paginate(15);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Inspection $request
     * @return \Illuminate\Http\Response
     */
    public function store(InspectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function show(Inspection $inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Inspection $request
     * @param  \App\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function update(InspectionRequest $request, Inspection $inspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspection $inspection)
    {
        //
    }
}
