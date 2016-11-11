<?php


use Yajra\Datatables\Datatables;



/* Admin */
Route::group(['prefix' =>'admin/'], function (){


	
 #datatable ajax
 Route::get('roles/data',['as'=>'admin.roles.data', 'uses'=>'TeamRolesController@anyData']);

 Route::get('/blood_types/data',['as'=>'admin.blood_types.data', 
 'uses'=>'BloodTypesController@anyData']);


 Route::get('/teams/data',['as'=>'admin.teams.data', 'uses'=>'TeamMembersController@anyData']);
 
  Route::get('/doners/data',['as'=>'admin.Doners.data', 'uses'=>'DonersController@anyData']);



Route::get('login', function () {return view('admin.login');});

Route::get('dashboard', function () {return view('admin.dashboard');});



#role
Route::resource('/roles', 'TeamRolesController');
Route::get('/roles/create', 'TeamRolesController@create');
Route::get('/roles/{id}/delete', 'TeamRolesController@delete');
Route::post('/roles/create', 'TeamRolesController@store');
Route::get('/roles/{id}/edit', 'TeamRolesController@edit');
Route::post('/roles/update', 'TeamRolesController@update');



#team
Route::resource('/teams', 'TeamMembersController');
Route::get('/teams/create', 'TeamMembersController@create');
Route::get('/teams/{id}/delete', 'TeamMembersController@delete');
Route::post('/teams/create', 'TeamMembersController@store');
Route::get('/teams/{id}/edit', 'TeamMembersController@edit');
Route::post('/teams/update', 'TeamMembersController@update');

#blood
Route::resource('/blood_types', 'BloodTypesController');
Route::get('/blood_types/create', 'BloodTypesController@create');
Route::post('/blood_types/create', 'BloodTypesController@store');
Route::get('/blood_types/{id}/delete','BloodTypesController@delete');
Route::post('/blood_types/update', 'BloodTypesController@update');
Route::get('/blood_types/{id}/edit', 'BloodTypesController@edit');


/* User */
Route::resource('/doners', 'DonersController');
Route::get('/doners/create', 'DonersController@create');
Route::post('/doners/create', 'DonersController@store');

});


