<?php

declare(strict_types=1);

header('Content-Type: text/css; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');

$palette = [
    'developpeur' => ['#00D43C', 'rgb(98, 255, 143)'],
    'designer' => ['#C7B800', 'hsla(60, 100.00%, 50.00%, 0.53)'],
    'marketeur' => ['#0076ff', 'rgb(0, 76, 255)'],
    'admin' => ['#b89445', 'rgba(232, 199, 120, 0.45)'],
    'autre' => ['#888888', 'rgba(136, 136, 136, 0.32)'],
];

$normalizeMetier = static function (string $raw): string {
    $key = strtolower(trim($raw));
    $key = str_replace(
        ['à', 'â', 'ä', 'é', 'è', 'ê', 'ë', 'ï', 'î', 'ô', 'ö', 'ù', 'û', 'ü', 'ç'],
        ['a', 'a', 'a', 'e', 'e', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'u', 'c'],
        $key
    );
    $allowed = ['developpeur', 'designer', 'marketeur', 'admin'];

    return in_array($key, $allowed, true) ? $key : 'autre';
};

$rows = [];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=php_superadmin', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    $st = $bdd->query('SELECT metier FROM users');
    if ($st !== false) {
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (Throwable $e) {
    $rows = [];
}

$n = 1;
foreach ($rows as $row) {
    $tag = $normalizeMetier((string) ($row['metier'] ?? ''));
    [$bg, $glow] = $palette[$tag];
    $sel = 'body table tbody tr:nth-child(' . $n . ') td:nth-child(4)::before';
    echo "{$sel} {\n  background: {$bg};\n  box-shadow: 0 0 0 3px {$glow};\n}\n";
    $n++;
}

if ($n > 1) {
    echo "@media (max-width: 768px) {\n";
    for ($r = 1; $r < $n; $r++) {
        echo "  body table tbody tr:nth-child({$r}) td:nth-child(4)::before {\n";
        echo "    background: transparent !important;\n";
        echo "    box-shadow: none !important;\n";
        echo "  }\n";
    }
    echo "}\n";
}
