<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('users','UserController');
Route::group(['middleware' => ['auth']], function() {

	Route::get('dashboard', function ()
	{
		return view('backend.dashboard');
	});


	Route::group(['prefix'=>'flight'], function()
	{
		Route::get('/', 'FlightController@index');
		Route::get('/dt', 'FlightController@datatable');
		Route::get('/create', 'FlightController@create');
		Route::get('/delete/{id}', 'FlightController@destroy');
		Route::get('/edit/{id}', 'FlightController@edit');
		Route::post('/store', 'FlightController@store');
		Route::post('/update/{id}', 'FlightController@update');
	});
	Route::group(['prefix'=>'schedule'], function()
	{
		Route::get('/', 'ScheduleController@index');
		Route::get('/create', 'ScheduleController@create');
		Route::get('/delete/{id}', 'ScheduleController@destroy');
		Route::get('/edit/{id}', 'ScheduleController@edit');
		Route::post('/store', 'ScheduleController@store');
		Route::post('/update/{id}', 'ScheduleController@update');
	});
	Route::group(['prefix'=>'scheduler'], function()
	{
		Route::get('/', 'SchedulerController@index');
		Route::post('/loader', 'SchedulerController@loader');
		Route::get('/create', 'SchedulerController@create');
		Route::get('/edit/{id}', 'SchedulerController@edit');
		Route::get('/show/{id}', 'SchedulerController@show');
		Route::post('/store', 'SchedulerController@store');
		Route::post('/update/{id}', 'SchedulerController@update');

	});


	//Route::get('create',['uses'=>'HomeController@create','middleware' => ['permission:edit-user']]);
	//, 'middleware' => 'permission:user-create'
	Route::group(['prefix'=>'admin'], function()
	{
		Route::get('/', 'UserController@index');
		Route::get('/dt', 'UserController@datatable');
		Route::get('/create', 'UserController@create');
		Route::get('/edit/{id}', 'UserController@edit');
		Route::post('/store', 'UserController@store');
		Route::get('show/{id}', 'UserController@show');
		Route::post('/update/{id}', 'UserController@update');
		Route::get('/delete/{id}', 'UserController@destroy');
	});

	Route::group(['prefix'=>'agent'], function()
	{
		Route::get('/', 'AgentController@index');
		Route::get('/dt', 'AgentController@datatable');
		Route::get('/create', 'AgentController@create');
		Route::get('show/{id}', 'AgentController@show');
		Route::get('/edit/{id}', 'AgentController@edit');
		Route::post('/store', 'AgentController@store');
		Route::post('/update/{id}', 'AgentController@update');
		Route::get('/delete/{id}', 'AgentController@destroy');

		//agent account

		Route::get('ac/', 'AgentController@ac_index');
		Route::get('ac/create/{id}', 'AgentController@ac_create');
		Route::get('ac/edit/{id}', 'AgentController@ac_edit');
		Route::post('ac/store', 'AgentController@ac_store');
		Route::post('ac/update/{id}', 'AgentController@ac_update');
	});

	Route::group(['prefix'=>'role'], function()
	{
		Route::get('/', 'RoleController@index');
		Route::get('/create', 'RoleController@create');
		Route::get('show/{id}', 'RoleController@show');
		Route::get('/edit/{id}', 'RoleController@edit');
		Route::post('/store', 'RoleController@store');
		Route::post('/update/{id}', 'RoleController@update');
		Route::get('/delete/{id}', 'RoleController@destroy');
	});

	Route::group(['prefix'=>'cabin'], function()
	{
		Route::get('/create',['uses'=>'CabinController@create','as'=>'cabin.create']);
		Route::post('/',['uses'=>'CabinController@store','as'=>'cabin.store']);
		Route::get('/',['uses'=>'CabinController@index','as'=>'cabin.index']);
		Route::delete('/{id}',['uses'=>'CabinController@destroy','as'=>'cabin.destroy']);
		Route::get('/{id}/edit',['uses'=>'CabinController@edit','as'=>'cabin.edit']);
		Route::put('/{id}',['uses'=>'CabinController@update','as'=>'cabin.update']);
	});

	Route::group(['prefix'=>'city'], function()
	{
		Route::get('/create',['uses'=>'CityController@create','as'=>'city.create']);
		Route::post('/',['uses'=>'CityController@store','as'=>'city.store']);
		Route::get('/',['uses'=>'CityController@index','as'=>'city.index']);
		Route::delete('/{id}',['uses'=>'CityController@destroy','as'=>'city.destroy']);
		Route::get('/{id}/edit',['uses'=>'CityController@edit','as'=>'city.edit']);
		Route::put('/{id}',['uses'=>'CityController@update','as'=>'city.update']);
	});

	

	Route::get('/tax/create',['uses'=>'TaxController@create','as'=>'tax.create']);
	Route::post('/tax',['uses'=>'TaxController@store','as'=>'tax.store']);
	Route::get('/tax',['uses'=>'TaxController@index','as'=>'tax.index']);
	Route::delete('/tax/{id}',['uses'=>'TaxController@destroy','as'=>'tax.destroy']);
	Route::get('/tax/{id}/edit',['uses'=>'TaxController@edit','as'=>'tax.edit']);
	Route::put('/tax/{id}',['uses'=>'TaxController@update','as'=>'tax.update']);
	//Route::get('/tax/{id}',['uses'=>'TaxController@show','as'=>'tax.show']);

	Route::get('/seat/create',['uses'=>'SeatController@create','as'=>'seat.create']);
	Route::post('/seat',['uses'=>'SeatController@store','as'=>'seat.store']);
	Route::get('/seat',['uses'=>'SeatController@index','as'=>'seat.index']);
	Route::delete('/seat/{id}',['uses'=>'SeatController@destroy','as'=>'seat.destroy']);
	Route::get('/seat/{id}/edit',['uses'=>'SeatController@edit','as'=>'seat.edit']);
	Route::put('/seat/{id}',['uses'=>'SeatController@update','as'=>'seat.update']);
	//Route::get('/seat/{id}',['uses'=>'SeatController@show','as'=>'seat.show']);

	Route::get('/meal/create',['uses'=>'MealController@create','as'=>'meal.create']);
	Route::post('/meal',['uses'=>'MealController@store','as'=>'meal.store']);
	Route::get('/meal',['uses'=>'MealController@index','as'=>'meal.index']);
	Route::delete('/meal/{id}',['uses'=>'MealController@destroy','as'=>'meal.destroy']);
	Route::get('/meal/{id}/edit',['uses'=>'MealController@edit','as'=>'meal.edit']);
	Route::put('/meal/{id}',['uses'=>'MealController@update','as'=>'meal.update']);
	//Route::get('/seat/{id}',['uses'=>'SeatController@show','as'=>'seat.show']);

	Route::get('fare',array('as'=>'fare.index','uses'=>'FareController@index'));
	Route::post('/fare/create',array('as'=>'fare.create','uses'=>'FareController@store'));
	Route::post('/fare/entry',array('as'=>'fare.check','uses'=>'FareController@check'));
	Route::post('/fare/entry/{id}',array('as'=>'fare.update','uses'=>'FareController@update'));


	//Route::resource('/city', 'CityController');
	Route::resource('/rbd', 'RbdController');
	Route::get('/agent/dashboard', function () {
	    return view('frontend.index');
	});
	Route::post('/agent/search', 'AgentController@search');

});
