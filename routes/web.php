<?php


use Yajra\Datatables\Datatables;



 
    # Doners.
	Route::get('/Doners/data',['as'=>'Doners.data', 
		                       'uses'=>'Guests\DonersController@anyData']); 


	# Guest => GuestsController [start]

	# HomePage
	Route::resource('/Home', 'Guests\GuestsController');
	Route::post('/Home', 'Guests\GuestsController@join_Newsletters');
	# Contact us
	Route::get('/ContactUs', function () {return view('user.contact_us');});
	Route::post('/sendmail', 'Guests\GuestsController@basic_email');
	# About us & Terms of Services
	Route::get('/Terms', function () {return view('user.terms_of_services');});
	Route::get('/AboutUs', function () {return view('user.about_us');});

	# Guest => GuestsController [end]


	# Doner => DonersController [start]

    # Index
	Route::resource('/Doners', 'Guests\DonersController');
    # New Doner
	Route::get('/Doner', 'Guests\DonersController@create');
	Route::post('/Doner', 'Guests\DonersController@store');
    # Doners' Informatoin List 
	Route::resource('/Doner/list', 'Guests\DonersController@show_doner_list');

	# Doner => DonersController [end]

	# Blood Needy => BloodNeedyController [start]

	# New Blood Needy
	Route::get('/NeedBlood', 'Guests\BloodNeedyController@create');
	Route::post('/NeedBlood', 'Guests\BloodNeedyController@store');

	# Blood Needy => BloodNeedyController [end]




# Admin 
Route::group(['prefix' =>'admin/'], function (){

	
# Admin & Users=> DataTables [start]
    
    # Team Roles.
	Route::get('roles/data',['as'=>'admin.roles.data', 
	 	                      'uses'=>'Admin\TeamRolesController@anyData']);
    # Blood Types.
	Route::get('/blood_types/data',['as'=>'admin.blood_types.data',
		                            'uses'=>'Admin\BloodTypesController@anyData']);
	# Team Members.
	Route::get('/teams/data',['as'=>'admin.teams.data', 
		                      'uses'=>'Admin\TeamMembersController@anyData']);
    
    # Cases.
	Route::get('/Cases/data',['as'=>'admin.Cases.data', 
			                      'uses'=>'Guests\BloodNeedyController@anyData']);
	 # Doners.
	Route::get('/Doners/data',['as'=>'admin.Doners.data', 
		                       'uses'=>'Guests\DonersController@anyData']); 

	# Admin => Login Page.
	//Route::get('/login', function () {return view('auth.login');});
		Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

	# Admin => Dashboard.
		Route::get('/dashboard', function () {
			return view('admin.dashboard');})->middleware('auth');


	# Admin => Cases.	
		Route::resource('/Cases', 'Guests\BloodNeedyController');
	# Admin => Doners.	
	    Route::resource('/Doners', 'Guests\DonersController');
	#change information
	    Route::post('/ChangeInformation', 'Admin\UserController@ChangeInfo');
	 


# Admin => DataTables [end]

# Admin => TeamRoleController [start]

	# Index
	Route::resource('/roles', 'Admin\TeamRolesController');
    # Create New Role.
	Route::get('/roles/create', 'Admin\TeamRolesController@create');
	Route::post('/roles/create', 'Admin\TeamRolesController@store');
	# Edit Exists Role.
	Route::get('/roles/{id}/edit', 'Admin\TeamRolesController@edit');
	Route::post('/roles/update', 'Admin\TeamRolesController@update');
    # Delete Exists Role.
	Route::get('/roles/{id}/delete', 'Admin\TeamRolesController@delete');
	
# Admin => TeamRolesController [end]


# Admin => TeamMembersController [start]

	# Index
	Route::resource('/teams', 'Admin\TeamMembersController');
	# Create New Team Member.
	Route::get('/teams/create', 'Admin\TeamMembersController@create');
	Route::post('/teams/create', 'Admin\TeamMembersController@store');
	# Edit Exists Team Member.
	Route::get('/teams/{id}/edit', 'Admin\TeamMembersController@edit');
	Route::post('/teams/update', 'Admin\TeamMembersController@update');
	# Edit Exists Team Member.
	Route::get('/teams/{id}/delete', 'Admin\TeamMembersController@delete');

# Admin => TeamMembersController [end]



# Admin => BloodTypesController [start]

	# Index
	Route::resource('/blood_types', 'Admin\BloodTypesController');
	# Create New Blood Type.
	Route::get('/blood_types/create', 'Admin\BloodTypesController@create');
	Route::post('/blood_types/create', 'Admin\BloodTypesController@store');
	# Edit Exists Blood Type.
	Route::get('/blood_types/{id}/edit', 'Admin\BloodTypesController@edit');
	Route::post('/blood_types/update', 'Admin\BloodTypesController@update');
	# Delete Exists Blood Type.
	Route::get('/blood_types/{id}/delete','Admin\BloodTypesController@delete');

# Admin => BloodTypesController [end]

# Admin => SiteSettingsController [start]

	# CMS & Site Settings
	Route::get('/contact_settings', 'Admin\SiteSettingsController@ContactsIndex');
	Route::post('/contact_settings', 'Admin\SiteSettingsController@ContactsStore');
	# Contacts 
	Route::get('/cms_settings', 'Admin\SiteSettingsController@CMS_Index');
	Route::post('/cms_settings', 'Admin\SiteSettingsController@CMS_Store');

# Admin => SiteSettingsController [end]


  }); 



















Auth::routes();

Route::get('/home', 'HomeController@index');
