@extends('layouts.site')

@section('content')

<!-- FAQ structured data (built from the same FAQs shown below) -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {!! $faqSchema !!}

  ]
}
</script>

<!-- Webinar Registration Modal (functionality preserved) -->
<div class="webinar-modal-overlay" id="webinarModal" style="{{ $formSubmitted ? 'display: none;' : '' }}">
    <div class="webinar-modal-content">
        <button class="webinar-close-btn" id="closeWebinarModal">&times;</button>
        <div class="webinar-header">
            <h3 data-i18n="home.modal_title">Apply for MOE Listed English Taught MBBS – 2027 Intake</h3>
        </div>
        <div class="webinar-details"></div>
        <form class="webinar-form" method="POST" action="">
            <div class="form-group">
                <select class="form-control" name="applying_for" required>
                    <option value="" data-i18n="home.select_program">Select Program</option>
                    <option value="MBBS">MBBS</option>
                    <option value="Chinese Language">Chinese Language</option>
                    <option value="Master">Master</option>
                    <option value="PHD">PHD</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" data-i18n-placeholder="home.name_placeholder" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nationality" placeholder="Nationality" data-i18n-placeholder="home.nationality_placeholder" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" data-i18n-placeholder="home.email_placeholder" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="whatsapp" placeholder="WhatsApp Number" data-i18n-placeholder="home.whatsapp_placeholder" required>
            </div>
            <button type="submit" name="webinar_register" class="btn btn-primary-custom w-100" data-i18n="home.submit">Submit</button>
        </form>
    </div>
</div>

@if ($formSubmitted)
<div class="alert-overlay" id="successAlert">
    <div class="alert-content">
        <p>{{ $successMessage }}</p>
        <button class="alert-ok-btn" onclick="document.getElementById('successAlert').style.display='none';">OK</button>
    </div>
</div>
@endif

<style>
.webinar-modal-overlay{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.8);display:flex;justify-content:center;align-items:center;z-index:9999}
.webinar-modal-content{background:#fff;padding:20px;border-radius:8px;width:90%;max-width:400px;position:relative;box-shadow:0 4px 20px rgba(0,0,0,.2)}
.webinar-close-btn{position:absolute;top:10px;right:15px;background:none;border:none;font-size:24px;cursor:pointer;color:#666;width:30px;height:30px;line-height:30px}
.webinar-close-btn:hover{color:#333}
.webinar-header h3{color:#003366;font-size:18px;margin-bottom:15px;text-align:center;padding-right:20px}
.webinar-details{padding:0;margin-bottom:10px}
.webinar-form .form-group{margin-bottom:15px}
.webinar-form .form-control{width:100%;padding:8px 12px;border:1px solid #ddd;border-radius:4px;font-size:14px;box-sizing:border-box}
.webinar-form select.form-control{appearance:none;background-image:url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right 8px center;background-size:1.5em 1.5em;padding-right:2.5em}
.webinar-form .btn{padding:10px}
.alert-overlay{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.8);display:flex;justify-content:center;align-items:center;z-index:10000}
.alert-content{background:#fff;padding:20px;border-radius:8px;width:90%;max-width:400px;text-align:center;box-shadow:0 4px 20px rgba(0,0,0,.2)}
.alert-content p{margin-bottom:20px;color:#333;font-size:16px}
.alert-ok-btn{background:#003366;color:#fff;border:none;padding:10px 30px;border-radius:4px;cursor:pointer;font-size:16px}
.alert-ok-btn:hover{background:#002244}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const webinarModal = document.getElementById('webinarModal');
    const closeWebinarModal = document.getElementById('closeWebinarModal');
    @if (!$formSubmitted)
    setTimeout(() => { if (webinarModal) webinarModal.style.display = 'flex'; }, 1200);
    @endif
    if (closeWebinarModal) closeWebinarModal.addEventListener('click', () => webinarModal.style.display = 'none');
    if (webinarModal) webinarModal.addEventListener('click', (e) => { if (e.target === webinarModal) webinarModal.style.display = 'none'; });
    document.querySelectorAll('[data-open-apply]').forEach(function (el) {
        el.addEventListener('click', function (e) { e.preventDefault(); if (webinarModal) webinarModal.style.display = 'flex'; });
    });
});
</script>

<!-- Cross-promo popup mount point -->

<!-- ============================ HERO (bright campus carousel under the menu bar) ============================ -->
<section class="home-hero home-hero--full home-hero--bright" id="apply">
    <div class="home-hero__stage">
    <div id="heroCarousel" class="carousel slide carousel-fade home-hero__carousel" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-inner">
            <div class="carousel-item active"><div class="home-hero__bg" role="img" aria-label="Glass teaching building" style="background-image:url('{{ get_absolute_url('assets/images/dmu/dmu-glass-teaching-building.webp') }}')"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Campus lawns and sea view" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-campus-lake-view.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Library" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-library.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Students on a flower-covered lawn" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-campus-spring-flowers.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Main building behind cypress trees" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-campus-trees-and-main-building.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Main gate" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-main-gate-panorama.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Willow trees by the sea" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-campus-willows-and-sea.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="1947 arch and student residence" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-1947-arch-and-student-hostel.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Campus lake at night" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-campus-lake-at-night.webp') }}"></div></div>
            <div class="carousel-item"><div class="home-hero__bg" role="img" aria-label="Main building at night" data-bg="{{ get_absolute_url('assets/images/dmu/dmu-main-building-at-night.webp') }}"></div></div>
        </div>
        <div class="carousel-indicators home-hero__pager">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
            </div>
        <button class="carousel-control-prev home-hero__nav" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous slide"><span aria-hidden="true">&lsaquo;</span></button>
        <button class="carousel-control-next home-hero__nav" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next slide"><span aria-hidden="true">&rsaquo;</span></button>
    </div>
    </div>
    <div class="container home-hero__content">
        <div class="home-hero__inner">
            <span class="ds-eyebrow home-hero__eyebrow">{{ $t['home_hero_eyebrow'] }}</span>
            <h1>{{ $t['hero_headline'] }}</h1>
            <p class="home-hero__lead">
                {{ $t['hero_subtext'] }}
            </p>
            <div class="home-hero__trust">
                <span class="ds-pill">{{ $t['home_trust1'] }}</span>
                <span class="ds-pill">{{ $t['home_trust2'] }}</span>
                <span class="ds-pill">{{ $t['home_trust3'] }}</span>
                <span class="ds-pill">{{ $t['home_trust4'] }}</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== GUIDES (featured + list, styled after the DMU home page) ===================== -->
<section class="ds-section" id="updates">
    <div class="container">
        <div class="dmu-sechead">
            <span class="dmu-sechead__icon"><i class="fas fa-newspaper"></i></span>
            <div class="dmu-sechead__text"><h2>{{ $t['home_news_title'] }}</h2><span>{{ strtoupper($t['home_news_eyebrow']) }}</span></div>
            <a href="{{ get_absolute_url('blogs') }}" class="dmu-sechead__more" data-i18n="home.view_all_news">View More &rsaquo;</a>
        </div>
        @php
            $guideRows = collect(config('seo_guides'))->map(function ($g, $slug) {
                $img = collect($g['sections'] ?? [])->pluck('img.src')->filter()->first();
                return ['href' => get_absolute_url($slug), 'title' => $g['h1'] ?? $g['title'], 'excerpt' => \Illuminate\Support\Str::limit($g['description'] ?? '', 160),
                        'date' => $g['updated'] ?? '', 'img' => $img ? get_absolute_url($img) : get_absolute_url('images/logo.png')];
            });
            $guideFeat = $guideRows->get('mbbs-in-china-2027') ?? $guideRows->first();
            $guideRest = $guideRows->except(['mbbs-in-china-2027'])->take(6);
        @endphp
        @if ($guideFeat)
        <div class="home-news2">
            <a class="home-news2__feature" href="{{ $guideFeat['href'] }}">
                <span class="home-news2__img" style="background-image:url('{{ $guideFeat['img'] }}')"></span>
                <span class="home-news2__fbody">
                    <span class="home-news2__date">{{ $guideFeat['date'] }}</span>
                    <span class="home-news2__ftitle">{{ $guideFeat['title'] }}</span>
                    <span class="home-news2__fexc">{{ $guideFeat['excerpt'] }}</span>
                </span>
            </a>
            <div class="home-news2__list">
                @foreach ($guideRest as $b)
                <a class="home-news2__item" href="{{ $b['href'] }}">
                    <span class="home-news2__idate">{{ $b['date'] }}</span>
                    <span class="home-news2__ititle">{{ $b['title'] }}</span>
                </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

<!-- ===================== NOTICES | PROGRAMMES | QUICK LINKS ===================== -->
<section class="ds-section ds-section--soft" id="notices">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="dmu-sechead dmu-sechead--sm">
                    <span class="dmu-sechead__icon"><i class="fas fa-bullhorn"></i></span>
                    <div class="dmu-sechead__text"><h2>Admission notices</h2><span>NOTICES</span></div>
                    <a href="{{ get_absolute_url('adm-HtApply') }}" class="dmu-sechead__more">View More &rsaquo;</a>
                </div>
                <ul class="dmu-list">
                    <li><a href="{{ get_absolute_url('mbbs-in-china-admission-calendar-2027') }}"><b>1 Mar &ndash; 5 Jul</b> September (autumn) intake: application window</a></li>
                    <li><a href="{{ get_absolute_url('mbbs-in-china-spring-intake-2027') }}"><b>1 Sep &ndash; 5 Jan</b> March (spring) intake: application window</a></li>
                    <li><a href="{{ get_absolute_url('mbbs-in-china-fees-2027') }}"><b>22 Nov 2026</b> MBBS fee table last checked</a></li>
                    <li><a href="{{ get_absolute_url('mbbs-in-china-eligibility-2027') }}"><b>Ages 18&ndash;25</b> MBBS and BDS entry requirements</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="dmu-sechead dmu-sechead--sm">
                    <span class="dmu-sechead__icon"><i class="fas fa-graduation-cap"></i></span>
                    <div class="dmu-sechead__text"><h2>Programmes</h2><span>PROGRAMMES</span></div>
                    <a href="{{ get_absolute_url('programs') }}" class="dmu-sechead__more">View More &rsaquo;</a>
                </div>
                <ul class="dmu-list">
                    @foreach ($homePrograms as $p)
                    <li><a href="{{ $p['url'] }}"><b>{{ $p['title'] }}</b> {{ \Illuminate\Support\Str::limit($p['description'], 70) }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="dmu-links">
                    <div class="dmu-links__head"><i class="fas fa-link"></i><div><h2>Quick links</h2><span>LINKS</span></div></div>
                    <div class="dmu-links__grid">
                        <a href="{{ get_absolute_url('login') }}"><i class="fas fa-file-pen"></i>Apply online</a>
                        <a href="{{ get_absolute_url('fees') }}"><i class="fas fa-yen-sign"></i>Fees</a>
                        <a href="{{ get_absolute_url('mbbs') }}"><i class="fas fa-user-doctor"></i>MBBS</a>
                        <a href="{{ get_absolute_url('scholarships') }}"><i class="fas fa-award"></i>Scholarships</a>
                        <a href="{{ get_absolute_url('adm-HtApply') }}"><i class="fas fa-list-check"></i>How to apply</a>
                        <a href="{{ get_absolute_url('contact') }}"><i class="fas fa-envelope"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RECOGNITION STRIP ===================== -->
<section class="home-accred">
    <div class="container">
        <div class="row g-3">
            @foreach ($homeAccred as $a)
            <div class="col-md-3 col-6"><div class="home-accred__item"><div><h4>{{ $a->title }}</h4><p>{{ $a->description }}</p></div></div></div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===================== DATA STRIP (blue, round icons) ===================== -->
<section class="dmu-data">
    <div class="container">
        <div class="dmu-sechead dmu-sechead--light">
            <span class="dmu-sechead__icon"><i class="fas fa-chart-column"></i></span>
            <div class="dmu-sechead__text"><h2>DMU in numbers</h2><span>DATA</span></div>
            <a href="{{ get_absolute_url('about') }}" class="dmu-sechead__more">View More &rsaquo;</a>
        </div>
        <div class="row g-4 text-center text-md-start">
            <div class="col-6 col-md-3"><div class="dmu-data__item"><span class="dmu-data__icon"><i class="fas fa-landmark"></i></span><div><b><span data-count="{{ $stats[1] }}">0</span></b><small>{{ $t['home_stat1_label'] }}</small></div></div></div>
            <div class="col-6 col-md-3"><div class="dmu-data__item"><span class="dmu-data__icon"><i class="fas fa-earth-asia"></i></span><div><b><span data-count="{{ $stats[2] }}">0</span>+</b><small>{{ $t['home_stat2_label'] }}</small></div></div></div>
            <div class="col-6 col-md-3"><div class="dmu-data__item"><span class="dmu-data__icon"><i class="fas fa-flag"></i></span><div><b><span data-count="{{ $stats[3] }}">0</span>+</b><small>{{ $t['home_stat3_label'] }}</small></div></div></div>
            <div class="col-6 col-md-3"><div class="dmu-data__item"><span class="dmu-data__icon"><i class="fas fa-user-nurse"></i></span><div><b><span data-count="{{ $stats[4] }}">0</span>+</b><small>{{ $t['home_stat4_label'] }}</small></div></div></div>
        </div>
    </div>
</section>

<!-- ===================== CAMPUS IN PICTURES (mosaic) ===================== -->
<section class="ds-section" id="campus-pictures">
    <div class="container">
        <div class="dmu-sechead">
            <span class="dmu-sechead__icon"><i class="fas fa-images"></i></span>
            <div class="dmu-sechead__text"><h2>Campus in pictures</h2><span>PICTURE</span></div>
            <a href="{{ get_absolute_url('gallery') }}" class="dmu-sechead__more">View More &rsaquo;</a>
        </div>
        <div class="dmu-mosaic">
            <a class="dmu-mosaic__a" href="{{ get_absolute_url('gallery') }}"><img src="{{ get_absolute_url('assets/images/dmu/dmu-letters-campus-scenes.webp') }}" alt="DMU lettering with three campus scenes" loading="lazy"></a>
            <a class="dmu-mosaic__b" href="{{ get_absolute_url('gallery') }}"><img src="{{ get_absolute_url('assets/images/dmu/dmu-main-gate-panorama.webp') }}" alt="Main gate of Dalian Medical University" loading="lazy"><span>Main gate</span></a>
            <a class="dmu-mosaic__c" href="{{ get_absolute_url('gallery') }}"><img src="{{ get_absolute_url('assets/images/dmu/dmu-1947-arch-dusk.webp') }}" alt="The 1947 stone arch at dusk" loading="lazy"><span>The 1947 arch</span></a>
            <a class="dmu-mosaic__d" href="{{ get_absolute_url('gallery') }}"><img src="{{ get_absolute_url('assets/images/dmu/dmu-library.webp') }}" alt="DMU library" loading="lazy"><span>Library</span></a>
            <a class="dmu-mosaic__e" href="{{ get_absolute_url('gallery') }}"><img src="{{ get_absolute_url('assets/images/dmu/dmu-campus-willows-and-sea.webp') }}" alt="Willow trees by the sea" loading="lazy"><span>By the sea</span></a>
        </div>
    </div>
</section>

<!-- ===================== SPECIAL TOPICS ===================== -->
<section class="ds-section ds-section--soft" id="topics">
    <div class="container">
        <div class="dmu-sechead">
            <span class="dmu-sechead__icon"><i class="fas fa-bookmark"></i></span>
            <div class="dmu-sechead__text"><h2>Topics</h2><span>SPECIAL</span></div>
            <a href="{{ get_absolute_url('blogs') }}" class="dmu-sechead__more">View More &rsaquo;</a>
        </div>
        <div class="row g-3">
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--blue" href="{{ get_absolute_url('moe-listed-mbbs-universities-in-china') }}">MOE-listed MBBS universities</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--teal" href="{{ get_absolute_url('mbbs-in-china-fees-2027') }}">MBBS fees 2027</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--green" href="{{ get_absolute_url('mbbs-in-china-scholarship-2027') }}">Scholarships</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--red" href="{{ get_absolute_url('china-student-visa-for-mbbs') }}">Student visa guide</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--blue" href="{{ get_absolute_url('bds-in-china') }}">BDS in China</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--teal" href="{{ get_absolute_url('study-in-china') }}">Study in China</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--green" href="{{ get_absolute_url('dalian-medical-university') }}">Dalian Medical University</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--red" href="{{ get_absolute_url('mbbs-in-china-2027') }}">MBBS in China 2027</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--blue" href="{{ get_absolute_url('mbbs-in-china-from-africa') }}">MBBS from Africa</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--teal" href="{{ get_absolute_url('mbbs-in-china-from-the-gulf') }}">MBBS from the Gulf</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--green" href="{{ get_absolute_url('mbbs-in-china-from-europe') }}">MBBS from Europe</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--red" href="{{ get_absolute_url('mbbs-in-china-from-russia-and-central-asia') }}">MBBS from Russia &amp; Central Asia</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--blue" href="{{ get_absolute_url('mbbs-in-china-from-south-asia') }}">MBBS from South Asia</a></div>
            <div class="col-6 col-lg-3"><a class="dmu-topic dmu-topic--teal" href="{{ get_absolute_url('mbbs-in-china-from-southeast-asia') }}">MBBS from Southeast Asia</a></div>
        </div>
    </div>
</section>

<!-- ===================== CONTACT (WhatsApp / WeChat) ===================== -->
<section class="dmu-c2-wrap">
    <div class="container">
        <div class="dmu-c2">
            <div class="dmu-c2__info">
                <span class="dmu-c2__eyebrow">Contact</span>
                <h2 class="dmu-c2__title">Talk to our admissions team</h2>
                <ul class="dmu-c2__list">
                    <li><a href="https://wa.me/8618041566030" target="_blank" rel="noopener noreferrer">
                        <span class="dmu-c2__icon dmu-c2__icon--wa"><i class="fab fa-whatsapp"></i></span>
                        <span class="dmu-c2__text"><small>WhatsApp</small><b>+86 180 4156 6030</b></span>
                        <i class="fas fa-arrow-right dmu-c2__go"></i></a></li>
                    <li><a href="https://wa.me/8617640412827" target="_blank" rel="noopener noreferrer">
                        <span class="dmu-c2__icon dmu-c2__icon--wa"><i class="fab fa-whatsapp"></i></span>
                        <span class="dmu-c2__text"><small>WhatsApp</small><b>+86 176 4041 2827</b></span>
                        <i class="fas fa-arrow-right dmu-c2__go"></i></a></li>
                    <li><a href="mailto:admissions@dmu.cas.moe">
                        <span class="dmu-c2__icon"><i class="far fa-envelope"></i></span>
                        <span class="dmu-c2__text"><small>Email</small><b>admissions@dmu.cas.moe</b></span>
                        <i class="fas fa-arrow-right dmu-c2__go"></i></a></li>
                </ul>
            </div>
            <div class="dmu-c2__qrs">
                <span class="dmu-c2__qrtitle"><i class="fab fa-weixin"></i> WeChat</span>
                <div class="dmu-c2__qrrow">
                    <figure><img src="{{ get_absolute_url('images/wechat.png') }}" alt="WeChat QR code for admissions" loading="lazy" width="112" height="112"></figure>
                    <figure><img src="{{ get_absolute_url('images/qr-consultation.jpg') }}" alt="WeChat QR code for consultation" loading="lazy" width="112" height="112"></figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ABOUT (text first, then full-width banner) ===================== -->
<section class="ds-section about-section" id="about-dmu">
    <div class="container">
        <div class="about-intro">
            <span class="ds-eyebrow">{{ $t['home_about_eyebrow'] }}</span>
            <h2 class="ds-title">{{ $t['home_about_title'] }}</h2>
            <p class="ds-lead">{{ $t['home_about_lead'] }}</p>
            <ul class="home-about__list">
                <li>{{ $t['home_about_point1'] }}</li>
                <li>{{ $t['home_about_point2'] }}</li>
                <li>{{ $t['home_about_point3'] }}</li>
            </ul>
            <a href="{{ get_absolute_url('about') }}" class="ds-btn ds-btn--navy">{{ $t['home_about_btn'] }}</a>
        </div>
    </div>
    <a href="{{ $banner['href'] }}" class="about-banner" aria-label="{{ $t['home_about_banner_label'] }}">
        <img src="{{ $banner['img'] }}" alt="Dalian Medical University campus" loading="lazy">
        <span class="about-banner__overlay"></span>
        <span class="about-banner__inner">
            <span class="container">
                <span class="about-banner__label">{{ $t['home_about_banner_label'] }} <i class="fas fa-arrow-right"></i></span>
            </span>
        </span>
    </a>
</section>

<!-- ===================== PROGRAMS ===================== -->
<section class="ds-section ds-section--soft" id="programs">
    <div class="container">
        <div class="ds-section-head">
            <span class="ds-eyebrow">{{ $t['home_programs_eyebrow'] }}</span>
            <h2 class="ds-title">{{ $t['home_programs_title'] }}</h2>
            <p class="ds-lead">{{ $t['home_programs_lead'] }}</p>
        </div>
        <div class="row g-4">
            @foreach ($homePrograms as $p)
            <div class="col-lg-4 col-sm-6"><a href="{{ $p['url'] }}" class="home-prog-card"><h3>{{ $p['title'] }}</h3><p>{{ $p['description'] }}</p><span class="more">Explore →</span></a></div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===================== MBBS PROGRAM (section 1 of 2) ===================== -->
<section class="ds-section" id="mbbs-dmu">
    <div class="container">
        <div class="ds-section-head ds-section-head--left" style="max-width:760px">
            <span class="ds-eyebrow">{{ $t['home_mbbs_eyebrow'] }}</span>
            <h2 class="ds-title">{{ $t['home_mbbs_title'] }}</h2>
            <p class="ds-lead">{{ $t['home_mbbs_lead'] }}</p>
        </div>
        <ul class="home-facts">
            @foreach ($homeFacts as $f)
            <li><strong>{{ $f->label }}:</strong> {{ $f->value }}</li>
            @endforeach
        </ul>
        <div class="row g-4 mt-1">
            <div class="col-md-6"><div class="ds-card"><h3>Clinical Excellence</h3><p>Rotations across 8 affiliated hospitals give real patient exposure from early years.</p></div></div>
            <div class="col-md-6"><div class="ds-card"><h3>Globally Recognized</h3><p>Listed by WHO (WDOMS) and recognised by medical councils in many regions. Check your own council's current rules.</p></div></div>
        </div>
        <a href="{{ get_absolute_url('programs') }}" class="ds-btn ds-btn--outline mt-4">Explore All Programs</a>
    </div>
</section>

<!-- ===================== MBBS FEES (section 2 of 2) ===================== -->
<section class="ds-section ds-section--soft" id="mbbs-fees">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="ds-eyebrow">{{ $t['home_fees_eyebrow'] }}</span>
                <h2 class="ds-title">{{ $t['home_fees_title'] }}</h2>
                <p class="ds-lead">{{ $t['home_fees_note'] }}</p>
                <a href="{{ get_absolute_url('fees') }}" class="ds-btn ds-btn--primary mt-2">See full fee breakdown</a>
            </div>
            <div class="col-lg-6">
                <div class="home-fee-card">
                    <div class="home-fee-card__head">
                        <h3>{{ $t['home_fees_title'] }}</h3>
                        <span class="tag">{{ $t['home_fees_tag'] }}</span>
                    </div>
                    <table class="home-fee-table">
                        <tbody>
                            <tr><th>Tuition</th><td>¥42,000/yr</td></tr>
                            <tr><th>Accommodation</th><td>¥8,000–12,000/yr</td></tr>
                            <tr><th>Insurance</th><td>¥800/yr</td></tr>
                            <tr><th>Medical</th><td>¥500/yr</td></tr>
                            <tr><th>Residence permit</th><td>¥800/yr</td></tr>
                            <tr class="total"><th>Yearly total</th><td>¥52,100–56,100/yr</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHY CHOOSE ===================== -->
<section class="ds-section ds-section--soft" id="why-dmu">
    <div class="container">
        <div class="ds-section-head">
            <span class="ds-eyebrow">{{ $t['home_why_eyebrow'] }}</span>
            <h2 class="ds-title">{{ $t['home_why_title'] }}</h2>
            <p class="ds-lead">{{ $t['home_why_lead'] }}</p>
        </div>
        <div class="row g-4">
            @foreach ($homeWhy as $w)
            <div class="col-md-4 col-sm-6"><div class="ds-card"><h3>{{ $w->title }}</h3><p>{{ $w->description }}</p></div></div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===================== HOW TO APPLY (section 1 of 2) ===================== -->
<section class="ds-section" id="how-to-apply">
    <div class="container">
        <div class="ds-section-head">
            <span class="ds-eyebrow">{{ $t['home_steps_eyebrow'] }}</span>
            <h2 class="ds-title">{{ $t['home_steps_title'] }}</h2>
            <p class="ds-lead">{{ $t['home_steps_lead'] }}</p>
        </div>
        <div class="row g-4">
            @foreach ($homeSteps as $i => $s)
            <div class="col-lg-4 col-md-6">
                <div class="home-step"><div class="home-step__num">{{ $i + 1 }}</div><div><h4>{{ $s->title }}</h4><p>{{ $s->description }}</p></div></div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ get_absolute_url('login') }}" class="ds-btn ds-btn--primary ds-btn--lg">
                <span data-i18n="common.start_application">Start Your Application</span>
            </a>
        </div>
    </div>
</section>

<!-- ===================== TESTIMONIALS (Students & Alumni, admin-managed) ===================== -->
@if ($students || $alumni)
<section class="ds-section" id="testimonials">
    <div class="container">
        <div class="ds-section-head">
            <span class="ds-eyebrow">{{ $t['home_testi_eyebrow'] }}</span>
            <h2 class="ds-title">{{ $t['home_testi_title'] }}</h2>
            <p class="ds-lead">{{ $t['home_testi_lead'] }}</p>
        </div>

        @if ($students)
        <h3 class="ds-eyebrow mb-3" data-i18n="home.recently_admitted">Recently Admitted Students</h3>
        <div class="row g-4 mb-5">
            @foreach ($students as $tm)
            <div class="col-lg-4 col-md-6"><div class="home-tcard">
                <p class="home-tcard__quote">{{ $tm['quote'] }}</p>
                <div class="home-tcard__person"><img src="{{ $tm['img'] }}" alt="{{ $tm['name'] }}" class="home-tcard__avatar" loading="lazy"><div><div class="home-tcard__name">{{ $tm['name'] }}</div><div class="home-tcard__meta">{{ $tm['meta'] }}</div></div></div>
            </div></div>
            @endforeach
        </div>
        @endif

        @if ($alumni)
        <h3 class="ds-eyebrow mb-3" data-i18n="home.distinguished_alumni">Distinguished Alumni</h3>
        <div class="row g-4">
            @foreach ($alumni as $tm)
            <div class="col-lg-4 col-md-6"><div class="home-tcard">
                <p class="home-tcard__quote">{{ $tm['quote'] }}</p>
                <div class="home-tcard__person"><img src="{{ $tm['img'] }}" alt="{{ $tm['name'] }}" class="home-tcard__avatar" loading="lazy"><div><div class="home-tcard__name">{{ $tm['name'] }}</div><div class="home-tcard__meta">{{ $tm['meta'] }}</div></div></div>
            </div></div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif

<!-- ===================== FAQ (dynamic + schema) ===================== -->
<section class="ds-section ds-section--soft" id="faq">
    <div class="container">
        <div class="ds-section-head">
            <span class="ds-eyebrow">{{ $t['home_faq_eyebrow'] }}</span>
            <h2 class="ds-title">{{ $t['home_faq_title'] }}</h2>
            <p class="ds-lead">{{ $t['home_faq_lead'] }}</p>
        </div>
        <div class="home-faq-wrap">
            @foreach ($homeFaqs as $f)
            <details class="ds-faq">
                <summary>{{ $f['question'] }}</summary>
                <div class="ds-faq__body">{!! nl2br(e($f['answer'])) !!}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- ===================== CTA BAND ===================== -->
<section class="ds-section">
    <div class="container">
        <div class="ds-cta-band">
            <h2>{{ $t['home_cta_title'] }}</h2>
            <p>{{ $t['home_cta_lead'] }}</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ get_absolute_url('login') }}" class="ds-btn ds-btn--lg" style="background:#fff;color:var(--ds-red)!important">
                    <span>{{ $t['home_cta_btn'] }}</span>
                </a>
                <a href="https://wa.me/+8617640412827" target="_blank" rel="noopener noreferrer" class="ds-btn ds-btn--ghost-light ds-btn--lg">
                    <i class="fab fa-whatsapp"></i> <span data-i18n="home.cta_whatsapp">Chat on WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Page Specific JS -->
<script src="{{ get_js_url('js/home.js') }}"></script>
@endsection
