<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin_view.user_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_view/add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $responce['status'] = false;
        $responce['message'] = 'Something went wrong';
        $array = [
            'name' =>  $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]; 
            
            
        
        $save= User::insert($array);
        if($save){
            $responce['status'] = true;
             $responce['message'] = 'added successfully';
         }
       return  $responce;
    
        
    }

    /*
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
        $result = User::where('id','=',$id)
                ->first();
        return view('admin_view/user_edit',compact('result'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $array = [
             'name' =>  $request->name,
            'email' => $request->email,            
             ];
       User::where('id',$id)
            ->update($array);
        return redirect('user_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $responce['status'] = false;
        $responce['message'] = 'Something went wrong';

        $deleted = User::where('id',$id)
        ->delete();
        if($deleted){
            $responce['status'] = true;
        }
        return  $responce;
    }
    #### get data from ajax request
    public function ajax(Request $request)
    {
        $responce = User::get();
        $totalResult = count($responce);

        $result = [];

        foreach ($responce as $key => $value) {
            $currentAry = [
                $value->id,
                $value->name,
                $value->email,
                
               '<button class="btn btn-success btn-sm" style="background:white; border-radius:22px;"><a href="user_edit/'.$value->id.'"><i class="fas fa-edit"></i></a></button> <button class="btn btn-danger btn-sm" style="background:white; border-radius:22px;"><a href="#" class="delete-data" data-id="'.$value->id.'"><i class="fas fa-trash"></i></a></button>',
               
            ];
            array_push($result, $currentAry);
        }

        $data['data']            = $result;
        $data['recordsTotal']    = $totalResult;
        $data['recordsFiltered'] = $totalResult;
        $data['draw']            = ! empty( $request['draw'] ) ? $request['draw'] : 1;

        echo json_encode( $data );
        exit;
    }
    public function user_profile()
    {
        return view('admin_view.user_update');
    }
  public function user_profile_update(Request $request)
    {
        $id = $request->id;
        $array = [
             'name' =>  $request->name,
            'email' => $request->email,            
             ];

       User::where('id',$id)
            ->update($array);
        return redirect('user_profile');
    }
     public function user_password()
    {
        return view('admin_view.user_password');
    }
  public function password_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'old_password' => 'required',
        'new_password' => 'required|min:8',
        'confirm_password' => 'required|same:new_password',
        ]);

        if ($validator->fails()) {
             return back()->withErrors($validator , 'errors')->withInput();            
        }

       $id = $request->id;
       $old_password = $request->old_password;
       $currentPassword = Auth::User()->password;
        $new_password = $request->new_password;
       if(Hash::check($new_password , $currentPassword ) ) {
            return back()->withSuccess('Sorry, common passwords are not allowed. Please try a different new password.');
          }
        
        if(Hash::check($old_password , $currentPassword  ))
        {

          
        $array = [
             'password' => Hash::make($request->new_password),
                ];
              
       $result=  User::where('id',$id)
            ->update($array);
        if (!empty($result)) {                               
        $massage = "Password Update Successfully";
            }else{                
                $massage = "Somthing Went Worng";
            }

        return redirect('profile_password')->withSuccess($massage);
    }else{
          return back()->withSuccess('Old Password should be match with the current password');  
          }

    }

}
