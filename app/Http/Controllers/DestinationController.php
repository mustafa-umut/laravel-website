<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function post_destination()
    {
        return view('admin.post_destination');
    }
    public function add_destination(Request $request)
    {
        $destination = new Destination; 
        $destination->title = $request->title;
        $destination->description = $request->description;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('destinationimage', $imagename);
            $destination->image = $imagename;
        }
        

        $destination->save();
        return redirect()->back()->with('message', 'Destination Added Successfully');
    }
    public function show_destination()
    {
        $destination = Destination::all();  
        return view('admin.show_destination',compact('destination'));
    }
    public function delete_destination($id)
    {
        $destination=Destination::find($id);
        $destination->delete();
        return redirect()->back()->with('message', 'Destination Deleted Successfully');

    }
    public function edit_destination($id)
    {
        $destination=Destination::find($id);
        return view('admin.edit_destination',compact('destination'));

    }
    public function update_destination(Request $request, $id)
    {
        $destination_old=Destination::find($id);
        $destination_old->title = $request->title;
        $destination_old->description = $request->description;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('destinationimage', $imagename);
            $destination_old->image = $imagename;
        }
        

        $destination_old->save();
        return redirect()->back()->with('message', 'Destination Updated Successfully');
    }


}
