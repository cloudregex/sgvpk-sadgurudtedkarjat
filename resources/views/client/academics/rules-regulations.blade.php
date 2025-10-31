@extends('layouts.client')

@section('content')
    <div class="container mx-auto my-10 px-4 flex flex-col md:flex-row gap-6">
        {{-- Sidebar --}}
        @include('components.academics-side-bar')

        {{-- Main Content --}}
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6 leading-relaxed text-gray-800">
            <h2 class="text-2xl font-bold text-blue-800 mb-4 flex items-center">
                <i class="bi bi-mortarboard-fill me-2 text-blue-600"></i> College Rules :
            </h2>
            <ul class="list-disc ps-6 space-y-2 text-sm">
                <li>Ragging, Consuming Alcohol and Smoking Are Strictly Prohibited In The Hostel And College Campus.</li>
                <li>The college aims high priority for discipline and every one, student or staff, is bound to follow the
                    rules and regulations of the college and maintain strict discipline.</li>
                <li>Under disciplinary action, the disciplinary committee is empowered to fine, suspend or even expel a
                    student from the college in interests of the institution.</li>
                <li>Every Student shall maintain himself / herself in such a way so as to cause no disturbance to working of
                    other classes or fellow students.</li>
                <li>No function shall be arranged by the students in hostel or college campus without prior permission from
                    the Principal.</li>
                <li>Writing on walls, pillars, boards or furniture or about books is strictly prohibited.</li>
                <li>Any damage to property of Campus College property will be charged to the account of the student
                    responsible for the damage in addition to disciplinary action.</li>
                <li>Students are forbidden to attend office and lodge when they have the class hours.</li>
                <li>Leave of absence will not be granted during class hours. Short absence in the class is not permitted to
                    be on leave.</li>
                <li>Each student has to ensure that he/she has necessary items such as hall ticket, admit card, pen, pencil,
                    calculator, scale, rubber, etc., for the exam / exam hall.</li>
                <li>Birthday Celebration in the college premises is not permitted.</li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-800 mt-10 mb-4 flex items-center">
                <i class="bi bi-house-door-fill me-2 text-blue-600"></i> Hostel Rules :
            </h2>
            <ul class="list-disc ps-6 space-y-2 text-sm">
                <li>Ragging within or outside the hostel or college is strictly prohibited.</li>
                <li>The students should maintain cordial cleanliness in individual room as well as in the premises of the
                    hostel. Throwing litter carelessly, spitting in the corridors, etc. will be treated as misconduct.</li>
                <li>Inmates should take bed and room allotment as shown or as otherwise permitted.</li>
                <li>The inmates should treat any key which will cause damage to the hostel property.</li>
                <li>Any damage to building, furniture and fixture and fitting of the hostel will be recovered by imposing
                    breakage fine.</li>
                <li>Students are not allowed to keep motorcycles, scooters, mopeds, or any such conveyance.</li>
                <li>Students should switch off electric lights, fans, etc., when they are not in the room, common room and
                    bathroom clean and neatly at all times.</li>
                <li>Inmates should assemble for hostel hours before 10:00 p.m.</li>
                <li>Visitors are not allowed in the hostel between 6:00 p.m. to 9:00 a.m.</li>
                <li>Night roll call will be taken every night at 10:30 p.m. by the hostel warden. All students must be
                    present during this period. Failure to attend the entry in the night roll call will be treated as an act
                    of indiscipline. No hostel student is permitted to leave the hostel without clearance of parents.</li>
                <li>Inmates are not permitted to go outside the campus after the evening hours.</li>
                <li>Inmates are not permitted to organize any picnic or pleasure trips without prior permission of the
                    principal. No unauthorized meetings or activities are permitted in the hostel or the hostel compound.
                </li>
                <li>Students are not allowed to remove or change the furniture of the hostel or shift furniture from one
                    room to another.</li>
                <li>Use of electric heaters, irons, or other electrical appliances is strictly prohibited.</li>
                <li>Guest / day scholars are not allowed entry into the hostel. Action will be taken against the guest / day
                    scholar found in the rooms.</li>
                <li>Students should behave decently and keep discipline inside hostel, veranda, passage, room, dining hall,
                    etc. They should keep decency in dressing, manners, and behaviour.</li>
                <li>Consumption of alcoholic drinks, smoking, and drug use is strictly prohibited.</li>
                <li>Students must not indulge in any activity which may be construed as prejudicial to the hostel premises,
                    which will damage the image of the college, hostel, or the institution.</li>
                <li>The hostel inmates are bound to hostel authorities’ decision in all matters. If required, it would be
                    taken up with authority in a manner peaceful, secured, and cooperative manner.</li>
                <li>Strict disciplinary action will be taken against the inmates who are found guilty of any of the above
                    rules or damage of hostel property. Such students are liable for expulsion from the Hostel/College, as
                    the case is at the discretion of the Disciplinary Committee after final hearing from the student and
                    their parents.</li>
            </ul>
        </main>
    </div>
@endsection
