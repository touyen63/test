<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
class PeopleController extends Controller
{
    public function get_all_people(){
        $peoples = People::all();
        return view('people_manage',['peoples'=>$peoples]);
    }
    public function get_people_by_id($id){
        $people=People::findOrFail($id);
        return view('edit_people',["people"=>$people]);

    }
    public function edit(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $people = People::find($id);
        $people->fullname = $request->fullname;
        $people->birthday = $request->birthday;
        $people->address = $request->address;
        $people->save();
        // Student::whereId($id)->update($request->except('_token','updated_at'));
        return redirect()->route("people");
    }
    public function create_people(){
        return view('create_people');
    }
    public function add_people(Request $request){
        // Tìm đến đối tượng muốn update
        $people =  new People;
        $people->fullname = $request->fullname;
        $people->birthday = $request->birthday;
        $people->address = $request->address;
        $people->save();
        // Student::whereId($id)->update($request->except('_token','updated_at'));
        return redirect()->route("people");
    }
    public function delete_people($id){
        $item = People::find($id);
        $item->delete();
        return redirect()->route("people");
    }
}




