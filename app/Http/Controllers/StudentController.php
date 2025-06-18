<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{


    //    CRUD->R
    //user function for View data from Table
    function users()
    {
        $users = DB::select('select * from college_students ORDER BY created_at DESC');
        return view('userprofile', ['users' => $users]);
    }

    //    CRUD->C
    //Add function for add data in Table
    function add(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->save();
        if ($student) {
            return redirect('/userprofile')->with('success', 'Student added successfully!');
        }
    }


    //    CRUD->D
    //Delete function for Delete data from Table
    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return redirect('/userprofile')->with('success', 'Student deleted successfully!');
        }
    }




    //   CRUD->U
    //data function for view data from Table to update
    function data($id)
    {
        $student = Student::find($id);
        return view('update', ['data' => $student]);
    }
    function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->save();
        if ($student->save()) {
            return redirect('/userprofile')->with('success', 'Student Updated successfully!');
        } else {
            return redirect('/update')->with('Error', 'Somthing Error!!!');
        }
    }

    //                  *Search*
    //  This function user search data from database.......
    function search(Request $request)
    {
        $input = $request->search;

        $users = Student::where('name', 'like', "%{$input}%")
            ->orWhere('email', 'like', "%{$input}%")
            ->orWhere('mobile', 'like', "%{$input}%")
            ->get();

        return view('userprofile', ['users' => $users, 'search' => $input]);

    }
}
