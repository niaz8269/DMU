<?php

$s = require __DIR__ . '/_shared.php';

// Figures below are computed from the MOE list in _shared.php so they always match it.
$list = array_values(array_filter($s['moeRows'], fn ($r) => $r[0] !== ''));
$bands = [
    ['100 seats or more', 100, 10000],
    ['60 to 99 seats', 60, 99],
    ['30 to 59 seats', 30, 59],
    ['Under 30 seats', 0, 29],
];
$bandRows = [];
foreach ($bands as [$label, $lo, $hi]) {
    $n = 0;
    $sum = 0;
    foreach ($list as $r) {
        if ((int) $r[2] >= $lo && (int) $r[2] <= $hi) {
            $n++;
            $sum += (int) $r[2];
        }
    }
    $bandRows[] = [$label, (string) $n, number_format($sum)];
}
$big = array_values(array_filter($list, fn ($r) => (int) $r[2] >= 100));
usort($big, fn ($a, $b) => (int) $b[2] <=> (int) $a[2]);
$bigRows = array_map(fn ($r) => [$r[0], $r[1], $r[2]], $big);
$count = count($list);
$bigCount = count($big);

return [
    'updated' => '2026-11-22',
    'title' => 'Compare MBBS Universities in China: Criteria and the MOE List',
    'description' => 'How to compare medical universities in China for MBBS: MOE listing, seats, language, fees and hospitals, with Dalian Medical University as the worked example.',
    'keywords' => 'compare MBBS universities in China, best medical universities in China, top medical universities in China, MBBS universities in China, which Chinese university is best for MBBS, MOE listed universities, best medical university in China for Pakistani students, medical universities in China',
    'eyebrow' => 'Comparison guide',
    'h1' => 'How to Compare MBBS Universities in China: A Practical Method',
    'lead' => 'Lists of the best medical universities in China are easy to find and hard to trust. This guide gives you a method instead: start with the Ministry of Education list, filter by language, fees, hospitals and recognition, and score each candidate on facts you can check, with Dalian Medical University as the university this site covers.',
    'crumb' => 'Compare MBBS universities',
    'cta' => 'Apply to Dalian Medical University',
    'answer' => 'To compare MBBS universities in China, begin with the Ministry of Education list of 43 universities for 2026-2027, then compare language of teaching, fees, affiliated hospitals, intakes and your own council\'s rules. This site covers Dalian Medical University, third on the list with 120 seats. We do not rank universities, and the list order is not a quality ranking.',
    'facts' => [
        ['Starting point', 'MOE notice of 1 June 2026: 43 universities, 2,790 seats'],
        ['University covered by this site', 'Dalian Medical University (DMU), third on the list, 120 seats'],
        ['Criteria used', 'MOE listing, language, fees, hospitals, recognition, intakes, support'],
        ['DMU course', 'English-medium MBBS, 6 years including a 1-year internship'],
        ['DMU first year', '¥67,100 package (about USD 9,450)'],
        ['DMU from year two', '¥52,100-56,100 a year (about USD 7,350-7,900)'],
        ['Rankings', 'Not provided; none confirmed for this site'],
    ],
    'sections' => [

        ['id' => 'why-method', 'eyebrow' => 'Approach', 'h' => 'Why a method beats a ranking', 'p' => [
            "Search for the best medical universities in China and you will meet tables with scores, stars and confident orderings. Most do not say how the scores were produced, and some are written by agents who are paid when you choose a particular university. A ranking you cannot audit is an opinion.",
            "This guide takes the opposite route. We give you the checks that decide whether a university is a serious candidate, show you how to read the official list, and leave the final choice to you. We present Dalian Medical University because this site is an admissions guide for DMU, run by Consultancy for Abroad Study (CAS). We make no claims about the other universities beyond what the official list itself shows, and we do not say that DMU is better than any of them.",
            "If you are comparing DMU with others, repeat the checks below for every candidate and keep your answers in one table. Whichever university comes out ahead for your own circumstances is the right one for you.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate.webp', 'alt' => 'The main gate of Dalian Medical University with the university name', 'caption' => 'The main gate of Dalian Medical University, the university this site covers.']],

        ['id' => 'moe-first', 'eyebrow' => 'Step one', 'h' => 'Step one: is the university on the MOE list?', 'p' => [
            "The Ministry of Education notice 教外司来〔2026〕94号, issued on 1 June 2026, names $count universities that may enrol international students into English-medium MBBS in 2026-2027, and sets 2,790 seats in total. Make this your first filter. A university that is not on the list should have to explain, in writing, on what basis it offers an English-language medical course.",
            "Dalian Medical University is third on the list, with 120 seats. The position and seats are taken from the notice, and we have flagged them to the site owner for a final check. Do not read the position as a quality score. The list is an approval list, and we do not know that its order carries any ranking meaning.",
        ], 'note' => $s['moeSource'], 'link' => ['moe-listed-mbbs-universities-in-china', 'See all 43 MOE listed universities and their seats']],

        ['id' => 'reading-seats', 'eyebrow' => 'Reading the list', 'h' => 'What the seat numbers can and cannot tell you', 'p' => [
            "Each university on the list has a number of seats. The numbers range widely, and the table below groups the $count universities by seat count, calculated from the official list.",
            "Seats show the size of the ministry's approval for that university. They do not show how many students actually enrol, how competitive admission is or how good the teaching is. A larger number can mean a large international programme with plenty of experience, or simply a bigger approval; a small number can mean a boutique programme or a newer one. Do not infer more than the number says.",
        ], 'table' => ['caption' => 'MOE list 2026-2027 grouped by number of seats', 'head' => ['Seat band', 'Universities', 'Seats in band'], 'rows' => $bandRows],
        'sub' => [
            ['h' => 'Universities with 100 seats or more', 'p' => [
                "$bigCount universities have 100 seats or more. Dalian Medical University is one of them. The table gives their names and positions exactly as the list shows them, in descending order of seats.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate-panorama.webp', 'alt' => 'Wide view of the Dalian Medical University main gate', 'caption' => 'A wider view of the DMU main gate.']],

        ['id' => 'big-table', 'eyebrow' => 'The largest approvals', 'h' => 'Universities with the most seats', 'p' => [
            "The next table lists every university on the 2026-2027 list that has 100 seats or more, with the position on the list and the seat count. It is shown so that you can see where DMU sits in relation to others; it is not a recommendation of any university.",
        ], 'table' => ['caption' => 'MOE list 2026-2027: universities with 100 seats or more', 'head' => ['Position on list', 'University', 'Seats'], 'rows' => $bigRows, 'highlight' => 'Dalian Medical University']],

        ['id' => 'language', 'eyebrow' => 'Step two', 'h' => 'Step two: language of teaching', 'p' => [
            "Ask each candidate in what language lectures, examinations and ward rounds are delivered, year by year, and what language the degree certificate uses. Be careful with the word bilingual. Ask for the proportion in each language and get it in writing.",
            "At DMU, MBBS is taught in English and English-medium teaching has run since 2004. No HSK or IELTS requirement is published for the MBBS. The same university also offers Clinical Medicine in Chinese, five years, with tuition of ¥32,000 a year; it is a different programme. When you compare universities, make sure you compare like with like, English-medium MBBS against English-medium MBBS.",
        ]],

        ['id' => 'fees', 'eyebrow' => 'Step three', 'h' => 'Step three: fees, itemised and dated', 'p' => [
            "Compare total yearly cost, not tuition alone. Ask each university or agent for the same list of items: tuition, hostel, insurance, residence permit, medical examination, application and visa fees, and any deposit. A low tuition figure can sit beside a long list of extras.",
            "For DMU the confirmed structure is a first-year package of ¥67,100 (about USD 9,450) covering the application processing fee, tuition, hostel, visa, health insurance and medical, registration, liaison, management and admission charges, the JW202 letter and airport pickup. From the second year the cost is ¥52,100 to ¥56,100 a year (about USD 7,350 to 7,900). Our table was last checked on 22 November 2026, and fees can change. We do not print a six-year total, and we hold no confirmed fees for any other university, so use each university's own current fee letter for them.",
        ], 'table' => $s['feeYearly'], 'img' => ['src' => 'assets/images/dmu/dmu-library.webp', 'alt' => 'The library building of Dalian Medical University with its sign', 'caption' => 'The library at DMU.'],
        'link' => ['mbbs-in-china-fees-2027', 'Read the full MBBS in China fees guide']],

        ['id' => 'hospitals', 'eyebrow' => 'Step four', 'h' => 'Step four: hospitals and clinical teaching', 'p' => [
            "A medical degree depends on patient contact. Ask each candidate which hospitals it owns or is affiliated with, how many beds and patients they have and which ones take international students. Treat claims of top rankings with care, and ask for the source.",
            "DMU has three directly affiliated hospitals and fourteen affiliated hospitals in total. The First Affiliated Hospital, founded in 1930, has 3,700 authorised beds on four campuses and about 2.16 million outpatient visits and over 90,000 inpatients a year. The three directly affiliated hospitals together report about 4.9 million outpatient visits and 249,000 inpatient admissions a year. DMU describes its First and Second Affiliated Hospitals as among the Top 100 Hospitals in China, which is its own claim.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-glass-teaching-building.webp', 'alt' => 'Students walking past the glass teaching building at Dalian Medical University', 'caption' => 'The teaching building at DMU.']],

        ['id' => 'recognition', 'eyebrow' => 'Step five', 'h' => 'Step five: recognition and your own council', 'p' => [
            "Ask each university which medical councils and directories recognise it, and then check those claims against the councils' own published rules. For DMU, the site owner confirms listing in WHO / WDOMS, coverage by ECFMG and recognition by medical councils in Pakistan (PMDC), India, the UK, the US, the Gulf countries and Africa.",
            "The wording rule applies to every university you consider: check the current rules of your own medical council before applying. This site never promises a licence outcome for any university, including DMU.",
        ]],

        ['id' => 'other-criteria', 'eyebrow' => 'Step six', 'h' => 'Step six: intakes, entry rules and support', 'p' => [
            "Finally, compare practical details. Which intakes does the university have, what are the application windows, what age and subject conditions apply, and which documents must be certified? How does the university handle visas, residence permits and arrival?",
            "DMU has two intakes, March (spring) and September (autumn), with BDS in autumn only. Autumn applications run from 1 March to 5 July and spring applications from 1 September to 5 January. MBBS and BDS applicants should be 18 to 25, with chemistry, physics, biology and English from senior high school. We do not quote the minimum marks because DMU publishes them only as an image.",
        ], 'table' => $s['calendar'], 'img' => ['src' => 'assets/images/dmu/dmu-campus-lake-view.webp', 'alt' => 'Campus lawns with a sea view at Dalian Medical University', 'caption' => 'Lawns and sea view at DMU.']],

        ['id' => 'scorecard', 'eyebrow' => 'Putting it together', 'h' => 'A scorecard you can copy', 'p' => [
            "Use this table for every university on your shortlist. Fill each cell from the university's own documents and keep the date. The right-hand column shows what we can confirm for DMU; leave your other columns blank until you have verified facts.",
        ], 'table' => ['caption' => 'Comparison scorecard with DMU facts', 'head' => ['Criterion', 'What to ask', 'DMU (confirmed)'], 'rows' => [
            ['MOE listing', 'Position and seats on the current notice', 'Third of 43; 120 seats'],
            ['Language', 'Language of lectures, exams and wards', 'English medium; HSK / IELTS not published'],
            ['First-year cost', 'Complete itemised package', '¥67,100 (about USD 9,450)'],
            ['Later years', 'Per-year total', '¥52,100-56,100 (about USD 7,350-7,900)'],
            ['Hospitals', 'Number, beds, visits', '3 direct, 14 in total; First Affiliated 3,700 beds'],
            ['Recognition', 'Councils and directories', 'WHO / WDOMS, ECFMG, several councils; check yours'],
            ['Intakes', 'Windows and start dates', 'March and September; BDS autumn only'],
        ]]],

    ],
    'faqs' => [
        ['How do I compare MBBS universities in China?', 'Start with the Ministry of Education list, then compare language of teaching, itemised fees, hospitals, recognition by your own council and intake dates. Put the answers for each university in one table.'],
        ['Which is the best medical university in China?', 'This site does not rank universities. Use the Ministry of Education list as a filter and compare the criteria in this guide. Dalian Medical University is the university this site covers.'],
        ['Is the order of the MOE list a ranking?', 'We have no evidence that it is. Treat it as an approval list. DMU is third on the 1 June 2026 list with 120 seats.'],
        ['How many universities are on the 2026-2027 MOE list?', 'Forty-three, with 2,790 seats in total, according to the notice of 1 June 2026.'],
        ['Should I choose the university with the most seats?', 'Not for that reason alone. Seats show the size of the approval, not the quality of teaching or your chances of admission.'],
        ['How does DMU compare on fees?', 'We confirm DMU only: a first-year package of ¥67,100 and ¥52,100 to ¥56,100 a year afterwards. We have no confirmed fees for other universities, so get theirs in writing.'],
        ['Do I need to check recognition for each university?', 'Yes. Check the rules of your own medical council against each university. We cannot promise a licence outcome.'],
    ],
    'related' => ['moe-listed-mbbs-universities-in-china', 'mbbs-in-china-fees-2027', 'dalian-medical-university'],
];
