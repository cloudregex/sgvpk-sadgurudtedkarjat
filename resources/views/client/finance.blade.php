@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-16">
        <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-10 border-b-4 border-blue-500 inline-block pb-2">
            <i class="bi bi-cash-coin text-blue-600 mr-2"></i> Finance & Account
        </h1>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div
                class="backdrop-blur-lg bg-white/70 rounded-2xl shadow-xl border border-blue-100 p-6 hover:scale-105 transition-all duration-500 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">
                            <i class="bi bi-file-earmark-bar-graph-fill text-blue-600 mr-2"></i>
                            Balance Sheet
                        </h3>
                        <p class="text-sm text-gray-500">Annual financial summary and balance overview.</p>
                    </div>
                    <a href="{{ asset('asset/BALANCESHEET.pdf') }}" target="_blank"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg flex items-center gap-2 shadow-md transition-all">
                        <i class="bi bi-download"></i> View
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="backdrop-blur-lg bg-white/70 rounded-2xl shadow-xl border border-blue-100 p-6 hover:scale-105 transition-all duration-500 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">
                            <i class="bi bi-graph-up-arrow text-blue-600 mr-2"></i>
                            Income & Expenditure
                        </h3>
                        <p class="text-sm text-gray-500">Detailed report of income and expenses.</p>
                    </div>
                    <a href="{{ asset('asset/INCOME-AND-EXPADUTRE.pdf') }}" target="_blank"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg flex items-center gap-2 shadow-md transition-all">
                        <i class="bi bi-download"></i> View
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="backdrop-blur-lg bg-white/70 rounded-2xl shadow-xl border border-blue-100 p-6 hover:scale-105 transition-all duration-500 hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">
                            <i class="bi bi-receipt-cutoff text-blue-600 mr-2"></i>
                            Receipt & Payment
                        </h3>
                        <p class="text-sm text-gray-500">Transactions and payment records for the year.</p>
                    </div>
                    <a href="{{ asset('asset/RECIPT-AND-PAYMENT-ACCOUNT.pdf') }}" target="_blank"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg flex items-center gap-2 shadow-md transition-all">
                        <i class="bi bi-download"></i> View
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
