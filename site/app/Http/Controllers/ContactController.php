<?php

namespace App\Http\Controllers;

use App\Support\Settings;

class ContactController extends Controller
{
    /** /contact: page only. The form posts to /send_contact_email (FormMailController, no CSRF token as in the original). */
    public function index()
    {
        return view('pages.contact', [
            'phone' => (string) Settings::get('contact_phone', ''),
            'phone_tel' => preg_replace('/[^0-9+]/', '', (string) Settings::get('contact_phone', '')),
            'admissions_email' => (string) Settings::get('admissions_email', 'admissions@dmu.cas.moe'),
            'contact_email' => (string) Settings::get('contact_email', 'info@dmu.cas.moe'),
            'form_action' => get_absolute_url('send_contact_email'),
            'contact_js' => get_absolute_url('js/contact.js'),
            'page_title' => 'Contact DMU | Admissions & Support',
            'page_description' => 'Contact Dalian Medical University for admissions, program info, and support. Reach us by phone, email, or WhatsApp. Our team is ready to help.',
            'page_keywords' => 'contact Dalian Medical University, DMU contact, admissions contact, university address China, medical university contact, study in China contact',
            'page_url' => 'https://dmu.cas.moe/contact',
            'page_image' => 'https://dmu.cas.moe/images/logo.png',
            'body_class' => 'ds-page',
            'page_css' => ['css/design-system.css', 'css/contact.css'],
        ]);
    }
}
