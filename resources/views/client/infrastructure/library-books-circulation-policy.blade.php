@extends('layouts.client')

@section('content')
    <!-- Main Section -->
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row gap-6">
        <!-- Sidebar -->
        @include('components.infrastructure-side-bar')

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white rounded-lg shadow p-6 leading-relaxed text-gray-800">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 border-b pb-2">
                Library Books Circulation Policy
            </h2>

            <ul class="list-disc pl-6 space-y-3 text-gray-700">
                <li>
                    Students/Staff should produce their <strong>ID Card</strong> for issue of books.
                </li>

                <li>
                    <strong>Lending of books:</strong><br>
                    HOD - 10 books - 30 days<br>
                    Staff - 5 books - 15 days<br>
                    UG Students - 2 books - 15 days<br>
                    PG Students - 2 books - 15 days
                </li>

                <li>
                    Borrowers are responsible for the damage or loss of library books on their library account.
                </li>

                <li>
                    Physical presentation of the book at the counter is required for renewal.
                </li>

                <li>
                    Borrowed books must be returned on or before the stipulated due date.
                </li>

                <li>
                    Books, magazines, and journals should be handled with care; if an issued book is damaged or lost, it
                    should be replaced with the latest edition.
                </li>

                <li>
                    Bags, personal books, eatables, and beverages are not permitted inside the library.
                </li>

                <li>
                    Journals, Magazines, and Newspapers cannot be issued.
                </li>

                <li>
                    Books taken for reading should be left on the table; please do not try to replace the book on the shelf
                    — chances are there it may be misplaced.
                </li>

                <li>
                    Photocopying & Scanning services can be availed; charges are applicable.
                </li>

                <li>
                    The librarian reserves the right to recall a book.
                </li>
            </ul>
        </main>
    </div>
@endsection
