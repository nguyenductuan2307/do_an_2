<?php

Route::group(['middleware' => 'CheckLogin'],function(){
// Nhà cung cấp////////////////////////////////////////////////////////////////
Route::get('ncc', 'nhacungcapcontroller@view_all')->name('view_all');
Route::get('ncc/view_insert', 'nhacungcapcontroller@view_insert')->name('view_insert');
Route::post('ncc/process_insert_ncc', 'nhacungcapcontroller@process_insert_ncc')->name('process_insert_ncc');
Route::get('ncc/delete/{ma}', 'nhacungcapcontroller@delete')->name('delete');
// Nhà cung cấp///////////////////////////////////////////////////////////////
// Admin////////////////////////////////////////////////////////////////////
Route::get('admin','admincontroller@view_all')->name('view_all_admin');
Route::get('admin/view_insert', 'admincontroller@view_insert')->name('view_insert_admin');
Route::post('admin/process_insert_admin', 'admincontroller@process_insert_admin')->name('process_insert_admin');
Route::get('admin/delete/{ma}', 'admincontroller@delete')->name('delete_admin');
Route::get('admin/view_update/{ma}', 'admincontroller@view_update_admin')->name('view_update_admin');
Route::post('admin/process_update/{ma}', 'admincontroller@process_update_admin')->name('process_update_admin');





});

 




 
route::get('login','logincontroller@login')->name('view_login');
Route::post('process_login','logincontroller@process_login')->name('process_login');
route::get('logout','logincontroller@logout')->name('logout');


