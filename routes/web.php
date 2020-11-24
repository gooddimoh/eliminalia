<?php
// $user->role == 'SUPERADMIN';
// $user->role == 'ADMIN SUCURSAL';
// $user->role == 'ALTA CONTRATOS';
// $user->role == 'RASTREADOR';
// $user->role == 'COMERCIAL';
// $user->role == 'PARTNER';
// $user->role == 'MANAGER';

Route::get('/dashboard', function () { return redirect(' '); });
Route::get('/', function () {  return redirect('dashboard'); });

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'web', 'role:superadmin', 'auth', 'role:manager']], function () {

});


Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);

Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);

Route::get('index', 'MainController@index')->name('index');

Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);

Route::get('dashboard/', 'MainController@dashboard')->name('dashboard');
Route::get('dashboard/usermanagement', 'MainController@usermanagement')->name('usermanagement');

Route::post('dashboard/user/create', 'UsersController@Create')->name('UserCreate');
Route::get('dashboard/user/edit', 'UsersController@Edit')->name('UserEdit');
Route::get('dashboard/user/store', 'UsersController@Store')->name('UserStore');

Route::get('dashboard/Map', 'MainController@Map')->name('Map');
Route::get('dashboard/Timeline', 'TimelineController@Timeline')->name('Timeline');
Route::get('dashboard/Calendar', 'MainController@Calendar')->name('calendar');
Route::get('dashboard/Contacts/list', 'MainController@ContactList')->name('ContactList');
Route::get('dashboard/Contacts/Inquiries', 'MainController@Inquiries')->name('Inquiries');
Route::get('dashboard/Partners/Partners list', 'MainController@partners list')->name('Partners List');
Route::get('dashboard/Partners/Registration', 'MainController@registration')->name('ContactRegistration');
Route::get('dashboard/File Manager', 'FileManager@filemanager')->name('File Manager');
Route::get('dashboard/Timeline/MakePost', 'TimeLineController@MakePostToTimeline')->name('MakePostToTimeline');

Route::get('dashboard/email/inbox', 'EmailController@emailinbox')->name('emailinbox');
Route::get('dashboard/email/compose', 'EmailController@emailcompose')->name('emailcompose');
Route::get('dashboard/email/detail', 'EmailController@emaildetail')->name('emaildetail');

Route::get('dashboard/chart/flot', 'ChartController@chartFlot')->name('chart-flot');
Route::get('dashboard/chart/js', 'ChartController@chartJs')->name('chart-js');
Route::get('dashboard/chart/d3', 'ChartController@chartD3')->name('chart-d3');
Route::get('dashboard/chart/apex', 'ChartController@chartApex')->name('chart-apex');

Route::get('dashboard/map/vector', 'ChartController@mapVector')->name('map-vector');
Route::get('dashboard/usermanagement/list', 'UserManagement@list')->name('usermanagement');
Route::get('dashboard/usermanagement/new', 'UserManagement@create')->name('usermanagementnew');
Route::get('ActionHistory', 'UserManagement@show')->name('ActionHistory');

Route::get('contact', 'MainController@contact')->name('contact');
Route::get('contacts', 'MainController@index')->name('contacts');

Route::post('contacts', 'MainController@store')->name('contacts');
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

// Post data //

Route::post('usermanagement/usernew', 'MainController@usermanagement.new.user')->name('usermanagement_new_user');
Route::post('usermanagement/useredit', 'MainController@usermanagement.new.edit')->name('usermanagement_new_edit');

// $query = Job::where('status', '=', Job::APPROVED);

