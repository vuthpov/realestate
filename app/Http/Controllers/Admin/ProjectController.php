<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use App\PropertyType;
use App\PropAttribute;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //partner propertyType




        return View('admin.project.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $partner = Partner::where('status', '<>', 0)->get();

        $data = array(
            'partner' => $partner
        );



        $partner = Partner::select('partnerId', 'partner')
            ->where('status', '<>', 0)
            ->get();

        $propertyType = PropertyType::select('propertyTypeId', 'propertyType')
            ->where('status', '<>', 0)
            ->get();

        $propAttribute = PropAttribute::select('propAttributeID', 'propAttribute')
            ->where('status', '<>', 0)
            ->get();

        $data = array(
            'partner' => $partner,
            'propertyType' => $propertyType,
            'propAttribute' => $propAttribute
        );






        return View('admin.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
