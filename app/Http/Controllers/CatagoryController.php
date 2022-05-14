<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function register()
  {
  return view('Catagory.register');
  }
    function store(Request $request)
    
    {
      $Catagory =new Catagory();
      $Catagory->id = $request->id;
      $Catagory->name = $request->name;
    
     $is_saved = $Catagory->save();
    if($is_saved){
    echo "  Record saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $Catagory = Catagory::all();
     return view('Catagory.list', compact('Catagory'));
    } 
    public function edit($id)
 {
 $Catagory = Catagory::find($id);
 return view('Catagory.edit', compact('Catagory'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $Catagory= Catagory::find($request->id);
    $Catagory->id = $request->id;
    $Catagory->name = $request->name;

    $Catagory->save();
    return redirect('Catagory/list');
    }
    public function delete($id)
 {
 Catagorys::where('id', $id)->delete();
 return redirect('Catagory/list');
   
}

public function search($id)
    {
     $Catagory = Catagory::where('id',$id)->first();
     return view('Catagory.search', compact('Catagory'));
    } 
}
