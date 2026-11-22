-- Dalian Medical University content for the imported template dump.
-- Run ONCE on the freshly imported database (after university-template.sql). It replaces the template rows with
-- confirmed DMU facts. Never run `php artisan migrate`.
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS=0;

-- ---------- tables that held template content: emptied ----------
DELETE FROM blogs;
DELETE FROM downloads;
DELETE FROM events;
DELETE FROM testimonials;
DELETE FROM mbbs_curriculum;
DELETE FROM cms_overrides;

-- ---------- programmes (confirmed table, FACTS.md) ----------
DELETE FROM programs;
INSERT INTO programs (name, degree, category, duration, language, tuition, description, sort_order, is_published) VALUES
('MBBS','Bachelor of Medicine, Bachelor of Surgery','bachelor','6','English','42,000','Six years including a 1-year internship.',1,1),
('BDS (Stomatology)','Bachelor of Dental Surgery','bachelor','5','English','45,000','Autumn intake only.',2,1),
('Clinical Medicine (Chinese medium)','Bachelor of Clinical Medicine','bachelor','5','Chinese','32,000',NULL,3,1),
('Clinical Pharmacy','Bachelor of Clinical Pharmacy','bachelor','5','English','35,000',NULL,4,1),
('Master''s programmes','Master''s degree','master','3','English','41,000','Ask admissions for the list of subjects.',5,1),
('PhD programmes','Doctoral degree','doctoral','3','English','45,000','Ask admissions for the list of subjects.',6,1);

DELETE FROM scholarships;
INSERT INTO scholarships (name, coverage, eligibility, description, sort_order, is_published) VALUES
('Chinese Government Scholarship','Confirm with admissions','Confirm with admissions','Amounts and deadlines are not published here.',1,1),
('Liaoning Provincial Government Scholarship','Confirm with admissions','Confirm with admissions','Amounts and deadlines are not published here.',2,1),
('Dalian Government Scholarship','Confirm with admissions','Confirm with admissions','Amounts and deadlines are not published here.',3,1),
('Dalian Medical University Scholarship','Confirm with admissions','Confirm with admissions','Amounts and deadlines are not published here.',4,1),
('China-America Humanity Scholarship','Confirm with admissions','Confirm with admissions','Amounts and deadlines are not published here.',5,1),
('China-Russia Humanity Scholarship','Confirm with admissions','Confirm with admissions','Amounts and deadlines are not published here.',6,1);

DELETE FROM gallery;
INSERT INTO gallery (title, category, image_path, sort_order, is_published) VALUES
('Main gate','campus','assets/images/dmu/dmu-main-gate.webp',0,1),
('Glass teaching building','campus','assets/images/dmu/dmu-glass-teaching-building.webp',1,1),
('Library','campus','assets/images/dmu/dmu-library.webp',2,1),
('Campus lawns and sea view','campus','assets/images/dmu/dmu-campus-lake-view.webp',3,1),
('Main building behind the cypress trees','campus','assets/images/dmu/dmu-campus-trees-and-main-building.webp',4,1),
('1947 arch and student residence','campus','assets/images/dmu/dmu-1947-arch-and-student-hostel.webp',5,1),
('Spring flowers on campus','campus','assets/images/dmu/dmu-campus-spring-flowers.webp',6,1),
('Willows by the sea','campus','assets/images/dmu/dmu-campus-willows-and-sea.webp',7,1),
('Campus lake at night','campus','assets/images/dmu/dmu-campus-lake-at-night.webp',8,1),
('Main building at night','campus','assets/images/dmu/dmu-main-building-at-night.webp',9,1),
('Dalian city centre','city','assets/images/dmu/dalian-city-view.webp',10,1);

-- ---------- consultants ----------
UPDATE consultants SET name='Dr. Ayaz', role='Admissions Consultant (consultation)', whatsapp='+8617640412827', email='info@dmu.cas.moe', wechat=NULL,
  photo='images/avatar.svg', qr_image='images/drayazqr.jpg' WHERE id=4;
UPDATE consultants SET name='Kami', role='Admissions Consultant', whatsapp='+8615677751526', email='admissions@dmu.cas.moe', wechat=NULL,
  photo='images/avatar.svg', qr_image='images/kamiqr.jpeg' WHERE id=5;
UPDATE consultants SET name='General Inquiry', role='CAS Admissions Support', whatsapp=NULL, email='info@dmu.cas.moe', wechat=NULL,
  photo='images/logo.png', qr_image='images/wechat.png' WHERE id=6;

-- ---------- home blocks ----------
DELETE FROM home_programs;
INSERT INTO home_programs (title, description, url, sort_order, is_published) VALUES
('MBBS (Clinical Medicine)','Six-year English-medium Bachelor of Medicine and Bachelor of Surgery, including a 1-year internship.','mbbs',0,1),
('Stomatology (BDS)','Five-year English-medium dental programme. Autumn intake only.','programs',1,1),
('Clinical Medicine (Chinese medium)','Five-year Bachelor of Clinical Medicine taught in Chinese.','programs',2,1),
('Clinical Pharmacy','Five-year English-medium Bachelor of Clinical Pharmacy.','programs',3,1),
('Master''s','Three-year English-medium Master''s programmes.','programs',4,1),
('PhD','Three-year English-medium doctoral programmes.','programs',5,1);

DELETE FROM home_steps;
INSERT INTO home_steps (title, description, sort_order, is_published) VALUES
('Choose your programme','Start with MBBS, BDS or another English-medium programme at Dalian Medical University.',0,1),
('Check requirements','Aged 18 to 25 for MBBS and BDS, with chemistry, physics, biology and English.',1,1),
('Prepare documents','Passport page, photo, certified transcript, medical check-up and financial proof.',2,1),
('Submit your application','Apply through our portal. DMU decides from your documents.',3,1),
('Receive your offer','DMU issues an acceptance letter; the admission letter and JW202 follow after payment.',4,1);

DELETE FROM home_why;
INSERT INTO home_why (title, description, sort_order, is_published) VALUES
('Affiliated hospitals','Three directly affiliated hospitals and 14 affiliated hospitals in total. The First Affiliated Hospital has 3,700 authorised beds.',0,1),
('International campus','More than 1,200 international students from over 100 countries.',1,1),
('English-medium since 2004','DMU launched its English-medium MBBS in 2004 through its International Education College.',2,1),
('Clear published fees','A CAS first-year package of ¥67,100, then ¥52,100-56,100 a year for MBBS.',3,1),
('MOE-listed programme','Listed by China''s Ministry of Education for English-medium MBBS.',4,1),
('Scholarship routes','Chinese Government, Liaoning Provincial, Dalian Government and DMU scholarships.',5,1);

DELETE FROM home_accreditations;
INSERT INTO home_accreditations (title, description, sort_order, is_published) VALUES
('WHO / WDOMS','Listed in the World Directory of Medical Schools.',0,1),
('MOE Listed','Listed by China''s Ministry of Education for English-medium MBBS.',1,1),
('PMDC & NMC','Recognized by major medical councils. Check your own council''s current rules.',2,1),
('ESI','Six disciplines in the top 1% of ESI global rankings (DMU).',3,1);

DELETE FROM home_facts;
INSERT INTO home_facts (label, value, sort_order, is_published) VALUES
('Duration','6 years (incl. 1-year internship)',0,1),
('Medium','English',1,1),
('1st-year package','¥67,100 (approx. US$9,450)',2,1),
('Intake','March & September 2027',3,1),
('Eligibility','Aged 18-25; chemistry, physics, biology, English',4,1),
('Recognition','WHO / WDOMS, MOE, ECFMG',5,1);

-- ---------- site settings ----------
UPDATE site_settings SET setting_value = CASE setting_key
 WHEN 'site_name' THEN 'Dalian Medical University'
 WHEN 'hero_headline' THEN 'Study MBBS in China at Dalian Medical University'
 WHEN 'hero_subtext' THEN 'MOE-listed, English-taught MBBS in Dalian, Liaoning, with published fees and a clear way to apply.'
 WHEN 'contact_phone' THEN '+8615677751526'
 WHEN 'contact_phone2' THEN '+8617640412827'
 WHEN 'contact_phone_pk' THEN '+8615677751526'
 WHEN 'contact_whatsapp' THEN '+8617640412827'
 WHEN 'contact_email' THEN 'info@dmu.cas.moe'
 WHEN 'admissions_email' THEN 'admissions@dmu.cas.moe'
 WHEN 'support_email' THEN 'info@dmu.cas.moe'
 WHEN 'office_address' THEN 'No. 9 West Section, Lvshun South Road, Lvshunkou District, Dalian, Liaoning, China 116044'
 WHEN 'social_facebook' THEN ''
 WHEN 'social_youtube' THEN ''
 WHEN 'home_hero_eyebrow' THEN 'March & September 2027 intakes'
 WHEN 'home_trust1' THEN 'WHO / WDOMS Listed'
 WHEN 'home_trust2' THEN 'MOE Listed'
 WHEN 'home_trust3' THEN 'PMDC & NMC Recognized'
 WHEN 'home_trust4' THEN 'English Medium'
 WHEN 'home_stat1_num' THEN '1947'
 WHEN 'home_stat1_label' THEN 'Founded in Dalian'
 WHEN 'home_stat2_num' THEN '1200'
 WHEN 'home_stat2_label' THEN 'International Students'
 WHEN 'home_stat3_num' THEN '100'
 WHEN 'home_stat3_label' THEN 'Countries Represented'
 WHEN 'home_stat4_num' THEN '9800'
 WHEN 'home_stat4_label' THEN 'Faculty & Medical Staff'
 WHEN 'home_about_eyebrow' THEN 'About DMU'
 WHEN 'home_about_title' THEN 'A public medical university in Dalian since 1947'
 WHEN 'home_about_lead' THEN 'Dalian Medical University (DMU) is a public university in Dalian, Liaoning Province, with more than 16,300 full-time students on a campus of 1,510,000 square metres. Its International Education College has taught international students since 1985.'
 WHEN 'home_about_point1' THEN 'Three directly affiliated hospitals and 14 affiliated hospitals in total for clinical training.'
 WHEN 'home_about_point2' THEN 'Six disciplines in the top 1% of ESI global rankings, according to DMU.'
 WHEN 'home_about_point3' THEN 'English-medium MBBS since 2004; students from over 100 countries.'
 WHEN 'home_about_btn' THEN 'Learn More About DMU'
 WHEN 'home_programs_lead' THEN 'English-medium degrees in medicine, dentistry, pharmacy and postgraduate study at Dalian Medical University.'
 WHEN 'home_mbbs_title' THEN 'MBBS in China at Dalian Medical University'
 WHEN 'home_mbbs_lead' THEN 'The MBBS is a six-year English-medium degree for international students, with a 1-year internship in the affiliated hospitals.'
 WHEN 'home_fees_tag' THEN 'MOE-listed · English medium'
 WHEN 'home_fees_note' THEN 'The first-year package includes application processing, tuition, hostel, visa, insurance, medical, registration and admission charges, the JW202 visa letter and airport pickup.'
 WHEN 'home_why_eyebrow' THEN 'Why DMU'
 WHEN 'home_why_title' THEN 'Why international students choose DMU'
 WHEN 'home_why_lead' THEN 'The facts behind Dalian Medical University as a destination for medical education.'
 WHEN 'home_news_lead' THEN 'Facts and updates about Dalian Medical University.'
 WHEN 'home_testi_title' THEN 'Student stories'
 WHEN 'home_testi_lead' THEN 'Student stories will be added here.'
 WHEN 'home_faq_lead' THEN 'Answers to the most common questions about studying MBBS at DMU.'
 WHEN 'home_cta_lead' THEN 'Talk to our admissions team today. It is free.'
 WHEN 'home_cta_btn' THEN 'Apply for 2027'
 WHEN 'mbbs_hero_title' THEN 'MBBS in China at Dalian Medical University'
 WHEN 'mbbs_hero_subtitle' THEN 'An MOE-listed, English-medium Bachelor of Medicine and Bachelor of Surgery: six years, including a 1-year internship, at a public medical university in Dalian.'
 WHEN 'mbbs_overview_title' THEN 'About the MBBS programme at DMU'
 WHEN 'mbbs_overview_p1' THEN 'Dalian Medical University, founded in 1947 in Dalian, Liaoning, launched its English-medium MBBS in 2004 through its International Education College. The programme is designed for international students and taught in English.'
 WHEN 'mbbs_overview_p2' THEN 'Clinical training takes place in DMU''s affiliated hospitals: three are directly affiliated and 14 are affiliated in total. The First Affiliated Hospital, founded in 1930, has 3,700 authorised beds across four campuses.'
 WHEN 'mbbs_overview_p3' THEN 'Graduates are awarded the MBBS degree. Licensing rules differ by country, so check the current rules of your own medical council before you apply.'
 WHEN 'mbbs_facts_list' THEN 'Degree Awarded | MBBS\nDuration | 6 years, including a 1-year internship\nMedium | English\nIntake | March (spring) & September (autumn) 2027\n1st-Year Package | ¥67,100 (approx. US$9,450)\nEligibility | Aged 18-25; chemistry, physics, biology and English\nRecognition | WHO / WDOMS, MOE-listed'
 WHEN 'mbbs_why_title' THEN 'Why study MBBS at Dalian Medical University'
 WHEN 'mbbs_why_list' THEN 'Recognition | MOE-listed and WHO / WDOMS listed. Check your own medical council''s current rules before applying.\nClear fees | A first-year package of ¥67,100, then ¥52,100-56,100 a year.\nClinical exposure | Three directly affiliated hospitals; the First Affiliated Hospital has 3,700 authorised beds.\nInternational campus | More than 1,200 international students from over 100 countries.'
 WHEN 'mbbs_eligibility_list' THEN 'Aged 18 to 25 and in good mental and physical health\nCompleted senior high school with good marks\nChemistry, physics, biology and English are compulsory; mathematics is a reference subject\nPassport information page, passport-size photo and senior high school transcript (compulsory)\nTranscripts certified by the Chinese embassy or consulate, or notarised in China\nMedical check-up\nFamily financial certificate or one year of bank statements'
 WHEN 'mbbs_fees_title' THEN 'MBBS fee structure'
 WHEN 'mbbs_fees_note' THEN 'The first-year package covers application processing, tuition, hostel, visa, insurance, medical, registration and admission charges, the JW202 visa letter and airport pickup. Fees last checked 22 November 2026.'
 WHEN 'mbbs_fee_rows' THEN '1st Year (complete package) | ¥67,100 | total\nTuition (2nd year onward) | ¥42,000/yr\nAccommodation | ¥8,000-12,000/yr\nInsurance | ¥800/yr\nResidence permit | ¥800/yr\nMedical | ¥500/yr\nTotal (2nd year onward) | ¥52,100-56,100/yr | total'
 WHEN 'mbbs_recognition_list' THEN 'WHO / WDOMS | Listed in the World Directory of Medical Schools.\nMOE Listed | Listed by China''s Ministry of Education for English-medium MBBS.\nECFMG | Eligible for ECFMG, according to the programme sheet.\nPMDC & NMC | Recognized by medical councils. Check your own council''s current rules.'
 WHEN 'mbbs_apply_list' THEN 'Prepare your documents | Passport page, photo, certified transcript, medical check-up and financial proof.\nSubmit your application | Apply through our portal. DMU decides from your documents.\nReceive your acceptance letter | DMU issues an acceptance letter.\nPay the fees in the letter | The application fee and first-year tuition (¥42,800) confirm your seat.\nReceive the admission letter and JW202 | DMU issues them after payment, then you apply for your student visa.'
 WHEN 'mbbs_faq_list' THEN 'Is the MBBS at Dalian Medical University MOE-listed? | Yes. The English-medium MBBS is MOE-listed and the university is listed in WHO''s World Directory of Medical Schools. Check your own medical council''s current rules before you apply.\nHow long is the MBBS programme? | Six years, including a 1-year internship, taught in English.\nWhat does the first year cost? | The CAS first-year package is ¥67,100 (about US$9,450). From year two the total is ¥52,100-56,100 a year.\nWhen are the intakes? | March (spring) and September (autumn). Confirm the current application dates with admissions.\nWho can apply? | Applicants aged 18 to 25 who completed senior high school with chemistry, physics, biology and English.'
 WHEN 'mbbs_cta_title' THEN 'Ready to study MBBS at Dalian Medical University?'
 WHEN 'mbbs_cta_lead' THEN 'Apply for the March (spring) or September (autumn) 2027 intake, or talk to our admissions team for free guidance.'
 WHEN 'video_admissions_dates' THEN ''
 ELSE setting_value END;
-- anything that still carries the template name
UPDATE site_settings SET setting_value = setting_value
 WHERE 1=0;

-- ---------- admin account: keep the row, revoke the old password ----------
-- Set a new password with:  php artisan admin:set-password   (prompts in your own terminal)
UPDATE users SET password = '$2y$12$invalidinvalidinvalidinvalidinvalidinvalidinvalidinvalidinv', is_verified = 1 WHERE role = 'admin';
SET FOREIGN_KEY_CHECKS=1;

-- ---------- extra gallery photos supplied by the owner (22 Nov 2026) ----------
INSERT INTO gallery (title, category, image_path, sort_order, is_published) VALUES
('1947 arch at dusk','campus','assets/images/dmu/dmu-1947-arch-dusk.webp',11,1),
('DMU letters on campus','campus','assets/images/dmu/dmu-letters-campus-scenes.webp',12,1),
('Welcome arches at the new-student fair','student life','assets/images/dmu/dmu-welcome-arches-new-student-fair.webp',13,1),
('Campus shuttle bus','campus','assets/images/dmu/dmu-campus-shuttle-bus.webp',14,1);
