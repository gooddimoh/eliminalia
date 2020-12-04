<?php
return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
    'menu' => [
        [
            'icon' => 'fa fa-th-large',
            'title' => 'Dashboard',
            'url' => '/dashboard',
            'route-name' => 'dashboard'
        ],
        ['icon' => 'fa fa-key',
            'title' => 'Login & Register',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/login',
                'title' => 'Login',
                'route-name' => 'login'
            ], [
                'url' => '/register',
                'title' => 'Register',
                'route-name' => 'register'
            ]]
        ],
        ['icon' => 'fa fa-hdd',
            'title' => 'Email',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/dashboard/email/inbox',
                'title' => 'Email Inbox',
                'route-name' => 'general inbox'
            ], [
                'url' => '/dashboard/email/compose',
                'title' => 'Email Compose',
                'route-name' => 'withdraw compose'
            ], [
                'url' => '/dashboard/email/detail',
                'title' => 'Email Detail',
                'route-name' => 'withdraw detail'
            ]]
        ],
        [
            'icon' => 'fa fa-key',
            'title' => 'User Management',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [
                [
                    'url' => '/dashboard/usermanagement/new',
                    'title' => 'Contact New',
                    'route-name' => 'Contact New'
                ],
                [
                    'url' => '/dashboard/usermanagement/list',
                    'title' => 'Contact List',
                    'route-name' => 'Contact List'
                ],
            ]
        ],
        [
            'icon' => 'fa fa-key',
            'title' => 'Contacts',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [
                [
                    'url' => '/dashboard/contacts/list',
                    'title' => 'Contact List',
                    'route-name' => 'Contac tList'
                ],
                [
                    'url' => '/dashboard/contacts/registration',
                    'title' => 'Contact Registration',
                    'route-name' => 'Contact Registration'
                ],
                [
                    'url' => '/dashboard/contacts/inquiries',
                    'title' => 'Inquiries',
                    'route-name' => 'Inquiries'
                ],

            ]
        ],
        [
            'icon' => 'fa fa-key',
            'title' => 'Customers',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/dashboard/Customers/Registration',
                'title' => 'Customer Registration',
                'route-name' => 'Customer Registration'
            ], [
                'url' => '/dashboard/Customer/list (ADMIN)',
                'title' => 'Customerlist (ADMIN)',
                'route-name' => 'Customerlist (ADMIN)'
            ], [
                'url' => '/dashboard/Customer/List (MANAGER)',
                'title' => 'Customer List (MANAGER)',
                'route-name' => 'Customer List (MANAGER)'
            ], [
                'url' => '/dashboard/Customer/List (PARTNER)',
                'title' => 'Customer List (PARTNER)',
                'route-name' => 'Customer List (PARTNER)'
            ], [
                'url' => '/dashboard/Customer/List (REGISTRATOR)',
                'title' => 'Customer List (REGISTRATOR)',
                'route-name' => 'Customer List (REGISTRATOR)'
            ], [
                'url' => '/dashboard/Customer/List (SADMIN',
                'title' => 'Customer List (SADMIN)',
                'route-name' => 'Customer List'
            ], [
                'url' => '/dashboard/Pending Billing',
                'title' => 'Pending Billing',
                'route-name' => 'Pending Billing'
            ]
            ]
        ],
        [
            'icon' => 'fa fa-key',
            'title' => 'Partners',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/dashboard/partners/registration',
                'title' => 'Partner Registration',
                'route-name' => 'Partner Registration'
            ], [
                'url' => '/dashboard/partners/list',
                'title' => 'Partners List',
                'route-name' => 'Partners List'
            ]]
        ],
        ['icon' => 'fa fa-key',
            'title' => 'Requests',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/dashboard/Finalizate/Files',
                'title' => 'Finalizate Files',
                'route-name' => 'Finalizate Files'
            ], [
                'url' => '/dashboard/Withdraw/Contracts',
                'title' => 'Withdraw/Contracts',
                'route-name' => 'Withdraw Contracts'
            ]]
        ],
        ['icon' => 'fa fa-key',
            'title' => 'Statistics',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/dashboard/statistics/general',
                'title' => 'General Statistics',
                'route-name' => 'General Statistics'
            ], [
                'url' => '/dashboard/statistics/facturation',
                'title' => 'Facturation Contracts',
                'route-name' => 'Withdraw Contracts'
            ], [
                'url' => '/dashboard/statistics/contact',
                'title' => 'Contact Contracts',
                'route-name' => 'Contact Statistics'
            ]]
        ],
        ['icon' => 'fa fa-hdd',
            'title' => 'Action History',
            'url' => '/dashboard/Action History',
            'route-name' => 'Action History'
        ],
        ['icon' => 'fa fa-clock',
            'title' => 'Timeline',
            'url' => '/dashboard/Timeline',
            'route-name' => 'Timeline'
        ],
        ['icon' => 'fa fa-edit',
            'title' => 'PostToTimeline',
            'url' => '/dashboard/PostToTimeline',
            'route-name' => 'PostToTimeline'
        ],
        ['icon' => 'fa fa-edit',
            'title' => 'PostWithFiles',
            'url' => '/dashboard/postwithfiles',
            'route-name' => 'postwithfiles'
        ],
        ['icon' => 'fa fa-calendar',
            'title' => 'Calendar',
            'url' => '/dashboard/calendar',
            'route-name' => 'Calendar'
        ],
        ['icon' => 'fa fa-map',
            'title' => 'Map',
            'url' => '/dashboard/Map',
            'route-name' => 'Map'
        ],
    ]
];
