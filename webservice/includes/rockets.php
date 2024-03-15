<?php

function getRockets(): array {
    return [
        [
            "id" => 1,
            "name" => "Antares",
            "max_payload" => 8_000,
            "img_lowres" => "antares-lowres.jpg",
            "img_highres" => "antares-highres.jpg"
        ],
        [
            "id" => 2,
            "name" => "Ariane 5",
            "max_payload" => 18_000,
            "img_lowres" => "ariane-5-lowres.jpg",
            "img_highres" => "ariane-5-highres.jpg"
        ],
        [
            "id" => 3,
            "name" => "Ariane 6",
            "max_payload" => 10_300,
            "img_lowres" => "ariane-6-lowres.jpg",
            "img_highres" => "ariane-6-highres.jpg"
        ],
        [
            "id" => 4,
            "name" => "Atlas V",
            "max_payload" => 18_850,
            "img_lowres" => "atlas-v-lowres.jpg",
            "img_highres" => "atlas-v-highres.jpg"
        ],
        [
            "id" => 5,
            "name" => "Delta IV Heavy",
            "max_payload" => 28_800,
            "img_lowres" => "delta-iv-heavy-lowres.jpg",
            "img_highres" => "delta-iv-heavy-highres.jpg"
        ],
        [
            "id" => 6,
            "name" => "Electron",
            "max_payload" => 300,
            "img_lowres" => "electron-lowres.jpg",
            "img_highres" => "electron-highres.jpg"
        ],
        [
            "id" => 7,
            "name" => "Energia",
            "max_payload" => 100_000,
            "img_lowres" => "energia-lowres.jpg",
            "img_highres" => "energia-highres.jpg"
        ],
        [
            "id" => 8,
            "name" => "Falcon 1",
            "max_payload" => 670,
            "img_lowres" => "falcon-1-lowres.jpg",
            "img_highres" => "falcon-1-highres.jpg"
        ],
        [
            "id" => 9,
            "name" => "Falcon 9",
            "max_payload" => 22_800,
            "img_lowres" => "falcon-9-lowres.jpg",
            "img_highres" => "falcon-9-highres.jpg"
        ],
        [
            "id" => 10,
            "name" => "Falcon Heavy",
            "max_payload" => 63_800,
            "img_lowres" => "falcon-heavy-lowres.jpg",
            "img_highres" => "falcon-heavy-highres.jpg"
        ],
        [
            "id" => 11,
            "name" => "GSLV",
            "max_payload" => 6_000,
            "img_lowres" => "gslv-lowres.jpg",
            "img_highres" => "gslv-highres.jpg"
        ],
        [
            "id" => 12,
            "name" => "H3",
            "max_payload" => 7_900,
            "img_lowres" => "h3-lowres.jpg",
            "img_highres" => "h3-highres.jpg"
        ],
        [
            "id" => 13,
            "name" => "Jielong-3",
            "max_payload" => 6_500,
            "img_lowres" => "jielong-3-lowres.jpg",
            "img_highres" => "jielong-3-highres.jpg"
        ],
        [
            "id" => 14,
            "name" => "LauncherOne",
            "max_payload" => 500,
            "img_lowres" => "launcherone-lowres.jpg",
            "img_highres" => "launcherone-highres.jpg"
        ],
        [
            "id" => 15,
            "name" => "Long March 3",
            "max_payload" => 5_000,
            "img_lowres" => "long-march-3-lowres.jpg",
            "img_highres" => "long-march-3-highres.jpg"
        ],
        [
            "id" => 16,
            "name" => "Mercury-Redstone",
            "max_payload" => 0,
            "img_lowres" => "mercury-redstone-lowres.jpg",
            "img_highres" => "mercury-redstone-highres.jpg"
        ],
        [
            "id" => 17,
            "name" => "Neutron",
            "max_payload" => 13_000,
            "img_lowres" => "neutron-lowres.jpg",
            "img_highres" => "neutron-highres.jpg"
        ],
        [
            "id" => 18,
            "name" => "New Glenn",
            "max_payload" => 45_000,
            "img_lowres" => "new-glenn-lowres.jpg",
            "img_highres" => "new-glenn-highres.jpg"
        ],
        [
            "id" => 19,
            "name" => "N1",
            "max_payload" => 95_000,
            "img_lowres" => "n1-lowres.jpg",
            "img_highres" => "n1-highres.jpg"
        ],
        [
            "id" => 20,
            "name" => "Saturn V",
            "max_payload" => 141_100,
            "img_lowres" => "saturn-v-lowres.jpg",
            "img_highres" => "saturn-v-highres.jpg"
        ],
        [
            "id" => 21,
            "name" => "R-7 (Soyuz)",
            "max_payload" => 6_500,
            "img_lowres" => "r-7-lowres.jpg",
            "img_highres" => "r-7-highres.jpg"
        ],
        [
            "id" => 22,
            "name" => "Space Launch System",
            "max_payload" => 130_000,
            "img_lowres" => "sls-lowres.jpg",
            "img_highres" => "sls-highres.jpg"
        ],
        [
            "id" => 23,
            "name" => "Space Shuttle",
            "max_payload" => 27_500,
            "img_lowres" => "space-shuttle-lowres.jpg",
            "img_highres" => "space-shuttle-highres.jpg"
        ],
        [
            "id" => 24,
            "name" => "Starship",
            "max_payload" => 250_000,
            "img_lowres" => "starship-lowres.jpg",
            "img_highres" => "starship-highres.jpg"
        ],
        [
            "id" => 25,
            "name" => "Vega",
            "max_payload" => 2_300,
            "img_lowres" => "vega-lowres.jpg",
            "img_highres" => "vega-highres.jpg"
        ],
        [
            "id" => 26,
            "name" => "Vulcan Centaur",
            "max_payload" => 27_200,
            "img_lowres" => "vulcan-centaur-lowres.jpg",
            "img_highres" => "vulcan-centaur-highres.jpg"
        ],
    ];
}

function getRocketDetails($id): array {
    $tags = [
        1 => [
            "name" => "Antares",
            "manufacturer" => "Northrop Grumman",
            "origin" => "United States",
            "height" => 42.5,
            "max_payload" => 8_000,
            "img_lowres" => "antares-lowres.jpg",
            "img_highres" => "antares-highres.jpg",
            "track_record" => [
                "total_launches" => 18,
                "successes" => 17,
                "failures" => 1,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ],
        2 => [
            "name" => "Ariane 5",
            "manufacturer" => "Arianespace / ESA",
            "origin" => "Europe",
            "height" => 56,
            "max_payload" => 18_000,
            "img_lowres" => "ariane-5-lowres.jpg",
            "img_highres" => "ariane-5-highres.jpg",
            "track_record" => [
                "total_launches" => 117,
                "successes" => 112,
                "failures" => 2,
                "partial_failures" => 3
            ],
            "status" => "retired"
        ],
        3 => [
            "name" => "Ariane 6",
            "manufacturer" => "Arianespace / ESA",
            "origin" => "Europe",
            "height" => 63,
            "max_payload" => 10_300,
            "img_lowres" => "ariane-6-lowres.jpg",
            "img_highres" => "ariane-6-highres.jpg",
            "track_record" => [
                "total_launches" => 0,
                "successes" => 0,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "development"
        ],
        4 => [
            "name" => "Atlas V",
            "manufacturer" => "United Launch Alliance (ULA)",
            "origin" => "United Status",
            "height" => 58,
            "max_payload" => 18_850,
            "img_lowres" => "atlas-v-lowres.jpg",
            "img_highres" => "atlas-v-highres.jpg",
            "track_record" => [
                "total_launches" => 99,
                "successes" => 98,
                "failures" => 0,
                "partial_failures" => 1
            ],
            "status" => "operational"
        ],
        5 => [
            "name" => "Delta IV Heavy",
            "manufacturer" => "United Launch Alliance (ULA)",
            "origin" => "United States",
            "height" => 72,
            "max_payload" => 28_800,
            "img_lowres" => "delta-iv-heavy-lowres.jpg",
            "img_highres" => "delta-iv-heavy-highres.jpg",
            "track_record" => [
                "total_launches" => 15,
                "successes" => 14,
                "failures" => 0,
                "partial_failures" => 1
            ],
            "status" => "operational"
        ],
        6 => [
            "name" => "Electron",
            "manufacturer" => "Rocket Lab",
            "origin" => "United States",
            "height" => 18,
            "max_payload" => 300,
            "img_lowres" => "electron-lowres.jpg",
            "img_highres" => "electron-highres.jpg",
            "track_record" => [
                "total_launches" => 43,
                "successes" => 39,
                "failures" => 4,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ],
        7 => [
            "name" => "Energia",
            "manufacturer" => "Energia",
            "origin" => "USSR",
            "height" => 58.8,
            "max_payload" => 100_000,
            "img_lowres" => "energia-lowres.jpg",
            "img_highres" => "energia-highres.jpg",
            "track_record" => [
                "total_launches" => 2,
                "successes" => 2,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "retired"
        ],
        8 => [
            "name" => "Falcon 1",
            "manufacturer" => "SpaceX",
            "origin" => "United States",
            "height" => 21,
            "max_payload" => 670,
            "img_lowres" => "falcon-1-lowres.jpg",
            "img_highres" => "falcon-1-highres.jpg",
            "track_record" => [
                "total_launches" => 5,
                "successes" => 2,
                "failures" => 3,
                "partial_failures" => 0
            ],
            "status" => "retired"
        ],
        9 => [
            "name" => "Falcon 9",
            "manufacturer" => "SpaceX",
            "origin" => "United States",
            "height" => 70,
            "max_payload" => 22_800,
            "img_lowres" => "falcon-9-lowres.jpg",
            "img_highres" => "falcon-9-highres.jpg",
            "track_record" => [
                "total_launches" => 305,
                "successes" => 303,
                "failures" => 1,
                "partial_failures" => 1
            ],
            "status" => "operational"
        ],
        10 => [
            "name" => "Falcon Heavy",
            "manufacturer" => "SpaceX",
            "origin" => "United States",
            "height" => 70,
            "max_payload" => 63_800,
            "img_lowres" => "falcon-heavy-lowres.jpg",
            "img_highres" => "falcon-heavy-highres.jpg",
            "track_record" => [
                "total_launches" => 9,
                "successes" => 9,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ],
        11 => [
            "name" => "GSLV",
            "manufacturer" => "ISRO",
            "origin" => "India",
            "height" => 49.1,
            "max_payload" => 6_000,
            "img_lowres" => "gslv-lowres.jpg",
            "img_highres" => "gslv-highres.jpg",
            "track_record" => [
                "total_launches" => 16,
                "successes" => 10,
                "failures" => 4,
                "partial_failures" => 2
            ],
            "status" => "operational"
        ],
        12 => [
            "name" => "H3",
            "manufacturer" => "Mitsubishi Heavy Industries / JAXA",
            "origin" => "Japan",
            "height" => 63,
            "max_payload" => 7_900,
            "img_lowres" => "h3-lowres.jpg",
            "img_highres" => "h3-highres.jpg",
            "track_record" => [
                "total_launches" => 2,
                "successes" => 1,
                "failures" => 1,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ],
        13 => [
            "name" => "Jielong-3",
            "manufacturer" => "CALT",
            "origin" => "China",
            "height" => 31,
            "max_payload" => 6_500,
            "img_lowres" => "jielong-3-lowres.jpg",
            "img_highres" => "jielong-3-highres.jpg",
            "track_record" => [
                "total_launches" => 3,
                "successes" => 3,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ],
        14 => [
            "name" => "LauncherOne",
            "manufacturer" => "Virgin Orbit",
            "origin" => "United States",
            "height" => 21.3,
            "max_payload" => 500,
            "img_lowres" => "launcherone-lowres.jpg",
            "img_highres" => "launcherone-highres.jpg",
            "track_record" => [
                "total_launches" => 6,
                "successes" => 4,
                "failures" => 2,
                "partial_failures" => 0
            ],
            "status" => "retired"
        ],
        15 => [
            "name" => "Long March 3",
            "manufacturer" => "CALT",
            "origin" => "China",
            "height" => 46.6,
            "max_payload" => 5_000,
            "img_lowres" => "long-march-3-lowres.jpg",
            "img_highres" => "long-march-3-highres.jpg",
            "track_record" => [
                "total_launches" => 152,
                "successes" => 144,
                "failures" => 2,
                "partial_failures" => 6
            ],
            "status" => "retired"
        ],
        16 => [
            "name" => "Mercury-Redstone",
            "manufacturer" => "Chrysler Corporation / NASA",
            "origin" => "United States",
            "height" => 25.4,
            "max_payload" => 0,
            "img_lowres" => "mercury-redstone-lowres.jpg",
            "img_highres" => "mercury-redstone-highres.jpg",
            "track_record" => [
                "total_launches" => 6,
                "successes" => 5,
                "failures" => 1,
                "partial_failures" => 0
            ],
            "status" => "retired"
        ],
        17 => [
            "name" => "Neutron",
            "manufacturer" => "Rocket Lab",
            "origin" => "United States",
            "height" => 42,
            "max_payload" => 13_000,
            "img_lowres" => "neutron-lowres.jpg",
            "img_highres" => "neutron-highres.jpg",
            "track_record" => [
                "total_launches" => 0,
                "successes" => 0,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "development"
        ],
        18 => [
            "name" => "New Glenn",
            "manufacturer" => "Blue Origin",
            "origin" => "United States",
            "height" => 98,
            "max_payload" => 45_000,
            "img_lowres" => "new-glenn-lowres.jpg",
            "img_highres" => "new-glenn-highres.jpg",
            "track_record" => [
                "total_launches" => 0,
                "successes" => 0,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "development"
        ],
        19 => [
            "name" => "N1",
            "manufacturer" => "OKB-1",
            "origin" => "USSR",
            "height" => 105.3,
            "max_payload" => 95_000,
            "img_lowres" => "n1-lowres.jpg",
            "img_highres" => "n1-highres.jpg",
            "track_record" => [
                "total_launches" => 4,
                "successes" => 0,
                "failures" => 4,
                "partial_failures" => 0
            ],
            "status" => "retired"
        ],
        20 => [
            "name" => "Saturn V",
            "manufacturer" => "NASA",
            "origin" => "United States",
            "height" => 110.6,
            "max_payload" => 141_100,
            "img_lowres" => "saturn-v-lowres.jpg",
            "img_highres" => "saturn-v-highres.jpg",
            "track_record" => [
                "total_launches" => 13,
                "successes" => 12,
                "failures" => 0,
                "partial_failures" => 1
            ],
            "status" => "retired"
        ],
        21 => [
            "name" => "R-7 (Soyuz)",
            "manufacturer" => "OKB-1",
            "origin" => "USSR / Russia",
            "height" => 55.6,
            "max_payload" => 6_500,
            "img_lowres" => "r-7-lowres.jpg",
            "img_highres" => "r-7-highres.jpg",
            "track_record" => [
                "total_launches" => 74,
                "successes" => 72,
                "failures" => 1,
                "partial_failures" => 1
            ],
            "status" => "operational"
        ],
        22 => [
            "name" => "Space Launch System",
            "manufacturer" => "NASA",
            "origin" => "United States",
            "height" => 111,
            "max_payload" => 130_000,
            "img_lowres" => "sls-lowres.jpg",
            "img_highres" => "sls-highres.jpg",
            "track_record" => [
                "total_launches" => 1,
                "successes" => 1,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ],
        23 => [
            "name" => "Space Shuttle",
            "manufacturer" => "NASA",
            "origin" => "United States",
            "height" => 56.1,
            "max_payload" => 27_500,
            "img_lowres" => "space-shuttle-lowres.jpg",
            "img_highres" => "space-shuttle-highres.jpg",
            "track_record" => [
                "total_launches" => 135,
                "successes" => 133,
                "failures" => 2,
                "partial_failures" => 0
            ],
            "status" => "retired"
        ],
        24 => [
            "name" => "Starship",
            "manufacturer" => "SpaceX",
            "origin" => "United States",
            "height" => 121,
            "max_payload" => 250_000,
            "img_lowres" => "starship-lowres.jpg",
            "img_highres" => "starship-highres.jpg",
            "track_record" => [
                "total_launches" => 2,
                "successes" => 0,
                "failures" => 0,
                "partial_failures" => 2
            ],
            "status" => "development"
        ],
        25 => [
            "name" => "Vega",
            "manufacturer" => "European Space Agency (ESA)",
            "origin" => "Europe",
            "height" => 30,
            "max_payload" => 2_300,
            "img_lowres" => "vega-lowres.jpg",
            "img_highres" => "vega-highres.jpg",
            "track_record" => [
                "total_launches" => 23,
                "successes" => 20,
                "failures" => 3,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ],
        26 => [
            "name" => "Vulcan Centaur",
            "manufacturer" => "United Launch Alliance (ULA)",
            "origin" => "United States",
            "height" => 61.1,
            "max_payload" => 27_200,
            "img_lowres" => "vulcan-centaur-lowres.jpg",
            "img_highres" => "vulcan-centaur-highres.jpg",
            "track_record" => [
                "total_launches" => 1,
                "successes" => 1,
                "failures" => 0,
                "partial_failures" => 0
            ],
            "status" => "operational"
        ]
    ];

    return $tags[$id];
}