<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin-panel.user.user-index',compact('users'));
    }
    public function edit($id){
    
        $user=User::find($id);
        return view('admin-panel.user.user-edit',compact('user')); 
    }
    public function update(Request $request, $id){
    User::find($id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'status'=>$request->status,
      ]);
      return redirect('admin/users')->with('successMessage','You have successfully update');
    }
    public function delete($id)
    {
        User::find($id)->delete();
         return redirect('admin/users')->with('successMessage','You have successfully deleted');
        
    }
   
}
