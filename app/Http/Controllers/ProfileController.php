<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Profile Controller to serve as api end point.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * API endpoint: add profile
     *
     * @return \Illuminate\Http\Response
     */
    public function addProfile(Request $request)
    {
        // collect data from request

        // validate requested data : name
        if(isset($request->name)){
            // add validation if require
            $preparedData['name'] = $request->name;
        }
        // validate requested data : phone
        if(isset($request->phone)){
            // add validation if require
            $preparedData['phone'] = $request->phone;
        }

        // validate requested data : email
        if(isset($request->email)){
            // add validation if require
            $preparedData['email'] = $request->email; // will add regular expression to check valid email address
        }

        // validate requested data : avatar
        if(isset($request->avatar)){
            // add validation if require
            $preparedData['avatar'] = $request->avatar;
        }

        // save prepare data to data source  DB/external storage such as algoria/elasticsearch

        // prepare response object
        $response = new Object();
        $response->status = 201; // http status code
        $response->message = "Profile added successfully";
        $response->data = $preparedData;

        return  json_encode($response);
    }

    public function getProfile($id){
        // Retrive data from data source base on profile id
        // test data : start
        $profile = new Object();
        $profile->id = 1;
        $profile->name = "Test User";
        $profile->phone = "0181900000";
        $profile->email = "test@test.com";
        $profile->avatar = "test.png";
        // test data : end

        // prepare response object
        /*
         * @todo: response preperation will move to seperate service
         */
        $response = new Object();
        $response->status = 200; //http status code
        $response->message = "Profile retrive successfully";
        $response->data = $profile;

        return json_encode($profile);
    }

}
