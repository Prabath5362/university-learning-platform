<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class AdminController extends Controller
{


    function addCource(){
        return view("admin.addCource");
    }

    function viewCource(){
        $cources = Cource::all();
        return view("admin.viewCource",compact("cources"));
    }

    function postAddCource(Request $req){
       $req->validate([
        "title" => "required|string|max:255",
        "description"=>"required|string",
        "image" => "required|image|mimes:png,jpg,jpeg|max:2048"
       ]);

        $cource = new Cource();
        $cource->title = $req->title;
        $cource->description = $req->description;

        $image = $req->image;
        if($image){
            $imageName = time().".".$image->getClientOriginalExtension();
            $cource->image = $imageName;
        }

        $cource->save();

        if($image && $cource->save()){
            $req->image->move("images",$imageName);
        }

        return redirect()->route("admin.viewCource")->with("cource_message","Cource Added Successfully!");


    }


    function viewStudents(){
        $students = User::where("user_type", "user")->get();
        return view("admin.students",compact("students"));

    }

}
