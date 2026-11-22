@extends('layouts.site')

@section('content')

<!-- ===================== HERO ===================== -->
<section class="about-hero">
    <div class="container">
        <span class="ds-eyebrow" style="color:#cfe0f3">About Us</span>
        <h1 data-i18n="about.page_title">About Dalian Medical University</h1>
        <p>A public medical university in Dalian, China, since 1947 — combining teaching, research and clinical practice to train globally-minded healthcare professionals.</p>
    </div>
</section>

<div class="container">
    <nav class="about-crumb" aria-label="breadcrumb">
        <a href="{{ get_absolute_url('index') }}">Home</a> &rsaquo; <span>About</span>
    </nav>
</div>

<main class="ds-section" style="padding-top:2rem">
    <div class="container">
        @if ($aboutSections->isNotEmpty())
            @foreach ($aboutSections as $sec)
                <section class="mb-4" id="{{ $sec->section_key }}">
                    @if (!empty($sec->heading))<h2 class="ds-title">{{ $sec->heading }}</h2>@endif
                    <div class="page-section-body">{!! $sec->body !!}</div>
                </section>
            @endforeach
        @endif

        <div class="accordion about-accordion" id="aboutAccordion">
            <!-- History & Overview -->
            <div class="accordion-item" id="history">
                <h2 class="accordion-header" id="headingHistory">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHistory" aria-expanded="true" aria-controls="collapseHistory"><span data-i18n="about.history_btn">History &amp; Overview</span></button>
                </h2>
                <div id="collapseHistory" class="accordion-collapse collapse show" aria-labelledby="headingHistory" data-bs-parent="#aboutAccordion">
                    <div class="accordion-body">
                        <div class="row g-4 align-items-start">
                            <div class="col-lg-7 about-section-text">
                                <p>
                                    Dalian Medical University was founded in 1947 as Guandong Medical College and took its present name in 1994. Its International Education College, founded in 1985, launched the English-medium MBBS in 2004.
                                </p>
                                <ul>
                                    <li>1947: founded in Dalian as Guandong Medical College.</li>
                                    <li>1994: renamed Dalian Medical University.</li>
                                    <li>2007: moved to the Lvshunkou campus, where the university is today.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 about-media">
                                <div class="ratio ratio-16x9 mb-3">
                                    <!-- Replace src with real campus history video URL -->
                                    <img src="{{ get_absolute_url('assets/images/dmu/dmu-motto-slide.webp') }}" alt="Slide showing the university motto in Chinese characters, with the university name and campus gate" style="object-fit:cover;width:100%;height:100%" loading="lazy">
                                </div>
                                <div class="row g-2 about-media-images">
                                    <div class="col-6">
                                        <img src="images/campus3.webp" alt="Dalian Medical University campus" class="img-fluid" loading="lazy">
                                    </div>
                                    <div class="col-6">
                                        <img src="images/campus1.webp" alt="Dalian Medical University campus" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leadership -->
            <div class="accordion-item" id="leadership">
                <h2 class="accordion-header" id="headingLeadership">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeadership" aria-expanded="false" aria-controls="collapseLeadership"><span data-i18n="about.leadership_btn">Leadership</span></button>
                </h2>
                <div id="collapseLeadership" class="accordion-collapse collapse" aria-labelledby="headingLeadership" data-bs-parent="#aboutAccordion">
                    <div class="accordion-body">
                        <div class="row g-4 align-items-start">
                            <div class="col-lg-7 about-section-text">
                                <p>
                                    Information about the university's leadership and faculty is published by the university on its English website, english.dmu.edu.cn.
                                </p>
                                <ul>
                                    <li>See english.dmu.edu.cn for the university's own leadership pages.</li>
                                    <li>Admissions questions: admissions@dmu.cas.moe.</li>
                                    <li>WhatsApp: +86 176 4041 2827 or +86 156 7775 1526.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 about-media">
                                <div class="ratio ratio-16x9 mb-3">
                                    <!-- Replace src with real leadership message video URL -->
                                    <img src="{{ get_absolute_url('assets/images/dmu/dmu-main-gate.webp') }}" alt="Main gate of Dalian Medical University" style="object-fit:cover;width:100%;height:100%" loading="lazy">
                                </div>
                                <div class="row g-2 about-media-images">
                                    <div class="col-6">
                                        <img src="images/activity2.webp" alt="University leadership" class="img-fluid" loading="lazy">
                                    </div>
                                    <div class="col-6">
                                        <img src="images/activity1.webp" alt="Leadership meeting" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision & Mission -->
            <div class="accordion-item" id="vision">
                <h2 class="accordion-header" id="headingVision">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVision" aria-expanded="false" aria-controls="collapseVision"><span data-i18n="about.vision_btn">Vision &amp; Mission</span></button>
                </h2>
                <div id="collapseVision" class="accordion-collapse collapse" aria-labelledby="headingVision" data-bs-parent="#aboutAccordion">
                    <div class="accordion-body">
                        <div class="row g-4 align-items-start">
                            <div class="col-lg-7 about-section-text">
                                <p>
                                    Dalian Medical University trains students in medicine, dentistry, pharmacy and related fields on a campus of 1,510,000 square metres in Lvshunkou District, Dalian.
                                </p>
                                <ul>
                                    <li>Six disciplines in the top 1% of ESI global rankings, according to DMU.</li>
                                    <li>Three directly affiliated hospitals and 14 affiliated hospitals in total.</li>
                                    <li>More than 1,200 international students from over 100 countries.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 about-media">
                                <div class="ratio ratio-16x9 mb-3">
                                    <!-- Replace src with real vision & mission video URL -->
                                    <img src="{{ get_absolute_url('assets/images/dmu/dmu-campus-trees-and-main-building.webp') }}" alt="Main building behind cypress trees" style="object-fit:cover;width:100%;height:100%" loading="lazy">
                                </div>
                                <div class="row g-2 about-media-images">
                                    <div class="col-6">
                                        <img src="images/class2.webp" alt="Students in lecture" class="img-fluid" loading="lazy">
                                    </div>
                                    <div class="col-6">
                                        <img src="images/class3.webp" alt="Research facilities" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Campus Life -->
            <div class="accordion-item" id="campus">
                <h2 class="accordion-header" id="headingCampus">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCampus" aria-expanded="false" aria-controls="collapseCampus"><span data-i18n="about.campus_btn">Campus Life</span></button>
                </h2>
                <div id="collapseCampus" class="accordion-collapse collapse" aria-labelledby="headingCampus" data-bs-parent="#aboutAccordion">
                    <div class="accordion-body">
                        <div class="row g-4 align-items-start">
                            <div class="col-lg-7 about-section-text">
                                <p>
                                    DMU offers a vibrant campus life with modern facilities, student organizations and cultural
                                    activities that support personal and professional growth.
                                </p>
                                <ul>
                                    <li>Comfortable student housing and on-campus amenities.</li>
                                    <li>Clubs, societies and sports to enrich student experience.</li>
                                    <li>Support services for academic, health and wellbeing needs.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 about-media">
                                <div class="ratio ratio-16x9 mb-3">
                                    <!-- Replace src with real campus life video URL -->
                                    <img src="{{ get_absolute_url('assets/images/dmu/dmu-campus-lake-view.webp') }}" alt="Campus lawns and sea view" style="object-fit:cover;width:100%;height:100%" loading="lazy">
                                </div>
                                <div class="row g-2 about-media-images">
                                    <div class="col-6">
                                        <img src="images/campus9.webp" alt="Campus grounds" class="img-fluid" loading="lazy">
                                    </div>
                                    <div class="col-6">
                                        <img src="images/sports2.webp" alt="Students on campus" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- International Relations -->
            <div class="accordion-item" id="international">
                <h2 class="accordion-header" id="headingInternational">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInternational" aria-expanded="false" aria-controls="collapseInternational">
                        International Relations
                    </button>
                </h2>
                <div id="collapseInternational" class="accordion-collapse collapse" aria-labelledby="headingInternational" data-bs-parent="#aboutAccordion">
                    <div class="accordion-body">
                        <div class="row g-4 align-items-start">
                            <div class="col-lg-7 about-section-text">
                                <p>
                                    Dalian Medical University maintains active partnerships with institutions worldwide, welcoming
                                    international students and fostering global academic exchange.
                                </p>
                                <ul>
                                    <li>Collaborative programs and joint research initiatives.</li>
                                    <li>Student and faculty exchange opportunities.</li>
                                    <li>Dedicated support for international student integration.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 about-media">
                                <div class="ratio ratio-16x9 mb-3">
                                    <!-- Replace src with real international relations video URL -->
                                    <img src="{{ get_absolute_url('assets/images/dmu/dalian-city-view.webp') }}" alt="Aerial view of the centre of Dalian" style="object-fit:cover;width:100%;height:100%" loading="lazy">
                                </div>
                                <div class="row g-2 about-media-images">
                                    <div class="col-6">
                                        <img src="images/class1.webp" alt="International students" class="img-fluid" loading="lazy">
                                    </div>
                                    <div class="col-6">
                                        <img src="images/practice1.webp" alt="Global collaboration" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- ===================== CTA BAND ===================== -->
<section class="ds-section ds-section--soft">
    <div class="container">
        <div class="ds-cta-band">
            <h2>Join Dalian Medical University</h2>
            <p>Explore our programs and start your application for the September 2027 intake.</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ get_absolute_url('programs') }}" class="ds-btn ds-btn--lg" style="background:#fff;color:var(--ds-red)!important">View Programs</a>
                <a href="{{ get_absolute_url('login') }}" class="ds-btn ds-btn--ghost-light ds-btn--lg">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Page Specific JS -->
<script src="{{ get_absolute_url('js/about.js') }}"></script>
@endsection
