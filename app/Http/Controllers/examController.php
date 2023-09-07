<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Exampaper;
use App\Models\Question;
use Illuminate\Http\Request;

class examController extends Controller
{
    //
    function handleExam (Request $req)
    {
        $exam = new Exam;
        $exam->exam_type = $req->exam_type;
        $exam->exam_from = $req->exam_from;
        $exam->exam_to = $req->exam_to;
        $exam->save();

        $paper = new Exampaper;
        $paper->subject = $req->subject;
        $paper->full_marks = $req->f_mark;
        $paper->passing_marks = $req->p_mark;
        $paper->save();

        $question = new Question;
        $question->question = $req->question;
        $question->save();
        return redirect('/exams');
    }



}
