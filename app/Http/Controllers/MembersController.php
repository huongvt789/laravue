<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member/add');
    }

    public function list()
    {
        return Member::orderBy('id', 'DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Member($request->all());
        $data->save ();
        return response()->json(['data' => $data, 'message' => 'Success']);
    }

    public function edit(Request $request)
    {
        return Member::where('id', $request->id)
            ->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $this->edit($request)
            ->update($request->all());
        if($data) {
            return response()->json(['status' => true, 'message' => 'Update success']);
        }
        return response()->json(['status' => false, 'message' => 'Update failed']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Todu xu ly an hien modal.
        return Member::where('id', $id)
            ->delete();
    }
}
