<?php

Route::get('/login',"UserController","login");
Route::post('/auth',"UserController","auth");
Route::get('/register',"UserController","new");
Route::post('/register',"UserController","register");

Route::get('/deconnection',"UserController","logout");


Route::get('/home',"PublicationController","showAllPublications",['guard'=>'Auth']);
Route::get('/publication/new',"PublicationController","new",['guard'=>'Auth']);
Route::get('/publication/edit/{id}',"PublicationController","edit",['guard'=>'Auth']);
Route::post('/publication/register',"PublicationController","register",['guard'=>'Auth']);
Route::post('/publication/update/{id}',"PublicationController","update",['guard'=>'Auth']);

Route::post('/publication/{id}/reaction',"PublicationController","reaction",['guard'=>'Auth']);
Route::get('/publication/{id}/commentaires/get',"PublicationController","getCommentaires",['guard'=>'Auth']);


Route::get('/users/list',"UserController","showAllUsers",['guard'=>'Auth']);
Route::get('/users/new',"UserController","new",['guard'=>'Auth']);
Route::get('/users/edit/{id}',"UserController","edit",['guard'=>'Auth']);
Route::get('/users/delete/{id}',"UserController","delete",['guard'=>'Auth']);
Route::post('/users/register',"UserController","register",['guard'=>'Auth']);
Route::post('/users/update/{id}',"UserController","update",['guard'=>'Auth']);

Route::redirect('/','/home');

Route::end();
?>
