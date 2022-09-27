<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $skills=Skill::all();
        // $skills=Skill::paginate(5);
          return view('admin-panel.skill.skill-index',compact('skills'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-panel.skill.skill-create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'percent'=>'required',
        ]);
    
        Skill::create([
            'name'=> $request -> name,
            'percent' => $request ->percent
        ]);
        return redirect('admin/skills')->with('successMessage','You have successfully created');
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

         $skill=Skill::find($id);
         return view('admin-panel.skill.skill-edit',compact('skill'));
       
   
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
        $request->validate([
            'name'=>'required',
            'percent'=>'required'
        ]);
        Skill::find($id)->update([
            'name'=>$request->name,
            'percent'=>$request->percent
        ]);
        return redirect('admin/skills')->with('successMessage','You have successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skill::find($id)->delete();
        return redirect('admin/skills')->with('successMessage','You have successfully deleted');
    }
}
