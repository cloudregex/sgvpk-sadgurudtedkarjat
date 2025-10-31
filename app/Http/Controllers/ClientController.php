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

    // About Pages
    public function aboutInstitute()
    {
        return view('client.about.about-institute');
    }

    public function visionMission()
    {
        return view('client.about.vision-mission');
    }

    public function presidentDesk()
    {
        return view('client.about.president-desk');
    }

    public function directorDesk()
    {
        return view('client.about.director-desk');
    }
    public function secretaryDesk()
    {
        return view('client.about.secretary-desk');
    }

    public function principalDesk()
    {
        return view('client.about.principal-desk');
    }

    public function approvalsAffiliation()
    {
        return view('client.about.approvals-affiliation');
    }

    public function committee()
    {
        return view('client.about.committee');
    }

    public function trustBody()
    {
        return view('client.about.trust-body');
    }

    public function organizationalStructure()
    {
        return view('client.about.organizational-structure');
    }
    // End About Pages

    // Admission Pages
    public function admissionCell()
    {
        return view('client.admission.admission-cell');
    }

    public function admissionPolicy()
    {
        return view('client.admission.admission-policy-process');
    }

    public function admissionCourse()
    {
        return view('client.admission.course-offered');
    }

    public function admissionDocuments()
    {
        return view('client.admission.documents-required');
    }

    public function admissionEligibility()
    {
        return view('client.admission.eligibility-criteria');
    }

    public function admissionFee()
    {
        return view('client.admission.fee-structure');
    }

    public function admissionQuota()
    {
        return view('client.admission.institutional-quota-vacant-seat');
    }

    public function admissionScholarship()
    {
        return view('client.admission.scholarship');
    }
    // End Admission Pages

    // Academics Pages
    public function academicCalendar()
    {
        return view('client.academics.academic-calendar');
    }

    public function rulesRegulations()
    {
        return view('client.academics.rules-regulations');
    }

    public function nep()
    {
        return view('client.academics.nep');
    }

    public function nptelCourses()
    {
        return view('client.academics.nptel-courses');
    }

    public function resultsAcademic()
    {
        return view('client.academics.results');
    }

    public function onlineResults()
    {
        return view('client.academics.online-results');
    }

    public function gateExams()
    {
        return view('client.academics.gate-competitive-exams');
    }
    // End Academics Pages
}
