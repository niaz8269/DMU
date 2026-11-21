<?php

// Names that link to the CAS website (https://cas.moe/) on their first mention per page: see App\Support\CasLinks.
// The other 42 universities on the MOE list of 1 June 2026 (Dalian Medical University itself is not linked away;
// Xinjiang Medical University is just one of the others and is linked like the rest).
$s = require __DIR__ . '/../resources/guides/_shared.php';
$names = [];
foreach ($s['moeRows'] as $row) {
    $name = trim(preg_replace('/\s*\(.*\)$/', '', $row[1]));
    if ($row[0] !== '' && $name !== 'Dalian Medical University') {
        $names[] = $name;
    }
}

return ['universities' => $names];
