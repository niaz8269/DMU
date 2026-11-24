<?php

namespace App\Http\Controllers;

/** /llms.txt: a plain-text, link-annotated summary of the site for AI assistants and answer engines. */
class LlmsController extends Controller
{
    public function __invoke()
    {
        $base = 'https://dmu.cas.moe';
        $t = "# Dalian Medical University (DMU) admissions guide\n\n";
        $t .= "> An admissions guide and application help service run by Consultancy for Abroad Study (CAS, https://cas.moe/) for Dalian Medical University, a public medical university in Dalian, Liaoning, China. CAS is not the university. Facts come from the DMU English website, the DMU International Education College, the DMU admissions portal and the CAS fee sheet. Fees and dates can change: confirm with admissions.\n\n";
        $t .= "## Key facts\n\n";
        $t .= "- MBBS (English medium): 6 years including a 1-year internship; tuition 42,000 RMB a year; yearly total from year two 52,100-56,100 RMB.\n";
        $t .= "- BDS (Stomatology): 5 years; tuition 45,000 RMB a year; autumn intake only.\n";
        $t .= "- Intakes: March and September. Application windows: 1 March to 5 July (autumn) and 1 September to 5 January (spring). Confirm with admissions.\n";
        $t .= "- Entry: age 18 to 25 for MBBS and BDS; senior high school with chemistry, physics, biology and English.\n";
        $t .= "- Address: No. 9 West Section, Lvshun South Road, Lvshunkou District, Dalian, Liaoning, China 116044.\n";
        $t .= "- Contact: admissions@dmu.cas.moe, WhatsApp +86 176 4041 2827 and +86 180 4156 6030.\n\n";
        $t .= "## Main pages\n\n";
        foreach ([['/', 'Home'], ['/mbbs', 'MBBS programme'], ['/programs', 'All programmes'], ['/admissions', 'Admissions'], ['/fees', 'Fees'], ['/scholarships', 'Scholarships'], ['/contact', 'Contact']] as [$p, $n]) {
            $t .= "- [{$n}]({$base}{$p})\n";
        }
        $t .= "\n## Guides\n\n";
        foreach (config('seo_guides', []) as $slug => $g) {
            $t .= "- [{$g['h1']}]({$base}/{$slug}): " . rtrim($g['description'] ?? '', '.') . ".\n";
        }
        $t .= "\n## Optional\n\n- [Atom feed]({$base}/feed.xml)\n- [Sitemap]({$base}/sitemap.xml)\n";

        return response($t)->header('Content-Type', 'text/plain; charset=UTF-8');
    }
}
