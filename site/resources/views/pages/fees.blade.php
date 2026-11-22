@extends('layouts.site')

@section('content')

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {!! $faqSchema !!}

  ]
}
</script>

<!-- ===================== HERO ===================== -->
<section class="fees-hero">
    <div class="container">
        <span class="ds-eyebrow" style="color:#cfe0f3">2027 Fee Structure</span>
        <h1>MBBS Fees in China at Dalian Medical University</h1>
        <p>The published MBBS fees at Dalian Medical University: tuition, accommodation, insurance, residence permit and medical.</p>
        <div class="home-hero__trust">
            <span class="ds-pill"><i class="fas fa-check-circle"></i> DMU's own charges</span>
            <span class="ds-pill"><i class="fas fa-check-circle"></i> Checked 22 Nov 2026</span>
            <span class="ds-pill"><i class="fas fa-check-circle"></i> Scholarships named by DMU</span>
        </div>
    </div>
</section>

<div class="container">
    <nav class="fees-crumb" aria-label="breadcrumb">
        <a href="{{ get_absolute_url('index') }}">Home</a> &rsaquo; <span>MBBS Fees</span>
    </nav>
</div>

<!-- Admin-managed intro sections (optional) -->
@if ($feeSections->isNotEmpty())
<section class="ds-section" style="padding-bottom:0">
    <div class="container">
        @foreach ($feeSections as $sec)
        <div class="mb-4" id="{{ $sec->section_key }}">
            @if (!empty($sec->heading))<h2 class="ds-title">{{ $sec->heading }}</h2>@endif
            <div class="page-section-body">{!! $sec->body !!}</div>
        </div>
        @endforeach
    </div>
</section>
@endif

<!-- ===================== FEE TABLES ===================== -->
<section class="ds-section">
    <div class="container">
        <div class="ds-section-head">
            <span class="ds-eyebrow">Tuition &amp; Charges</span>
            <h2 class="ds-title">DMU MBBS fee breakdown (in RMB ¥)</h2>
            <p class="ds-lead">Fees last checked on 22 November 2026 and shown for MBBS. US$ conversions are approximate; confirm current fees with admissions before you pay.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <div class="fee-table-card">
                    <div class="fee-table-card__head">
                        <h3>2nd Year Onward — Per Year</h3>
                        <span class="tag">Recurring annual costs</span>
                    </div>
                    <table class="fee-table">
                        <tbody>
                            <tr><th>Tuition fee</th><td>¥42,000</td></tr>
                            <tr><th>Accommodation</th><td>¥8,000–12,000</td></tr>
                            <tr><th>Insurance</th><td>¥800</td></tr>
                            <tr><th>Residence permit</th><td>¥800</td></tr>
                            <tr><th>Medical</th><td>¥500</td></tr>
                            <tr class="total"><th>Total per year</th><td>¥52,100–56,100 (≈ US$7,350–7,900)</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== SCHOLARSHIPS ===================== -->
<section class="ds-section ds-section--soft">
    <div class="container">
        <div class="ds-card mt-3" style="max-width:760px;margin:0 auto">
            <div class="ds-icon-badge ds-icon-badge--navy"><i class="fas fa-hand-holding-usd"></i></div>
            <h3>Reduce your fees with a scholarship</h3>
            <p>DMU names the Chinese Government, Liaoning Provincial, Dalian Government and DMU scholarships. Amounts and deadlines are not published here.
            <a href="{{ get_absolute_url('scholarships') }}">See scholarships &rarr;</a></p>
        </div>
    </div>
</section>

<!-- ===================== FEE FAQ ===================== -->
<section class="ds-section">
    <div class="container">
        <div class="ds-section-head">
            <span class="ds-eyebrow">FAQ</span>
            <h2 class="ds-title">MBBS fees — frequently asked questions</h2>
        </div>
        <div style="max-width:820px;margin:0 auto">
            @foreach ($feeFaqs as $f)
            <details class="ds-faq">
                <summary>{{ $f['q'] }}</summary>
                <div class="ds-faq__body">{{ $f['a'] }}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="ds-section ds-section--soft">
    <div class="container">
        <div class="ds-cta-band">
            <h2>Questions about MBBS fees?</h2>
            <p>Talk to our admissions counsellors for a personalised cost estimate and scholarship guidance — free of charge.</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ get_absolute_url('login') }}" class="ds-btn ds-btn--lg" style="background:#fff;color:var(--ds-red)!important">
                    Apply for 2027
                </a>
                <a href="https://wa.me/+8617640412827" target="_blank" rel="noopener noreferrer" class="ds-btn ds-btn--ghost-light ds-btn--lg">
                    <i class="fab fa-whatsapp"></i> Ask on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
