<?php
function foo(array $intervalles): array {
    if (empty($intervalles)) {
        return [];
    }

    // Fonction pour fusionner deux intervalles
    $fusionner = function($a, $b) {
        return [$a[0], max($a[1], $b[1])];
    };

    // Fonction pour vérifier si deux intervalles se chevauchent
    $chevauchement = function($a, $b) {
        return $a[1] >= $b[0];
    };

    // Initialisation du tableau de résultats
    $resultat = [];

    // Trier les intervalles par début croissant
    usort($intervalles, function($a, $b) {
        return $a[0] - $b[0];
    });

    // Fusionner les intervalles
    $resultat[] = $intervalles[0];
    foreach ($intervalles as $intervalle) {
        $dernier = end($resultat);
        if ($chevauchement($dernier, $intervalle)) {
            // Fusionner les intervalles qui se chevauchent
            $resultat[key($resultat)] = $fusionner($dernier, $intervalle);
        } else {
            // Ajouter un nouvel intervalle non fusionné
            $resultat[] = $intervalle;
        }
    }

    return $resultat;
}

function formatIntervalles(array $testCaseResult): string {
    return '[' . implode(', ', array_map(function($interval) {
        return '[' . implode(', ', $interval) . ']';
    }, $testCaseResult)) . ']';
}

// Cas de test
$casDeTest = [
    [[0, 3], [6, 10]],
    [[0, 5], [3, 10]],
    [[0, 5], [2, 4]],
    [[7, 8], [3, 6], [2, 4]],
    [[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]]
];

foreach ($casDeTest as $test) {
    $resultat = foo($test);
    echo formatIntervalles($test) . ' ====> ' . formatIntervalles($resultat) . PHP_EOL;
}