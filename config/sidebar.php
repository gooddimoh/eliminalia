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
        ['icon' => 'fa fa-envelope',
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
                'url' => '/dashboard/customer/Registration',
                'title' => 'Customer Registration',
                'route-name' => 'Customer Registration'
            ], [
                'url' => '/dashboard/customer/list (ADMIN)',
                'title' => 'Customerlist (ADMIN)',
                'route-name' => 'customerlist(ADMIN)'
            ], [
                'url' => '/dashboard/customer/List (MANAGER)',
                'title' => 'Customer List (MANAGER)',
                'route-name' => 'customerlist(MANAGER)'
            ], [
                'url' => '/dashboard/customer/List (PARTNER)',
                'title' => 'Customer List (PARTNER)',
                'route-name' => 'customerlist(PARTNER)'
            ], [
                'url' => '/dashboard/customer/List (REGISTRATOR)',
                'title' => 'Customer List (REGISTRATOR)',
                'route-name' => 'customerlist(REGISTRATOR)'
            ], [
                'url' => '/dashboard/customer/List (SADMIN)',
                'title' => 'Customer List (SADMIN)',
                'route-name' => 'customerlist(SADMIN)'
            ], [
                'url' => '/dashboard/Pending Billing',
                'title' => 'Pending Billing',
                'route-name' => 'pendingbilling'
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
                'url' => '/dashboard/requests/finalizate_files',
                'title' => 'Finalizate Files',
                'route-name' => 'finalizate_files'
            ], [
                'url' => '/dashboard/requests/withdraw_contracts',
                'title' => 'Withdraw Contracts',
                'route-name' => 'withdraw_contracts'
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
            'url' => '/dashboard/timeline',
            'route-name' => 'timeline'
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
        ['icon' => 'fa fa-sign-out-alt',
            'title' => 'Logout',
            'url' => '/dashboard/Logout',
            'route-name' => 'Logout'
        ],
    ]
];
