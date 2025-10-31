<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacementController extends Controller
{
    public function edc()
    {
        return view('client.placement.edc');
    }

    public function majorRecruiters()
    {
        return view('client.placement.major-recruiters');
    }

    public function mou()
    {
        return view('client.placement.mou');
    }

    public function placementsRecords()
    {
        return view('client.placement.placements-records');
    }

    public function tpoMemberSecretary()
    {
        return view('client.placement.tpo-member-secretary');
    }

    public function training()
    {
        return view('client.placement.training');
    }
}
