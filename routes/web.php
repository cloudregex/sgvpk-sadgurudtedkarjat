<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DAndRController;
use App\Http\Controllers\DiplomaController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\NaacController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index']);
Route::get('/contact', [ClientController::class, 'contact'])->name('contact-us');
// About Section Routes
Route::prefix('about')->group(function () {
    Route::get('/about-institute', [ClientController::class, 'aboutInstitute'])->name('about.institute');
    Route::get('/vision-mission', [ClientController::class, 'visionMission'])->name('about.vision');
    Route::get('/president-desk', [ClientController::class, 'presidentDesk'])->name('about.president');
    Route::get('/director-desk', [ClientController::class, 'directorDesk'])->name('about.director');
    Route::get('/secretary-desk', [ClientController::class, 'secretaryDesk'])->name('about.secretary');
    Route::get('/principal-desk', [ClientController::class, 'principalDesk'])->name('about.principal');
    Route::get('/approvals-affiliation', [ClientController::class, 'approvalsAffiliation'])->name('about.approvals');
    Route::get('/committee', [ClientController::class, 'committee'])->name('about.committee');
    Route::get('/trust-body', [ClientController::class, 'trustBody'])->name('about.trust');
    Route::get('/organizational-structure', [ClientController::class, 'organizationalStructure'])->name('about.structure');
});

// Admission Section Routes
Route::prefix('admission')->group(function () {
    Route::get('/cell', [ClientController::class, 'admissionCell'])->name('admission.cell');
    Route::get('/policy-process', [ClientController::class, 'admissionPolicy'])->name('admission.policy');
    Route::get('/course-offered', [ClientController::class, 'admissionCourse'])->name('admission.course-offered');
    Route::get('/documents-required', [ClientController::class, 'admissionDocuments'])->name('admission.documents');
    Route::get('/eligibility-criteria', [ClientController::class, 'admissionEligibility'])->name('admission.eligibility');
    Route::get('/fee-structure', [ClientController::class, 'admissionFee'])->name('admission.fee');
    Route::get('/institutional-quota-vacant-seats', [ClientController::class, 'admissionQuota'])->name('admission.quota');
    Route::get('/scholarship', [ClientController::class, 'admissionScholarship'])->name('admission.scholarship');
});

Route::prefix('academics')->name('academics.')->group(function () {
    Route::get('/academic-calendar', [ClientController::class, 'academicCalendar'])->name('academic-calendar');
    Route::get('/rules-regulations', [ClientController::class, 'rulesRegulations'])->name('rules-regulations');
    Route::get('/nep', [ClientController::class, 'nep'])->name('nep');
    Route::get('/nptel-courses', [ClientController::class, 'nptelCourses'])->name('nptel-courses');
    Route::get('/results', [ClientController::class, 'resultsAcademic'])->name('results');
    Route::get('/online-results', [ClientController::class, 'onlineResults'])->name('online-results');
    Route::get('/gate-competitive-exams', [ClientController::class, 'gateExams'])->name('gate-competitive-exams');
});

Route::prefix('computer-engineering-diploma')->name('diploma.')->group(function () {
    Route::get('/academic-calendar', [DiplomaController::class, 'academicCalendar'])->name('academic-calendar');
    Route::get('/activities', [DiplomaController::class, 'activities'])->name('activities');
    Route::get('/engineering-information', [DiplomaController::class, 'engineeringInformation'])->name('engineering-information');
    Route::get('/faculty-achievements', [DiplomaController::class, 'facultyAchievements'])->name('faculty-achievements');
    Route::get('/faculty-profile', [DiplomaController::class, 'facultyProfile'])->name('faculty-profile');
    Route::get('/industrial-visit', [DiplomaController::class, 'industrialVisit'])->name('industrial-visit');
    Route::get('/infrastructure-and-facilities', [DiplomaController::class, 'infrastructureFacilities'])->name('infrastructure-and-facilities');
    Route::get('/mous', [DiplomaController::class, 'mous'])->name('mous');
    Route::get('/notice-circulars', [DiplomaController::class, 'noticeCirculars'])->name('notice-circulars');
    Route::get('/peo-po', [DiplomaController::class, 'peoPo'])->name('peo-po');
    Route::get('/placement', [DiplomaController::class, 'placement'])->name('placement');
    Route::get('/research-and-development', [DiplomaController::class, 'researchDevelopment'])->name('research-and-development');
    Route::get('/result-analysis', [DiplomaController::class, 'resultAnalysis'])->name('result-analysis');
    Route::get('/student-achievements', [DiplomaController::class, 'studentAchievements'])->name('student-achievements');
    Route::get('/student-association', [DiplomaController::class, 'studentAssociation'])->name('student-association');
    Route::get('/syllabus', [DiplomaController::class, 'syllabus'])->name('syllabus');
    Route::get('/technical-supporting-staff', [DiplomaController::class, 'technicalSupportingStaff'])->name('technical-supporting-staff');
    Route::get('/time-table', [DiplomaController::class, 'timeTable'])->name('time-table');
    Route::get('/workshop-guest-lectures', [DiplomaController::class, 'workshopGuestLectures'])->name('workshop-guest-lectures');
});

Route::prefix('infrastructure')->name('infrastructure.')->group(function () {
    Route::get('/canteen-mess', [InfrastructureController::class, 'canteenMess'])->name('canteen-mess');
    Route::get('/central-library', [InfrastructureController::class, 'centralLibrary'])->name('central-library');
    Route::get('/computer-center', [InfrastructureController::class, 'computerCenter'])->name('computer-center');
    Route::get('/cultural-center', [InfrastructureController::class, 'culturalCenter'])->name('cultural-center');
    Route::get('/e-journals', [InfrastructureController::class, 'eJournals'])->name('e-journals');
    Route::get('/e-resources', [InfrastructureController::class, 'eResources'])->name('e-resources');
    Route::get('/gymkhana', [InfrastructureController::class, 'gymkhana'])->name('gymkhana');
    Route::get('/hostel-amenities', [InfrastructureController::class, 'hostelAmenities'])->name('hostel-amenities');
    Route::get('/library-books-circulation-policy', [InfrastructureController::class, 'libraryBooksCirculationPolicy'])->name('library-books-circulation-policy');
    Route::get('/library-journals', [InfrastructureController::class, 'libraryJournals'])->name('library-journals');
    Route::get('/library-staff', [InfrastructureController::class, 'libraryStaff'])->name('library-staff');
    Route::get('/parking', [InfrastructureController::class, 'parking'])->name('parking');
    Route::get('/premises', [InfrastructureController::class, 'premises'])->name('premises');
    Route::get('/reading-hall', [InfrastructureController::class, 'readingHall'])->name('reading-hall');
    Route::get('/shops', [InfrastructureController::class, 'shops'])->name('shops');
    Route::get('/sports-ground', [InfrastructureController::class, 'sportsGround'])->name('sports-ground');
    Route::get('/transportation', [InfrastructureController::class, 'transportation'])->name('transportation');
});

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/student-notice', [StudentController::class, 'studentNotice'])->name('notice');
    Route::get('/alumni-association', [StudentController::class, 'alumniAssociation'])->name('alumni-association');
    Route::get('/alumni-certification', [StudentController::class, 'alumniCertification'])->name('alumni-certification');
    Route::get('/cultural-activities', [StudentController::class, 'culturalActivities'])->name('cultural-activities');
    Route::get('/nss', [StudentController::class, 'nss'])->name('nss');
    Route::get('/sports', [StudentController::class, 'sports'])->name('sports');
});

Route::prefix('placement')->name('placement.')->group(function () {
    Route::get('/edc', [PlacementController::class, 'edc'])->name('edc');
    Route::get('/major-recruiters', [PlacementController::class, 'majorRecruiters'])->name('major-recruiters');
    Route::get('/mou', [PlacementController::class, 'mou'])->name('mou');
    Route::get('/placements-records', [PlacementController::class, 'placementsRecords'])->name('placements-records');
    Route::get('/tpo-member-secretary', [PlacementController::class, 'tpoMemberSecretary'])->name('tpo-member-secretary');
    Route::get('/about-training', [PlacementController::class, 'training'])->name('training');
});

Route::prefix('d-and-r')->group(function () {
    Route::get('/patents', [DAndRController::class, 'patents'])->name('client.patents');
    Route::get('/rd-cell', [DAndRController::class, 'rdCell'])->name('client.rd-cell');
    Route::get('/research-papers-and-publications', [DAndRController::class, 'researchPapers'])->name('client.research-papers');
    Route::get('/research-development-policy', [DAndRController::class, 'entrepreneurshipDevelopmentCell'])->name('client.edc');
});

Route::prefix('naac')->group(function () {
    Route::get('/aqar', [NaacController::class, 'aqar'])->name('client.aqar');
    Route::get('/best-practices', [NaacController::class, 'bestPractices'])->name('client.best-practices');
    Route::get('/composition-of-iqac', [NaacController::class, 'compositionOfIqac'])->name('client.composition-of-iqac');
    Route::get('/dvv', [NaacController::class, 'dvv'])->name('client.dvv');
    Route::get('/feedback', [NaacController::class, 'feedback'])->name('client.feedback');
    Route::get('/iiqa', [NaacController::class, 'iiqa'])->name('client.iiqa');
    Route::get('/institutional-distinctiveness', [NaacController::class, 'institutionalDistinctiveness'])->name('client.institutional-distinctiveness');
    Route::get('/iqac-committee', [NaacController::class, 'iqacCommittee'])->name('client.iqac-committee');
    Route::get('/minutes-of-meeting-and-action-taken-report', [NaacController::class, 'minutesOfMeeting'])->name('client.minutes-of-meeting');
    Route::get('/ssr-report', [NaacController::class, 'ssrReport'])->name('client.ssr-report');
    Route::get('/statutory-report', [NaacController::class, 'statutoryReport'])->name('client.statutory-report');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
