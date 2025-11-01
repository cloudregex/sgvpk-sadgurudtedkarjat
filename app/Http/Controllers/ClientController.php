<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.home');
    }
    public function contact()
    {
        return view('client.contact-us');
    }

    public function about()
    {
        return view('client.about');
    }

    public function finance()
    {
        return view('client.finance');
    }

    public function Deled()
    {
        return view('client.deled');
    }

    public function mandatoryDisclosure()
    {
        return view('client.mandatory-disclosure');
    }

    public function Facilities()
    {
        return view('client.facilities');
    }

    public function biomatric()
    {
        return view('client.biomatric');
    }

    public function Gallery()
    {
        return view('client.gallery');
    }

    public function Impsite()
    {
        return view('client.impsite');
    }

    public function studentDetails()
    {
        return view('client.student-details');
    }
}
