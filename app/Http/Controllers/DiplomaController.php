<?php

namespace App\Http\Controllers;

class DiplomaController extends Controller
{
    public function academicCalendar()
    {
        return view('client.diploma.academic-calender');
    }
    public function activities()
    {
        return view('client.diploma.activities');
    }
    public function engineeringInformation()
    {
        return view('client.diploma.engineering-information');
    }
    public function facultyAchievements()
    {
        return view('client.diploma.faculty-achievements');
    }
    public function facultyProfile()
    {
        return view('client.diploma.faculty-profile');
    }
    public function industrialVisit()
    {
        return view('client.diploma.industrial-visit');
    }
    public function infrastructureFacilities()
    {
        return view('client.diploma.infrastructure-and-facilities');
    }
    public function mous()
    {
        return view('client.diploma.mous');
    }
    public function noticeCirculars()
    {
        return view('client.diploma.notice-circulars');
    }
    public function peoPo()
    {
        return view('client.diploma.peo-po');
    }
    public function placement()
    {
        return view('client.diploma.placement');
    }
    public function researchDevelopment()
    {
        return view('client.diploma.research-and-development');
    }
    public function resultAnalysis()
    {
        return view('client.diploma.result-analysis');
    }
    public function studentAchievements()
    {
        return view('client.diploma.student-achievements');
    }
    public function studentAssociation()
    {
        return view('client.diploma.student-association');
    }
    public function syllabus()
    {
        return view('client.diploma.syllabus');
    }
    public function technicalSupportingStaff()
    {
        return view('client.diploma.technical-supporting-staff');
    }
    public function timeTable()
    {
        return view('client.diploma.time-table');
    }
    public function workshopGuestLectures()
    {
        return view('client.diploma.workshop-guest-lectures');
    }
}
