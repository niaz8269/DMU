<?php

/*
| Code-side FAQs for the main pages and selected blog posts.
| They are shown on the page and marked up as FAQPage, so search engines and AI answers can quote them.
| No database rows are changed: admin-managed FAQs still come first, these are added after them
| (a question that the admin already has is not repeated).
|
| RULE: every answer uses only facts confirmed for Dalian Medical University (FACTS.md in the project root):
| the MOE notice of 1 June 2026, the CAS fee sheet and DMU's fee letter, the DMU admissions portal and IEC
| calendar, and the recognition facts confirmed by the owner (ECFMG eligible; councils must be checked by the student).
| No scholarship amounts, no six-year totals, no living costs, no percentages.
*/

$q = [
    'moe' => ['Is Dalian Medical University MOE listed for MBBS?', 'Yes. Dalian Medical University is number 3 of the 43 universities on the Ministry of Education list issued on 1 June 2026, with 120 seats for the English taught MBBS in 2026–2027.'],
    'moe_count' => ['How many MOE listed MBBS universities are there in China?', 'The Ministry of Education notice of 1 June 2026 lists 43 universities allowed to teach MBBS in English to international students, with 2,790 seats in total. Only apply to a university on this list.'],
    'moe_check' => ['How can I check that a Chinese university is MOE listed?', 'Find the university by name in the Ministry of Education notice for the current academic year. The notice of 1 June 2026 lists 43 universities with their seat quotas. If a university is not on the list, it cannot admit international students to an English taught MBBS.'],
    'wdoms' => ['Is Dalian Medical University WHO recognised?', 'The WHO no longer keeps its own list. Medical schools are recorded in the World Directory of Medical Schools (WDOMS), and Dalian Medical University is listed there.'],
    'ecfmg' => ['Can DMU graduates take the USMLE?', 'DMU is ECFMG eligible, so its students and graduates can apply for ECFMG certification, which is the route to the USMLE. ECFMG rules can change, so check its current requirements when you plan this route.'],
    'councils' => ['Is the DMU MBBS degree recognised by medical councils such as PMDC?', 'DMU is recognised by medical councils in Pakistan (PMDC), India, the UK, the US, the Gulf countries and Africa. Each council sets its own conditions and updates them, so read your own council\'s current rules before you apply. No one can promise you a licence outcome.'],
    'english' => ['Is MBBS at Dalian Medical University taught in English?', 'Yes. DMU launched its English-medium MBBS in 2004, one of the earliest in China. No HSK or IELTS requirement is published for MBBS. Ask admissions about language support during clinical training.'],
    'hsk' => ['Do I need Chinese or IELTS before I start MBBS in China?', 'No HSK or IELTS requirement is published for MBBS at DMU, and the programme is taught in English. Ask admissions about language support during clinical training.'],
    'duration' => ['How long is MBBS in China?', 'The English taught MBBS at Dalian Medical University takes six years, including a one-year internship.'],
    'clinical' => ['Is MBBS in China the same as Clinical Medicine?', 'In China the subject is officially called Clinical Medicine, and the English taught degree leads to the MBBS. At DMU the English-medium MBBS takes 6 years including internship, while Clinical Medicine taught in Chinese is a separate 5-year programme.'],
    'fee_total' => ['What are the MBBS in China fees at Dalian Medical University?', 'The yearly total is ¥52,100–56,100 (about USD 7,350–7,900), with tuition at ¥42,000 a year. Food and personal costs are not included, and fees can change, so confirm with admissions.'],
    'fee_first' => ['What do I pay in the first year of MBBS at DMU?', 'DMU\'s fee letter lists an application fee of ¥800, visa ¥800, a medical check-up of ¥500, books of about ¥500 and insurance of ¥800, plus tuition and hostel. The application fee and first-year tuition (¥42,800, about US$6,700) are due within 10 days of the admission letter; the rest is paid on arrival.'],
    'fee_yearly' => ['What do I pay from the second year?', '¥52,100–56,100 a year: tuition ¥42,000, accommodation ¥8,000–12,000, insurance ¥800, residence permit ¥800 and medical ¥500.'],
    'fee_payments' => ['Which payments are made before arrival?', 'According to DMU\'s fee letter, the application fee (¥800) and tuition, together ¥42,800 (about USD 6,700), are paid within 10 days of receiving the admission letter. The other fees are paid on arrival.'],
    'living' => ['What does hostel accommodation cost at DMU?', 'DMU\'s fee letter gives a double room at about ¥8,000 (boys) to ¥11,000 (girls) a year, and ¥10,000 for postgraduates. Rent runs for 10 months a year.'],
    'cheap' => ['Is MBBS in China cheaper than private MBBS at home?', 'It can be, but compare the full cost. DMU tuition is ¥42,000 a year and the yearly total is ¥52,100-56,100. Compare this with the full cost of private medical colleges at home, and always check that the Chinese university is MOE listed.'],
    'eligibility' => ['What are the eligibility requirements for MBBS in China?', 'Age 18 to 25, good physical and mental health, and completed senior high school with good marks. Chemistry, physics, biology and English are compulsory, and mathematics is a reference subject. You also need proof of financial support and a valid passport.'],
    'percent' => ['What percentage is required for MBBS in China?', 'DMU publishes its minimum-marks table only as an image, so we do not quote a percentage here. Ask admissions to confirm the requirement for your own certificate.'],
    'age' => ['What is the age limit for MBBS in China?', 'Applicants to MBBS and BDS at Dalian Medical University should be between 18 and 25 years old.'],
    'documents' => ['Which documents do I need to apply?', 'Your passport information page, a passport-size photo and your senior high school transcript are compulsory. A diploma is helpful, and you also need a medical check-up and financial proof (a family financial certificate or one year\'s bank statement). High school diploma and transcripts must be certified by the Chinese embassy or consulate in your country or notarised in China.'],
    'intakes' => ['When are the MBBS intakes at DMU?', 'There are two intakes: the March/spring intake and the September/autumn intake. BDS is offered in the autumn only.'],
    'spring_dates' => ['What is the application window for the March/spring 2027 intake?', 'From 1 September to 5 January, for a semester that starts in March. DMU\'s International Education College opened the online system for the 2027 March/spring intake on 20 October 2026. Its notice gives no closing date, so confirm 5 January with admissions.'],
    'fall_dates' => ['What is the application window for the September/autumn intake?', 'From 1 March to 5 July, for a semester that starts in September or October. Confirm the current dates with admissions.'],
    'apply' => ['How do I apply for MBBS at Dalian Medical University?', 'Apply through the CAS portal or DMU\'s online system and upload your documents. DMU decides from the documents and issues an Acceptance Letter. You then pay the fee shown in it to confirm your seat, and DMU issues the admission letter and JW202 form after payment.'],
    'early' => ['Should I apply early?', 'Yes. Seats are limited (DMU has 120 on the 2026–2027 MOE list) and applications close on 5 July for September and 5 January for March. DMU publishes no earlier deadline, so submit a complete application as soon as your documents are ready.'],
    'neet' => ['Do Indian students need NEET for MBBS in China?', 'Yes. Under the NMC rules for foreign medical graduates, Indian students generally need to qualify NEET before studying medicine abroad. Read the NMC\'s current regulations before you apply.'],
    'pak_nre' => ['What do Pakistani graduates need to practise in Pakistan?', 'Graduates sit the PMDC National Registration Examination (NRE), complete the house job and register with the PMDC. Check the PMDC\'s current notices for the exam format and dates.'],
    'after' => ['What can I do after MBBS in China?', 'You can return home and pass your national licensing exam, such as the PMDC NRE or the NMC exam, follow the ECFMG route towards the USMLE (DMU is ECFMG eligible) or prepare for PLAB, study for a master\'s or PhD, or choose a non-clinical career. Check your own council\'s rules first.'],
    'about_dmu' => ['What is Dalian Medical University?', 'DMU is a public medical university in Dalian, Liaoning Province, founded in 1947 as Guandong Medical College and renamed Dalian Medical University in 1994. It has more than 16,300 full-time students and 1,200+ international students from over 100 countries.'],
    'where' => ['Where is Dalian Medical University?', 'No. 9 West Section, Lvshun South Road, Lvshunkou District, Dalian, Liaoning Province, China (postcode 116044). The university has been on this campus since 2007.'],
    'hospitals' => ['Which hospitals are affiliated with DMU?', 'DMU has three directly affiliated hospitals (First, Second and Third Affiliated Hospital) and 14 affiliated hospitals in total. The First Affiliated Hospital was founded in 1930 and has 3,700 authorised beds on four campuses.'],
    'programmes' => ['Which programmes does DMU offer international students?', 'MBBS (6 years including internship, ¥42,000 a year), BDS (5 years, ¥45,000), Clinical Pharmacy (5 years, ¥35,000), a master\'s (3 years, ¥41,000) and a PhD (3 years, ¥45,000), all in English, plus Clinical Medicine taught in Chinese (5 years, ¥32,000). Tuition is per year.'],
    'csc' => ['Can international MBBS students get a scholarship at DMU?', 'DMU\'s English website lists the Chinese Government Scholarship (CSC), the Liaoning Provincial Government Scholarship, the Dalian Government Scholarship, the DMU Scholarship, the China-America Humanity Scholarship and the China-Russia Humanity Scholarship. Ask admissions which ones apply to MBBS applicants.'],
    'csc_amounts' => ['How much is the scholarship stipend?', 'DMU has not published amounts, quotas or deadlines for these scholarships, so we do not quote any figure. Ask admissions for the current conditions before you plan around a scholarship.'],
    'csc_who' => ['Who can apply for the Liaoning or Dalian government scholarship?', 'Eligibility is not published on DMU\'s English website. Ask admissions whether your country and programme qualify before you apply.'],
    'csc_when' => ['When should I apply for a scholarship?', 'No scholarship deadlines are published. Apply within your intake window (1 September to 5 January for March, 1 March to 5 July for September) with a complete application, and ask admissions whether the scholarship must be requested at the same time.'],
    'csc_full' => ['Is there a fully funded scholarship for MBBS in China?', 'What each scholarship covers is set by its provider and is not published on DMU\'s English website, so do not assume MBBS is fully funded. Ask admissions what the Chinese Government Scholarship covers for MBBS, and be careful with anyone who promises one.'],
    'csc_without' => ['Can I study MBBS at DMU without a scholarship?', 'Yes. Most students pay the published fees: tuition of ¥42,000 and a yearly total of ¥52,100–56,100.'],
    'seats' => ['How many MBBS seats does DMU have?', 'Dalian Medical University has 120 seats for international MBBS students on the Ministry of Education list for 2026–2027.'],
    'worth' => ['Is MBBS in China worth it?', 'It can be, if you choose an MOE listed university, study in English, and prepare for your home licensing exam from year one. The main benefits are published fees and teaching hospitals; the main challenge is passing the exam back home.'],
];

$pick = fn (string ...$keys) => array_map(fn ($k) => $q[$k], $keys);

return [
    'home' => $pick('moe', 'fee_total', 'eligibility', 'intakes', 'english', 'councils', 'ecfmg', 'wdoms', 'apply', 'csc'),
    'mbbs' => $pick('duration', 'clinical', 'moe', 'english', 'eligibility', 'documents', 'intakes', 'councils', 'ecfmg', 'seats'),
    'fees' => $pick('fee_first', 'fee_yearly', 'fee_total', 'fee_payments', 'living', 'csc', 'cheap'),
    'admissions' => $pick('eligibility', 'percent', 'age', 'documents', 'intakes', 'spring_dates', 'fall_dates', 'apply', 'early', 'fee_payments', 'neet', 'hsk'),
    'scholarships' => $pick('csc', 'csc_amounts', 'csc_full', 'csc_who', 'csc_when', 'csc_without', 'fee_total', 'early'),

    // Blog posts by slug. The blog is empty on this site, so no post has code-side FAQs (a post whose own content
    // already has an FAQ block is never given these). Add 'slug' => $pick('key', ...) here when a post needs them.
    'blogs' => [],
];
