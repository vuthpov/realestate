<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PartnerType;

class PartnerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerTypes = PartnerType::all();
        return View('admin.partnerType.index',compact('partnerTypes', $partnerTypes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.partnerType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'type' => 'required|unique:partner_types,partnerType'
        ]);

        $partnerType = new PartnerType;
        $partnerType->partnerType = $request->type;
        $partnerType->save();

        return redirect("/system/partnerType");

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
        $partnerType = PartnerType::find($id);
        $data = [
            'partnerType' => $partnerType
        ];
        return view('admin.partnerType.edit', $data);
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
        $this->validate($request,[
            'type' => 'required'
        ]);

        PartnerType::where('partnerTypeId', $id)->update(['partnerType' => $request->type]);
        return redirect('/system/partnerType');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function changeStatusPType($id, $status){
        if($status == 1){
            PartnerType::where('partnerTypeId', $id)->update(['status' => 0]);
        }else{
            PartnerType::where('partnerTypeId', $id)->update(['status' => 1]);
        }

        return redirect("/system/partnerType");
    }
}
