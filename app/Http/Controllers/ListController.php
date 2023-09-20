<?php

namespace App\Http\Controllers;

use App\Models\Dolist;
use Illuminate\Http\Request;


class ListController extends Controller
{

    public function index(){
     $dolists = Dolist::all();
     return view('admin-dashboard.lists.list',[
      "dolists"=>$dolists
     ]);
    }

    public function create(){
        return view('admin-dashboard.lists.createlist',[
        ]);

    }

    public function storelist(Request $request){
        // dd($request->all());

        $request->validate([
         'title' => 'required' ,
         'desc' => ['required', 'string'] ,
          'date' => ['required', 'date']
        ]);

        $dolists = new Dolist();
        $dolists->title = $request->title;
        $dolists->desc = $request->desc;
        $dolists->date = $request->date;
        $dolists->status = true;

        $dolists->save();

        $dolists = Dolist::all();
        return view('admin-dashboard.lists.list',[
            "dolists"=>$dolists
        ]);

    }

    public function destroy($id){
      $deleted = Dolist::destroy($id);
      if($deleted > 0){

        return redirect()->route('list');
     } else {
        return "failed";

     }
    }

    public function status($id){
       $dolists = Dolist::findorFail($id);
       return view('admin-dashboard.lists.status', compact('change.status'));
    }

    public function show(){
     $dolists = Dolist::all();
     echo "Title :" . $dolists->title;
     echo"<br>";
     echo "Desc :" . $dolists->desc;
     echo"<br>";
     echo "Date :" . $dolists->date;
     echo"<br>";
     echo "Status :" . $dolists->status;
     echo"<br>";
     return view('admin-dashboard.lists.list');
    }



}
