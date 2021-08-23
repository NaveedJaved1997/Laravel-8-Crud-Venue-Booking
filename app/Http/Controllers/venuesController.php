<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\venue;

class venuesController extends Controller
{
    
    function Display ()
    {
        $data = venue::paginate(8);
        return view('index', ['venues'=>$data]);
    }
    function ShowVenues ()
    {
        $data = venue::paginate(8);
        return view('venues', ['venues'=>$data]);
    }
    function AddVenue(Request $request)
    {
        $file=$request->file('image');
        $ex = $file->getClientOriginalExtension();
        $filename = time().'.'.$ex;
        $file->move('Images/', $filename);
        $venue = new venue();
        $venue->name = $request->name;
        $venue->address = $request->address;
        $venue->contact = $request->contact;
        $venue->image_address = $filename;
        $venue->save();
        return redirect('venues');
    }
    function DeleteVenue($id)
    {
     $venue = venue::find($id);
     $venue->delete();
     return redirect('venues');
    }
    function Edit($id)
    {
     $venue = venue::find($id);
     
     return view('update', ['venue'=>$venue]);
    }
    function Update(Request $request)
    {
        $file=$request->file('image');
        $ex = $file->getClientOriginalExtension();
        $filename = time().'.'.$ex;
        $file->move('Images/', $filename);

        $venue = venue::find($request->id);
        $venue->name = $request->name;
        $venue->address = $request->address;
        $venue->contact = $request->contact;
        $venue->image_address = $filename;
        $venue->save();
        return redirect('venues');
    }
}
