<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TableData;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        // To show latest Item first in table use ::latest
        return view('crud.index', ['TableData' => TableData::latest()->get()]);
    }

    public function create()
    {
        return view('crud.create');

    }
    public function store(Request $request)
    {

        // Importing Image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('photos'), $imageName);

        // connecting and inserting values to the database or model.
        $NewEntry = new TableData;
        $NewEntry->Name = $request->name;
        $NewEntry->image = $imageName;
        $NewEntry->Description = $request->description;

        $NewEntry->save();
        return back()->withSuccess('Entry Added!!!');
    }
    public function delete($id)
    {
        TableData::destroy($id);
        return back()->withSuccess('Deleted Successfully!!!');
    }
    public function edit($id)
    {
        $userDetail = TableData::where('id', $id)->first();
        return view('crud.update', ['id' => $id, 'userDetail' => $userDetail]);


    }

    public function pushUpdate(Request $request, $id)
    {
        // Fetching data of table where updation is required
        $userDetail = TableData::where('id', $id)->first();

        //Updateing Table
        if (isset($request->image)) {
            // Importing Image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('photos'), $imageName);
            $userDetail->image = $imageName;
        }

        $userDetail->Name = $request->name;
        $userDetail->Description = $request->description;
        $userDetail->save();
        return back()->withSuccess('Details Updated!!!');

    }
}