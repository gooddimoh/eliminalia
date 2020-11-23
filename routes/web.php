<?php

// $user->role == 'SUPERADMIN';
// $user->role == 'ADMIN SUCURSAL';
// $user->role == 'ALTA CONTRATOS';
// $user->role == 'RASTREADOR';
// $user->role == 'COMERCIAL';
// $user->role == 'PARTNER';
// $user->role == 'MANAGER';

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth'], ['auth', 'role:superadmin', 'auth', 'role:manager']], function () {

    Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
    Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
    Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);

    Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);
    Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);

    //Route::group(['middleware' => ['web', 'auth', 'admin']], function () { });

    Route::get('/', function () {
        return redirect('dashboard');
    });

    Route::get('/index', 'MainController@index')->name('index');

    Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
    Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
    Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
    Route::get('dashboard/', 'MainController@dashboard')->name('dashboard');
    Route::get('dashboard/usermanagement', 'UserManagement@show')->name('usermanagement');
    Route::get('dashboard/user/create', 'UsersController@create')->name('UserCreate');
    Route::get('dashboard/user/edit', 'MainController@edit')->name('UserEdit');
    Route::get('dashboard/user/store', 'MainController@store')->name('UserStore');
    Route::get('dashboard/Map', 'MainController@Map')->name('Map');
    Route::get('dashboard/File Manager', 'MainController@File Manager')->name('File Manager');
    Route::get('dashboard/Timeline', 'MainController@Timeline')->name('Timeline');
    Route::get('dashboard/Calendar', 'MainController@Calendar')->name('calendar');
    Route::get('dashboard/contacts/list', 'MainController@ContactList')->name('ContactList');
    Route::get('dashboard/contacts/inquiries', 'MainController@Inquiries')->name('Inquiries');
    Route::get('dashboard/partners/Partners list', 'MainController@partners list')->name('partners list');
    Route::get('dashboard/partners/Registration', 'MainController@registration')->name('ContactRegistration');
    Route::get('dashboard/Timeline/MakePost', 'TimeLineController@MakePostToTimeline')->name('MakePostToTimeline');
    Route::get('dashboard/email/inbox', 'EmailController@emailInbox')->name('emailinbox');
    Route::get('dashboard/email/compose', 'EmailController@emailCompose')->name('emailcompose');
    Route::get('dashboard/email/detail', 'EmailController@emailDetail')->name('emaildetail');
    Route::get('dashboard/chart/flot', 'ChartController@chartFlot')->name('chart-flot');
    Route::get('dashboard/chart/js', 'ChartController@chartJs')->name('chart-js');
    Route::get('dashboard/chart/d3', 'ChartController@chartD3')->name('chart-d3');
    Route::get('dashboard/chart/apex', 'ChartController@chartApex')->name('chart-apex');
    Route::get('dashboard/map/vector', 'ChartController@mapVector')->name('map-vector');
    Route::get('dashboard/usermanagement/new', 'UserManagement@create')->name('usermanagementnew');
    Route::get('dashboard/usermanagement/list', 'UserManagement@show')->name('usermanagement');
    Route::get('ActionHistory', 'UserManagement@show')->name('ActionHistory');

    Route::get('contact', 'MainController@contact')->name('contact');
    Route::get('contacts', 'MainController@index')->name('contacts');
    Route::post('contacts', 'MainController@store')->name('contacts');
    Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);
    Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);
    Route::post('usermanagement/new/user', 'MainController@usermanagement.new.user')->name('usermanagement_new_user');
    Route::post('postlogin', ['uses' => 'Auth\AuthController@postlogin', 'as' => 'postlogin']);

    Route::resource('UserResource', 'UsersController');
    Route::resource('Roles', 'RolesController');
    Route::resource('Users', 'UsersController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
});


// $query = Job::where('status', '=', Job::APPROVED);

