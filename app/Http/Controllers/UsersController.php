<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $req->validate(['CNIC'=>'required|integer']);
        // $CNIC = $req->CNIC;
        // $signin_submit = $req->signin_submit;
        // $_token = $req->_token;
        $user = DB::table('users')->where('CNIC', $req->CNIC)->get();
        // return Users::all();
        return $user;
    }

    public function login(Request $req)
    {
                $req->validate(['CNIC'=>'required|integer']);
              // calling userTbl model selectSingle method for finding user record
              $username = $req->user_name;
              $password = base64_encode($req->password);
              $req_password = $req->password;
              $res = users::selectSingleRecord($req->CNIC);
  
  
          // if record found
          if (count($res) > 0) {
                return view('home');
           
              
          } // if record not found
          else {
              echo 'Username or password is invalid';exit;
              return $response;
          }
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
    public function store(Request $req)
    {
        $req->validate(['CNIC'=>'required|integer']);
        $name = $req->name; 
        $email = $req->email;
        $Mobile = $req->mobile_number;
        $CNIC = $req->CNIC;
        $email_verified_at = 'null';
        $password = $req->password;
        $remember_token = $req->_token;
        $created_at = date('d-m-y h:i:s');
        $updated_at = date('d-m-y h:i:s');
        $data = array([
            "name"=>$name,
            "email"=>$email,
            "Mobile"=>$Mobile,
            "CNIC"=>$CNIC,
            "email_verified_at"=>$email_verified_at,
            "password"=>$password,
            "remember_token"=>$remember_token,
            "created_at"=>$created_at,
            "updated_at"=>$updated_at
        ]);
        return Users::create($req->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }
}
