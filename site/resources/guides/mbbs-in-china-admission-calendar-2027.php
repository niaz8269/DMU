<?php

$s = require __DIR__ . '/_shared.php';

return [
    'updated' => '2026-11-22',
    'title' => 'MBBS in China Admission 2027: DMU Dates and Calendar',
    'description' => 'MBBS in China admission 2027 calendar for Dalian Medical University: autumn window 1 March to 5 July, spring window 1 September to 5 January, and the steps between.',
    'keywords' => 'MBBS in China admission 2027, MBBS in China admission open 2027, MBBS in China intake, MBBS in China September intake, MBBS in China March intake, MBBS in China admission 2027 last date, MBBS in China application deadline, Dalian Medical University admission dates',
    'eyebrow' => 'Admission calendar',
    'h1' => 'MBBS in China Admission 2027: Application Windows at Dalian Medical University',
    'lead' => 'The published dates for the two intakes at Dalian Medical University, laid out as a working calendar: when each application window opens and closes, when classes begin, what to do in the months before a window, and how to read a notice that gives only an opening date.',
    'crumb' => 'MBBS in China admission calendar 2027',
    'cta' => 'Confirm dates with admissions',
    'answer' => 'Dalian Medical University has two intakes. For the autumn semester, starting in September or October, applications run from 1 March to 5 July. For the spring semester, starting in March, they run from 1 September to 5 January. These are the published windows, so confirm the current dates with admissions before you plan.',
    'facts' => [
        ['Intakes', 'March (spring) and September (autumn)'],
        ['Autumn window', '1 March to 5 July; semester starts September or October'],
        ['Spring window', '1 September to 5 January; semester starts March'],
        ['Spring 2027 system', 'IEC online system opened on 20 October 2026; no closing date in that notice'],
        ['BDS', 'Autumn intake only'],
        ['Source', 'DMU admissions portal and International Education College notice'],
        ['After applying', 'Acceptance Letter, payment, admission letter and JW202, then visa'],
        ['Advice', 'Confirm dates with admissions before booking anything'],
    ],
    'sections' => [

        ['id' => 'overview', 'eyebrow' => 'Overview', 'h' => 'Two intakes, two windows', 'p' => [
            "Dalian Medical University (DMU) takes international students twice a year. The autumn semester begins in September or October, and the spring semester begins in March. Each has its own application window, and the two windows are far enough apart that a student who misses one can aim for the other.",
            "The dates on this page come from DMU's admissions portal and a notice from its International Education College. They are the published windows. Universities adjust calendars, so confirm the dates with admissions before you decide travel or pay a fee.",
            "The BDS programme is the exception to the two-intake pattern. It admits in the autumn only.",
        ], 'table' => $s['calendar'], 'img' => ['src' => 'assets/images/dmu/dmu-main-gate-panorama.webp', 'alt' => 'Wide view of the main gate of Dalian Medical University', 'caption' => 'The main gate, where each intake begins.']],

        ['id' => 'autumn', 'eyebrow' => 'Autumn', 'h' => 'Autumn intake: 1 March to 5 July', 'p' => [
            "Applications for the autumn semester open on 1 March and close on 5 July. The semester then starts in September or October. It is the only intake that admits BDS students.",
            "The window is four months long, but certification of school papers can take weeks, so a student whose results arrive late should start the paperwork in the early part of the window rather than the end.",
        ], 'sub' => [
            ['h' => 'A sensible autumn rhythm', 'list' => [
                'March: apply for the passport or renew it, and request your transcript.',
                'March to May: start certification of the diploma and transcript.',
                'By early summer: upload the application and respond to any request from the university.',
                'Before 5 July: confirm that the file is complete.',
            ]],
            ['h' => 'Nothing here is a university deadline except the two dates', 'p' => [
                "The month-by-month pattern above is our own planning suggestion. Only the opening and closing dates and the semester start come from DMU.",
            ]],
        ]],

        ['id' => 'spring', 'eyebrow' => 'Spring', 'h' => 'Spring intake: 1 September to 5 January', 'p' => [
            "The spring window opens on 1 September and closes on 5 January, and the semester begins in March. The International Education College announced that the online system for the 2027 spring intake opened on 20 October 2026.",
            "That notice does not name a closing date, so we quote 5 January from the admissions portal. If you intend to start in March 2027, treat that as the date to meet and ask admissions to confirm it.",
        ], 'link' => ['mbbs-in-china-spring-intake-2027', 'Read the March spring intake guide'], 'img' => ['src' => 'assets/images/dmu/dmu-campus-spring-flowers.webp', 'alt' => 'Students on a lawn covered with spring flowers at Dalian Medical University', 'caption' => 'The campus lawn in spring.']],

        ['id' => 'steps', 'eyebrow' => 'Steps', 'h' => 'What happens after you apply', 'p' => [
            "The calendar above covers applications only. The stages that follow take time too, and they set when you can travel.",
        ], 'list' => [
            'You apply through the CAS portal or the DMU online system and upload your documents.',
            'DMU decides from the documents.',
            'DMU issues an Acceptance Letter (LOA).',
            'You pay the fee shown in the LOA to confirm the seat. DMU\'s fee letter lists the application fee plus tuition, ¥42,800, as due within ten days of receiving the admission letter.',
            'DMU issues the admission letter and the JW202 form after payment.',
            'You apply for a student visa and plan your arrival.',
        ], 'sub' => [
            ['h' => 'Why the ten-day payment window matters', 'p' => [
                "Ten days is short if you have to arrange a bank transfer abroad. Find out in advance how your bank handles international payments so that the fee does not stall your seat.",
            ]],
        ], 'link' => ['mbbs-in-china-fees-2027', 'See the MBBS in China fees guide']],

        ['id' => 'documents', 'eyebrow' => 'Preparation', 'h' => 'Documents to have ready before a window opens', 'p' => [
            "The slowest document is usually the certified school paperwork. DMU requires the diploma and transcript to be certified by the Chinese embassy or consulate in your country or notarised in China.",
        ], 'list' => $s['documents'], 'img' => ['src' => 'assets/images/dmu/dmu-library.webp', 'alt' => 'The library building of Dalian Medical University with its sign', 'caption' => 'Applications are read from the documents you upload.']],

        ['id' => 'which', 'eyebrow' => 'Choosing', 'h' => 'Choosing between March and September', 'p' => [
            "Pick the intake by working backwards from your own documents, not from a wish to start sooner. If your school results and certified papers are ready by early summer, autumn fits. If they will not be ready until after the autumn window closes, spring is the more realistic target.",
            "Starting in March also changes your academic year. Ask admissions how the course is arranged for a spring entrant, because the published sheet we hold does not describe it.",
        ], 'table' => ['caption' => 'Questions that decide the intake', 'head' => ['Question', 'If yes'], 'rows' => [
            ['Are certified papers ready before 5 July?', 'Autumn is possible'],
            ['Do you want BDS?', 'Autumn is the only intake'],
            ['Are papers ready between September and 5 January?', 'Spring is possible'],
            ['Do you need more time to prepare?', 'Take the next window'],
        ]]],

        ['id' => 'reading', 'eyebrow' => 'Notices', 'h' => 'Reading a notice that gives only an opening date', 'p' => [
            "Universities often announce that a system has opened without saying when it closes. The spring 2027 notice is an example. When that happens, use the closing date from the general admissions portal as your working deadline and ask admissions to confirm it in writing.",
            "Keep a record of the date you asked and the answer you received. If the date later changes, you will have a record.",
        ]],

        ['id' => 'contact', 'eyebrow' => 'Help', 'h' => 'Where to confirm dates', 'p' => [
            "CAS can be reached at admissions@dmu.cas.moe, or by WhatsApp with Kami on +86 180 4156 6030 for admissions questions. DMU's own admissions office is on +86-411-86110202 or dmunewstudent@163.com, open 08:30 to 11:30 and 13:20 to 16:30 Beijing time.",
        ], 'link' => ['mbbs-in-china-2027', 'Read the complete MBBS in China 2027 guide'], 'img' => ['src' => 'assets/images/dmu/dmu-campus-lake-view.webp', 'alt' => 'Lawns and a sea view on the Dalian Medical University campus', 'caption' => 'The campus lawns with the sea beyond.']],
    ],
    'faqs' => [
        ['When is MBBS in China admission 2027 at DMU?', 'The autumn window runs 1 March to 5 July and the spring window 1 September to 5 January. Confirm the current dates with admissions.'],
        ['What is the last date for the September intake?', 'The published closing date for the autumn window is 5 July. The semester starts in September or October.'],
        ['What is the last date for the March intake?', 'The published closing date for the spring window is 5 January. The semester starts in March.'],
        ['Is the spring 2027 system open?', 'The International Education College announced that the online system for the 2027 spring intake opened on 20 October 2026.'],
        ['Why does the spring notice not give a closing date?', 'The notice did not state one, so we quote the 5 January date from the admissions portal and recommend that you confirm it.'],
        ['Does BDS have a spring intake?', 'No. BDS is autumn only.'],
        ['How long after applying do I hear back?', 'No decision time is published, so ask admissions. DMU decides from the documents and then issues an Acceptance Letter.'],
        ['How soon must I pay after the admission letter?', 'DMU\'s fee letter lists the application fee plus tuition, ¥42,800, as due within ten days of receiving the admission letter.'],
        ['Can I apply after the window closes?', 'The published windows are the dates we can state. Ask admissions whether a late file can be considered, and do not rely on it.'],
        ['What should I prepare first?', 'The certified school papers, because certification by the embassy or notarisation can take the longest.'],
        ['Does a March start change the length of the MBBS?', 'The MBBS is six years including a one-year internship. Ask admissions how a spring entrant\'s timetable is arranged.'],
        ['Who confirms the dates?', 'The DMU admissions office or CAS admissions. Contact details are at the end of this guide.'],
    ],
    'related' => ['mbbs-in-china-spring-intake-2027', 'mbbs-in-china-2027', 'mbbs-in-china-fees-2027'],
];
