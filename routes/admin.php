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

// Backpack\NewsCRUD
CRUD::resource('article', 'ArticleCrudController');
CRUD::resource('category', 'CategoryCrudController');
CRUD::resource('tag', 'TagCrudController');

CRUD::resource('about', 'AboutCrudController');
CRUD::resource('contact', 'ContactCrudController');
CRUD::resource('portfolio', 'PortfolioCrudController');
CRUD::resource('port_category', 'PortfolioCategoryCrudController');
CRUD::resource('service', 'ServiceCrudController');

CRUD::resource('project', 'ProjectCrudController');
Route::post('portfolio-dropzone', ['uses' => 'PortfolioCrudController@DropzoneUpload']);

CRUD::resource('client', 'ClientCrudController');
CRUD::resource('project', 'ProjectCrudController');
CRUD::resource('contact', 'ContactCrudController');
