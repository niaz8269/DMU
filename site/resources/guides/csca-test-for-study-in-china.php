<?php

$s = require __DIR__ . '/_shared.php';

// General description of the CSCA only (organiser, subjects, scholarship link); no fee, date or format figures are stated,
// because FACTS.md holds none. The official CSCA website is the final authority. Nothing here says DMU requires CSCA.

return [
    'updated' => '2026-11-22',
    'title' => 'CSCA Test for Study in China: MBBS and Scholarship Guide',
    'description' => 'What the CSCA test is, who takes it, how it relates to the Chinese Government Scholarship, and what MBBS applicants to Dalian Medical University should confirm.',
    'keywords' => 'CSCA test, what is CSCA test, CSCA exam for MBBS China, is CSCA mandatory for Chinese Government Scholarship undergraduate, CSCA test registration international students, China Scholastic Competency Assessment, CSCA 2027, CSCA exam test centres, MBBS in China 2027',
    'eyebrow' => 'Admission test guide',
    'h1' => 'CSCA Test for Study in China: What MBBS and Scholarship Applicants Should Know',
    'lead' => 'The China Scholastic Competency Assessment, known as CSCA, is a newer standardised test connected with undergraduate applications from international students. This guide explains it in general terms, shows where scholarship applicants may meet it, states what Dalian Medical University publishes about entry, and gives you questions to ask before you register for any test.',
    'crumb' => 'CSCA test for study in China',
    'cta' => 'Ask admissions whether CSCA applies to you',
    'answer' => "CSCA is the China Scholastic Competency Assessment, a standardised test for international students applying to undergraduate study in China, and official scholarship notices have linked it to Chinese Government Scholarship applications. Dalian Medical University's published MBBS requirements do not list it, so confirm with admissions and read the official CSCA site before registering.",
    'facts' => [
        ['Full name', 'China Scholastic Competency Assessment (CSCA)'],
        ['Who it is for', 'International students applying for undergraduate study in China'],
        ['Subjects (as described by official sources)', 'Professional Chinese, Mathematics, Physics, Chemistry'],
        ['Scholarship link', 'Official scholarship notices connect it with Chinese Government Scholarship bachelor applications; read the current notice'],
        ['DMU MBBS entry requirements', 'CSCA is not listed in DMU\'s published requirements'],
        ['Chinese Government Scholarship', 'Named by DMU as one of its scholarships; amounts not published here'],
        ['Final authority', 'The official CSCA website and the current scholarship notice'],
        ['Fees and dates', 'Set by the test organiser; check the official site'],
    ],
    'sections' => [

        ['id' => 'what-is', 'eyebrow' => 'Definition', 'h' => 'What the CSCA test is, in plain words', 'p' => [
            "CSCA stands for China Scholastic Competency Assessment. It is a standardised assessment designed for international students who intend to take an undergraduate degree in China. Official education and scholarship pages describe it as organised by the China Scholarship Council, the body that also handles the Chinese Government Scholarship, and they describe a set of subjects that includes Professional Chinese, Mathematics, Physics and Chemistry.",
            "The test is a recent addition to the application landscape, and that is the main reason there is so much confusion about it. Early articles describe plans that were later adjusted. Some agents describe it as compulsory for everything, others as irrelevant. Both positions are overstated. The honest answer depends on which route you are using: a scholarship application, a university application, or both.",
            "We give you only the broad outline here because details such as registration windows, test centres, fees and syllabus change from year to year and are published by the test organiser. Please read the organiser's own pages rather than rely on a number printed on a blog, including ours.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-glass-teaching-building.webp', 'alt' => 'Glass-fronted teaching building at Dalian Medical University with students walking past', 'caption' => 'Undergraduate applicants should check which tests their route requires.'],
        'table' => ['caption' => 'CSCA at a glance', 'head' => ['Question', 'Short answer'], 'rows' => [
            ['What is it?', 'A standardised assessment for international undergraduate applicants'],
            ['Who organises it?', 'China Scholarship Council, according to official pages'],
            ['What subjects are mentioned?', 'Professional Chinese, Mathematics, Physics, Chemistry'],
            ['Where are the current details?', 'The official CSCA website and the current scholarship notice'],
            ['Is it listed in DMU\'s MBBS requirements?', 'No']
        ]]],

        ['id' => 'three-routes', 'eyebrow' => 'Routes', 'h' => 'Three routes into an MBBS, and where CSCA may or may not appear', 'p' => [
            "Most confusion disappears when you ask which route you are on. Three are common, and the test question is different for each.",
        ], 'table' => ['caption' => 'Route and test question', 'head' => ['Route', 'Is CSCA likely to matter?', 'How to confirm'], 'rows' => [
            ['Self-funded application to the English-medium MBBS at DMU', 'Not listed in the published requirements', 'Ask DMU admissions to confirm for your intake'],
            ['Chinese Government Scholarship application for a bachelor degree', 'Official notices have linked the test to such applications', 'Read the current scholarship notice for your country and the official CSCA site'],
            ['Other scholarship (Liaoning, Dalian, DMU or programme scholarships)', 'Unknown; no conditions are published here', 'Ask the awarding body for its written conditions'],
        ]], 'sub' => [
            ['h' => 'Self-funded applicants', 'p' => [
                "DMU's admissions portal lists senior high school results, an age range, a medical check-up, financial proof and certified school documents. It does not list CSCA. That is the published position, and it is good news for a family that has not heard of the test. It is not a guarantee about future intakes, so ask again when you apply.",
            ]],
            ['h' => 'Scholarship applicants', 'p' => [
                "Scholarship rules are written by the awarding body, and they have been updated more than once. If you plan to apply for the Chinese Government Scholarship, check the notice for your intake issued by the Chinese embassy or consulate that serves your country. If that notice names CSCA, register for it through the official channel.",
            ]],
        ]],

        ['id' => 'dmu-side', 'eyebrow' => 'Dalian Medical University', 'h' => 'What Dalian Medical University publishes', 'p' => [
            "The MBBS at DMU is a six-year English-medium programme including a one-year internship, with tuition of ¥42,000 a year. Applicants must have completed senior high school with good marks, with chemistry, physics, biology and English compulsory and mathematics as a reference subject. The age range is 18 to 25, and the documents are the passport information page, a passport-size photograph, the transcript, the diploma if available, a medical check-up and financial proof.",
            "Notice what is missing. There is no test score in the list. No HSK or IELTS requirement is published either. DMU also names the Chinese Government Scholarship among its scholarships, together with the Liaoning Provincial Government, Dalian Government, DMU, China-America Humanity and China-Russia Humanity scholarships. This site publishes no amounts, quotas or deadlines for them.",
            "If you are a scholarship candidate, treat DMU's admission conditions and the scholarship conditions as two separate sets of rules. You must satisfy both.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate.webp', 'alt' => 'Main gate of Dalian Medical University with the university name', 'caption' => 'Dalian Medical University, Dalian, Liaoning Province.'],
        'list' => $s['requirements'], 'sub' => [
            ['h' => 'Scholarships named by DMU', 'p' => [
                "The names come from the DMU English website. Stipend amounts, quotas and deadlines are not published here, and we do not guess them. Ask admissions for the current conditions of each scholarship you consider.",
            ]],
        ], 'table' => $s['scholarships']],

        ['id' => 'registration', 'eyebrow' => 'Practical steps', 'h' => 'If you need to register for CSCA: a safe order of steps', 'p' => [
            "Because the test is administered by an organiser and not by us, we cannot register you or guarantee a place. What we can offer is a careful sequence that avoids the usual mistakes.",
        ], 'sub' => [
            ['h' => 'Step 1: confirm that you actually need it', 'p' => [
                "Read your scholarship notice and your university's requirements. If neither names the test, do not pay for it on the advice of an agent.",
            ]],
            ['h' => 'Step 2: use the official site only', 'p' => [
                "Look for the registration page on the organiser's own website. Fake registration pages and paid 'slots' sold by third parties are the commonest problem with a new test.",
            ]],
            ['h' => 'Step 3: read the current rules on subjects, language and fees', 'p' => [
                "The organiser states which subjects you can take, in which language, and what the fee is. Take a screenshot of the page with the date.",
            ]],
            ['h' => 'Step 4: check the test centre for your country', 'p' => [
                "Test centre locations differ by country and by sitting. Plan travel, a passport that is valid on the test day, and any documents the organiser asks for.",
            ]],
            ['h' => 'Step 5: keep the result safe', 'p' => [
                "Save the score report and any registration email. Your scholarship or university may ask to see them.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-library.webp', 'alt' => 'The library building at Dalian Medical University with its sign', 'caption' => 'Preparation for a standardised test is easiest with a plan.']],

        ['id' => 'prepare', 'eyebrow' => 'Preparation', 'h' => 'How to prepare if your route includes the test', 'p' => [
            "Preparation starts with the syllabus, which the organiser publishes. The subjects mentioned in official pages are the school sciences and mathematics you may have studied, plus a Chinese component. A realistic plan treats each subject on its own timetable.",
        ], 'table' => ['caption' => 'A general preparation approach', 'head' => ['Subject', 'Approach'], 'rows' => [
            ['Mathematics', 'Revise your school syllabus; practise under time limits with multiple choice questions'],
            ['Physics', 'Focus on core concepts and units; practise calculations without a long working'],
            ['Chemistry', 'Review reactions, calculations and periodic trends; connect with biology topics'],
            ['Professional Chinese', 'Check from the official syllabus what level is expected and which vocabulary is covered; start with a teacher or a structured course']
        ]], 'img' => ['src' => 'assets/images/dmu/dmu-campus-lake-view.webp', 'alt' => 'Campus lawns and a view of the sea at Dalian Medical University', 'caption' => 'Start preparing early; a test cannot be crammed in a week.'], 'sub' => [
            ['h' => 'Do not neglect the Chinese component', 'p' => [
                "If your route includes a Chinese subject, begin early. Language skills build slowly and cannot be crammed in a week.",
            ]],
            ['h' => 'Use official practice material', 'p' => [
                "Where the organiser publishes sample questions, use those first. Unofficial question banks vary in quality.",
            ]],
        ]],

        ['id' => 'scams', 'eyebrow' => 'Protect yourself', 'h' => 'Scams and shortcuts around new tests', 'p' => [
            "Whenever a new test appears, someone offers to sit it for you, to guarantee a score or to sell a registration place. These offers are not just unethical; they can cancel an application or a scholarship.",
        ], 'list' => [
            'Never pay anyone to sit a test in your name or to guarantee a result.',
            'Never share your registration login or passport scans with a third party who is not the official organiser.',
            'Be careful with websites that look official but use a different address from the organiser\'s own.',
            'Ask for the notice in writing when someone tells you the test is mandatory for your route.',
            'Report suspicious offers to the organiser or the embassy that issued your scholarship notice.',
        ], 'sub' => [
            ['h' => 'What CAS can and cannot do', 'p' => [
                "CAS runs this site and helps with applications to Dalian Medical University. We can explain DMU's published conditions and point you to the official notice. We cannot sit a test for you, guarantee a score or promise a scholarship.",
            ]],
        ]],

        ['id' => 'fees-dates', 'eyebrow' => 'Planning', 'h' => 'Budget and timing alongside any test', 'p' => [
            "If a test is part of your route, add its registration fee and travel to your budget separately from the university's fees. The university figures below come from the CAS fee sheet, last checked on 22 November 2026. Fees can change, so confirm with admissions.",
            "MBBS tuition is ¥42,000 a year. The application fee plus first-year tuition (¥42,800, about US$6,700) are paid within 10 days of receiving the admission letter. From year two the total is ¥52,100-56,100 a year (about US$7,350-7,900). The application windows are 1 March to 5 July for the autumn intake and 1 September to 5 January for the spring intake; confirm the current dates with admissions. If you need a test result for a scholarship, work out the date by which the result must be ready and plan backwards.",
        ], 'table' => $s['calendar'], 'link' => ['mbbs-in-china-scholarship-2027', 'Read the MBBS scholarship guide']],
    ],
    'faqs' => [
        ['What is the CSCA test?', "CSCA is the China Scholastic Competency Assessment, a standardised assessment for international students applying to undergraduate study in China. Official pages describe it as organised by the China Scholarship Council."],
        ['Is the CSCA test required for MBBS at Dalian Medical University?', "It is not listed in DMU's published MBBS requirements. Ask admissions to confirm for your intake, because rules can change."],
        ['Is CSCA mandatory for the Chinese Government Scholarship undergraduate route?', "Official scholarship notices have linked it to bachelor applications. Read the current notice for your country and the official CSCA website, since conditions are updated."],
        ['What subjects does the CSCA cover?', "Official pages mention Professional Chinese, Mathematics, Physics and Chemistry. Check the organiser's syllabus for the exact content."],
        ['How do I register for CSCA?', "Use the organiser's official website only. Read the rules on subjects, fees and test centres there, and keep a dated copy."],
        ['Does a CSCA score replace the high school transcript?', "We cannot say. DMU's published documents list the transcript as compulsory. Ask admissions how any test result is used."],
        ['Does the CSCA exam differ by country?', "We do not publish country-specific details. The organiser lists the test centres and arrangements for each country on its official site."],
        ['Which scholarships does DMU name?', "Chinese Government Scholarship, Liaoning Provincial Government Scholarship, Dalian Government Scholarship, DMU Scholarship, China-America Humanity Scholarship and China-Russia Humanity Scholarship. No amounts or deadlines are published here."],
        ['Can an agent guarantee a CSCA score?', "No. Anyone who offers to guarantee a score or to take the test for you is offering something unethical that can end an application."],
        ['Does DMU require HSK or IELTS?', "No HSK or IELTS requirement is published for the MBBS."],
        ['Who can I ask about tests and scholarships?', "Write to admissions@dmu.cas.moe. For test rules, the organiser and the scholarship notice are the final authority."],
    ],
];
