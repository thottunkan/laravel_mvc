<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\FacultyModal;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editviewfaculty(){
        return view('editviewfaculty');
    }
    public function searchFaculty(Request $request){
        $getFacultyName = request("searchfaculty");
        echo "<script>alert(".$getFacultyName.")</script>";
        $faculties = FacultyModal::query()
        ->where('fname','like',"%{$getFacultyName}%")
        ->get();
        return view("viewallfaculty",compact('faculties'));
    }
    public function index()
    {
        $faculties = FacultyModal::all();//load all data from facultymodal 
        return view("viewallfaculty",compact('faculties'));//[passing the loaded values to viewallfaulty file ]
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("index",["pageTile" =>"index"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = request("name");
        $designation = request("designation");
        $college =  request("college");
        $contactno = request("contactno");
        echo "faculty name = ".$name."<br>"."designation = ".$designation."<br>"."college = ".$college."<br>"."contact no =".$contactno;

        //pass value to modals by creating model obj
        $faculty = new FacultyModal();
        $faculty->fname = $name;
        $faculty->designation = $designation;
        $faculty->college = $college;
        $faculty->contactno = $contactno;

        //saving
        $faculty->save();
        

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
        //passig id and view
        echo "<script>alert(".$id.")</script>";
        $faculties = FacultyModal::find($id);
        echo "<script>alert(".$faculties.")</script>";
        return view("editviewfaculty",compact('faculties'));
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
        $name = request("name");
        $designation = request("designation");
        $college =  request("college");
        $contactno = request("contactno");
        echo "faculty name = ".$name."<br>"."designation = ".$designation."<br>"."college = ".$college."<br>"."contact no =".$contactno;

        //pass value to modals by creating model obj
        $faculty = new FacultyModal();
        $faculty->fname = $name;
        $faculty->designation = $designation;
        $faculty->college = $college;
        $faculty->contactno = $contactno;
        //
        echo "<script>alert(".$id.")</script>";
        $faculties = FacultyModal::find($id);
        echo "<script>alert(".$faculties.")</script>";
        return view("editviewfaculty",compact('faculties'));
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
