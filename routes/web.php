<?php

Route::group(['middleware' => 'CheckLogin'],function(){
// Nhà cung cấp////////////////////////////////////////////////////////////////
Route::get('ncc', 'nhacungcapcontroller@view_all')->name('view_all');
Route::get('ncc/view_insert', 'nhacungcapcontroller@view_insert')->name('view_insert');
Route::post('ncc/process_insert_ncc', 'nhacungcapcontroller@process_insert_ncc')->name('process_insert_ncc');
Route::get('ncc/delete/{ma}', 'nhacungcapcontroller@delete')->name('delete');
// Nhà cung cấp///////////////////////////////////////////////////////////////
Route::get('admin','admincontroller@view_all');
});

 




 
route::get('login','logincontroller@login')->name('view_login');
Route::post('process_login','logincontroller@process_login')->name('process_login');
route::get('logout','logincontroller@logout')->name('logout');


