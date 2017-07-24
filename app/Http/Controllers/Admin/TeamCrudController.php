<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TeamRequest as StoreRequest;
use App\Http\Requests\TeamRequest as UpdateRequest;

class TeamCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Team");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/team');
        $this->crud->setEntityNameStrings('team', 'Teams');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => 'Title',
                            ]);
        $this->crud->addColumn([
                                'name' => 'content',
                                'label' => 'Content',
                            ]);
        $this->crud->addColumn([
                                'name' => 'lang',
                                'label' => 'Language',
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // TEXT
                                'name' => 'title',
                                'label' => 'Title',
                                'type' => 'text',
                                'placeholder' => 'Your title here',
                            ]);
        $this->crud->addField([    // WYSIWYG
                                'name' => 'content',
                                'label' => 'Content',
                                'type' => 'tinymce',
                            ]);
        $this->crud->addField([    // Image
                                'name' => 'photo',
                                'label' => 'Image',
                                'type' => 'browse',
                            ]);
        $this->crud->addField([ // select_from_array
                                'name' => 'lang',
                                'label' => "Language",
                                'type' => 'select_from_array',
                                'options' => ['ru' => 'Russian', 'ua' => 'Ukrainian', 'en' => 'English'],
                                'allows_null' => false,
                                // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
                            ]);
        $this->crud->addField([    // ENUM
                                'name' => 'status',
                                'label' => 'Status',
                                'type' => 'enum',
                            ]);
        
        $this->crud->enableAjaxTable();
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
