<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class SoundController extends Controller
{
    public function __construct(){
      $this->middleware('jwt.auth');
    }

    public function api1(){
      if(!empty($_POST['dBr'])){
        $dBr = $_POST['dBr'];
        if(0<=$dBr && $dBr<=84){
          header('Content-type: application/json');
          return json_encode(array("score"=>"0.5"));
        }else{
          return false;
        }
      }
      return false;
      die;
    }

    public function signup(){
      $rawData = file_get_contents("php://input");
      $obj =  json_decode($rawData);

      $accountType = !empty($obj->accType) ? $obj->accType : "";
      $name = !empty($obj->$name) ? $obj->$name : "";
      $address = !empty($obj->add) ? $obj->add : "";
      $phone = !empty($obj->phone) ? $obj->phone : "";
      $email = !empty($obj->email) ? $obj->email : "";
      $accessType = !empty($obj->type) ? $obj->type : "";

      return $username->username;
      die;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return Response::json(['data'=>$users],200);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
