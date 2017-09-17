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

//School Setup
Route::get('/school/section-setup', 'SectionController@sectionSetup');
Route::post('school/save-section', 'SectionController@sectionSave');
Route::get('school/section-view', 'SectionController@sectionView');
Route::get('/section/delete/{id}', 'SectionController@sectionDelete');
Route::get('/section/edit/{id}', 'SectionController@sectionEdit');
Route::post('/school/save-edited-section', 'SectionController@sectionEditedSave');

//School Setup End

Route::get('/', 'LoginController@login');
Route::get('/login', 'LoginController@login');
Route::post('/check-login', 'LoginController@loginCheck');
Route::get('/admin-home', 'HomeController@adminHome');
Route::get('/logout', 'HomeController@logout');


//employee Manage
Route::get('/employee/add-employee', 'EmployeeController@addEmployee');
Route::post('/employee/save-employee', 'EmployeeController@saveEmployee');
Route::get('/employee/view-employee', 'EmployeeController@viewEmployee');

Route::get('/employee/edit/{id}', 'EmployeeController@editEmployee');
Route::get('/employee/delete/{id}', 'EmployeeController@deleteEmployee');
Route::post('/employee/save-edited-employee', 'EmployeeController@saveEditedEmployee');
Route::get('/employee/view/{id}', 'EmployeeController@employeeProfile');

//Department satrt
Route::get('/department/department-setup', 'DepartmentController@setUpDepartment');
Route::post('/department/save-department', 'DepartmentController@saveDepartment');
Route::get('/department/view-department', 'DepartmentController@viewDepartment');

//Department End


//Designation satrt
Route::get('/designation/add-designation', 'DesignationController@designationHome');
Route::post('/designation/save-designation', 'DesignationController@saveDesignation');
Route::get('/designation/view-designation', 'DesignationController@viewDesignation');

//Department End

//Holiday satrt
Route::get('/holiday/add-holiday', 'HolidayController@holidayHome');
Route::post('/holiday/save-holiday', 'HolidayController@saveHoliday');
Route::get('/holiday/view-holiday', 'HolidayController@viewHoliday');

//Holiday End

//Working Day Setup
Route::get('/workingday/workingday_setup', 'WorkingsetupController@setUpWorkingday');
Route::post('/workingday/save', 'WorkingsetupController@saveWorkingDay');
Route::get('/workingday/view_workingday_setup', 'WorkingsetupController@viewWorkingday');
Route::get('/workingday/edit/{working_day_id}', 'WorkingsetupController@editWorkingDay');
Route::get('/workingday/delete/{working_day_id}', 'WorkingsetupController@deleteWorkingDay');





Route::get('/admin_pages/dd', 'WorkingsetupController@test');

