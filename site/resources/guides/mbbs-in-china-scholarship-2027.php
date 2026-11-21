<?php

$s = require __DIR__ . '/_shared.php';

return [
    'updated' => '2026-11-22',
    'title' => 'MBBS in China Scholarship 2027: Dalian Medical University',
    'description' => 'MBBS in China scholarship guide for 2027: the six scholarships named by Dalian Medical University, how to ask about them, and what the CSC route involves.',
    'keywords' => 'MBBS in China scholarship, MBBS scholarship in China, CSC scholarship, Chinese Government Scholarship, CSC scholarship 2027, does CSC scholarship cover MBBS, study in China scholarship, Dalian Medical University scholarship, Liaoning Government Scholarship',
    'eyebrow' => 'Scholarship guide',
    'h1' => 'MBBS in China Scholarship 2027: Funding Named by Dalian Medical University',
    'lead' => 'A careful guide to the scholarships that Dalian Medical University lists on its English website: who offers each one, what is and is not known about them, how to ask admissions the right questions, and how to plan your budget without counting on money that has not been confirmed.',
    'crumb' => 'MBBS in China scholarship 2027',
    'cta' => 'Ask admissions about scholarships',
    'answer' => 'Dalian Medical University names six scholarships: the Chinese Government Scholarship, Liaoning Provincial Government Scholarship, Dalian Government Scholarship, DMU Scholarship, China-America Humanity Scholarship and China-Russia Humanity Scholarship. No amounts, quotas or deadlines are published here, so ask admissions what applies to you before you count on any funding.',
    'facts' => [
        ['Named scholarships', 'Six, listed on the DMU English website'],
        ['National', 'Chinese Government Scholarship'],
        ['Regional', 'Liaoning Provincial Government Scholarship; Dalian Government Scholarship'],
        ['University', 'Dalian Medical University Scholarship'],
        ['Programmes', 'China-America Humanity Scholarship; China-Russia Humanity Scholarship'],
        ['Amounts', 'Not published here; ask admissions'],
        ['Deadlines and quotas', 'Not published here; ask admissions'],
        ['DMU status', 'Chinese Government Scholarship university since 2007'],
    ],
    'sections' => [

        ['id' => 'overview', 'eyebrow' => 'Overview', 'h' => 'What we can and cannot say about funding', 'p' => [
            "Students searching for an MBBS in China scholarship usually want to know two things: does one exist for my course, and how much will it pay. For Dalian Medical University (DMU) the honest answer is that six scholarships are named, and that the amounts, the number of places and the closing dates are not part of the confirmed information we hold.",
            "That limit is deliberate. A scholarship figure that is out of date does more harm than silence, because a family may plan a budget around it. This guide therefore lists the schemes, explains who stands behind each, and shows how to get the missing details from the people who decide.",
            "Treat every scholarship as uncertain until you hold a written offer. Plan your finances on the fee tables, and regard any award as a bonus until it is confirmed.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate.webp', 'alt' => 'The main gate of Dalian Medical University with the name of the university displayed', 'caption' => 'The main gate of Dalian Medical University.']],

        ['id' => 'list', 'eyebrow' => 'The six', 'h' => 'The scholarships DMU names', 'p' => [
            "The DMU English website names the following scholarships. The table shows who offers each one.",
        ], 'table' => $s['scholarships'], 'sub' => [
            ['h' => 'Chinese Government Scholarship', 'p' => [
                "This is the national scheme of the Chinese government, operated through selected universities. DMU was designated a Chinese Government Scholarship university in 2007. The scholarship is offered by the government, and DMU is one of the institutions through which it can be held.",
            ]],
            ['h' => 'Liaoning and Dalian government scholarships', 'p' => [
                "The Liaoning Provincial Government Scholarship comes from the provincial government of the province where DMU sits, and the Dalian Government Scholarship comes from the city's municipal government. They are regional schemes.",
            ]],
            ['h' => 'Dalian Medical University Scholarship', 'p' => [
                "This one is offered by the university itself.",
            ]],
            ['h' => 'The two Humanity scholarships', 'p' => [
                "The China-America Humanity Scholarship and the China-Russia Humanity Scholarship are listed as DMU programmes. The sheet we hold does not describe who they are meant for, so ask admissions before assuming that you qualify.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-campus-trees-and-main-building.webp', 'alt' => 'The main building of Dalian Medical University seen behind cypress trees', 'caption' => 'The main building behind the cypress trees.']],

        ['id' => 'unknowns', 'eyebrow' => 'Not published', 'h' => 'What is not published', 'p' => [
            "For each scheme, the following details are not stated in the sources we use. We do not guess them, and you should not rely on a figure quoted by someone who cannot show you where it comes from.",
        ], 'list' => [
            'The amount, and whether it covers tuition, accommodation or a living allowance.',
            'The number of places each year.',
            'The application deadline and the application route.',
            'Whether a scheme is open to MBBS students or only to some programmes.',
            'Whether an award continues automatically in later years.',
        ], 'sub' => [
            ['h' => 'Why the MBBS question is worth asking directly', 'p' => [
                "Some schemes are limited to certain levels or subjects. Ask whether each scholarship you are interested in is open to the English-medium MBBS at DMU, rather than assuming it is.",
            ]],
        ]],

        ['id' => 'csc', 'eyebrow' => 'National route', 'h' => 'Understanding the Chinese Government Scholarship route', 'p' => [
            "In general terms, a government scholarship application is separate from the university admission application. Some schemes are applied for through the national scholarship system, and others through the university. The route that applies to you depends on your country and the type of award.",
            "Be careful with promises. A fully funded award is competitive, and no one who runs a consultancy can guarantee one. Ask for the official application route in writing, apply by the stated date, and keep your university application going in parallel so that one does not depend on the other.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-library.webp', 'alt' => 'The Dalian Medical University library building with its name sign', 'caption' => 'The library building on campus.']],

        ['id' => 'budget', 'eyebrow' => 'Planning', 'h' => 'Budgeting without counting on an award', 'p' => [
            "The safest plan funds the full MBBS from your own resources and treats any scholarship as a reduction when it arrives. The fee tables give you a firm base: a first-year package of ¥67,100, then ¥52,100 to ¥56,100 a year from year two.",
        ], 'table' => $s['feeYearly'], 'link' => ['mbbs-in-china-fees-2027', 'Read the MBBS in China fees guide'], 'note' => 'Fee table last checked 22 November 2026. Confirm with admissions before paying.'],

        ['id' => 'ask', 'eyebrow' => 'Questions', 'h' => 'What to ask admissions', 'p' => [
            "Send your questions in writing so that the answer is on record. A short message works:",
        ], 'list' => [
            'Which of the six scholarships are open to an English-medium MBBS applicant from my country?',
            'What does each cover, and is the amount the same every year?',
            'What is the application route and the closing date?',
            'Does applying for a scholarship change my admission timeline?',
            'Is a scholarship decision made before or after I must pay the fee in my Acceptance Letter?',
        ], 'sub' => [
            ['h' => 'Contacts', 'p' => [
                "CAS: admissions@dmu.cas.moe or info@dmu.cas.moe. DMU admissions office: +86-411-86110202 or dmunewstudent@163.com, open 08:30 to 11:30 and 13:20 to 16:30 Beijing time.",
            ]],
        ]],

        ['id' => 'beware', 'eyebrow' => 'Caution', 'h' => 'Warning signs in scholarship offers', 'p' => [
            "Scholarship claims attract exaggeration. Treat the following as reasons to stop and check:",
        ], 'list' => [
            'A guaranteed award for a fee.',
            'An offer that names an amount but no official source.',
            'Pressure to pay before you have a written offer.',
            'A request to pay into a personal account.',
        ], 'img' => ['src' => 'assets/images/dmu/dmu-campus-lake-view.webp', 'alt' => 'Lawns on the Dalian Medical University campus with the sea in the distance', 'caption' => 'The campus lawns with a sea view.']],

        ['id' => 'next', 'eyebrow' => 'Next', 'h' => 'Putting funding next to the calendar', 'p' => [
            "Scholarship routes may have their own timing, and it may differ from the university application window. The published windows for admission are 1 March to 5 July for autumn and 1 September to 5 January for spring. Confirm both the admission date and any scholarship date with admissions.",
        ], 'table' => $s['calendar'], 'link' => ['mbbs-in-china-admission-calendar-2027', 'See the admission calendar guide']],
    ],
    'faqs' => [
        ['Which scholarships does DMU name?', 'The Chinese Government Scholarship, Liaoning Provincial Government Scholarship, Dalian Government Scholarship, Dalian Medical University Scholarship, China-America Humanity Scholarship and China-Russia Humanity Scholarship.'],
        ['How much is each scholarship?', 'No amounts are published here. Ask admissions for the current figures.'],
        ['What is the deadline for a scholarship?', 'No deadlines are published here. Ask admissions, and apply by the stated date.'],
        ['Does the CSC scholarship cover MBBS?', 'We cannot confirm that for DMU. Ask admissions whether the Chinese Government Scholarship is open to the English-medium MBBS.'],
        ['Is there a fully funded MBBS scholarship?', 'We cannot confirm any fully funded award. Plan your budget on the fee tables and treat a scholarship as a reduction once it is confirmed in writing.'],
        ['Is DMU a Chinese Government Scholarship university?', 'Yes. DMU was designated a Chinese Government Scholarship university in 2007.'],
        ['Who offers the Liaoning and Dalian scholarships?', 'The Liaoning provincial government and the Dalian municipal government.'],
        ['Does a scholarship change when I must pay?', 'Ask admissions. The fee in your Acceptance Letter is paid to confirm the seat, so find out how a scholarship decision fits that timeline.'],
        ['Can CAS guarantee a scholarship?', 'No. CAS is an admissions guide and application help service, not the university or a scholarship body.'],
        ['Should I count on a scholarship in my budget?', 'No. Budget from the fee tables and treat any award as a reduction once you hold a written offer.'],
        ['How do I apply for a scholarship?', 'Ask admissions for the official route for each scheme in writing. Some routes may be separate from the admission application.'],
        ['How much does the MBBS cost without one?', 'The first-year package is ¥67,100, and later years are ¥52,100 to ¥56,100 a year.'],
    ],
    'related' => ['mbbs-in-china-fees-2027', 'mbbs-in-china-2027', 'mbbs-in-china-admission-calendar-2027'],
];
