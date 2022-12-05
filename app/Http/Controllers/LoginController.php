<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	private $_users; 
    public function __construct() {
        $path = base_path("resources/json/users.json"); 
        $this->_users = json_decode(file_get_contents($path), true); 
//         var_dump($this->_users);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $email = $request->input('email');
  		 $password = $request->input('password'); 
           $users = array();
//            var_dump($this->_users);
  				foreach($this->_users as $key =>  $val){   array_push($users, $key); }
  				 if(in_array($email, $users)){
			        foreach($this->_users as $key =>  $val){  
			             if($key === $email){ 
			                 if($val['password'] === $password): 
                                 Session::put('email', $email);	
			                 	session(['id' => $val['id']]);
			                 	session(['short_name' => $val['short_name']]); 
			                 	session(['name' => $val['name']]); 
			                 	session(['owner' => $val['owner']]); 
			                 	session(['wallet' => $val['wallet']]);
                                 session()->put('isAuth', true);
			                     $payload['isAuth'] = true;
                                //  session()->put('success','Login successful');

                                $request->session()->flash('message', 'This is a message!'); 
                                $request->session()->flash('alert-class', 'alert-success'); 
                                   $request->session()->put('user', $val);
			                     return redirect('/home');
			                 else:
			                 	$payload['isAuth'] = false; 
								// $this->validate->addError("Incorrect Credentials, Try again...");
								// $payload['msg'] = $this->validate->displayErrors();
			                 endif;
			            }
			        }
			    }
			    else{
			         $payload['isAuth'] = false;
					 $payload['msg']  =   'Wrong login credentials';
                     session()->put('error', 'Wrong login credentials!');
			        }  
                    return redirect()->back()->withInput();
         
 
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
