<?php

namespace App\Http\Controllers;

/** adm-HtApply: the public "How to Apply" page (eligibility, steps, deadlines, document checklist). */
class HowToApplyController extends Controller
{
    public function __invoke()
    {
        return view('pages.adm-htapply', [
            'page_title' => 'How to Apply | MBBS Admissions | DMU',
            'page_description' => 'How to apply for MBBS at Dalian Medical University — eligibility criteria, required documents, and the full application process for international students.',
            'page_keywords' => 'DMU how to apply, MBBS application process China, Dalian Medical University admission requirements, international student application, MBBS eligibility China, required documents MBBS China',
            'page_url' => 'https://dmu.cas.moe/adm-HtApply',
            'page_image' => 'https://dmu.cas.moe/images/logo.png',
            'body_class' => 'ds-page',
            'page_css' => ['css/design-system.css', 'css/adm-htapply.css'],
        ]);
    }
}
