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
                'route-name' => 'general_inbox'
            ], [
                'url' => '/dashboard/email/compose',
                'title' => 'Email Compose',
                'route-name' => 'withdraw_compose'
            ], [
                'url' => '/dashboard/email/detail',
                'title' => 'Email Detail',
                'route-name' => 'withdraw_detail'
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
                    'title' => 'Usermanagement New',
                    'route-name' => 'usermanagement_new'
                ],
                [
                    'url' => '/dashboard/usermanagement/list',
                    'title' => 'Usermanagement List',
                    'route-name' => 'usermanagement_list'
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
                    'url' => '/dashboard/contacts/registration',
                    'title' => 'contact registration',
                    'route-name' => 'contact_registration'
                ],
                [
                    'url' => '/dashboard/contacts/list',
                    'title' => 'Contact List',
                    'route-name' => 'contact list'
                ],
                [
                    'url' => '/dashboard/contacts/inquiries',
                    'title' => 'Inquiries',
                    'route-name' => 'inquiries'
                ],

            ]
        ],
        [
            'icon' => 'fa fa-key',
            'title' => 'Customers',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/dashboard/customer/registration',
                'title' => 'Customer Registration',
                'route-name' => 'customer_registration'
            ], [
                'url' => '/dashboard/customer/list (ADMIN)',
                'title' => 'Customerlist (ADMIN)',
                'route-name' => 'customerlist(ADMIN)'
            ], [
                'url' => '/dashboard/customer/list (MANAGER)',
                'title' => 'Customer List (MANAGER)',
                'route-name' => 'customerlist(MANAGER)'
            ], [
                'url' => '/dashboard/customer/list (PARTNER)',
                'title' => 'Customer List (PARTNER)',
                'route-name' => 'customerlist(PARTNER)'
            ], [
                'url' => '/dashboard/customer/list (REGISTRATOR)',
                'title' => 'Customer List (REGISTRATOR)',
                'route-name' => 'customerlist(REGISTRATOR)'
            ], [
                'url' => '/dashboard/customer/list (SADMIN)',
                'title' => 'Customer List (SADMIN)',
                'route-name' => 'customerlist(SADMIN)'
            ], [
                'url' => '/dashboard/pending_billing',
                'title' => 'Pending Billing',
                'route-name' => 'pending_billing'
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
                'route-name' => 'partner_registration'
            ], [
                'url' => '/dashboard/partners/list',
                'title' => 'Partners List',
                'route-name' => 'partners_list'
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
                'route-name' => 'general_statistics'
            ], [
                'url' => '/dashboard/statistics/facturation',
                'title' => 'Facturation Contracts',
                'route-name' => 'withdraw_contracts'
            ], [
                'url' => '/dashboard/statistics/contact',
                'title' => 'Contact Contracts',
                'route-name' => 'contact_statistics'
            ]]
        ],
        ['icon' => 'fa fa-hdd',
            'title' => 'Action History',
            'url' => '/dashboard/action_history',
            'route-name' => 'actionhistory'
        ],
        ['icon' => 'fa fa-clock',
            'title' => 'Timeline',
            'url' => '/dashboard/timeline',
            'route-name' => 'timeline'
        ],
        ['icon' => 'fa fa-edit',
            'title' => 'PostToTimeline',
            'url' => '/dashboard/posttotimeline',
            'route-name' => 'posttotimeline'
        ],
        ['icon' => 'fa fa-edit',
            'title' => 'PostWithFiles',
            'url' => '/dashboard/postwithfiles',
            'route-name' => 'postwithfiles'
        ],
        ['icon' => 'fa fa-calendar',
            'title' => 'Calendar',
            'url' => '/dashboard/calendar',
            'route-name' => 'calendar'
        ],
        ['icon' => 'fa fa-map',
            'title' => 'Map',
            'url' => '/dashboard/map',
            'route-name' => 'map'
        ],
        ['icon' => 'fa fa-sign-out-alt',
            'title' => 'Logout',
            'url' => '/dashboard/logout',
            'route-name' => 'logout'
        ],
    ]
];
