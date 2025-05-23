<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('crud.content');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function students()
     {
         return view('crud.addstudents');
     }
     
    public function store(Request $request)
    {
        $data=array(
            "Name"=>$request->Name,
            "Age"=>$request->Age,
            "Skills"=>$request->Skills,
            "Desgination"=>$request->Desgination,
            "Address"=>$request->Address
        );

         HomeModel::create($data);
        return redirect('/')->with('success','your students Added successfully');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=HomeModel::all();
        return view('crud.content',["data"=>$data]);
    }

    public function read($id)
    {
        $data=HomeModel::where('id',$id)->first();
        return view('crud.read',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata=Homemodel::where('id',$id)->first();
        return view('crud.edit-data',["editdata"=>$editdata]);
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
        $editdata=array(
             "Name"=>$request->Name,
            "Age"=>$request->Age,
            "Skills"=>$request->Skills,
            "Desgination"=>$request->Desgination,
            "Address"=>$request->Address
        );

        HomeModel::where('id',$id)->update($editdata);
        return redirect('/')->with('success','your students Added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HomeModel::where('id',$id)->delete();
        return redirect('/')->with('success','your students deleted successfully');
    }
}
