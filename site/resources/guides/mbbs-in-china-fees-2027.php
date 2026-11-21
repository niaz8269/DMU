<?php

$s = require __DIR__ . '/_shared.php';

return [
    'updated' => '2026-11-22',
    'title' => 'MBBS in China Fees 2027: DMU Fee Structure and Cost',
    'description' => 'MBBS in China fees for 2027 at Dalian Medical University: the 67,100 yuan first-year package, yearly costs from year two, DMU charges and payment timing.',
    'keywords' => 'MBBS in China fees, MBBS in China fees 2027, MBBS in China fee structure, MBBS in China cost, MBBS in China low fees, MBBS in China application fee, MBBS in China hostel fee, MBBS in China fee payment, Dalian Medical University fees, DMU MBBS fee',
    'eyebrow' => 'Fee guide',
    'h1' => 'MBBS in China Fees 2027: What Dalian Medical University Charges',
    'lead' => 'A line-by-line explanation of the money side of an MBBS at Dalian Medical University: the first-year package quoted by CAS, the lower yearly cost that follows, the separate charges in DMU\'s own fee letter, hostel prices, and the order in which payments fall due.',
    'crumb' => 'MBBS in China fees 2027',
    'cta' => 'Ask admissions about fees',
    'answer' => 'The first year of the MBBS at Dalian Medical University costs 67,100 yuan, about US$9,450, as a complete CAS package covering tuition, hostel, visa, insurance, medical, the JW202 letter and airport pickup. From year two the yearly total is 52,100 to 56,100 yuan, about US$7,350 to 7,900, depending on the hostel room.',
    'facts' => [
        ['First-year package', '¥67,100 (about US$9,450), CAS service charges included'],
        ['Tuition', '¥42,000 a year for MBBS'],
        ['From year two', '¥52,100-56,100 a year (about US$7,350-7,900)'],
        ['Hostel', 'Double room about ¥8,000 (boys) to ¥11,000 (girls) a year; rent runs 10 months'],
        ['DMU application fee', '¥800'],
        ['Paid within 10 days of the admission letter', '¥42,800 (application fee plus tuition, about US$6,700)'],
        ['Paid on arrival', 'Visa ¥800, medical ¥500, books ¥500, insurance ¥800'],
        ['Fee table checked', '22 November 2026; confirm with admissions'],
    ],
    'sections' => [

        ['id' => 'overview', 'eyebrow' => 'Overview', 'h' => 'The fee picture in one minute', 'p' => [
            "Searches for MBBS in China fees tend to ask for a single number, and no single number is honest. There are two numbers that you can plan with: a package for the first year and a lower recurring figure afterwards. A third set, DMU's own fee letter, shows what the university itself bills, and it is useful because it lets you see how a package is built.",
            "Everything on this page is for the English-medium MBBS at Dalian Medical University (DMU). Amounts are in Chinese yuan, with approximate US dollar equivalents given only where the owner's fee sheet supplies them. We do not print conversions into other currencies because exchange rates move from week to week, and a wrong figure in your own currency would mislead you more than help.",
            "The fee table was last checked on 22 November 2026. Fees can change between intakes, so treat the table as a starting point and ask admissions to confirm the figure in writing before you pay anything.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate-panorama.webp', 'alt' => 'Wide view of the Dalian Medical University main gate and the plaza in front of it', 'caption' => 'The gate of the campus where the fees below apply.']],

        ['id' => 'first-year', 'eyebrow' => 'Year one', 'h' => 'The first-year complete package: 67,100 yuan', 'p' => [
            "The first-year package is ¥67,100, about US$9,450. CAS quotes it as a complete figure so that a new student does not have to chase six or seven separate payments. It covers the application processing fee, tuition, the hostel, the visa, health insurance and medical examination, registration, liaison, management and admission charges, the JW202 visa letter and airport pickup.",
            "An important distinction: this is a CAS package, so it includes CAS service charges. It is not a copy of the university's invoice. DMU's own charges are set out in a separate section below, and the gap between the two is what pays for the application handling and the arrival support.",
        ], 'table' => $s['feeFirstYear'], 'sub' => [
            ['h' => 'Why year one is the heaviest', 'p' => [
                "The first year carries costs that happen once: processing the application, registration, the visa and the first medical check, plus the pickup on arrival. From the second year those items fall away, which is why the recurring figure is lower.",
            ]],
            ['h' => 'What you should still ask', 'p' => [
                "Ask for the package in writing with each included item named. If a line you expect, such as the hostel, is missing, find out before you pay rather than after.",
            ]],
        ]],

        ['id' => 'dmu-charges', 'eyebrow' => 'University charges', 'h' => 'What DMU itself charges', 'p' => [
            "DMU's own fee letter lists a short set of charges. These are the amounts the university bills, separate from any consultancy service:",
        ], 'table' => ['caption' => 'DMU fee letter, MBBS (RMB)', 'head' => ['Item', 'Amount', 'When'], 'rows' => [
            ['Application fee', '¥800', 'Within 10 days of the admission letter'],
            ['Tuition (MBBS), one year', '¥42,000', 'Within 10 days of the admission letter'],
            ['Application fee plus tuition', '¥42,800 (about US$6,700)', 'Within 10 days of the admission letter'],
            ['Visa', '¥800', 'On arrival'],
            ['Medical check-up', '¥500', 'On arrival'],
            ['Books', '¥500', 'On arrival'],
            ['Insurance', '¥800', 'On arrival'],
        ]], 'sub' => [
            ['h' => 'Reading the payment order', 'p' => [
                "The first payment of ¥42,800 combines the application fee with a year of tuition and is due within ten days of receiving the admission letter. The remaining items are collected when you arrive. The hostel is billed separately, as explained next.",
            ]],
            ['h' => 'Why the package is higher', 'p' => [
                "If you add the university's charges and the hostel, you reach a smaller figure than the CAS package. The difference covers the CAS services listed above, including the visa letter handling and the airport pickup. We state that as a structure, not as a figure, because the sheet does not itemise the service portion.",
            ]],
        ]],

        ['id' => 'hostel', 'eyebrow' => 'Accommodation', 'h' => 'Hostel prices and how rent is counted', 'p' => [
            "DMU's fee letter prices a double room at about ¥8,000 a year for boys and about ¥11,000 a year for girls. Postgraduate rooms cost ¥10,000 a year. Rent covers ten months of the year, not twelve.",
            "From year two, the CAS yearly table shows accommodation as a range of ¥8,000 to ¥12,000. The range is why the yearly total is also a range rather than a single sum. The sheet does not say which room type sits at which point, so ask admissions where you would fall.",
            "Ask admissions which room type is allocated to you and whether you may request a different one. Room choice is the main reason two students in the same year can have totals that differ by several thousand yuan.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-1947-arch-and-student-hostel.webp', 'alt' => 'A stone arch dated 1947 in front of a residence block at Dalian Medical University', 'caption' => 'A residence block behind the 1947 arch.']],

        ['id' => 'yearly', 'eyebrow' => 'Year two onward', 'h' => 'Yearly cost from the second year', 'p' => [
            "After the first year the yearly total is ¥52,100 to ¥56,100, about US$7,350 to 7,900. It is made of tuition, accommodation, insurance, the residence permit and a medical examination.",
        ], 'table' => $s['feeYearly'], 'sub' => [
            ['h' => 'Tuition dominates', 'p' => [
                "Tuition of ¥42,000 is between three-quarters and four-fifths of the yearly figure, so the room type moves the total far more than any small item does.",
            ]],
            ['h' => 'Small items recur', 'p' => [
                "Insurance at ¥800, the residence permit at ¥800 and the medical at ¥500 appear every year. Put them in your own budget sheet so that they do not come as a surprise.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-glass-teaching-building.webp', 'alt' => 'Students walking beside the glass-fronted teaching building at Dalian Medical University', 'caption' => 'Tuition is the largest part of the yearly cost.']],

        ['id' => 'payments', 'eyebrow' => 'Payments', 'h' => 'The order in which money moves', 'p' => [
            "Payments follow the application steps, so it helps to see them together.",
        ], 'list' => [
            'You apply and upload documents. DMU reviews the file and, if you are accepted, issues an Acceptance Letter (LOA).',
            'You pay the fee shown in the LOA to DMU\'s account to confirm your seat. The university lists the application fee plus tuition, ¥42,800, as due within ten days of the admission letter.',
            'After the payment, DMU issues the admission letter and the JW202 form.',
            'You travel. On arrival the remaining items are paid: visa, medical, books and insurance, and the hostel.',
            'Each later year, tuition, accommodation, insurance, residence permit and medical are paid for the year ahead.',
        ], 'sub' => [
            ['h' => 'Pay only to the account the university gives you', 'p' => [
                "Do not pay into any account that was sent to you in an unverified message. Ask the university or CAS to confirm the account in writing and keep every receipt.",
            ]],
        ]],

        ['id' => 'not-included', 'eyebrow' => 'Planning', 'h' => 'What is not in these figures', 'p' => [
            "The numbers above cover university and package charges. This site deliberately does not give a six-year total, a monthly living-cost estimate for Dalian or any exchange-rate table beyond the two quoted, because those figures are not part of the confirmed fee sheet.",
            "Plan separately for flights, personal spending, clothing and any examination you may need when you return home. A returning graduate may also face a licensing exam set by their own council, and its fee is outside the university's charges.",
        ], 'sub' => [
            ['h' => 'A simple way to build your own total', 'list' => [
                'Take the first-year package.',
                'Add the yearly figure for each remaining year, using the low or high end according to your hostel room.',
                'Add your own flights and personal spending.',
                'Add a margin in case fees change, which they can.',
            ]],
        ]],

        ['id' => 'compare', 'eyebrow' => 'Comparing', 'h' => 'How to compare fees between universities', 'p' => [
            "When you compare MBBS quotes, compare what is inside each figure. One quote may include the hostel and the visa while another lists them as extras, and a low headline can become the higher bill. Ask each source the same questions:",
        ], 'list' => [
            'Is the university on the current MOE list for English-medium clinical medicine?',
            'Does the quoted fee include hostel, insurance, medical and visa?',
            'Which charges are paid to the university and which to a service provider?',
            'What is paid before travel and what on arrival?',
            'Will you receive a receipt naming the payee for every payment?',
        ], 'img' => ['src' => 'assets/images/dmu/dmu-library.webp', 'alt' => 'The library building of Dalian Medical University with its name sign', 'caption' => 'Compare what each quote includes, not only the headline.']],

        ['id' => 'programmes', 'eyebrow' => 'Other courses', 'h' => 'Tuition for other programmes', 'p' => [
            "For comparison, here are the tuition figures for the other programmes listed on this site. The MBBS figure is the first row.",
        ], 'table' => $s['programmes'], 'link' => ['mbbs-in-china-2027', 'Read the complete MBBS in China 2027 guide']],
    ],
    'faqs' => [
        ['How much is the MBBS in China fee at DMU?', 'The first-year complete package is ¥67,100, about US$9,450. From year two it is ¥52,100 to ¥56,100 a year, about US$7,350 to 7,900.'],
        ['What does the first-year package include?', 'Application processing, tuition, hostel, visa, health insurance and medical, registration, liaison, management and admission charges, the JW202 visa letter and airport pickup.'],
        ['Does the package include CAS service charges?', 'Yes. The CAS package includes service charges, and DMU\'s own charges are listed separately in the section on university charges.'],
        ['What is DMU\'s tuition for MBBS?', '¥42,000 a year.'],
        ['What is the MBBS in China application fee?', 'DMU\'s fee letter lists an application fee of ¥800.'],
        ['What do I pay after the admission letter?', 'The application fee plus tuition, ¥42,800 (about US$6,700), within ten days of receiving the admission letter. The rest is paid on arrival.'],
        ['How much is the hostel?', 'A double room is about ¥8,000 a year for boys and about ¥11,000 for girls, with postgraduate rooms at ¥10,000. Rent runs for ten months of the year.'],
        ['What are the fees from the second year?', 'Tuition ¥42,000, accommodation ¥8,000 to 12,000, insurance ¥800, residence permit ¥800 and medical ¥500, a total of ¥52,100 to ¥56,100.'],
        ['Are the MBBS in China fees for 2027 different?', 'The table was last checked on 22 November 2026. Fees can change, so ask admissions to confirm the current figure in writing before paying.'],
        ['Can I pay semester by semester?', 'No instalment scheme is published on this site. Ask admissions in writing what the LOA allows.'],
        ['Is there a cheaper MBBS in China?', 'Compare what each quote includes and check that the university is on the current MOE list. A lower headline can leave out the hostel or visa.'],
        ['What costs are not covered?', 'Flights, personal spending and any examination your own medical council sets for returning graduates.'],
    ],
    'related' => ['mbbs-in-china-2027', 'mbbs-in-china-scholarship-2027', 'dalian-medical-university'],
];
