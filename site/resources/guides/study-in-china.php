<?php

$s = require __DIR__ . '/_shared.php';

return [
    'updated' => '2026-11-25',
    'title' => 'Study in China for International Students: DMU Guide 2027',
    'description' => 'Study in China as an international student: programmes, tuition, March and September intakes, entry rules, scholarships and applying at Dalian Medical University.',
    'keywords' => 'study in China, study in China for international students, study in China 2027, study medicine in China, study in China scholarship, study in Dalian, Dalian Medical University, DMU admission, apply to study in China',
    'eyebrow' => 'Hub guide',
    'h1' => 'Study in China as an International Student: A Dalian Medical University Guide',
    'lead' => 'Studying in China is a large topic, and no single website can cover every university and every subject. This guide stays with what we can support honestly: studying medicine and related programmes at Dalian Medical University (DMU), with the programmes, fees, intakes, entry rules, application steps and scholarships laid out in one place, plus pointers to the detailed guides.',
    'crumb' => 'Study in China',
    'cta' => 'Ask admissions about studying at DMU',
    'answer' => 'This site covers studying in China through one university, Dalian Medical University in Dalian, Liaoning Province. It offers MBBS, BDS, Clinical Medicine (Chinese medium), Clinical Pharmacy, Master\'s and PhD programmes, with two intakes a year, in March and September. MBBS tuition is ¥42,000 a year, and six named scholarships are listed by the university.',
    'facts' => [
        ['University', 'Dalian Medical University (DMU), public, Dalian, Liaoning Province'],
        ['Programmes', 'MBBS, BDS, Clinical Medicine (Chinese medium), Clinical Pharmacy, Master\'s, PhD'],
        ['Tuition range', '¥32,000 to ¥45,000 a year, depending on the programme'],
        ['Intakes', 'March (spring) and September (autumn); BDS autumn only'],
        ['Application windows', 'Autumn: 1 March to 5 July. Spring: 1 September to 5 January'],
        ['Entry (MBBS and BDS)', 'Age 18 to 25; chemistry, physics, biology and English at senior high school'],
        ['Language tests', 'No HSK or IELTS requirement is published for MBBS'],
        ['Scholarships', 'Six named schemes; amounts and deadlines are not published here'],
        ['International students', '1,200+ from over 100 countries'],
    ],
    'sections' => [

        ['id' => 'overview', 'eyebrow' => 'Start here', 'h' => 'What studying in China means on this site', 'p' => [
            "People who search for \"study in China\" are usually asking one of two questions. Some want a broad picture of how a foreign student gets into a Chinese university at all. Others already know they want a medical degree and need to find a university that fits. This guide serves both, but it is honest about its limits: this site is an admissions guide and application help service run by Consultancy for Abroad Study (CAS). It is not the university and it does not speak for every institution in the country.",
            "What we can describe with confidence is one university. Dalian Medical University is a public medical university in Dalian, in Liaoning Province, founded in 1947 as Guandong Medical College and renamed in 1994. Its International Education College has run since 1985, and the English-medium MBBS began in 2004, one of the earliest in China. The university reports more than 16,300 full-time students, and more than 1,200 of the students from abroad come from over 100 countries.",
            "So think of this page as a hub. It explains the general shape of applying to study in China, then shows what that looks like in practice at DMU, and sends you to the detailed guides for fees, eligibility, scholarships, visas and life in the city. Anything we cannot confirm, such as a minimum marks table or a stipend amount, we say so rather than guess.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate-panorama.webp', 'alt' => 'Panoramic view of the main gate of Dalian Medical University', 'caption' => 'The main gate of Dalian Medical University.']],

        ['id' => 'why-dalian', 'eyebrow' => 'The city and campus', 'h' => 'Why look at Dalian and DMU', 'p' => [
            "Dalian is a coastal city in Liaoning Province, and DMU's campus sits at No. 9 West Section, Lvshun South Road, Lvshunkou District. The university has used this campus since 2007. It covers 1,510,000 square metres of land with 532,000 square metres of floor area, according to the university's English website. We do not have confirmed figures on Dalian's cost of living or climate, so we leave those out. The guide on life in Dalian covers what we can say about daily life for international students.",
            "For a medical applicant, the hospitals matter as much as the campus. DMU has three directly affiliated hospitals and fourteen affiliated hospitals in total. The First Affiliated Hospital was founded in 1930 and has 3,700 authorised beds across four campuses, with about 2.16 million outpatient visits and over 90,000 inpatients a year. The three directly affiliated hospitals together handle about 4.9 million outpatient visits and 249,000 inpatient admissions each year. The university also reports six disciplines in the top 1% of the ESI global rankings and one national key discipline.",
            "None of this predicts your own experience, and we publish no exam-pass rates or acceptance rates because we do not have them. It does show the scale of the teaching base, which is a fair thing to weigh when you compare universities.",
        ], 'img' => ['src' => 'assets/images/dmu/dalian-city-view.webp', 'alt' => 'View over the city of Dalian', 'caption' => 'Dalian, the coastal city where DMU is based.'], 'link' => ['life-in-dalian-for-international-students', 'Read about life in Dalian for international students']],

        ['id' => 'programmes', 'eyebrow' => 'What you can study', 'h' => 'Programmes and tuition at DMU', 'p' => [
            "The programme list below is the one this site supports. MBBS is the main focus and BDS (Stomatology) comes next, followed by the others. Tuition is shown per year in Chinese yuan and does not include hostel, insurance or the other costs described in the fees guide.",
            "One point is worth stating clearly. Clinical Medicine is taught in Chinese, while MBBS is the English-medium route, so the language you study in decides which one is realistic.",
        ], 'table' => $s['programmes'], 'sub' => [
            ['h' => 'Which programme to start with', 'p' => [
                "If you want to practise medicine and you do not study in Chinese, the six-year MBBS, which includes a one-year internship, is the programme most readers of this site will look at. BDS is a five-year dental programme and, as the intake section below shows, it starts in autumn only. Clinical Pharmacy, the Master's and the PhD suit applicants who already hold an earlier degree or have a different goal. The comparison of Clinical Medicine and MBBS explains the language difference in more detail.",
            ]],
        ], 'link' => ['clinical-medicine-in-china', 'Compare Clinical Medicine and MBBS at DMU']],

        ['id' => 'intakes', 'eyebrow' => 'When to apply', 'h' => 'Two intakes: March and September', 'p' => [
            "DMU takes new students twice a year. The September intake is the autumn one, with the semester starting in September or October. The March intake is the spring one, with the semester starting in March. BDS is offered for the autumn intake only.",
            "The application windows are published on DMU's admissions portal. For autumn, applications run from 1 March to 5 July. For spring, they run from 1 September to 5 January. The International Education College announced that the online system for the 2027 spring intake opened on 20 October 2026. That notice gave no closing date, so we quote the 5 January date from the portal and ask you to confirm it with admissions before you plan around it.",
        ], 'table' => $s['calendar'], 'sub' => [
            ['h' => 'Planning backwards from the start date', 'p' => [
                "Documents take time, especially the certification of school certificates, so start collecting them well before a window closes. Applying early also leaves room to fix a missing page or an unclear scan. The spring intake guide and the admission calendar give more detail for each window.",
            ]],
        ], 'link' => ['mbbs-in-china-spring-intake-2027', 'See the March 2027 spring intake guide']],

        ['id' => 'requirements', 'eyebrow' => 'Who can apply', 'h' => 'Entry requirements and documents', 'p' => [
            "For MBBS and BDS, DMU's admissions portal asks for applicants aged 18 to 25 who are mentally and physically healthy. You should have completed senior high school with good marks. Chemistry, physics, biology and English are compulsory, and mathematics is a reference subject. DMU publishes its minimum marks only as an image, so we do not quote a percentage here. Ask admissions for the current figure for your own certificate.",
            "No HSK or IELTS requirement is published for MBBS. That is different from many Chinese-medium courses elsewhere, so do not assume a language test is needed, but do ask admissions to confirm it in writing for your intake. You will also need to show financial support, either a family financial certificate or one year of bank statements.",
            "The documents to prepare are listed below. The point about certification catches many applicants out. Your high school diploma and transcripts must be certified by the Chinese embassy or consulate in your country, or notarised in China. In general, this legalisation step exists so that a Chinese institution can trust that a foreign school document is genuine. DMU keeps the originals.",
        ], 'list' => $s['documents'], 'link' => ['mbbs-in-china-eligibility-2027', 'Read the full MBBS eligibility guide']],

        ['id' => 'how-to-apply', 'eyebrow' => 'The process', 'h' => 'How applying works in five steps', 'p' => [
            "The sequence below follows DMU's International Education College. It is the same whether you apply on your own or with the help of CAS.",
        ], 'list' => [
            'Apply through the CAS portal or DMU\'s online system and upload your documents.',
            'DMU reviews the application and decides from the documents you supplied.',
            'If the decision is positive, DMU issues an Acceptance Letter (LOA).',
            'You pay the fee shown in the LOA to the university\'s account to confirm your seat.',
            'After payment, DMU issues the admission letter and the JW202 form.',
        ], 'sub' => [
            ['h' => 'Why the JW202 and admission letter matter', 'p' => [
                "The admission letter and the JW202 form are the papers that support a student visa application for a long study stay in China. The details of the visa itself belong to the embassy or consulate that handles your application, so read the visa guide and check with them directly. We do not publish visa fees because we cannot confirm them.",
                "Money is the point where scams appear in any country's admissions market. Pay only the amount shown in your Acceptance Letter, and confirm the account details with the university's own admissions office before you transfer anything. We never publish DMU's bank details on this site. If someone asks you to send money to a personal account, stop and check first.",
            ]],
        ], 'link' => ['china-student-visa-for-mbbs', 'Read the student visa guide for MBBS']],

        ['id' => 'costs-scholarships', 'eyebrow' => 'Money', 'h' => 'Costs and scholarships', 'p' => [
            "For the MBBS, tuition is ¥42,000 a year. From the second year, the yearly total, with accommodation, insurance, a residence permit and a medical check, comes to ¥52,100 to ¥56,100, about USD 7,350 to 7,900. DMU's own fee letter lists an application fee of ¥800, and the application fee plus the first tuition payment (¥42,800, about USD 6,700) is due within 10 days of receiving the admission letter, with the other items paid on arrival. These fees were last checked on 22 November 2026 and can change, so confirm them with admissions. We do not state a six-year total or a general cost of living in Dalian.",
            "Scholarships are a separate question. The DMU English website names six: the Chinese Government Scholarship, the Liaoning Provincial Government Scholarship, the Dalian Government Scholarship, the DMU Scholarship, the China-America Humanity Scholarship and the China-Russia Humanity Scholarship. DMU was designated a Chinese Government Scholarship university in 2007. We do not publish amounts, quotas or deadlines, because none have been confirmed. Ask admissions which schemes apply to your programme and intake, and do not count on a scholarship when you plan your budget.",
        ], 'table' => $s['scholarships'], 'link' => ['mbbs-in-china-scholarship-2027', 'Read more about scholarships at DMU']],

        ['id' => 'moe-context', 'eyebrow' => 'Choosing safely', 'h' => 'The MOE list and checking your home rules', 'p' => [
            "If you are weighing universities, one reference point is the Ministry of Education list of universities approved to teach English-medium MBBS to international students. The list issued on 1 June 2026 names 43 universities, and DMU is third, with 120 seats. We do not copy the whole list here. The moe-listed guide shows it with seats for each university.",
            "Recognition is a different question again. DMU is listed with WHO / WDOMS and ECFMG, and medical councils in Pakistan, India, the UK, the US, the Gulf countries and Africa recognise it. Still, rules change and each council decides for itself. Check the current requirements of your own medical council before you apply. Neither the university nor CAS can promise a licence outcome.",
        ], 'note' => $s['moeSource'], 'link' => ['moe-listed-mbbs-universities-in-china', 'See all 43 MOE listed universities and their seats'], 'img' => ['src' => 'assets/images/dmu/dmu-library.webp', 'alt' => 'The library building at Dalian Medical University', 'caption' => 'The university library on the Dalian campus.']],

        ['id' => 'next', 'eyebrow' => 'Where to go next', 'h' => 'Where to go next', 'p' => [
            "Start with the MBBS guide if a medical degree is your goal. It is the most complete page on this site. The Dalian Medical University profile covers the university in more depth, and the eligibility guide goes through the entry rules line by line. The CSCA guide explains what that test is and how it relates to scholarships, so you can ask admissions whether it applies to you.",
            "When you are ready, contact admissions through the details on this page. Tell them your country, your school subjects and the intake you have in mind, and ask for the current dates, fees and documents in writing. A clear question gets a clear answer, and it saves you a month of guessing.",
        ], 'link' => ['mbbs-in-china-2027', 'Read the complete MBBS in China 2027 guide'], 'img' => ['src' => 'assets/images/dmu/dmu-glass-teaching-building.webp', 'alt' => 'The glass teaching building at Dalian Medical University', 'caption' => 'The teaching building on campus.']],

    ],
    'faqs' => [
        ['Can international students study in China?', 'Yes. International students apply to Chinese universities each year. On this site, the focus is Dalian Medical University, which has taught international students through its International Education College since 1985.'],
        ['Can I study medicine in China in English?', 'At DMU, MBBS is the English-medium programme. It lasts six years, including a one-year internship, and tuition is ¥42,000 a year. Clinical Medicine at DMU is taught in Chinese.'],
        ['When are the intakes for study in China at DMU?', 'There are two: March (spring) and September (autumn). Autumn applications run from 1 March to 5 July, and spring applications from 1 September to 5 January. BDS is autumn only. Confirm current dates with admissions.'],
        ['Do I need HSK or IELTS to apply?', 'No HSK or IELTS requirement is published for MBBS. Ask admissions to confirm in writing for your intake, since requirements can change.'],
        ['Is there a scholarship for studying in China?', 'DMU names six scholarships: Chinese Government, Liaoning Provincial Government, Dalian Government, DMU, China-America Humanity and China-Russia Humanity. We do not publish amounts or deadlines.'],
        ['What documents do I need to apply?', 'A passport information page, a passport-size photo, your senior high school transcript, a medical check-up and proof of financial support. A diploma helps. School documents must be certified by the Chinese embassy or consulate or notarised in China.'],
        ['Is CAS the university?', 'No. CAS, Consultancy for Abroad Study, runs this admissions guide and application help service. The university decides admissions.'],
        ['Does this site cover other universities in China?', 'No. It covers Dalian Medical University. For context on other English-medium MBBS universities, see the Ministry of Education list guide.'],
    ],
    'related' => ['mbbs-in-china-2027', 'dalian-medical-university', 'mbbs-in-china-scholarship-2027', 'china-student-visa-for-mbbs', 'mbbs-in-china-eligibility-2027', 'moe-listed-mbbs-universities-in-china', 'life-in-dalian-for-international-students', 'csca-test-for-study-in-china'],
];
