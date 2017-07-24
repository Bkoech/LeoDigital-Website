<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProjectRequest as StoreRequest;
use App\Http\Requests\ProjectRequest as UpdateRequest;

class ProjectCrudController extends CrudController {

	public function __construct() {

        parent::__construct();

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Project");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/project');
        $this->crud->setEntityNameStrings('кейс', 'кейсы');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('title', 1);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => 'Название',
                            ]);
        $this->crud->addColumn([
                                'name' => 'status',
                                'label' => 'Статус',
                            ]);
        $this->crud->orderBy('rgt');

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'title',
                                'label' => 'Название',
                                'type' => 'text',
                            ]);
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'attributes' => ['readonly' => 'readonly'],
                            ], 'update');
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                                'value' => date('Y-m-d'),
                            ], 'create');
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                            ], 'update');
        $this->crud->addField([
                                'name' => 'description',
                                'label' => 'Описание',
                                'type' => 'textarea'
                            ]);
        $this->crud->addField([
                                'label' => "Кейс в виде картинки (если есть)",
                                'name' => "keys_photo",
                                'type' => 'upload',
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Текст',
                                'type' => 'ckeditor'
                            ]);
        $this->crud->addField([
                                'label' => "Картинка (главное изображение)",
                                'name' => "image",
                                'type' => 'image',
                                'upload' => true,
                                'crop' => true,
                                'aspect_ratio' => 1.496,
                            ]);
        $this->crud->addField([
                                'label' => "Баннер",
                                'name' => "banner",
                                'type' => 'image',
                                'upload' => true,
                                'crop' => true,
                                'aspect_ratio' => 1.787,
                            ]);
        $this->crud->addField([
                                'label' => "PDF",
                                'name' => "pdf",
                                'type' => 'upload',
                            ]);
        $this->crud->addField([
                                'name' => 'status',
                                'label' => 'Статус',
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
