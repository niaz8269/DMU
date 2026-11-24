<?php

$s = require __DIR__ . '/_shared.php';

return [
    'updated' => '2026-11-25',
    'title' => 'MBBS in China from Southeast Asia: Intakes and Planning',
    'description' => 'Applying from Southeast Asia to English-medium MBBS at Dalian Medical University: choosing March or September, language support, UTC+8 planning and payment timing.',
    'keywords' => 'MBBS in China from Southeast Asia, study medicine in China Southeast Asia, MBBS China March intake, MBBS China September intake, English medium MBBS China, Dalian Medical University, MBBS China payment timing',
    'eyebrow' => 'Regional guide',
    'h1' => 'MBBS in China from Southeast Asia: Choosing Your Intake and Planning the Move to Dalian',
    'lead' => 'For applicants in Southeast Asia, China is a neighbouring region, and that changes how many families think about the decision. Distance, visits home and the choice of start date all matter. This guide focuses on those planning questions for the English-medium MBBS at Dalian Medical University (DMU): which intake to pick, what to ask about language support, and how to time the payments.',
    'crumb' => 'MBBS in China from Southeast Asia',
    'cta' => 'Ask admissions about your intake and language support',
    'answer' => 'Applicants in Southeast Asia can apply to Dalian Medical University online and choose between the March and September intakes. The English-medium MBBS lasts six years, including a one-year internship, and tuition is ¥42,000 a year. The first payment of ¥42,800 is due within 10 days of the admission letter. Ask admissions about language support before you decide.',
    'facts' => [
        ['Applying from', 'Southeast Asia, online, with no need to visit China before applying'],
        ['Time zone', 'Dalian is on China Standard Time, UTC+8'],
        ['Intakes', 'March (spring) and September (autumn); BDS is autumn only'],
        ['Application windows', 'Spring: 1 September to 5 January. Autumn: 1 March to 5 July'],
        ['Teaching language', 'English for MBBS; no HSK or IELTS requirement is published'],
        ['Tuition', '¥42,000 a year for MBBS; six years including a 1-year internship'],
        ['First payment', '¥42,800 (about US$6,700) within 10 days of the admission letter'],
        ['Recognition', 'Check your own medical council\'s current rules before applying'],
    ],
    'sections' => [

        ['id' => 'why-the-region-matters', 'eyebrow' => 'Closer to home', 'h' => 'Why Southeast Asian applicants look at DMU', 'p' => [
            "Many students in Southeast Asia compare a small number of overseas options, and China sits near the top of the list partly because it is a neighbouring region. Being closer can make family visits and emergencies feel more manageable. We do not publish flight times, ticket prices or visa fees, because we cannot confirm them, so check those with your airline and with the Chinese embassy or consulate that serves you.",
            "What we can describe is the university. Dalian Medical University is a public medical university in Dalian, in Liaoning Province, with a campus at No. 9 West Section, Lvshun South Road, Lvshunkou District. Its International Education College has taught foreign students since 1985, and the English-medium MBBS launched in 2004, which makes it one of the earliest in China. More than 1,200 international students from over 100 countries study there.",
            "This page is not a country-by-country guide. It talks about the region as the place you apply from, and it concentrates on the decisions that usually come up first for families nearby: when to start, how to plan the first payment, and what the classroom language means for you.",
        ], 'img' => ['src' => 'assets/images/dmu/dalian-city-view.webp', 'alt' => 'View over the city of Dalian, Liaoning Province', 'caption' => 'Dalian is a coastal city in Liaoning Province.']],

        ['id' => 'choosing-intake', 'eyebrow' => 'The main decision', 'h' => 'Choosing between the March and September intakes', 'p' => [
            "DMU admits twice a year. The September intake is the autumn one, with the semester starting in September or October. The March intake is the spring one, with the semester starting in March. For BDS, only the autumn intake is available, but the MBBS can start in either.",
            "Which suits you depends on your own school calendar and not on any preference by the university. Think about when your senior high school results and certificates will be ready, how long certification will take, and whether you want to start immediately or have a gap before your first semester. We cannot tell you which academic calendar applies in your own school system, so work that out from your own dates.",
        ], 'table' => $s['calendar'], 'sub' => [
            ['h' => 'If you finish school in time for autumn', 'p' => [
                "The autumn window runs from 1 March to 5 July. Start collecting documents as soon as your results allow, and apply early in the window if you can. Applying early gives room to correct a scan or answer a question from the university.",
            ]],
            ['h' => 'If spring suits your timing better', 'p' => [
                "The spring window runs from 1 September to 5 January. The International Education College announced that the online system for the 2027 spring intake opened on 20 October 2026. That notice gave no closing date, so we quote the 5 January date from the DMU admissions portal and ask you to confirm it with admissions before you plan around it.",
            ]],
        ], 'link' => ['mbbs-in-china-admission-calendar-2027', 'See the full admission calendar']],

        ['id' => 'english-medium', 'eyebrow' => 'The classroom', 'h' => 'English-medium study and what to ask about language support', 'p' => [
            "The MBBS at DMU is taught in English. No HSK or IELTS requirement is published for MBBS, so the application does not ask for a Chinese or English test score. That does not mean language is irrelevant. English is compulsory at senior high school for entry, and in clinical years you will meet patients and hospital staff who speak Chinese.",
            "We do not have confirmed details of language classes, Chinese lessons or hospital interpretation, so we will not describe them. Instead, put these questions to admissions and ask for answers in writing. Is any Chinese language teaching offered alongside the MBBS, and is it part of the timetable or optional? How is clinical teaching arranged for students who do not speak Chinese? How is the internship year handled for international students? Which language is used for examinations?",
        ], 'sub' => [
            ['h' => 'If English is your second language', 'p' => [
                "Many applicants in the region study in more than one language already. Ask admissions whether an English proficiency measure is needed for your certificate, and do not assume that the absence of a published test means no assessment at all. Ask for the answer for your own intake.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-campus-lake-view.webp', 'alt' => 'The campus lake at Dalian Medical University', 'caption' => 'A view of the lake on the DMU campus.'], 'link' => ['mbbs-in-china-eligibility-2027', 'Read the full MBBS eligibility guide']],

        ['id' => 'time-zone', 'eyebrow' => 'Working across the distance', 'h' => 'Time zone planning with UTC+8', 'p' => [
            "Dalian keeps China Standard Time, which is UTC+8, and China does not change its clocks for part of the year. Check the difference between your own local time and UTC+8 before you arrange calls, because the gap depends on where you live.",
            "This matters more than it sounds. DMU's own admissions office, which may be shown as the University admissions office, has office hours of 08:30 to 11:30 and 13:20 to 16:30 Beijing time. Convert those hours to your own time before you ring. Messages sent in the evening where you live may arrive at the start of a working day in Dalian, and the reverse can happen too.",
            "You can also reach CAS by email at admissions@dmu.cas.moe or info@dmu.cas.moe, or through WhatsApp or WeChat, using the details on this site. For anything about money, use the university's own contact channels to verify the instruction.",
        ]],

        ['id' => 'payments', 'eyebrow' => 'Money and timing', 'h' => 'Planning the payments and the first ten days', 'p' => [
            "The process has one date that catches families out. When DMU issues the Acceptance Letter (LOA), the application fee plus tuition, ¥42,800 (about US$6,700), is paid within 10 days of receiving the admission letter. The rest is paid on arrival. Ten days is short if you have not decided how to send an international payment.",
            "So settle the mechanics before you apply. Ask your bank how it handles an international transfer in yuan and what it charges, and work out the amount in your own currency using your bank's conversion on the day. We do not publish exchange rates other than the dollar approximations beside the totals. Pay only the amount shown in your LOA, and verify the payment instructions with the university's own admissions office. We never publish DMU's bank details on this site.",
        ], 'table' => $s['feeYearly'], 'sub' => [
            ['h' => 'Comparing costs as a family', 'p' => [
                "From the second year, the MBBS costs ¥52,100 to ¥56,100 a year in total, about US$7,350 to 7,900, with tuition of ¥42,000 and accommodation of ¥8,000 to ¥12,000. Hostel rent runs 10 months a year. DMU's fee letter also lists a visa fee of ¥800, a medical check-up of ¥500, books of ¥500 and insurance of ¥800. These fees were last checked on 22 November 2026 and can change.",
                "We do not publish a six-year total, travel costs or living costs in Dalian. When you compare costs with another country or another university, compare like with like, and ask each one in writing what is not included.",
            ]],
        ], 'link' => ['mbbs-in-china-fees-2027', 'See the detailed MBBS fees guide']],

        ['id' => 'documents', 'eyebrow' => 'Preparing the file', 'h' => 'Documents and certification, done from home', 'p' => [
            "The document list is the same for every applicant. You need your passport information page, a passport-size photo, your senior high school transcript, a medical check-up and proof of financial support. A diploma helps. The family financial certificate or one year of bank statements can serve as the financial proof.",
            "The step that takes time is certification. School transcripts and diplomas must be certified by the Chinese embassy or consulate in your country, or notarised in China. You complete this where you live, so contact the embassy or consulate early and ask for its current requirements. DMU keeps the originals, so ask admissions how to handle copies before you send anything.",
            "Entry requirements are age 18 to 25, good health, and senior high school with chemistry, physics, biology and English. Mathematics is a reference subject. DMU publishes the minimum marks only as an image, so we do not quote a percentage. Ask admissions for the current figure for your certificate.",
        ], 'list' => $s['documents'], 'img' => ['src' => 'assets/images/dmu/dmu-main-building-at-night.webp', 'alt' => 'The main building of Dalian Medical University lit at night', 'caption' => 'The main building on the Dalian campus at night.']],

        ['id' => 'recognition', 'eyebrow' => 'Your own regulator', 'h' => 'Recognition and scholarships', 'p' => [
            "DMU is on the Ministry of Education list of universities approved to teach English-medium MBBS to international students. The list of 1 June 2026 has 43 universities, and DMU is third, with 120 seats. It is listed with WHO / WDOMS and ECFMG as well.",
            "Whether your own medical council will accept the degree is a separate question that only your council can answer. Check your council's current rules for foreign medical graduates before applying. Neither the university nor CAS can promise a licence outcome.",
            "The DMU English website names six scholarships: the Chinese Government Scholarship, the Liaoning Provincial Government Scholarship, the Dalian Government Scholarship, the DMU Scholarship, the China-America Humanity Scholarship and the China-Russia Humanity Scholarship. Amounts and deadlines are not published, so ask admissions which apply to your intake.",
        ], 'link' => ['mbbs-in-china-scholarship-2027', 'Read more about scholarships at DMU']],

        ['id' => 'arrival', 'eyebrow' => 'After acceptance', 'h' => 'Visa, arrival and the first weeks', 'p' => [
            "Once the payment is received, DMU issues the admission letter and the JW202 form. These support your student visa application, which you make through the Chinese embassy or consulate that serves you. Ask them for current fees and processing times. Book flights only once the visa is issued.",
            "On arrival you pay the remaining first-year items, including the residence permit and insurance shown in the fee table. Plan for the weeks just after you land too, when you register, settle into the hostel and learn the campus. We have no confirmed information on orientation programmes, so ask admissions what happens in the first week.",
            "A short, specific email is the best way to begin. Tell admissions your intake, your senior high school subjects and the language questions listed above, and keep their replies.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-campus-shuttle-bus.webp', 'alt' => 'A campus shuttle bus at Dalian Medical University', 'caption' => 'A shuttle bus on the DMU campus.'], 'link' => ['china-student-visa-for-mbbs', 'Read the student visa guide for MBBS']],

    ],
    'faqs' => [
        ['Can I apply from Southeast Asia without visiting China?', 'Yes. You apply online through the CAS portal or DMU\'s online system and upload your documents. You travel only after your admission letter, JW202 form and visa are in place.'],
        ['Which intake is better, March or September?', 'Neither is better in itself. September (autumn) applications run from 1 March to 5 July, and March (spring) applications from 1 September to 5 January. Choose the one that fits your certificate dates and certification time. BDS is autumn only.'],
        ['Is the MBBS taught in English?', 'Yes, the MBBS at DMU is English-medium. Ask admissions about Chinese language support and how clinical teaching and the internship are arranged for international students.'],
        ['Do I need HSK or IELTS?', 'No HSK or IELTS requirement is published for MBBS. Ask admissions to confirm in writing for your intake, since requirements can change.'],
        ['What time zone does DMU use?', 'Dalian uses China Standard Time, UTC+8. DMU\'s admissions office hours are 08:30 to 11:30 and 13:20 to 16:30 Beijing time, so convert them to your own time before calling.'],
        ['How much do I pay first, and when?', 'The application fee plus tuition, ¥42,800 (about US$6,700), is due within 10 days of receiving the admission letter. The remaining items are paid on arrival. Check conversion and transfer charges with your own bank.'],
        ['Will my own medical council recognise a DMU degree?', 'DMU is listed with WHO / WDOMS and ECFMG, but each council decides for itself. Check your council\'s current rules for foreign medical graduates before applying. We cannot promise a licence outcome.'],
        ['How long is the programme?', 'The MBBS lasts six years, including a one-year internship, at ¥42,000 tuition a year. From the second year, the yearly total is ¥52,100 to ¥56,100. Confirm current fees with admissions.'],
    ],
    'related' => ['mbbs-in-china-2027', 'dalian-medical-university', 'mbbs-in-china-fees-2027', 'mbbs-in-china-admission-calendar-2027', 'mbbs-in-china-scholarship-2027', 'china-student-visa-for-mbbs', 'study-in-china', 'bds-in-china'],
];
