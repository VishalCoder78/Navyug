<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class admissionController extends Controller
{
    //
    function addmission (Request $req)
    {
        $admission = new Admission;
        $admission->first_name = $req->first_name;
        $admission->last_name = $req->last_name;
        $admission->father_name = $req->father_name;
        $admission->mother_name = $req->mother_name;
        $admission->contact_no = $req->contact_no;
        $admission->email = $req->email;
        $admission->birth_date = $req->birth_date;
        $admission->address = $req->address;
        $admission->save();
        return redirect()->back()->with('success', 'Admission Successfull');

    }
}
