<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DAndRController extends Controller
{
    public function patents()
    {
        return view('client.d_and_r.patents');
    }

    public function rdCell()
    {
        return view('client.d_and_r.about-rd-cell');
    }

    public function researchPapers()
    {
        return view('client.d_and_r.research-papers-and-publications');
    }

    public function entrepreneurshipDevelopmentCell()
    {
        return view('client.d_and_r.research-development-policy');
    }
}
