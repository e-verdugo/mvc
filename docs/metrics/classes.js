var classes = [
    {
        "name": "App\\Card\\Card",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "card",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "value",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 2,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 33,
        "vocabulary": 19,
        "volume": 140.18,
        "difficulty": 3.2,
        "effort": 448.58,
        "level": 0.31,
        "bugs": 0.05,
        "time": 25,
        "intelligentContent": 43.81,
        "number_operators": 9,
        "number_operands": 24,
        "number_operators_unique": 4,
        "number_operands_unique": 15,
        "cloc": 7,
        "loc": 28,
        "lloc": 21,
        "mi": 90.96,
        "mIwoC": 55.99,
        "commentWeight": 34.97,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.67,
        "relativeSystemComplexity": 2.67,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 8,
        "package": "App\\Card\\",
        "pageRank": 0.44,
        "afferentCoupling": 3,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Card\\Deck",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deck",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "shuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "draw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [
            "App\\Card\\Card",
            "App\\Card\\Card"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 55,
        "vocabulary": 23,
        "volume": 248.8,
        "difficulty": 8.53,
        "effort": 2122.54,
        "level": 0.12,
        "bugs": 0.08,
        "time": 118,
        "intelligentContent": 29.16,
        "number_operators": 16,
        "number_operands": 39,
        "number_operators_unique": 7,
        "number_operands_unique": 16,
        "cloc": 9,
        "loc": 43,
        "lloc": 34,
        "mi": 81.82,
        "mIwoC": 49.28,
        "commentWeight": 32.54,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 3.25,
        "relativeSystemComplexity": 3.25,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 13,
        "totalSystemComplexity": 13,
        "package": "App\\Card\\",
        "pageRank": 0.09,
        "afferentCoupling": 4,
        "efferentCoupling": 1,
        "instability": 0.2,
        "violations": {}
    },
    {
        "name": "App\\Card\\Deck2",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 4,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [
            "App\\Card\\Deck",
            "App\\Card\\Card",
            "App\\Card\\Card"
        ],
        "parents": [
            "App\\Card\\Deck"
        ],
        "implements": [],
        "lcom": 1,
        "length": 38,
        "vocabulary": 16,
        "volume": 152,
        "difficulty": 6.14,
        "effort": 932.73,
        "level": 0.16,
        "bugs": 0.05,
        "time": 52,
        "intelligentContent": 24.77,
        "number_operators": 11,
        "number_operands": 27,
        "number_operators_unique": 5,
        "number_operands_unique": 11,
        "cloc": 0,
        "loc": 19,
        "lloc": 19,
        "mi": 56.29,
        "mIwoC": 56.29,
        "commentWeight": 0,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\Card\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "App\\Card\\Game",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getPlayer",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBank",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDeck",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "checkTwentyone",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "bankPull",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 3,
        "nbMethodsSetters": 0,
        "wmc": 8,
        "ccn": 6,
        "ccnMethodMax": 5,
        "externals": [
            "App\\Card\\Player",
            "App\\Card\\Player",
            "App\\Card\\Deck",
            "App\\Card\\Player",
            "App\\Card\\Player",
            "App\\Card\\Deck",
            "App\\Card\\Player"
        ],
        "parents": [],
        "implements": [],
        "lcom": 2,
        "length": 73,
        "vocabulary": 19,
        "volume": 310.1,
        "difficulty": 25.56,
        "effort": 7924.74,
        "level": 0.04,
        "bugs": 0.1,
        "time": 440,
        "intelligentContent": 12.13,
        "number_operators": 27,
        "number_operands": 46,
        "number_operators_unique": 10,
        "number_operands_unique": 9,
        "cloc": 10,
        "loc": 59,
        "lloc": 49,
        "mi": 74.65,
        "mIwoC": 44.88,
        "commentWeight": 29.77,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 81,
        "relativeDataComplexity": 0.83,
        "relativeSystemComplexity": 81.83,
        "totalStructuralComplexity": 486,
        "totalDataComplexity": 5,
        "totalSystemComplexity": 491,
        "package": "App\\Card\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "App\\Card\\Player",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "cards",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "name",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 2,
        "nbMethodsSetters": 1,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Card\\Card"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 12,
        "vocabulary": 6,
        "volume": 31.02,
        "difficulty": 2.25,
        "effort": 69.79,
        "level": 0.44,
        "bugs": 0.01,
        "time": 4,
        "intelligentContent": 13.79,
        "number_operators": 3,
        "number_operands": 9,
        "number_operators_unique": 2,
        "number_operands_unique": 4,
        "cloc": 4,
        "loc": 26,
        "lloc": 22,
        "mi": 88.68,
        "mIwoC": 60.14,
        "commentWeight": 28.55,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.5,
        "relativeSystemComplexity": 2.5,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 10,
        "totalSystemComplexity": 10,
        "package": "App\\Card\\",
        "pageRank": 0.08,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "violations": {}
    },
    {
        "name": "App\\Controller\\CardController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "card",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "shuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "draw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawNumber",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "player",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deck2",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "game",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "doc",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "play",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "playProcess",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 11,
        "nbMethods": 11,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 11,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 25,
        "ccn": 15,
        "ccnMethodMax": 6,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Card\\Deck",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\Deck",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\Deck",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\Deck",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\Deck",
            "App\\Card\\Player",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Card\\Deck2",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\Game",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\Routing\\Annotation\\Route"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 225,
        "vocabulary": 42,
        "volume": 1213.27,
        "difficulty": 17.1,
        "effort": 20746.94,
        "level": 0.06,
        "bugs": 0.4,
        "time": 1153,
        "intelligentContent": 70.95,
        "number_operators": 54,
        "number_operands": 171,
        "number_operators_unique": 7,
        "number_operands_unique": 35,
        "cloc": 48,
        "loc": 146,
        "lloc": 98,
        "mi": 71.75,
        "mIwoC": 32.95,
        "commentWeight": 38.8,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 169,
        "relativeDataComplexity": 0.85,
        "relativeSystemComplexity": 169.85,
        "totalStructuralComplexity": 1859,
        "totalDataComplexity": 9.36,
        "totalSystemComplexity": 1868.36,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 9,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\JSONController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "jsonapi",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Card\\Deck",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\Routing\\Annotation\\Route"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 14,
        "vocabulary": 6,
        "volume": 36.19,
        "difficulty": 2.5,
        "effort": 90.47,
        "level": 0.4,
        "bugs": 0.01,
        "time": 5,
        "intelligentContent": 14.48,
        "number_operators": 4,
        "number_operands": 10,
        "number_operators_unique": 2,
        "number_operands_unique": 4,
        "cloc": 3,
        "loc": 17,
        "lloc": 14,
        "mi": 94.11,
        "mIwoC": 63.82,
        "commentWeight": 30.29,
        "kanDefect": 0.38,
        "relativeStructuralComplexity": 4,
        "relativeDataComplexity": 0.33,
        "relativeSystemComplexity": 4.33,
        "totalStructuralComplexity": 4,
        "totalDataComplexity": 0.33,
        "totalSystemComplexity": 4.33,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 5,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\LibraryController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "index",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createBook",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createBookProcess",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showAllBooks",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showBookByIsbn",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "showBookByIsbnProcess",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateBook",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "updateBookProcess",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deleteBookByIsbnProcess",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 9,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 9,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 13,
        "ccn": 5,
        "ccnMethodMax": 3,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Request",
            "App\\Entity\\Library",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Repository\\LibraryRepository",
            "Symfony\\Component\\Routing\\Annotation\\Route"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 214,
        "vocabulary": 36,
        "volume": 1106.36,
        "difficulty": 14.27,
        "effort": 15792.45,
        "level": 0.07,
        "bugs": 0.37,
        "time": 877,
        "intelligentContent": 77.51,
        "number_operators": 37,
        "number_operands": 177,
        "number_operators_unique": 5,
        "number_operands_unique": 31,
        "cloc": 34,
        "loc": 118,
        "lloc": 84,
        "mi": 72.99,
        "mIwoC": 36.04,
        "commentWeight": 36.95,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 289,
        "relativeDataComplexity": 0.69,
        "relativeSystemComplexity": 289.69,
        "totalStructuralComplexity": 2601,
        "totalDataComplexity": 6.22,
        "totalSystemComplexity": 2607.22,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 7,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\ReportController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "home",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "about",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "report",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "metrics",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 4,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\Routing\\Annotation\\Route"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 1,
        "length": 12,
        "vocabulary": 6,
        "volume": 31.02,
        "difficulty": 0.8,
        "effort": 24.82,
        "level": 1.25,
        "bugs": 0.01,
        "time": 1,
        "intelligentContent": 38.77,
        "number_operators": 4,
        "number_operands": 8,
        "number_operators_unique": 1,
        "number_operands_unique": 5,
        "cloc": 12,
        "loc": 32,
        "lloc": 20,
        "mi": 101.67,
        "mIwoC": 61.04,
        "commentWeight": 40.63,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 2,
        "relativeSystemComplexity": 3,
        "totalStructuralComplexity": 4,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 12,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Entity\\Library",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getName",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setName",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getIsbn",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setIsbn",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAuthor",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setAuthor",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getImgUrl",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setImgUrl",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 5,
        "nbMethodsSetters": 4,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 43,
        "vocabulary": 11,
        "volume": 148.76,
        "difficulty": 3.33,
        "effort": 495.85,
        "level": 0.3,
        "bugs": 0.05,
        "time": 28,
        "intelligentContent": 44.63,
        "number_operators": 13,
        "number_operands": 30,
        "number_operators_unique": 2,
        "number_operands_unique": 9,
        "cloc": 8,
        "loc": 57,
        "lloc": 49,
        "mi": 75.2,
        "mIwoC": 47.78,
        "commentWeight": 27.42,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 9.44,
        "relativeSystemComplexity": 9.44,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 85,
        "totalSystemComplexity": 85,
        "package": "App\\Entity\\",
        "pageRank": 0.07,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Entity\\Product",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getName",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setName",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getValue",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setValue",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 3,
        "nbMethodsSetters": 2,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 22,
        "vocabulary": 8,
        "volume": 66,
        "difficulty": 2.5,
        "effort": 165,
        "level": 0.4,
        "bugs": 0.02,
        "time": 9,
        "intelligentContent": 26.4,
        "number_operators": 7,
        "number_operands": 15,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 6,
        "loc": 35,
        "lloc": 29,
        "mi": 85.14,
        "mIwoC": 55.22,
        "commentWeight": 29.92,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 5.4,
        "relativeSystemComplexity": 5.4,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 27,
        "totalSystemComplexity": 27,
        "package": "App\\Entity\\",
        "pageRank": 0.06,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Kernel",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "parents": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "implements": [],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 0,
        "loc": 5,
        "lloc": 5,
        "mi": 171,
        "mIwoC": 171,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Repository\\LibraryRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "remove",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 3,
        "ccnMethodMax": 2,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Entity\\Library",
            "App\\Entity\\Library"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 2,
        "length": 16,
        "vocabulary": 5,
        "volume": 37.15,
        "difficulty": 1.75,
        "effort": 65.01,
        "level": 0.57,
        "bugs": 0.01,
        "time": 4,
        "intelligentContent": 21.23,
        "number_operators": 2,
        "number_operands": 14,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 44,
        "loc": 65,
        "lloc": 22,
        "mi": 107.14,
        "mIwoC": 59.32,
        "commentWeight": 47.82,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.33,
        "relativeSystemComplexity": 16.33,
        "totalStructuralComplexity": 48,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 49,
        "package": "App\\Repository\\",
        "pageRank": 0.04,
        "afferentCoupling": 1,
        "efferentCoupling": 3,
        "instability": 0.75,
        "violations": {}
    },
    {
        "name": "App\\Repository\\ProductRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "remove",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 3,
        "ccnMethodMax": 2,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Entity\\Product",
            "App\\Entity\\Product"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 2,
        "length": 16,
        "vocabulary": 5,
        "volume": 37.15,
        "difficulty": 1.75,
        "effort": 65.01,
        "level": 0.57,
        "bugs": 0.01,
        "time": 4,
        "intelligentContent": 21.23,
        "number_operators": 2,
        "number_operands": 14,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 44,
        "loc": 65,
        "lloc": 22,
        "mi": 107.14,
        "mIwoC": 59.32,
        "commentWeight": 47.82,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.33,
        "relativeSystemComplexity": 16.33,
        "totalStructuralComplexity": 48,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 49,
        "package": "App\\Repository\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "violations": {}
    }
]