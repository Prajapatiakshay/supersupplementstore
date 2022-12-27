<?php

namespace App\Http\Controllers;
use App\Models\feedback_model;


use Illuminate\Http\Request;

class Feedback extends Controller
{
    public function feedbackpage()
    {
        $fee_data = feedback_model::all();
        return view('admin.feedback.feedback',compact('fee_data'));
    }
}
