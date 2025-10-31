<?php

namespace App\Http\Controllers;

class NaacController extends Controller
{
    public function aqar()
    {
        return view('client.naac.aqar');
    }

    public function bestPractices()
    {
        return view('client.naac.best-practices');
    }

    public function compositionOfIqac()
    {
        return view('client.naac.composition-of-iqac');
    }

    public function dvv()
    {
        return view('client.naac.dvv');
    }

    public function feedback()
    {
        return view('client.naac.feedback');
    }

    public function iiqa()
    {
        return view('client.naac.iiqa');
    }

    public function institutionalDistinctiveness()
    {
        return view('client.naac.institutional-distinctiveness');
    }

    public function iqacCommittee()
    {
        return view('client.naac.iqac-committee');
    }

    public function minutesOfMeeting()
    {
        return view('client.naac.minutes-of-meeting-and-action-taken-report');
    }

    public function ssrReport()
    {
        return view('client.naac.ssr-report');
    }

    public function statutoryReport()
    {
        return view('client.naac.statutory-report');
    }
}
