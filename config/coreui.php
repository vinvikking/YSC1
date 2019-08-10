<?php

return [

    /*
     * Application title to display in <title> tag
     */
    'title' => 'YourSocialConnect',

    /*
     * Text to put in the top-left of the menu bar. logo_mini is shown when the navbar is collapsed.
     * NOTE: This is a non-escaped string, so you can put HTML in here
     */
    'logo' => 'YourSocialConnect',
    'logo_mini' => 'YSC',

    /*
     * Menu builder
     */
    'menu' => [
         [
            'permission' => 'see leerlingen',
            'text' => 'Influencer',
            'url'  => '/influencers',
            'icon' => 'user-graduate fas',
            'submenu' => [
                [
                    'text' => 'Alle campagnes',
                    'url'  => '/influencers',    
                ],
                [
                    'text' => 'Actieve campagnes',
                    'url'  => '#',    
                ],
                [
                    'text' => 'Statistieken',
                    'url'  => '#',    
                ]
            ]
         ],
         [
            'permission' => 'see leerlingen',
            'text' => 'Business',
            'url'  => '/Business',
            'icon' => 'bell far',
            'submenu' => [
                [
                    'text' => 'Alle campagnes',
                    'url'  => '/campagnes',    
                ],
                [
                    'text' => 'Actieve campagnes',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ],
                     [
                    'text' => 'Statistieken',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ]
            ]
         ],
         [
            'permission' => 'see leerlingen',
            'text' => 'Business Analytics',
            'url'  => '/analytics',
            'icon' => 'bell far',
            'submenu' => [
                [
                    'text' => 'Dashboard',
                    'icon' => 'bell far',
                    'url'  => '/analytics',    
                ],
                                [
                    'text' => 'Reporting',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ],
                [
                    'text' => 'Export wizard',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ]
            ]
         ],
         [
            'text' => 'Admin',
            'url'  => '/admin',
            'icon' => 'person far',
            'submenu' => [
                [
                    'text' => 'Dashboard',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ],
                                [
                    'text' => 'Abonnementen',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ],
                [
                    'text' => 'Beheer Subscribers',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ],
                [
                    'text' => 'Extra',
                    'icon' => 'bell far',
                    'url'  => '#',    
                ],
            ]
         ]

//        [
//            'text' => 'Dashboard',          // The text to be displayed inside the menu.
//            'url' => 'admin/dashboard',     // The URL behind the text. Mutually exclusive with "route" option.
//            'icon' => 'chart-bar far',      // Name of FontAwesome icon to display. Note that you have to use the "far", "fas" or "fal" modifier behind the icon.
//            'target' => '_blank'            // Target attribute of <a> tag.
//        ],
//        'First section',                    // Section header
//        [
//            'text' => 'Users',
//            'route' => 'admin.users',       // The route behind the text. Mutually exclusive with "url" option.
//            'icon' => 'users fas'
//        ],
//        'Admin only',
//        [
//            'can' => 'edit-settings',       // Use Laravel's Gate functionality via the 'can' keyword to show menu items to specific user (roles)
//            'text' => 'Settings',
//            'icon' => 'cog',
//            'submenu' => [
//                [
//                    'text' => 'Level one',
//                    'icon' => 'bell',       // Tip: always set icons. Submenus in particular tend to get misaligned plus it's more accessible and user friendly.
//                    'url' => 'admin/settings/level-one'
//                ],
//                [
//                    'text' => 'Level two',
//                    'icon' => 'clock',
//                    'submenu' => [
//                        [
//                            'text' => 'Add as many as you like',
//                            'url' => '#'
//                        ]
//                    ]
//                ]
//            ]
//        ]
    ],

    /**
     * Filters that parse above menu configuration and add some sparkling things, like .active classes on active
     * menu items and parsing routes and URLs into the correct href attributes.
     */
    'filters' => [
        HzHboIct\LaravelCoreUI\Menu\Filters\HrefFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ActiveFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\SubmenuFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ClassesFilter::class,
    ],
];
