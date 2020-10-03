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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acadamic_year_create', 'Admin\AcadamicController@create')->name('acadamic_year.create');
Route::post('/admin/acadamic_year/store', 'Admin\AcadamicController@store')->name('admin.acadamic_year.store');
Route::get('/acadamic_year_edit/{id}', 'Admin\AcadamicController@edit')->name('acadamic_year.edit');
Route::put('/acadamic_year_update/{id}', 'Admin\AcadamicController@update')->name('acadamic_year.update');
Route::delete('/acadamic_year_delete/{id}', 'Admin\AcadamicController@destroy')->name('acadamic_year.destroy');

Route::get('/user_account_create', 'Admin\UseraccountController@create')->name('user_account.create');
Route::post('/admin/user_account/store', 'Admin\UseraccountController@store')->name('admin.user_account.store');
Route::get('/user_account_edit/{id}', 'Admin\UseraccountController@edit')->name('user_account.edit');
Route::put('/user_account_update/{id}', 'Admin\UseraccountController@update')->name('user_account.update');
Route::delete('/user_account_delete/{id}', 'Admin\UseraccountController@destroy')->name('user_account.destroy');

Route::get('/school_list', 'Admin\SchoolProfileController@index')->name('school.index');
Route::get('/school_create', 'Admin\SchoolProfileController@create')->name('school.create');
Route::post('/admin/school-list/store', 'Admin\SchoolProfileController@store')->name('admin.school_list.store');
Route::get('/school-edit/{id}', 'Admin\SchoolProfileController@edit')->name('new-school-profile.edit');
Route::put('/school-update/{id}', 'Admin\SchoolProfileController@update')->name('new-school-profile.update');
Route::delete('/school-delete/{id}', 'Admin\SchoolProfileController@destroy')->name('school_list.destroy');

Route::get('/student_list', 'Admin\StudentProfileController@index')->name('student.index');
Route::get('/student_create', 'Admin\StudentProfileController@create')->name('student.create');
Route::post('/admin/student-list/store', 'Admin\StudentProfileController@store')->name('admin.student-list.store');
Route::get('/student-edit/{id}', 'Admin\StudentProfileController@edit')->name('new_student_profile.edit');
Route::put('/student-update/{id}', 'Admin\StudentProfileController@update')->name('new_student_profile.update');
Route::delete('/student-delete/{id}', 'Admin\StudentProfileController@destroy')->name('student_list.destroy');

Route::get('/teacher_list', 'Admin\TeacherController@index')->name('teacher.index');
Route::get('/teacher_create', 'Admin\TeacherController@create')->name('teacher.create');
Route::post('teacher_list/store', 'Admin\TeacherController@store')->name('teacher_list.store');
Route::get('/edit_teacher/{id}', 'Admin\TeacherController@edit')->name('edit_teacher.edit');
Route::put('/teacher_update/{id}', 'Admin\TeacherController@update')->name('school_list.update');
Route::delete('/teacher_delete/{id}', 'Admin\TeacherController@destroy')->name('teacher_list.destroy');


Route::resource('/standard', 'Admin\StandredController');
Route::resource('/section','Admin\SectionController');

Route::get('/class','Admin\ClassController@index')->name('class.index');
Route::post('class/store', 'Admin\ClassController@store')->name('class.store');
Route::get('/edit_class/{id}', 'Admin\ClassController@edit')->name('edit_class.edit');
Route::put('/update/{id}', 'Admin\ClassController@update')->name('class.update');
Route::delete('/class_delete/{id}', 'Admin\ClassController@destroy')->name('class.destroy');

Route::get('new-student-profile', 'Admin\SiblingsController@index');
Route::post('siblings/insert', 'Admin\SiblingsController@insert')->name('siblings.insert');