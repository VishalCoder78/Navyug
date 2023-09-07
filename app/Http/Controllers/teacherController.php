<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    //
    function teacher (Request $request)
    {
        $data = new Teacher;
        $data->name = $request->name;
        $data->subject = $request->subject;
        $data->mobile = $request->contect;
        $data->email = $request->email;
        $data->save();

        return redirect('/teacher');

    }

    function teacherData ()
    {
        $data = Teacher::all();
        return view('addteacher', ['teachers' => $data]);
    }
}
