<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//............................................................admin..................................................................................................
Route::get('/admin_home', function () {
    return view('Admin/admin_home');
});
Route::get('/admin_gmail', function () {
    return view('Admin/admin_gmail');
});
Route::get('/add_project', function () {
    return view('Admin/add_project');
});
Route::get('/update_project', function () {
    return view('Admin/update_project');
});
Route::get('/view_project', function () {
    return view('Admin/view_project');
});
Route::get('/admin_inbox', function () {
    return view('Admin/admin_inbox');
});
Route::get('/admin_sent', function () {
    return view('Admin/admin_sent');
});
Route::get('/add_employee', function () {
    return view('Admin/add_employee');
});
Route::get('/update_employee', function () {
    return view('Admin/update_employee');
});
Route::get('/view_employee', function () {
    return view('Admin/view_employee');
});

Route::get('/new_client', function () {
    return view('Admin/admin_newclient');
});
Route::get('/admin', function () {
    return view('layouts/admin');
});
Route::get('/admin_draft', function () {
    return view('Admin/admin_draft');
});

Route::post('/update_me',['uses'=>'employee_manager_controler@update_data']);
Route::get('/view_employee','employee_manager_controler@get_emp_data');
Route::get('/admin_draft','mail_controller@admin_draft');
Route::post('/forward_to_manager','mail_controller@forward_to_manager');
Route::post('/forward_to_employee','mail_controller@forward_to_employee');
//...........................................................employee.............................................................................................................
Route::get('/employee_home', function () {
    return view('Employee/employee_home');
});
Route::get('/employee_inbox', function () {
    return view('Employee/employee_inbox');
});
Route::get('/employee_sent', function () {
    return view('Employee/employee_sent');
});
Route::get('/employee_draft', function () {
    return view('Employee/employee_draft');
});


Route::post('/add',['uses'=>'employee_manager_controler@store_data']);
Route::get('view_one_employee/{id}','employee_manager_controler@view_one_employee');
Route::get('enter_employee_update/{id}','employee_manager_controler@view_update_employee');
Route::post('/update_employee',['uses'=>'employee_manager_controler@update_data']);
Route::get('/delete_employee/{id}','employee_manager_controler@delete_employee');
Route::get('/employee_inbox','mail_controller@employee_inbox');
Route::get('/employee_sent','mail_controller@employee_sent');
Route::get('/employee_draft','mail_controller@employee_draft');
Route::get('/employee_project','project_controller@employee_project');
Route::get('/admin_forwad_mail/{Mid}','mail_controller@admin_forwad_mail');
Route::get('/manager_forwad_mail/{Mid}','mail_controller@manager_forwad_mail');
Route::get('/view_feedback','feedback_controller@chartjs');

//.............................................................manager...............................................................................................................
Route::get('/manager_home', function () {
    return view('Manager/manager_home');
});
Route::get('/manager_inbox', function () {
    return view('Manager/manager_inbox');
});
Route::get('/manager_sent', function () {
    return view('Manager/manager_sent');
});
Route::get('/manager_project', function () {
    return view('Manager/manager_project');
});
Route::get('/manager_draft', function () {
    return view('Manager/manager_draft');
});
Route::get('/manager_add_employee', function () {
    return view('Manager/manager_add_employee');
});
Route::get('/manager_project','project_controller@manager_project_view');
Route::post('/employee',['uses'=>'project_controller@manager_employee']);
Route::get('/manager_sent','mail_controller@manager_sent');
Route::get('/manager_project_inbox','mail_controller@manager_project_inbox');
Route::get('/manager_draft','mail_controller@manager_draft');
Route::get('/manager_add_employee','employee_manager_controler@manager_add_employee');

//...............................................................client................................................................................................................
Route::get('/client_home', function () {
    return view('Client/client_home');
});
Route::get('/client_inbox', function () {
    return view('Client/client_inbox');
});
Route::get('/client_sent', function () {
    return view('Client/client_sent');
});
Route::get('/client_feedback', function () {
    return view('Client/client_feedback');
});
Route::get('/client_draft', function () {
    return view('Client/client_draft');
});
Route::get('/client_project', function () {
    return view('Client/client_project');
});
Route::get('/client_view_project', function () {
    return view('Client/client_view_project');
});
Route::get('/client_contact', function () {
    return view('Client/client_contact');
});
Route::get('/client_home','project_controller@client_read_project');
Route::get('/client_inbox','mail_controller@get_data_client');
Route::get('/client_sent','mail_controller@get_sent_data_client');
Route::post('enter_feedback',['uses'=>'feedback_controller@store_feedback']);
Route::get('/client_feedback','project_controller@client_project_feedback');
Route::get('/client_draft','mail_controller@client_draft');
Route::get('/client_project','project_controller@client_project');
Route::get('/client_view_project/{Pid}','project_controller@client_view_project');

//...............................................................mail..................................................................................................................
Route::post('mail_register',['uses'=>'mail_controller@store_data']);
Route::get('/admin_inbox','mail_controller@get_data');
Route::get('/admin_sent','mail_controller@get_sent_data');
Route::get('/delete_mail/{Mid}','mail_controller@delete_mail');
Route::get('/view_mail/{Mid}','mail_controller@view_mail');
Route::get('/select_project/{Pid}','mail_controller@store_data');
Route::get('/new_client','mail_controller@new_client_mail');
Route::get('/manager_inbox','mail_controller@manager_inbox');
Route::get('/one_mail_save/{Mid}','mail_controller@one_mail_save');
Route::get('/one_mail_sent/{Mid}','mail_controller@one_mail_sent');
Route::get('/resent/{Mid}','mail_controller@resent');

Route::get('/download/{attachment}', 'mail_controller@getDownload');

//.............................................................project...............................................................................................................
Route::get('/view_one_project/{Pid}',function () {
    return view('Admin/view_one_project');
});

Route::post('store_project',['uses'=>'project_controller@store_project']);
Route::get('/view_project','project_controller@read_project');
Route::get('/delete_project/{Pid}','project_controller@delete_project');
Route::post('/view_project/{Pid}','project_controller@view_project');
Route::get('enter_project_update/{Pid}','project_controller@view_update_project');
Route::get('update_project/{Pid}','project_controller@view_update_project');
Route::post('/update_project',['uses'=>'project_controller@update_project']);
Route::get('view_one_project/{Pid}','project_controller@view_one_project');

//..............................................................other.................................................................................................................
Route::get('/dash', function () {
    return view('dash');
});
Route::get('/dash','mail_controller@dash_data');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


Route::get("/dbcheck",function(){
   $res = DB::select("SELECT * FROM `users`");
   print_r(json_decode(json_encode($res)));
});

Route::get("/optimize-app",function(){
  Artisan::call('view:clear');
  Artisan::call('route:clear');
  Artisan::call('config:cache');
  Artisan::call('optimize');
  echo "Success";
});
