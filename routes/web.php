<?php


use Yajra\Datatables\Datatables;


Auth::routes();
 


# Admin 
Route::group(['prefix' =>'admin/'], function (){



Route::get('/dashboard', function () {return view('admin.dashboard');});


Route::get('/login', function () {return view('admin.login');});
	
 #datatables
 Route::get('roles/data',['as'=>'admin.roles.data', 'uses'=>'TeamRolesController@anyData']);

 Route::get('/blood_types/data',['as'=>'admin.blood_types.data', 
                                 'uses'=>'BloodTypesController@anyData']);

 Route::get('/teams/data',['as'=>'admin.teams.data', 'uses'=>'TeamMembersController@anyData']);






# role
Route::resource('/roles', 'TeamRolesController');
Route::get('/roles/create', 'TeamRolesController@create');
Route::get('/roles/{id}/delete', 'TeamRolesController@delete');
Route::post('/roles/create', 'TeamRolesController@store');
Route::get('/roles/{id}/edit', 'TeamRolesController@edit');
Route::post('/roles/update', 'TeamRolesController@update');



# team
Route::resource('/teams', 'TeamMembersController');
Route::get('/teams/create', 'TeamMembersController@create');
Route::get('/teams/{id}/delete', 'TeamMembersController@delete');
Route::post('/teams/create', 'TeamMembersController@store');
Route::get('/teams/{id}/edit', 'TeamMembersController@edit');
Route::post('/teams/update', 'TeamMembersController@update');

# blood
Route::resource('/blood_types', 'BloodTypesController');
Route::get('/blood_types/create', 'BloodTypesController@create');
Route::post('/blood_types/create', 'BloodTypesController@store');
Route::get('/blood_types/{id}/delete','BloodTypesController@delete');
Route::post('/blood_types/update', 'BloodTypesController@update');
Route::get('/blood_types/{id}/edit', 'BloodTypesController@edit');



Route::get('/Doner', 'DonersController@create');
Route::post('/Doner', 'DonersController@store');


Route::resource('/home', 'L3D_UserController');

Route::get('/NeedBlood', function () {return view('user.blood_needy');});

Route::get('/Terms', function () {return view('user.terms_of_services');});

# contact us
Route::get('/ContactUs', function () {return view('user.contact_us');});
Route::post('/sendmail', 'L3D_UserController@basic_email');




# site seting
Route::get('/contact_settings', 'SiteSettingsController@ContactsIndex');
Route::post('/contact_settings', 'SiteSettingsController@ContactsStore');

Route::get('/cms_settings', 'SiteSettingsController@CMS_Index');
Route::post('/cms_settings', 'SiteSettingsController@CMS_Store');

});


