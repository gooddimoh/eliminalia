<?php

// $user->role == 'SUPERADMIN';
// $user->role == 'ADMIN SUCURSAL';
// $user->role == 'ALTA CONTRATOS';
// $user->role == 'RASTREADOR';
// $user->role == 'COMERCIAL';
// $user->role == 'PARTNER';
// $user->role == 'MANAGER';

Route::get('/', function () {
    return redirect('dashboard');
});
Route::get('/dashboard', function () {
    return redirect(' ');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'web', 'role:superadmin', 'auth', 'role:manager']], function () {
});

Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);

Route::get('index', 'MainController@index')->name('index');
Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);

Route::get('dashboard/', 'MainController@dashboard')->name('dashboard');
Route::get('dashboard/usermanagement', 'MainController@usermanagement')->name('usermanagement');

Route::post('user/create', 'UsersController@create')->name('user.create');
Route::post('user/edit', 'UsersController@edit')->name('user.edit');
Route::post('user/store', 'UsersController@edit')->name('users.store');

Route::get('dashboard/user/edit', 'UsersController@Edit')->name('user.edit');
Route::get('dashboard/user/store', 'UsersController@Store')->name('user.store');

Route::get('dashboard/Map', 'MainController@Map')->name('Map');
Route::get('dashboard/Timeline', 'TimelineController@Timeline')->name('timeline');
Route::get('dashboard/Calendar', 'MainController@Calendar')->name('calendar');

Route::get('dashboard/partners/list', 'PartnersController@list')->name('partners.list');
Route::get('dashboard/partners/registration', 'PartnersController@registration')->name('partners.registration');

Route::get('dashboard/filemanager', 'FileManager@filemanager')->name('File Manager');
Route::get('dashboard/timeline/makepost', 'TimeLineController@timelinepost')->name('timeline.post');

Route::get('dashboard/email/inbox', 'EmailController@inbox')->name('inbox');
Route::get('dashboard/email/compose', 'EmailController@compose')->name('compose');
Route::get('dashboard/email/detail', 'EmailController@detail')->name('detail');

Route::get('dashboard/tracker/index', 'EmailController@emaildetail')->name('emaildetail');

Route::get('dashboard/chart/flot', 'ChartController@chartFlot')->name('chart-flot');
Route::get('dashboard/chart/js', 'ChartController@chartJs')->name('chart-js');
Route::get('dashboard/chart/d3', 'ChartController@chartD3')->name('chart-d3');
Route::get('dashboard/chart/apex', 'ChartController@chartApex')->name('chart-apex');

Route::get('dashboard/map/vector', 'ChartController@mapVector')->name('map-vector');
Route::get('dashboard/usermanagement/list', 'UserManagement@list')->name('usermanagementlist');
Route::get('dashboard/usermanagement/new', 'UserManagement@create')->name('usermanagementnew');
Route::get('dashboard/usermanagement/edit', 'UserManagement@edit')->name('usermanagementedit');
Route::get('actionhistory', 'UserManagement@show')->name('ActionHistory');

Route::get('contact', 'ContactsController@contact')->name('contact');
Route::get('contacts', 'ContactsController@index')->name('contacts');

Route::get('dashboard/contacts/registration', 'ContactsController@registration')->name('contactregistration');
Route::get('dashboard/contacts/inquiries', 'ContactsController@inquiries')->name('inquiries');
Route::get('dashboard/contacts/list', 'ContactsController@list')->name('contactList');

Route::post('contacts', 'ContactsController@store')->name('contacts');

Route::post('contacts/create', 'ContactsController@Create')->name('contacts.create');
Route::post('contacts/edit', 'ContactsController@Create')->name('contacts.create');

Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);

Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);
Route::post('postlogin', ['uses' => 'Auth\AuthController@postlogin', 'as' => 'postlogin']);

Route::resource('UserResource', 'UsersController');
Route::resource('Roles', 'RolesController');
Route::resource('Users', 'UsersController');

Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

Route::get('additem1', 'TestController@additem')->name('additem1');
Route::get('additem2', 'TestController@additem')->name('additem2');
Route::get('additem3', 'TestController@additem')->name('additem3');
Route::get('additem4', 'TestController@additem')->name('additem4');

Route::get('edititem1', 'TestController@edititem')->name('edititem');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware(['guest'])->name('password.request');


Route::post('usermanagement/usernew', 'MainController@usermanagement.new.user')->name('usermanagement_new_user');
Route::post('usermanagement/useredit', 'MainController@usermanagement.new.edit')->name('usermanagement_new_edit');

//$query = Job::where('status', '=', Job::APPROVED);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
