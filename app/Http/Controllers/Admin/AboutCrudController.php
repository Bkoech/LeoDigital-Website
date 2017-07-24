<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\AboutRequest as StoreRequest;
use App\Http\Requests\AboutRequest as UpdateRequest;

class AboutCrudController extends CrudController {

	public function __construct() {

        parent::__construct();

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\About");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/about');
        $this->crud->setEntityNameStrings('о нас', 'о нас');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

		// ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => 'Название',
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'title',
                                'label' => 'Название',
                                'type' => 'text'
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Текст',
                                'type' => 'ckeditor'
                            ]);
        // $this->crud->addField([
        //                         'label' => "Картинка",
        //                         'name' => "photo",
        //                         'type' => 'browse',
        //                     ]);

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
