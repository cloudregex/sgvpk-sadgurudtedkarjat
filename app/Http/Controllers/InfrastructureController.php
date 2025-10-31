<?php

namespace App\Http\Controllers;

class InfrastructureController extends Controller
{
    public function canteenMess()
    {
        return view('client.infrastructure.canteen-mess');
    }
    public function centralLibrary()
    {
        return view('client.infrastructure.central-library');
    }
    public function computerCenter()
    {
        return view('client.infrastructure.computer-center');
    }
    public function culturalCenter()
    {
        return view('client.infrastructure.cultural-center');
    }
    public function eJournals()
    {
        return view('client.infrastructure.e-journals');
    }
    public function eResources()
    {
        return view('client.infrastructure.e-resources');
    }
    public function gymkhana()
    {
        return view('client.infrastructure.gymkhana');
    }
    public function hostelAmenities()
    {
        return view('client.infrastructure.hostel-amenities');
    }
    public function libraryBooksCirculationPolicy()
    {
        return view('client.infrastructure.library-books-circulation-policy');
    }
    public function libraryJournals()
    {
        return view('client.infrastructure.library-journals');
    }
    public function libraryStaff()
    {
        return view('client.infrastructure.library-staff');
    }
    public function parking()
    {
        return view('client.infrastructure.parking');
    }
    public function premises()
    {
        return view('client.infrastructure.premises');
    }
    public function readingHall()
    {
        return view('client.infrastructure.reading-hall');
    }
    public function shops()
    {
        return view('client.infrastructure.shops');
    }
    public function sportsGround()
    {
        return view('client.infrastructure.sports-ground');
    }
    public function transportation()
    {
        return view('client.infrastructure.transportation');
    }
}
