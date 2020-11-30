<?php
// $user->role == 'SUPERADMIN';
// $user->role == 'ADMIN SUCURSAL';
// $user->role == 'ALTA CONTRATOS';
// $user->role == 'RASTREADOR';
// $user->role == 'COMERCIAL';
// $user->role == 'PARTNER';
// $user->role == 'MANAGER';

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'MainController@dashboard')->name('dashboard');
Route::get('/', function () {
    return redirect('dashboard');
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

// USER MANAGEMENT //
Route::get('dashboard/usermanagement', 'UserManagement@usermanagement')->name('user.management');
Route::get('dashboard/usermanagement/list', 'UserManagement@list')->name('usermanagement.list');
Route::get('dashboard/usermanagement/new', 'UserManagement@create')->name('usermanagement.new');
Route::get('dashboard/usermanagement/edit', 'UserManagement@edit')->name('usermanagement.edit');

Route::get('dashboard/contacts/registration', 'ContactsController@registration')->name('contact registration');
Route::get('dashboard/contacts/inquiries', 'ContactsController@inquiries')->name('inquiries');
Route::get('dashboard/contacts/list', 'ContactsController@list')->name('contact list');

Route::get('dashboard/customer/customerregistration', 'ContactsController@list')->name('customer.list(SADMIN)');
Route::get('dashboard/customer/customers list (SADMIN)', 'ContactsController@list')->name('customer.list(SADMIN)');
Route::get('dashboard/customer/customers list (ADMIN)', 'ContactsController@list')->name('customer.list(SADMIN)');
Route::get('dashboard/customer/customers list (MANAGER)', 'ContactsController@list')->name('customer.list(MANAGER)');
Route::get('dashboard/customer/customers list (PARTNER)', 'ContactsController@list')->name('customer.list(PARTNER)');
Route::get('dashboard/customer/customers list (REGISTRATOR)', 'ContactsController@list')->name('customer.list(REGISTRATOR)');
Route::get('dashboard/customer/finalizte files (PENDING BILLING) ', 'ContactsController@list')->name('customer.list(PENDING BILLING)');

Route::get('dashboard/partners/list', 'PartnersController@list')->name('partners.list');
Route::get('dashboard/partners/registration', 'PartnersController@registration')->name('partners.registration');

Route::get('requests', 'ContactsController@list')->name('finalizate files');
Route::get('requests', 'ContactsController@withdraw.contracts')->name('withdraw.contracts');

Route::post('user/create', 'UsersController@create')->name('user.create');
Route::post('user/edit', 'UsersController@edit')->name('user.edit');
Route::post('user/store', 'UsersController@edit')->name('users.store');

Route::get('dashboard/user/edit', 'UsersController@Edit')->name('user.edit');
Route::get('dashboard/user/store', 'UsersController@Store')->name('user.store');

Route::get('dashboard/map', 'MainController@Map')->name('Map');
Route::get('dashboard/Timeline', 'TimelineController@Timeline')->name('timeline');
Route::get('dashboard/Calendar', 'MainController@Calendar')->name('calendar');

Route::get('dashboard/filemanager', 'FileManager@filemanager')->name('file.manager');
Route::get('dashboard/timeline/makepost', 'TimeLineController@timelinepost')->name('timeline.post');

<<<<<<< HEAD
Route::get('dashboard/email/inbox', 'EmailController@inbox')->name('emailinbox');
Route::get('dashboard/email/compose', 'EmailController@compose')->name('emailcompose');
Route::get('dashboard/email/detail', 'EmailController@detail')->name('emaildetail');

Route::get('dashboard/statistics/general', 'EmailController@general')->name('emailgeneral');
Route::get('dashboard/statistics/general', 'EmailController@detail')->name('emaildetail');
=======
Route::get('dashboard/email/inbox', 'EmailController@inbox')->name('inbox');
Route::get('dashboard/email/compose', 'EmailController@compose')->name('compose');
Route::get('dashboard/email/detail', 'EmailController@detail')->name('detail');

Route::get('dashboard/tracker/index', 'EmailController@emaildetail')->name('emaildetail');
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013

Route::get('dashboard/chart/flot', 'ChartController@chartFlot')->name('chart-flot');
Route::get('dashboard/chart/js', 'ChartController@chartJs')->name('chart-js');
Route::get('dashboard/chart/d3', 'ChartController@chartD3')->name('chart-d3');
Route::get('dashboard/chart/apex', 'ChartController@chartApex')->name('chart-apex');

<<<<<<< HEAD
Route::get('dashboard/map/vector', 'ChartController@mapVector')->name('map-vector');
=======
Route::get('dashboard/usermanagement/list', 'UserManagement@list')->name('usermanagementlist');
Route::get('dashboard/usermanagement/new', 'UserManagement@create')->name('usermanagementnew');
Route::get('dashboard/usermanagement/edit', 'UserManagement@edit')->name('usermanagementedit');

Route::get('dashboard/map/vector', 'ChartController@mapVector')->name('map-vector');

Route::get('actionhistory', 'UserManagement@show')->name('ActionHistory');
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013

Route::get('dashboard/contacts/registration', 'ContactsController@registration')->name('contact.registration');
Route::get('dashboard/contacts/inquiries', 'ContactsController@inquiries')->name('contact.inquiries');
Route::get('dashboard/contacts/list', 'ContactsController@list')->name('contact.list');

Route::post('contacts', 'ContactsController@store')->name('contacts');
<<<<<<< HEAD
Route::post('contacts/create', 'ContactsController@create')->name('contacts.create');
Route::post('contacts/registration', 'ContactsController@registration')->name('contacts.registration');
=======

Route::post('contacts/create', 'ContactsController@Create')->name('contacts.create');
Route::post('contacts/edit', 'ContactsController@Create')->name('contacts.create');
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013

Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);

Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);
Route::post('postlogin', ['uses' => 'Auth\AuthController@postlogin', 'as' => 'postlogin']);

Route::get('actionhistory', 'UserManagement@show')->name('actionhistory');

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

Route::get('/forgot-password', function () { return view('auth.forgot-password'); })->middleware(['guest'])->name('password.request');

Route::post('usermanagement/user/new', 'MainController@usermanagementnew')->name('usermanagementnew');
Route::post('usermanagement/user/list', 'MainController@usermanagementedit')->name('usermanagementlist');

<<<<<<< HEAD
// $query = Job::where('status', '=', Job::APPROVED);
=======
//$query = Job::where('status', '=', Job::APPROVED);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013
