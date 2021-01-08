<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home/{locale}', function ($locale) {
//    if (!in_array($locale, ['en', 'es', 'fr'])) {
//        abort(400);
//    }
//    App::setLocale($locale);
//});

Route::get('/dashboard', 'MainController@dashboard')->name('dashboard');

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
Route::post('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware(['guest'])->name('password.request');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'web', 'role:superadmin', 'auth', 'role:manager']], function () {

});

// USER MANAGEMENT //

Route::get('dashboard/usermanagement', 'UserManagement@usermanagement')->name('user.management');
Route::get('dashboard/usermanagement/new', 'UserManagement@create')->name('usermanagement.new');
Route::get('dashboard/usermanagement/list', 'UserManagement@list')->name('usermanagement.list');
Route::get('dashboard/usermanagement/edit', 'UserManagement@edit')->name('usermanagement.edit');

Route::post('usermanagement/delete', 'UserManagement@destroy')->name('usermanagement.destroy');
Route::post('usermanagement/create', 'UserManagement@store')->name('usermanagement.create');
Route::post('usermanagement/edit', 'UserManagement@edit')->name('usermanagement.edit');
Route::post('usermanagement/update', 'UserManagement@update')->name('usermanagement.update');
Route::post('usermanagement', 'UserManagement@create')->name('usermanagement');

Route::get('dashboard/contacts/registration', 'ContactsController@registration')->name('contact registration');
Route::get('dashboard/contacts/inquiries', 'ContactsController@inquiries')->name('inquiries');
Route::get('dashboard/contacts/list', 'ContactsController@list')->name('contact list');

Route::post('dashboard/contacts/list', 'ContactsController@list')->name('contact list');
Route::post('dashboard/contacts/list', 'ContactsController@list')->name('contact list');
Route::post('dashboard/contacts/list', 'ContactsController@list')->name('contact list');

Route::get('dashboard/customer/registration', 'CustomerController@registration')->name('customer.registration');
Route::get('dashboard/customer/list_sadmin', 'CustomerController@list_sadmin')->name('customerlist.sadmin');
Route::get('dashboard/customer/list_admin', 'CustomerController@list_admin')->name('customerlist.admin');
Route::get('dashboard/customer/list_manager', 'CustomerController@list_manager')->name('customerlist.manager');
Route::get('dashboard/customer/list_partner', 'CustomerController@list_partner')->name('customerlist.partner');
Route::get('dashboard/customer/list_registration', 'CustomerController@list_registator')->name('customerlist.registrator');
Route::get('dashboard/customer/finalizate_files_pendingbilling', 'CustomerController@list_pending_billing')->name('customerlist.pending_billing');

Route::post('dashboard/customer/finalizate_files_pendingbilling', 'CustomerController@list_pending_billing')->name('customerlist.pending_billing');
Route::post('dashboard/customer/finalizate_files_pendingbilling', 'CustomerController@list_pending_billing')->name('customerlist.pending_billing');
Route::post('dashboard/customer/finalizate_files_pendingbilling', 'CustomerController@list_pending_billing')->name('customerlist.pending_billing');
Route::post('dashboard/customer/finalizate_files_pendingbilling', 'CustomerController@list_pending_billing')->name('customerlist.pending_billing');

Route::get('dashboard/partners/list', 'PartnersController@list')->name('partners.list');
Route::get('dashboard/partners/registration', 'PartnersController@registration')->name('partners.registration');

Route::get('dashboard/requests/finalizate_files', 'RequestsController@finalizate_files')->name('finalizate_files');
Route::get('dashboard/requests/withdraw_contracts', 'RequestsController@withdraw_contracts')->name('withdraw_contracts');

Route::post('dashboard/requests/withdraw_contracts', 'RequestsController@withdraw_contracts')->name('withdraw_contracts');
Route::post('dashboard/requests/withdraw_contracts', 'RequestsController@withdraw_contracts')->name('withdraw_contracts');

Route::post('user/create', 'UsersController@create')->name('user.create');
Route::post('user/edit', 'UsersController@edit')->name('user.edit');
Route::post('user/delete', 'UsersController@edit')->name('user.edit');
Route::post('user/store', 'UsersController@edit')->name('users.store');

Route::get('dashboard/user/edit', 'UsersController@Edit')->name('user.edit');
Route::get('dashboard/user/store', 'UsersController@Store')->name('user.store');

Route::get('dashboard/timeline', 'TimelineController@index')->name('timeline');
Route::get('dashboard/timeline/makepost', 'TimeLineController@timelinepost')->name('timeline.post');

Route::post('dashboard/timeline/create', 'TimelineController@create')->name('timeline.create');
Route::post('dashboard/timeline', 'TimelineController@Timeline')->name('timeline');
Route::post('dashboard/timeline', 'TimelineController@Timeline')->name('timeline');
Route::post('dashboard/timeline', 'TimelineController@Timeline')->name('timeline');

Route::post('Calls/calls', 'Calls@calls')->name('calls');
Route::post('Calls/calls', 'Calls@calls')->name('calls');

Route::post('dashboard/fileupload', 'FileUpload@fileupload')->name('fileupload');
Route::get('dashboard/fileupload', 'FileUpload@fileupload')->name('fileupload');

Route::get('dashboard/map', 'MainController@Map')->name('Map');
Route::get('dashboard/map/vector', 'ChartController@mapVector')->name('map-vector');

Route::get('dashboard/calendar', 'MainController@Calendar')->name('calendar');
Route::get('dashboard/filemanager', 'FileManager@Filemanager')->name('file.manager');

Route::get('dashboard/email/inbox', 'EmailController@inbox')->name('emailinbox');
Route::get('dashboard/email/compose', 'EmailController@compose')->name('emailcompose');
Route::get('dashboard/email/detail', 'EmailController@detail')->name('emaildetail');

Route::get('dashboard/statistics/contact', 'StatisticController@contact')->name('emailgeneral');
Route::get('dashboard/statistics/facturation', 'StatisticController@facturation')->name('emaildetail');
Route::get('dashboard/statistics/general', 'StatisticController@general')->name('emaildetail');

Route::get('dashboard/chart/flot', 'ChartController@chartFlot')->name('chart-flot');
Route::get('dashboard/chart/js', 'ChartController@chartJs')->name('chart-js');
Route::get('dashboard/chart/d3', 'ChartController@chartD3')->name('chart-d3');
Route::get('dashboard/chart/apex', 'ChartController@chartApex')->name('chart-apex');

Route::get('dashboard/contacts/registration', 'ContactsController@registration')->name('contact.registration');
Route::get('dashboard/contacts/inquiries', 'ContactsController@inquiries')->name('contact.inquiries');
Route::get('dashboard/contacts/list', 'ContactsController@list')->name('contact.list');

Route::post('contacts', 'ContactsController@store')->name('contacts');
Route::post('contacts/create', 'ContactsController@create')->name('contacts.create');
Route::post('contacts/registration', 'ContactsController@registration')->name('contacts.registration');

Route::get('dashboard/action_history', 'ActionHistory@index')->name('actionhistory');

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

// $query = Job::where('status', '=', Job::APPROVED);

// Front-End Controllers //

Route::get('/home-page', 'FrontEndController@home_page')->name('user.management');
Route::get('/who-we-are', 'FrontEndController@who_we_are')->name('user.management');
Route::get('/how-do-we-do-it', 'FrontEndController@how_do_we_do_it')->name('user.management');

Route::get('/particular', 'FrontEndController@particular')->name('user.management');
Route::get('/we_delete_your_name', 'FrontEndController@we_delete_your_name')->name('user.management');

Route::get('/mass_media', 'FrontEndController@massmedia')->name('massmedia');
Route::get('/state_gazzettes', 'FrontEndController@stategazzettes')->name('stategazzettes');
Route::get('/we_delete_your_media', 'FrontEndController@wedeleteyourmedia')->name('wedeleteyourmedia');
Route::get('/social_network_and_forums', 'FrontEndController@socialnetworkandforums')->name('socialnetworkandforums');

Route::get('/im_a_public_figure', 'FrontEndController@mapublicfigure')->name('mapublicfigure');
Route::get('/how_can_we_help_you', 'FrontEndController@howcanwehelpyou')->name('howcanwehelpyou');
Route::get('/confidentialy_and_guarantees', 'FrontEndController@confidentialyandguarantees')->name('confidentialyandguarantees');
Route::get('/crisis_cabinet', 'FrontEndController@crisiscabinet')->name('crisiscabinet');
Route::get('/contact_us', 'FrontEndController@contactus')->name('contactus');
