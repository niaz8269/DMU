@extends('layouts.site')

@section('content')
<!-- ===================== HERO ===================== -->
<section class="hta-hero">
    <div class="container">
        <span class="ds-eyebrow" style="color:#ffd0d2">Admissions</span>
        <h1>Dalian Medical University — How to Apply</h1>
        <p>Eligibility criteria, required documents and the full step-by-step application process for international MBBS students.</p>
    </div>
</section>

<div class="container">
    <nav class="hta-crumb" aria-label="breadcrumb">
        <a href="{{ get_absolute_url('index') }}">Home</a> &rsaquo; <span>How to Apply</span>
    </nav>
</div>

<main class="ds-section" style="padding-top:2rem">
    <div class="container">

        <!-- Admission Requirements -->
        <div class="ds-section-head">
            <span class="ds-eyebrow">Eligibility</span>
            <h2 id="admissions-requirements" class="ds-title">Admission Requirements</h2>
        </div>

        <div class="hta-req-grid">
            <div class="ds-card hta-req-card">
                <h3>General Eligibility</h3>
                <ul>
                    <li>Aged 18 to 25 for MBBS and BDS, in good mental and physical health.</li>
                    <li>Completed senior high school with good marks. Chemistry, physics, biology and English are compulsory; mathematics is a reference subject.</li>
                </ul>
            </div>
            <div class="ds-card hta-req-card">
                <h3>Academic Standards</h3>
                <ul>
                    <li>Senior high school transcript (compulsory) and diploma (helpful), certified by the Chinese embassy or consulate in your country or notarised in China.</li>
                    <li>DMU publishes its minimum-marks table only as an image, so ask admissions for the current marks for your country.</li>
                </ul>
            </div>
            <div class="ds-card hta-req-card">
                <h3>Language</h3>
                <ul>
                    <li>No HSK or IELTS requirement is published for MBBS. Ask admissions if you are unsure.</li>
                    <li>English is the language of teaching for the MBBS programme.</li>
                </ul>
            </div>
            <div class="ds-card hta-req-card">
                <h3>Health Certificate</h3>
                <ul>
                    <li>Medical check-up report, uploaded with your other documents.</li>
                </ul>
            </div>
            <div class="ds-card hta-req-card">
                <h3>Passport and Visa</h3>
                <ul>
                    <li>Valid passport. Proof of financial support (family financial certificate or one year of bank statements) is also required.</li>
                </ul>
            </div>
        </div>

        <!-- How to Apply -->
        <div class="ds-section-head" style="margin-top:3.5rem">
            <span class="ds-eyebrow">Process</span>
            <h2 id="how-to-apply" class="ds-title">How to Apply — Step by Step</h2>
        </div>

        <ol class="hta-steps">
            <li>
                <span class="hta-step-num">1</span>
                <div class="hta-step-body">Visit the official DMU international admissions portal.</div>
            </li>
            <li>
                <span class="hta-step-num">2</span>
                <div class="hta-step-body">Fill out the online application form.</div>
            </li>
            <li>
                <span class="hta-step-num">3</span>
                <div class="hta-step-body">Upload the required documents (passport, photo, certified transcripts, medical check-up, financial proof).</div>
            </li>
            <li>
                <span class="hta-step-num">4</span>
                <div class="hta-step-body">Pay the application fee and first-year tuition shown in your acceptance letter (together ¥42,800).</div>
            </li>
            <li>
                <span class="hta-step-num">5</span>
                <div class="hta-step-body">DMU issues the acceptance letter, and the admission letter and JW202 form after payment.</div>
            </li>
        </ol>

        <div class="text-center" style="margin:2rem 0 3rem">
            <a href="{{ get_absolute_url('login') }}" class="ds-btn ds-btn--primary ds-btn--lg">Start Your Application</a>
        </div>

        <!-- Application Deadlines -->
        <div class="ds-section-head">
            <span class="ds-eyebrow">Dates</span>
            <h2 class="ds-title">Application Deadlines</h2>
        </div>

        <div class="hta-table-wrap">
            <table class="hta-table">
                <thead>
                    <tr>
                        <th>Intake</th>
                        <th>Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Intake">September/fall intake</td>
                        <td data-label="Deadline">Applications 1 March – 5 July</td>
                    </tr>
                    <tr>
                        <td data-label="Intake">March/spring intake</td>
                        <td data-label="Deadline">Applications 1 September – 5 January (confirm with admissions)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Required Documents -->
        <div class="ds-section-head" style="margin-top:3.5rem">
            <span class="ds-eyebrow">Checklist</span>
            <h2 class="ds-title">Required Documents</h2>
        </div>

        <div class="ds-card hta-docs">
            <ul>
                <li>Senior high school transcript (compulsory) and diploma (helpful), certified by the Chinese embassy or consulate or notarised in China.</li>
                <li>Passport information page.</li>
                <li>Medical check-up.</li>
                <li>Family financial certificate or one year of bank statements.</li>
                <li>Recent passport-sized photographs.</li>
            </ul>
        </div>

    </div>
</main>

<!-- ===================== CTA BAND ===================== -->
<section class="ds-section ds-section--soft">
    <div class="container">
        <div class="ds-cta-band">
            <h2>Ready to begin your MBBS journey?</h2>
            <p>Start your application to Dalian Medical University or reach our counsellors for guidance on requirements and documents.</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ get_absolute_url('login') }}" class="ds-btn ds-btn--lg" style="background:#fff;color:var(--ds-red)!important">Apply Now</a>
                <a href="https://wa.me/+8617640412827" target="_blank" rel="noopener noreferrer" class="ds-btn ds-btn--ghost-light ds-btn--lg">
                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@include('partials.chatbot')
@include('partials.socials')
@endsection
