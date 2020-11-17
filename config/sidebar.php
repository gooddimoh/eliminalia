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
                'url' => '/dashboard/general/email/general/inbox',
                'title' => 'inbox',
                'route-name' => 'general inbox'
            ], [
                'url' => '/dashboard/email/compose',
                'title' => 'compose',
                'route-name' => 'withdraw compose'
            ], [
                'url' => '/dashboard/email/detail',
                'title' => 'detail',
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
                    'title' => 'New',
                    'route-name' => 'UserManagement/New'
                ],
                [
                    'url' => '/dashboard/usermanagement/list',
                    'title' => 'List',
                    'route-name' => 'UserManagement/List'
                ]
            ]
        ],
        [
            'icon' => 'fa fa-key',
            'title' => 'Customers',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/Customers/Registration',
                'title' => 'Customer Registration',
                'route-name' => 'Customer Registration'
            ], [
                'url' => '/Customer/list(ADMIN)',
                'title' => 'Customerlist(ADMIN)',
                'route-name' => 'Customerlist(ADMIN)'
            ], [
                'url' => '/Customer/List(MANAGER)',
                'title' => 'Customer List(MANAGER)',
                'route-name' => 'Customer List(MANAGER)'
            ], [
                'url' => 'Customer/List(PARTNER)',
                'title' => 'Customer List(PARTNER)',
                'route-name' => 'Customer List(PARTNER)'
            ], [
                'url' => '/Customer/List(REGISTRATOR)',
                'title' => 'Customer List(REGISTRATOR)',
                'route-name' => 'Customer List(REGISTRATOR)'
            ], [
                'url' => 'Customer/List(SADMIN',
                'title' => 'Customer List(SADMIN)',
                'route-name' => 'Customer List'
            ], [
                'url' => '/Pending Billing',
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
                'url' => '/Partners/Registration',
                'title' => 'Partner Registration',
                'route-name' => 'Partner Registration'
            ], [
                'url' => '/Partners/List',
                'title' => 'Partners List',
                'route-name' => 'Partners List'
            ]]
        ],
        ['icon' => 'fa fa-key',
            'title' => 'Requests',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/Finalizate/Files',
                'title' => 'Finalizate Files',
                'route-name' => 'Finalizate Files'
            ], [
                'url' => '/Withdraw/Contracts',
                'title' => 'Withdraw/Contracts',
                'route-name' => 'Withdraw Contracts'
            ]]
        ],
        ['icon' => 'fa fa-key',
            'title' => 'Statistics',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/General/Statistics',
                'title' => 'General Statistics',
                'route-name' => 'General Statistics'
            ], [
                'url' => '/Facturation/Statistics',
                'title' => 'Withdraw Contracts',
                'route-name' => 'Withdraw Contracts'
            ], [
                'url' => '/Contact/Statistics',
                'title' => 'Withdraw Contracts',
                'route-name' => 'Withdraw Contracts'
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
            'title' => 'MakePostToTimeline',
            'url' => '/dashboard/MakePostToTimeline',
            'route-name' => 'MakePostToTimeline'
        ],
        ['icon' => 'fa fa-hdd',
            'title' => 'File Manager',
            'url' => '/dashboard/File Manager',
            'route-name' => 'File Manager'
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
