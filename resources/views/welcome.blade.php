<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightBuild - Premium Construction</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fff1e8',
                            600: '#fe5208',
                            700: '#d84400',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- ================= NAVBAR ================= --}}
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-slate-100">
        <nav class="max-w-7xl mx-auto px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2 font-bold text-xl text-slate-900">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-brand-600 rounded-md">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6" />
                    </svg>
                </span>
                Bright<span class="text-brand-600">Build</span>
            </a>

            <ul class="hidden lg:flex items-center gap-8 text-sm font-medium text-slate-600">
                <li><a href="#" class="text-brand-600">Home</a></li>
                <li><a href="#" class="hover:text-brand-600 transition">About</a></li>
                <li><a href="#" class="hover:text-brand-600 transition">Services</a></li>
                <li><a href="#" class="hover:text-brand-600 transition">Projects</a></li>
                <li><a href="#" class="hover:text-brand-600 transition">Process</a></li>
                <li class="relative group">
                    <a href="#" class="hover:text-brand-600 transition inline-flex items-center gap-1">
                        Resources
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul class="absolute left-0 top-full mt-2 w-44 bg-white border border-slate-100 rounded-lg shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-slate-50">Project Gallery</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-slate-50">Case Studies</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-slate-50">FAQs</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-slate-50">Safety</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-slate-50">News &amp; Insights</a></li>
                    </ul>
                </li>
                <li><a href="#" class="hover:text-brand-600 transition">Contact</a></li>
            </ul>

            <div class="hidden lg:block">
                <a href="#" class="bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold px-5 py-2.5 rounded-md transition">
                    Get a Quote
                </a>
            </div>

            {{-- Mobile menu button --}}
            <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="lg:hidden text-slate-700">
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-100 px-6 py-4 space-y-3 text-sm font-medium text-slate-600">
            <a href="#" class="block text-brand-600">Home</a>
            <a href="#" class="block hover:text-brand-600">About</a>
            <a href="#" class="block hover:text-brand-600">Services</a>
            <a href="#" class="block hover:text-brand-600">Projects</a>
            <a href="#" class="block hover:text-brand-600">Process</a>
            <a href="#" class="block hover:text-brand-600">Resources</a>
            <a href="#" class="block hover:text-brand-600">Contact</a>
            <a href="#" class="block bg-brand-600 text-white text-center font-semibold px-5 py-2.5 rounded-md">Get a Quote</a>
        </div>
    </header>

    {{-- ================= HERO ================= --}}
    <section class="relative bg-slate-900">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1600&auto=format&fit=crop" alt="Construction site" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/70 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-24 lg:py-32">
            <p class="text-brand-600 font-semibold text-sm tracking-wide mb-4">PREMIUM CONSTRUCTION. BUILT TO LAST.</p>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight max-w-xl">
                Building Spaces. Creating Futures.
            </h1>
            <p class="mt-6 text-slate-600 max-w-md leading-relaxed">
                BrightBuild adalah kontraktor konstruksi umum full-service yang menghadirkan proyek komersial, residensial, dan industri berkualitas tinggi dengan integritas dan presisi.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="#" class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-md transition">
                    Lihat Proyek Kami
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="#" class="inline-flex items-center gap-2 bg-white border border-slate-300 hover:border-brand-600 text-slate-800 font-semibold px-6 py-3 rounded-md transition">
                    Dapatkan Penawaran
                </a>
            </div>
        </div>
    </section>

    {{-- ================= SERVICES ================= --}}
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <p class="text-brand-600 font-semibold text-sm tracking-wide mb-3">WHAT WE DO</p>
        <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 max-w-2xl">Comprehensive Construction Services</h2>
        <p class="mt-4 text-slate-500 max-w-2xl">Dari konsep hingga penyelesaian, kami memberikan solusi konstruksi terbaik yang disesuaikan dengan visi Anda dan dibangun untuk melampaui ekspektasi.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            @php
                $services = [
                    ['title' => 'Commercial Construction', 'desc' => 'Gedung perkantoran, ruang ritel, dan fasilitas komersial dibangun dengan presisi.'],
                    ['title' => 'Residential Construction', 'desc' => 'Rumah custom dan hunian multi-keluarga yang dirancang untuk kehidupan modern.'],
                    ['title' => 'Industrial Construction', 'desc' => 'Gudang, pabrik, dan fasilitas industri yang dibangun untuk performa.'],
                    ['title' => 'Renovation & Remodeling', 'desc' => 'Mengubah ruang dengan renovasi ahli dan pembaruan modern.'],
                    ['title' => 'Construction Management', 'desc' => 'Manajemen proyek menyeluruh yang memastikan kualitas, tepat waktu, dan sesuai anggaran.'],
                ];
            @endphp

            @foreach ($services as $service)
            <div class="border border-slate-100 rounded-xl p-6 hover:shadow-lg transition">
                <div class="w-12 h-12 rounded-lg bg-brand-50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6" />
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-900">{{ $service['title'] }}</h3>
                <p class="mt-2 text-sm text-slate-500 leading-relaxed">{{ $service['desc'] }}</p>
                <a href="#" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-brand-600">
                    Learn More
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    {{-- ================= STATS ================= --}}
    <section class="bg-slate-50 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12 grid grid-cols-2 lg:grid-cols-4 gap-8 text-center lg:text-left">
            @php
                $stats = [
                    ['value' => '250+', 'label' => 'Projects Completed'],
                    ['value' => '150+', 'label' => 'Happy Clients'],
                    ['value' => '25+', 'label' => 'Years of Experience'],
                    ['value' => '98%', 'label' => 'Client Satisfaction'],
                ];
            @endphp
            @foreach ($stats as $stat)
            <div class="flex items-center justify-center lg:justify-start gap-4">
                <div class="w-12 h-12 rounded-lg bg-white border border-slate-200 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-slate-900">{{ $stat['value'] }}</p>
                    <p class="text-sm text-slate-500">{{ $stat['label'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- ================= FEATURED PROJECTS ================= --}}
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <div class="flex items-end justify-between flex-wrap gap-4 mb-12">
            <div>
                <p class="text-brand-600 font-semibold text-sm tracking-wide mb-3">OUR WORK</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900">Featured Projects</h2>
            </div>
            <a href="#" class="inline-flex items-center gap-1 text-sm font-semibold text-brand-600">
                View All Projects
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $projects = [
                    ['title' => 'Riverside Office Complex', 'category' => 'Commercial Construction', 'info' => '25,000 sq ft · Austin, TX', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop'],
                    ['title' => 'Modern Hills Residence', 'category' => 'Residential Construction', 'info' => '4,200 sq ft · Westlake, TX', 'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop'],
                    ['title' => 'LogiCore Distribution Center', 'category' => 'Industrial Construction', 'info' => '120,000 sq ft · Dallas, TX', 'img' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?q=80&w=800&auto=format&fit=crop'],
                    ['title' => 'Parkway Retail Center', 'category' => 'Commercial Construction', 'info' => '18,500 sq ft · Plano, TX', 'img' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=800&auto=format&fit=crop'],
                ];
            @endphp

            @foreach ($projects as $project)
            <div class="rounded-xl overflow-hidden border border-slate-100 hover:shadow-lg transition">
                <img src="{{ $project['img'] }}" alt="{{ $project['title'] }}" class="w-full h-44 object-cover">
                <div class="p-5">
                    <h3 class="font-semibold text-slate-900">{{ $project['title'] }}</h3>
                    <p class="text-sm text-brand-600 mt-1">{{ $project['category'] }}</p>
                    <p class="text-sm text-slate-500 mt-1">{{ $project['info'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- ================= PROCESS ================= --}}
    <section class="bg-slate-50 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-brand-600 font-semibold text-sm tracking-wide mb-3">OUR PROCESS</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900">A Proven Process. Exceptional Results.</h2>
                <p class="mt-4 text-slate-500 max-w-md">Kami mengikuti proses tepercaya yang memastikan setiap proyek diselesaikan dengan kualitas, transparansi, dan efisiensi.</p>
                <a href="#" class="mt-6 inline-block bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-md transition">
                    Learn More About Our Process
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-y-10 gap-x-4">
                @php
                    $steps = [
                        ['num' => '1', 'title' => 'Consultation', 'desc' => 'Kami mendengarkan kebutuhan dan memahami visi Anda.'],
                        ['num' => '2', 'title' => 'Planning', 'desc' => 'Perencanaan detail, penganggaran, dan penjadwalan.'],
                        ['num' => '3', 'title' => 'Construction', 'desc' => 'Konstruksi ahli dengan kualitas dan keamanan terdepan.'],
                        ['num' => '4', 'title' => 'Quality Control', 'desc' => 'Inspeksi ketat memastikan setiap detail memenuhi standar.'],
                        ['num' => '5', 'title' => 'Project Handover', 'desc' => 'Pengiriman tepat waktu dan dukungan berkelanjutan.'],
                    ];
                @endphp
                @foreach ($steps as $step)
                <div class="text-center">
                    <div class="w-10 h-10 mx-auto rounded-full bg-brand-600 text-white font-semibold flex items-center justify-center">
                        {{ $step['num'] }}
                    </div>
                    <h4 class="mt-3 font-semibold text-slate-900 text-sm">{{ $step['title'] }}</h4>
                    <p class="mt-1 text-xs text-slate-500 leading-relaxed">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= TESTIMONIALS ================= --}}
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-3 gap-10 items-start">
            <div>
                <p class="text-brand-600 font-semibold text-sm tracking-wide mb-3">WHAT OUR CLIENTS SAY</p>
                <h2 class="text-3xl font-bold text-slate-900">Trusted by Clients. Proven by Results.</h2>
            </div>

            <div class="lg:col-span-2 grid sm:grid-cols-3 gap-6">
                @php
                    $testimonials = [
                        ['quote' => 'BrightBuild menyelesaikan kompleks perkantoran kami lebih cepat dari jadwal dan melampaui ekspektasi kami di setiap aspek.', 'name' => 'David Thompson', 'role' => 'CEO, Thompson Partners'],
                        ['quote' => 'Perhatian mereka terhadap detail dan komitmen pada kualitas tak tertandingi. Kami sangat senang dengan rumah baru kami.', 'name' => 'Sarah Mitchell', 'role' => 'Homeowner'],
                        ['quote' => 'BrightBuild adalah kontraktor andalan kami untuk setiap proyek. Andal, transparan, dan berorientasi hasil.', 'name' => 'Michael Rodriguez', 'role' => 'Director, Horizon Logistics'],
                    ];
                @endphp
                @foreach ($testimonials as $t)
                <div class="border border-slate-100 rounded-xl p-6">
                    <svg class="w-6 h-6 text-brand-600 mb-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
                    </svg>
                    <p class="text-sm text-slate-600 leading-relaxed">{{ $t['quote'] }}</p>
                    <div class="mt-4 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-slate-200"></div>
                        <div>
                            <p class="text-sm font-semibold text-slate-900">{{ $t['name'] }}</p>
                            <p class="text-xs text-slate-500">{{ $t['role'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= CONTACT ================= --}}
    <section class="grid lg:grid-cols-2">
        <div class="h-72 lg:h-auto">
            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200&auto=format&fit=crop" alt="Construction site meeting" class="w-full h-full object-cover">
        </div>
        <div class="px-6 lg:px-16 py-16 bg-white">
            <p class="text-brand-600 font-semibold text-sm tracking-wide mb-3">GET IN TOUCH</p>
            <h2 class="text-3xl font-bold text-slate-900">Let's Build Something Great Together</h2>
            <p class="mt-3 text-slate-500">Punya proyek dalam pikiran? Mari diskusikan bagaimana BrightBuild dapat mewujudkan visi Anda.</p>

            <form action="#" method="POST" class="mt-8 space-y-4">
                <div class="grid sm:grid-cols-2 gap-4">
                    <input type="text" placeholder="Full Name" class="w-full border border-slate-300 rounded-md px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600">
                    <input type="email" placeholder="Email Address" class="w-full border border-slate-300 rounded-md px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600">
                </div>
                <div class="grid sm:grid-cols-2 gap-4">
                    <input type="text" placeholder="Phone Number" class="w-full border border-slate-300 rounded-md px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600">
                    <input type="text" placeholder="Company (Optional)" class="w-full border border-slate-300 rounded-md px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600">
                </div>
                <textarea rows="4" placeholder="Tell us about your project" class="w-full border border-slate-300 rounded-md px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand-600"></textarea>
                <button type="submit" class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-md transition">
                    Send Message
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
            </form>
        </div>
    </section>

    {{-- ================= FOOTER ================= --}}
    <footer class="bg-slate-900 text-slate-400">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 grid sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <div>
                <a href="#" class="flex items-center gap-2 font-bold text-lg text-white mb-4">
                    <span class="inline-flex items-center justify-center w-8 h-8 bg-brand-600 rounded-md">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6" />
                        </svg>
                    </span>
                    BrightBuild
                </a>
                <p class="text-sm leading-relaxed">BrightBuild adalah kontraktor konstruksi umum terkemuka yang berkomitmen memberikan solusi konstruksi berkualitas dengan integritas, profesionalisme, dan layanan yang unggul.</p>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition">Services</a></li>
                    <li><a href="#" class="hover:text-white transition">Projects</a></li>
                    <li><a href="#" class="hover:text-white transition">Our Process</a></li>
                    <li><a href="#" class="hover:text-white transition">Careers</a></li>
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Services</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Commercial Construction</a></li>
                    <li><a href="#" class="hover:text-white transition">Residential Construction</a></li>
                    <li><a href="#" class="hover:text-white transition">Industrial Construction</a></li>
                    <li><a href="#" class="hover:text-white transition">Renovation &amp; Remodeling</a></li>
                    <li><a href="#" class="hover:text-white transition">Construction Management</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">Contact Us</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex gap-2">
                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        123 Construction Way, Austin TX 78701
                    </li>
                    <li class="flex gap-2">
                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        (512) 555-0188
                    </li>
                    <li class="flex gap-2">
                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        info@brightbuild.com
                    </li>
                    <li class="flex gap-2">
                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Mon - Fri 7:00 AM - 5:00 PM
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm">
                <p>&copy; {{ date('Y') }} BrightBuild. All rights reserved.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-white transition">Facebook</a>
                    <a href="#" class="hover:text-white transition">LinkedIn</a>
                    <a href="#" class="hover:text-white transition">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>