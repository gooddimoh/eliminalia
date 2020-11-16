<?php
Auth::routes(['register' => true]);

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
});

Route::get('dashboard/', 'MainController@dashboard')->name('dashboard');
Route::get('dashboard/User Management', 'MainController@UserManagement')->name('UserManagement');
Route::get('dashboard/user/create', 'UsersController@create')->name('UserCreate');
Route::get('dashboard/user/edit', 'UsersController@edit')->name('useredit');
Route::get('dashboard/user/store', 'UsersController@store')->name('admin.users.store');

Route::get('dashboard/Map', 'MainController@Map')->name('Map');
Route::get('dashboard/File Manager', 'MainController@File Manager')->name('File Manager');
Route::get('dashboard/Timeline', 'MainController@Timeline')->name('Timeline');
Route::get('dashboard/Calendar', 'MainController@Calendar')->name('calendar');

Route::get('dashboard/contacts/registration', 'MainController@ContactRegistration')->name('ContactRegistration');
Route::get('dashboard/contacts/list', 'MainController@ContactList')->name('ContactList');
Route::get('dashboard/contacts/inquiries', 'MainController@Inquiries')->name('Inquiries');

Route::get('dashboard/Timeline/MakePost', 'MainController@MakePostToTimeline')->name('MakePostToTimeline');

Route::get('dashboard/email/inbox', 'MainController@emailInbox')->name('email-inbox');
Route::get('dashboard/email/compose', 'MainController@emailCompose')->name('email-compose');
Route::get('dashboard/email/detail', 'MainController@emailDetail')->name('email-detail');

Route::get('dashboard/chart/flot', 'MainController@chartFlot')->name('chart-flot');
Route::get('dashboard/chart/js', 'MainController@chartJs')->name('chart-js');
Route::get('dashboard/chart/d3', 'MainController@chartD3')->name('chart-d3');
Route::get('dashboard/chart/apex', 'MainController@chartApex')->name('chart-apex');
Route::get('dashboard/map/vector', 'MainController@mapVector')->name('map-vector');

Route::resource('UserResource', 'UsersController');

Route::group(['middleware' => 'web'], function () {
    // Authentication Routes...
    Route::get( 'user/login',  ['as' => 'user.login',     'uses' => 'Auth\AuthController@showLoginForm']);
    Route::post('user/login',  ['as' => 'user.doLogin',   'uses' => 'Auth\AuthController@login'        ]);

    Route::group(['middleware' => 'auth'], function() {
        // Authenticated user routes...
        Route::get( '/',     ['as'=>'home', 'uses'=> 'HomeController@index']);
        Route::get( '/home', ['as'=>'home', 'uses'=> 'HomeController@home']);
        Route::get( 'user/logout', ['as' => 'user.logout',    'uses' => 'Auth\AuthController@logout'  ]);

        // *** Added /profile/ here to prevent matching with other routes ****
        Route::get( 'user/profile/{uid?}', ['as' => 'user.profile',   'uses' => 'UserController@profile' ]);
        Route::get( '/user/add',           ['as' => 'user.add',       'uses' => 'UserController@showAddUser']);
    });
});