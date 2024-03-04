<?php

function getRockets(): array {
    return [
        [
            "id" => 1,
            "name" => "Antares",
            "max_payload" => 8_000
        ],
        [
            "id" => 2,
            "name" => "Ariane 5",
            "max_payload" => 18_000
        ],
        [
            "id" => 3,
            "name" => "Ariane 6",
            "max_payload" => 10_300
        ],
        [
            "id" => 4,
            "name" => "Atlas V",
            "max_payload" => 18_850
        ],
        [
            "id" => 5,
            "name" => "Delta IV Heavy",
            "max_payload" => 28_800
        ],
        [
            "id" => 6,
            "name" => "Electron",
            "max_payload" => 300
        ],
        [
            "id" => 7,
            "name" => "Energia",
            "max_payload" => 100_000
        ],
        [
            "id" => 8,
            "name" => "Falcon 1",
            "max_payload" => 670
        ],
        [
            "id" => 9,
            "name" => "Falcon 9",
            "max_payload" => 22_800
        ],
        [
            "id" => 10,
            "name" => "Falcon Heavy",
            "max_payload" => 63_800
        ],
        [
            "id" => 11,
            "name" => "GSLV",
            "max_payload" => 6_000
        ],
        [
            "id" => 12,
            "name" => "H3",
            "max_payload" => 7_900
        ],
        [
            "id" => 13,
            "name" => "Jielong-3",
            "max_payload" => 6_500
        ],
        [
            "id" => 14,
            "name" => "LauncherOne",
            "max_payload" => 500
        ],
        [
            "id" => 15,
            "name" => "Long March 3",
            "max_payload" => 5_000
        ],
        [
            "id" => 16,
            "name" => "Mercury-Redstone",
            "max_payload" => 0
        ],
        [
            "id" => 17,
            "name" => "Neutron",
            "max_payload" => 13_000
        ],
        [
            "id" => 18,
            "name" => "New Glenn",
            "max_payload" => 45_000
        ],
        [
            "id" => 19,
            "name" => "N1",
            "max_payload" => 95_000
        ],
        [
            "id" => 20,
            "name" => "Saturn V",
            "max_payload" => 141_100
        ],
        [
            "id" => 21,
            "name" => "R-7 (Soyuz)",
            "max_payload" => 6_500
        ],
        [
            "id" => 22,
            "name" => "Space Launch System",
            "max_payload" => 130_000
        ],
        [
            "id" => 23,
            "name" => "Space Shuttle",
            "max_payload" => 27_500
        ],
        [
            "id" => 24,
            "name" => "Starship",
            "max_payload" => 150_000
        ],
        [
            "id" => 25,
            "name" => "Vega",
            "max_payload" => 2_300
        ],
        [
            "id" => 26,
            "name" => "Vulcan Centaur",
            "max_payload" => 27_200
        ],
    ];
}

function getRocketDetails($id): array {
    $tags = [
        1 => [
            "recipe" => "Put it in the oven and go!",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id];
}