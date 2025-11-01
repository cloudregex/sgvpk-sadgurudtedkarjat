@extends('layouts.client')

@section('content')
    <div class="container mx-auto px-6 md:px-12 py-10">
        <h3 class="text-3xl font-bold text-blue-600 mb-8">Imp Site's</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ([
            ['img' => 'asset/sites/1logo.png', 'name' => 'आदिवासी विभाग आयुक्तालय', 'url' => 'https://tribal.maharashtra.gov.in'],
            ['img' => 'asset/sites/2logo.png', 'name' => 'National Scholarship Portal', 'url' => 'https://scholarships.gov.in/'],
            ['img' => 'asset/sites/3logo.png', 'name' => 'सामाजिक न्याय व विशेष सहाय्य विभाग', 'url' => 'https://sjsa.maharashtra.gov.in/'],
            ['img' => 'asset/sites/4logo.png', 'name' => 'Aaple Sarkar DBT Portal', 'url' => 'https://mahadbt.maharashtra.gov.in/'],
            ['img' => 'asset/sites/5logo.png', 'name' => 'Savitribai Phule Pune University', 'url' => 'https://unipune.ac.in/'],
            ['img' => 'asset/sites/6logo.png', 'name' => 'Primary/Secondary Scholarship Examination', 'url' => 'https://mscepune.in/'],
            ['img' => 'asset/sites/6logo.png', 'name' => 'Maharashtra State Council Of Examination', 'url' => 'https://mscepune.in/'],
            ['img' => 'asset/sites/8logo.png', 'name' => 'MSCERT', 'url' => 'https://www.maa.ac.in/'],
            ['img' => 'asset/sites/9logo.png', 'name' => 'NCERT', 'url' => 'https://ncert.nic.in/'],
            ['img' => 'asset/sites/10logo.png', 'name' => 'ई - महापरीक्षा पोर्टल', 'url' => 'https://mahaexam.org/'],
            ['img' => 'asset/sites/12logo.png', 'name' => 'MahaIT', 'url' => 'https://mahait.org.in/'],
            ['img' => 'asset/sites/11logo.png', 'name' => 'NCTE', 'url' => 'https://ncte.gov.in/'],
        ] as $site)
                <div
                    class="group bg-white rounded-xl border-2 border-blue-400 shadow hover:shadow-blue-500/40 transition transform hover:-translate-y-1 hover:border-blue-600">
                    <div class="flex flex-col items-center p-6 text-center space-y-4">
                        <div class="w-20 h-20 flex items-center justify-center">
                            <img src="{{ asset($site['img']) }}" alt="{{ $site['name'] }}"
                                class="w-full h-full object-contain">
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition">
                            {{ $site['name'] }}
                        </h4>
                        <a href="{{ $site['url'] }}" target="_blank"
                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-full transition">
                            Visit Site
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
