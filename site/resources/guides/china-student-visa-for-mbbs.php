<?php

$s = require __DIR__ . '/_shared.php';

return [
    'updated' => '2026-11-22',
    'title' => 'China Student Visa for MBBS: X1 Visa and JW202 Steps (DMU)',
    'description' => 'How the China student visa works for MBBS at Dalian Medical University: acceptance letter, JW202 form, X1 visa, bank statement, medical form and residence permit.',
    'keywords' => 'China student visa for MBBS, X1 visa China, what is X1 visa for China, JW202 form China student visa, what is JW202 JW201 form, China student visa requirements, China student visa bank statement, China student visa physical examination form, X1 visa to residence permit conversion China, China student visa from Pakistan, MBBS in China 2027',
    'eyebrow' => 'Visa guide',
    'h1' => 'China Student Visa for MBBS: From Acceptance Letter and JW202 to the X1 Visa',
    'lead' => 'The visa is the stage where many MBBS plans slow down, usually because a paper is missing or a name does not match. This guide follows the path for a Dalian Medical University applicant from the application to the acceptance letter, the JW202 form, the X1 visa at the embassy and the residence permit after arrival, and says plainly where you must read your own embassy\'s page.',
    'crumb' => 'China student visa for MBBS',
    'cta' => 'Ask admissions about your visa letter',
    'answer' => "For a six-year MBBS you need a long-term study visa, normally the X1. At Dalian Medical University you apply, receive an acceptance letter, pay the fee it shows, and then receive the admission letter and JW202 form. You use those papers at the Chinese embassy or visa centre serving you. Requirements differ by country, so check your embassy.",
    'facts' => [
        ['Visa type', 'Long-term study visa (X1) for a programme of more than 180 days; confirm with your embassy'],
        ['Papers from DMU', 'Admission letter and JW202 form, issued after you pay the fee shown in the acceptance letter'],
        ['Order at DMU', 'Apply, decision, acceptance letter (LOA), payment, admission letter and JW202'],
        ['Visa fee in DMU\'s letter', '¥800 on first arrival, with a ¥500 medical check-up; confirm current fees with admissions'],
        ['Visa item in later years', 'Residence permit ¥800 and medical ¥500 a year from year two'],
        ['Where to apply', 'The Chinese embassy, consulate or visa centre that serves your place of residence'],
        ['After arrival', 'Residence permit application; confirm the deadline with the international student office'],
        ['Guarantee', 'None. The consular officer decides every visa'],
    ],
    'sections' => [

        ['id' => 'overview', 'eyebrow' => 'Overview', 'h' => 'The visa path in one page', 'p' => [
            "A degree that runs for six years needs a visa meant for long study. In Chinese practice this is the X1 category, which embassy pages describe as the visa for study of more than 180 days. You cannot request it on your own initiative. The embassy asks for papers that only the university can issue, and for that reason the visa process begins with admission, not with the consulate.",
            "At Dalian Medical University (DMU) the International Education College describes the steps in a fixed order. You apply through the CAS portal or the DMU online system and upload your documents. DMU decides from the documents and then issues an Acceptance Letter, often shortened to LOA. You pay the fee shown in that letter to the university's account to confirm your seat. After payment, DMU issues the admission letter and the JW202 form. Those two papers are the foundation of your visa application.",
            "Everything after that happens in your own country and then in Dalian. You complete the visa application at the embassy, consulate or visa centre that serves your home address, travel with the visa, register at the university and convert your entry into a residence permit. This page explains each step in ordinary language. For rules that differ by country, such as fees, appointment systems and financial proof, it does not guess. It tells you what to look for on your own embassy's page.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate.webp', 'alt' => 'Main gate of Dalian Medical University with the university name', 'caption' => 'The route to the gate begins with an acceptance letter, a payment, an admission letter and a JW202 form.'],
        'table' => ['caption' => 'China student visa for MBBS: key facts', 'head' => ['Question', 'Answer'], 'rows' => [
            ['Which visa does an MBBS student need?', 'A long-term study visa, normally X1; confirm the category with your embassy'],
            ['What does DMU send you?', 'Acceptance letter first; admission letter and JW202 form after payment'],
            ['Who decides on the visa?', 'The consular officer at the embassy, consulate or visa centre'],
            ['Is the visa included in the fees?', 'DMU\'s first-arrival charges list a visa item of ¥800 and a medical check-up of ¥500; confirm current fees with admissions'],
            ['Can DMU publish its bank account here?', 'No. Never pay to an account you have not confirmed through an official channel'],
            ['Is approval guaranteed?', 'No']
        ]]],

        ['id' => 'x1-x2', 'eyebrow' => 'Visa categories', 'h' => 'X1 and X2: choosing the right category', 'p' => [
            "Chinese embassies describe two study visa categories. The X1 is for study of more than 180 days and the X2 is for study of up to 180 days. An MBBS student is an X1 applicant, because the programme runs six years including the internship. The X2 is for short courses, exchange terms and summer schools. It is not a cheaper way into a degree, and anyone who suggests entering on another visa and changing it later should be asked for the written rule that allows it.",
            "Embassy wording varies slightly between countries and changes from time to time, so confirm the category in the instruction page of the office that will receive your application. The date at the top of that page matters, because older copies stay in search results.",
        ], 'table' => ['caption' => 'X1 and X2 compared (general description)', 'head' => ['', 'X1', 'X2'], 'rows' => [
            ['Purpose', 'Long-term study', 'Short-term study'],
            ['Study length', 'More than 180 days', 'Up to 180 days'],
            ['Typical applicant', 'Degree students, including MBBS', 'Short courses and exchanges'],
            ['Papers from the school', 'Admission letter and JW201 or JW202 form', 'Admission notice from the school'],
        ]], 'sub' => [
            ['h' => 'JW201 or JW202?', 'p' => [
                "Embassy pages mention two forms called JW201 and JW202, both titled Visa Application for Study in China. DMU's published process names the JW202. You do not choose between them; the university issues the one that applies to your case.",
            ]],
            ['h' => 'What the X1 visa does not do', 'p' => [
                "The X1 visa allows you to enter China. It is not the permit to stay for six years. That permission is the residence permit, which you apply for after arrival with help from the university.",
            ]],
        ]],

        ['id' => 'dmu-steps', 'eyebrow' => 'At DMU', 'h' => 'The DMU steps before the embassy', 'p' => [
            "The embassy file is only as strong as the admission file behind it. These are the documents DMU asks for at application. Several, such as the passport and the medical check-up, are used again later, so prepare them carefully once and keep the originals safe.",
        ], 'list' => $s['documents'], 'sub' => [
            ['h' => 'Step 1: apply and upload your documents', 'p' => [
                "Apply through the CAS portal or the DMU online system. The application processing fee in DMU's own fee letter is ¥800, and it is paid with the first-year tuition. Upload clear scans of the passport information page, the photograph, the transcript and the other papers.",
            ]],
            ['h' => 'Step 2: DMU decides', 'p' => [
                "DMU reviews the documents. If a document is unclear or missing, the office may ask you to resend it. Reply quickly, because the delay counts against the intake window.",
            ]],
            ['h' => 'Step 3: the Acceptance Letter', 'p' => [
                "If DMU accepts you, it issues an Acceptance Letter. It states the programme and the amount to pay to confirm your seat. Read it line by line. Check the spelling of your name and the programme title.",
            ]],
            ['h' => 'Step 4: payment', 'p' => [
                "You pay the fee shown in the letter to DMU's account. DMU's fee letter asks for the application fee plus tuition, ¥42,800 (about US$6,700), within 10 days of receiving the admission letter, with the other items paid on arrival. This site never publishes DMU's bank account details. Confirm the account through DMU or the CAS admissions team before you transfer anything, and keep the receipt.",
            ]],
            ['h' => 'Step 5: the admission letter and the JW202 form', 'p' => [
                "After payment, DMU issues the admission letter and the JW202 form. Check both the day they arrive. Your name, date of birth, nationality and passport number must match your passport exactly. A mismatch is far easier to fix before you visit the embassy than after you have submitted an application.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-library.webp', 'alt' => 'The library building at Dalian Medical University with its sign', 'caption' => 'Check every detail on the admission letter and JW202 against your passport.'],
        'link' => ['mbbs-in-china-2027', 'Read the guide to MBBS in China 2027']],

        ['id' => 'steps-table', 'eyebrow' => 'Who does what', 'h' => 'Visa steps and who is responsible', 'p' => [
            "The table sets out the path from application to residence permit and shows who does each step. A large part of the process is carried out by the university, not by you.",
        ], 'table' => ['caption' => 'From application to residence permit', 'head' => ['Step', 'Who', 'What is needed'], 'rows' => [
            ['1. Apply and upload documents', 'You', 'Documents listed above'],
            ['2. Review and decision', 'DMU', 'A complete, clear file'],
            ['3. Acceptance Letter (LOA)', 'DMU', 'Check names and programme'],
            ['4. Payment of the fee shown in the LOA', 'You', 'Payment to the account confirmed by DMU; keep the receipt'],
            ['5. Admission letter and JW202 form', 'DMU', 'Check every detail against your passport'],
            ['6. Online visa form and appointment', 'You', 'The papers your embassy lists'],
            ['7. Submission at the embassy or visa centre', 'You', 'Passport, photograph, DMU papers, visa fee'],
            ['8. Decision', 'Consular officer', 'Quick replies if more papers or an interview are requested'],
            ['9. Travel and registration', 'You and DMU', 'Visa in the passport, original documents, airport pickup'],
            ['10. Residence permit', 'You, with the university', 'Follow the deadline given by the international student office']
        ]], 'sub' => [
            ['h' => 'If you renew your passport', 'p' => [
                "Your admission papers are written with the passport details you applied with. If you plan to renew your passport, do it before you apply. If you must renew it afterwards, tell admissions immediately, because the papers may need to be issued again.",
            ]],
        ]],

        ['id' => 'embassy', 'eyebrow' => 'At the embassy', 'h' => 'The embassy stage: what to read on your own office\'s page', 'p' => [
            "Each Chinese embassy, consulate and visa application service centre publishes its own instructions, and they are not identical. We do not repeat figures such as visa fees, processing times or the exact list of papers, because they differ by office and change. We tell you what to look for.",
        ], 'sub' => [
            ['h' => 'Find the right office', 'p' => [
                "Offices are assigned by the place where you live. Applying at the wrong office is a common reason for delay. Look for the section that lists the areas each office serves.",
            ]],
            ['h' => 'Check the date on the page', 'p' => [
                "Embassy pages are updated. Read the date, and read the instructions again a week before you apply.",
            ]],
            ['h' => 'Complete the online form carefully', 'p' => [
                "Most offices ask for an online application form, printed and signed. Enter details exactly as in your passport. A different spelling in one place can create questions.",
            ]],
            ['h' => 'Biometrics and appointments', 'p' => [
                "Many offices collect fingerprints and use an appointment system. Read the instructions on exemptions and on how to book.",
            ]],
            ['h' => 'Processing time', 'p' => [
                "Processing times vary and can be longer if documents must be added or an interview is held. Treat any figure as general and do not buy a flight until the decision is made.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-glass-teaching-building.webp', 'alt' => 'Glass-fronted teaching building at Dalian Medical University with students walking past', 'caption' => 'Teaching building at Dalian Medical University, your destination after the visa.']],

        ['id' => 'bank-statement', 'eyebrow' => 'Money', 'h' => 'Bank statements and financial proof', 'p' => [
            "Searches about a China student visa bank statement produce many conflicting numbers. We do not repeat them. A financial requirement, if there is one, is set by the embassy for the applicants it serves, so the only figure that counts is the one on your own embassy's page. Some pages do not mention a student bank statement at all, while still allowing the officer to ask for more proof.",
            "DMU asks, separately, for proof of financial support at application: a family financial certificate or one year of bank statements. Treat the DMU requirement and the embassy requirement as two lists. A statement that satisfies one may not satisfy the other.",
        ], 'sub' => [
            ['h' => 'What makes financial proof convincing', 'p' => [
                "Use a real statement from the person who will pay your fees, with that person's name on it and a clear link to you, such as a parent. Money that appears in an account a few days before the application invites questions. Never use a borrowed or altered statement. A false document can lead to refusal and can affect later applications.",
            ]],
            ['h' => 'The visa requirement is not your budget', 'p' => [
                "An embassy minimum, where it exists, is not the cost of the degree. Use DMU's own figures to plan: tuition of ¥42,000 a year, a yearly total of ¥52,100-56,100 from year two, and DMU's first-arrival charges (application ¥800, visa ¥800, medical ¥500, books ¥500, insurance ¥800), before flights and personal spending.",
            ]],
        ], 'link' => ['mbbs-in-china-fees-2027', 'See the full MBBS fee breakdown']],

        ['id' => 'medical', 'eyebrow' => 'Health', 'h' => 'The medical check-up', 'p' => [
            "DMU lists a medical check-up among the documents for application. Chinese authorities use a standard physical examination form for foreigners who come for a long stay. A doctor completes it after an examination, and laboratory and other reports are attached. Your embassy's list shows whether it must be shown with the visa application. Where it does not, carry the original form and reports to China anyway, because registration and the residence permit may call for a health record.",
            "DMU's first-arrival charges include a medical check-up of ¥500. In later years, DMU's figures list medical at ¥500 a year.",
        ], 'sub' => [
            ['h' => 'How to get the form right', 'p' => [
                "Have the examination at a recognised hospital. Make sure every box is completed, the photograph is attached and stamped where the form asks, and the doctor's signature and the hospital stamp are present. Keep the original reports with the form.",
            ]],
            ['h' => 'Timing', 'p' => [
                "Health papers are usually accepted only for a limited period after issue. Do not have the examination done many months before you travel. If your admission is delayed, ask whether the form must be repeated.",
            ]],
        ]],

        ['id' => 'refusal', 'eyebrow' => 'Delays and refusals', 'h' => 'Why a visa is delayed or refused, and what to do', 'p' => [
            "Embassies are not required to explain a decision, and they do not publish a list of reasons. What follows is general, practical guidance and not an official list.",
        ], 'list' => [
            'Names, dates or passport numbers that do not match between the passport, the admission letter, the JW202 and the online form.',
            'A missing document, or a photocopy where the office asked for an original.',
            'A passport that is close to expiry, damaged or without blank pages.',
            'Financial proof that is unclear, unexplained or not genuine.',
            'Answers in an interview that do not match the application.',
            'Applying at an office that does not serve the area where you live.',
            'False or altered documents of any kind.',
        ], 'sub' => [
            ['h' => 'If you are asked for more documents', 'p' => [
                "This is a request, not a refusal. Supply exactly what is asked, quickly and politely.",
            ]],
            ['h' => 'If the visa is refused', 'p' => [
                "Tell admissions straight away and send the notice you received. Ask the embassy whether and when you may apply again, and ask admissions in writing what applies to the payments you have made. Do not assume a refund; get the position in writing.",
            ]],
            ['h' => 'No one can guarantee a visa', 'p' => [
                "An agent who promises a guaranteed visa is promising something that is not theirs to give. A complete, truthful application is the only preparation that helps.",
            ]],
        ]],

        ['id' => 'arrival', 'eyebrow' => 'After the visa', 'h' => 'Travel, registration and the residence permit', 'p' => [
            "When the passport comes back, read the visa sticker before you leave the counter. Check your name, passport number and the category, and note the date by which you must enter China. Book the flight only after the visa is in your passport.",
            "Ask the admissions office whether airport pickup can be arranged, and send your flight details before you fly. Carry your passport, admission letter, JW202, medical records, photographs and payment receipts in hand luggage.",
            "After arrival, a student on a long-term study visa normally has to apply for a residence permit within a limited time. Embassy pages state the number of days, and the date counts from the day you enter China, not from the day classes begin. Report to the international student office as soon as you arrive and follow its instructions. The residence permit is renewed each year; from year two DMU's figures list ¥800 for it.",
        ], 'img' => ['src' => 'assets/images/dmu/dmu-campus-willows-and-sea.webp', 'alt' => 'Willow trees beside the sea on the Dalian Medical University campus', 'caption' => 'After arrival, register with the international student office and begin the residence permit.'],
        'table' => $s['feeYearly'], 'sub' => [
            ['h' => 'Do not let the permit expire', 'p' => [
                "Note the expiry date in your phone on the day you receive it. Start the renewal when the international student office announces it. Staying with an expired permit is an immigration offence and is entirely avoidable.",
            ]],
            ['h' => 'Travelling home during your studies', 'p' => [
                "Before you book a trip home, check the expiry date of your permit and ask the international student office what is needed to return.",
            ]],
        ]],

        ['id' => 'timeline', 'eyebrow' => 'Timing', 'h' => 'Visa timeline for the spring and autumn intakes', 'p' => [
            "Work backwards from the semester start. The university dates below come from the DMU admissions portal. We give no number of days for the embassy stage, because it differs by country and case. Leave as much room for it as you can, and confirm dates with admissions.",
        ], 'table' => $s['calendar'], 'sub' => [
            ['h' => 'Start the slow papers early', 'p' => [
                "Certification of school documents by the Chinese embassy or consulate in your country, or notarisation in China, tends to take the longest. Begin it before you apply, and ask your school and the embassy or notary what each stamp costs and how long it takes, so that the delay does not surprise you in the final weeks before the application window closes.",
            ]],
        ], 'img' => ['src' => 'assets/images/dmu/dmu-campus-spring-flowers.webp', 'alt' => 'Students on a lawn covered with spring flowers at Dalian Medical University', 'caption' => 'Spring on the campus; the March intake begins in the spring semester.']],
    ],
    'faqs' => [
        ['Which visa do I need for MBBS in China?', "A long-term study visa, normally the X1, because the programme lasts six years. Confirm the category on the page of the embassy or visa centre that serves you."],
        ['What is the X1 visa for China?', "Embassy pages describe it as the visa for study in China of more than 180 days. It is the entry document. A residence permit after arrival gives permission to stay."],
        ['What is the JW202 form?', "It is a confirmation form for study in China, issued by the university. Embassy pages also mention a similar form called JW201. DMU issues the JW202 after you pay the fee shown in the acceptance letter."],
        ['How do I get the JW202 at DMU?', "Apply, receive the Acceptance Letter, pay the fee shown in it to DMU's account, and then DMU issues the admission letter and the JW202 form."],
        ['What documents does the China student visa need?', "Your embassy lists them. In general they include the passport, a photograph, the online form, and the admission letter and JW202 from the university. Read your own office's current page."],
        ['What bank statement is needed for a China student visa?', "It depends on the embassy, and some pages do not state a figure. DMU separately asks for a family financial certificate or one year of bank statements at application."],
        ['Is a physical examination form needed?', "DMU lists a medical check-up among its application documents. Whether your embassy wants the form with the visa depends on its list. Carry the original in any case."],
        ['How long does the China student visa take?', "It differs by office and case, and it can be longer if documents are added or an interview is held. Do not buy a flight before the decision."],
        ['Is the visa included in the DMU fee?', "DMU's first-arrival charges list a visa item of ¥800, insurance of ¥800 and a medical check-up of ¥500. Costs you pay in your own country, such as embassy fees, are separate; ask admissions for the detail."],
        ['Can DMU guarantee my visa?', "No. The consular officer decides on every application."],
        ['Where do I send questions about my visa letter?', "Email admissions@dmu.cas.moe, or contact the DMU admissions office on +86-411-86110202 during its office hours."],
    ],
];
