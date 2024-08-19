<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table("users")->get();
        // $users = DB::table("users")->where('id', 2)->get();
        // $users = DB::table("users")->find(1);
        // return $users;
        // dd($users);
        // foreach ($users as $value){
            //     echo $value . "<br>";
            // }
            $users = DB::table("users")
                            // ->select('name', 'email as user_email')
                            // ->select('city')
                            // ->distinct()
                            // ->get();
                            // ->pluck("name", "id");
                            // ->where('age', '<=','30')  //we can use json file to run where method but not in all method above
                            // ->where('name', 'like', 'S%')
                            // ->orwhere('age', '>',25 )
                            // ->whereBetween('age', [20,25])
                            // ->whereIn('id', [ 4, 5, 7])
                            // ->whereDate('created_at', '2024-08-19')
                            ->orderBy('name')
                            ->get();

            // return $users;

        return view("QueryTable",["data" => $users]);
    }


    // for single record - this method is used for single record....

    public function singleUser(string $id){
        $user = DB::table('users')->where('id', $id)->get();
        return view('user', ['data' => $user]);
    }

    // After this make route to view this data in routes
}
