<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function alumniAssociation()
    {
        return view('client.student.alumni-association');
    }

    public function alumniCertification()
    {
        return view('client.student.alumni-certification');
    }

    public function culturalActivities()
    {
        return view('client.student.cultural-activities');
    }

    public function nss()
    {
        return view('client.student.nss');
    }

    public function sports()
    {
        return view('client.student.sports');
    }
    public function studentNotice()
    {
        return view('client.student.notice');
    }
}
