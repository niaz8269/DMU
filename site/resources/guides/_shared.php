<?php

// Facts shared by the guides. Every figure comes from FACTS.md in the project root (confirmed for Dalian Medical University).

$moeList = [
    ['Jilin University', 100], ['China Medical University', 50], ['Dalian Medical University', 120], ['Capital Medical University', 70],
    ['Tianjin Medical University', 100], ['Shandong University', 80], ['Fudan University', 40], ['Xinjiang Medical University', 60],
    ['Nanjing Medical University', 60], ['Jiangsu University', 70], ['Wenzhou Medical University (incl. overseas campus)', 120],
    ['Zhejiang University', 180], ['Wuhan University', 50], ['Huazhong University of Science and Technology', 80],
    ["Xi'an Jiaotong University", 120], ['Southern Medical University', 100], ['Jinan University', 30], ['Guangxi Medical University', 60],
    ['Sichuan University', 70], ['Chongqing Medical University', 100], ['Harbin Medical University', 60], ['Beihua University', 20],
    ['Jinzhou Medical University', 40], ['Qingdao University', 30], ['Hebei Medical University', 40], ['Ningxia Medical University', 100],
    ['Tongji University', 40], ['Shihezi University', 120], ['Southeast University', 30], ['Yangzhou University', 30],
    ['Nantong University', 30], ['Soochow University', 30], ['Ningbo University', 50], ['Fujian Medical University', 60],
    ['Anhui Medical University', 80], ['Xuzhou Medical University', 40], ['Zhengzhou University', 40], ['Guangzhou Medical University', 80],
    ['Shantou University', 20], ['Kunming Medical University', 70], ['Southwest Medical University', 40], ['Xiamen University', 50],
    ['Shanghai Jiao Tong University', 30],
];
$moeRows = [];
foreach ($moeList as $i => [$name, $seats]) {
    $moeRows[] = [(string) ($i + 1), $name, (string) $seats];
}
$moeRows[] = ['', 'Total', '2,790'];

return [
    'moeSource' => "Source: Ministry of Education of the People's Republic of China, notice 教外司来〔2026〕94号, issued 1 June 2026.",
    'moeRows' => $moeRows,
    'feeFirstYear' => [
        'caption' => 'MBBS first-year complete package at Dalian Medical University',
        'head' => ['What the first-year package covers', 'Status'],
        'rows' => [
            ['Application processing fee', 'Included'],
            ['Tuition fee', 'Included'],
            ['Hostel fee', 'Included'],
            ['Visa, health insurance and medical', 'Included'],
            ['Registration, liaison, management and admission charges', 'Included'],
            ['Visa letter (JW202) and airport pickup', 'Included'],
            ['', 'Total: ¥67,100 (about USD 9,450)'],
        ],
    ],
    'feeYearly' => [
        'caption' => 'MBBS, second year onward, per year',
        'head' => ['Item', 'Amount (RMB ¥)'],
        'rows' => [
            ['Tuition fee', '¥42,000'],
            ['Accommodation', '¥8,000-12,000'],
            ['Insurance', '¥800'],
            ['Residence permit', '¥800'],
            ['Medical', '¥500'],
            ['', 'Total per year: ¥52,100-56,100 (about USD 7,350-7,900)'],
        ],
    ],
    'programmes' => [
        'caption' => 'English-medium programmes at Dalian Medical University',
        'head' => ['Programme', 'Duration', 'Tuition per year'],
        'rows' => [
            ['MBBS', '6 years, including a 1-year internship', '¥42,000'],
            ['BDS (Stomatology)', '5 years', '¥45,000'],
            ['Clinical Medicine (Chinese medium)', '5 years', '¥32,000'],
            ['Clinical Pharmacy', '5 years', '¥35,000'],
            ["Master's", '3 years', '¥41,000'],
            ['PhD', '3 years', '¥45,000'],
        ],
    ],
    'calendar' => [
        'caption' => 'DMU application windows (confirm the current dates with admissions)',
        'head' => ['Step', 'September (autumn) intake', 'March (spring) intake'],
        'rows' => [
            ['Applications open', '1 March', '1 September'],
            ['Applications close', '5 July', '5 January'],
            ['Semester begins', 'September/October', 'March'],
        ],
    ],
    'requirements' => [
        'Completed senior high school with good marks, including chemistry, physics, biology and English',
        'Aged 18 to 25 (MBBS and BDS)',
        'In good mental and physical health',
        'Proof of financial support for study and living costs',
        'Valid passport',
    ],
    'documents' => [
        'Passport information page',
        'Passport-size photograph',
        'Senior high school transcript (compulsory); diploma (helpful), certified by the Chinese embassy or consulate or notarised in China',
        'Medical check-up',
        'Family financial certificate or one year of bank statements',
    ],
    'scholarships' => [
        'caption' => 'Scholarships named by Dalian Medical University (amounts are not published here)',
        'head' => ['Scholarship', 'Offered by'],
        'rows' => [
            ['Chinese Government Scholarship', 'Chinese government, through DMU'],
            ['Liaoning Provincial Government Scholarship', 'Liaoning provincial government'],
            ['Dalian Government Scholarship', 'Dalian municipal government'],
            ['Dalian Medical University Scholarship', 'DMU'],
            ['China-America Humanity Scholarship', 'DMU programme'],
            ['China-Russia Humanity Scholarship', 'DMU programme'],
        ],
    ],
];
