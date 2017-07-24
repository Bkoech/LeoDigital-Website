<?php 

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\PortfolioRequest as StoreRequest;
use App\Http\Requests\PortfolioRequest as UpdateRequest;
use App\Http\Requests\DropzoneRequest as DropzoneRequest;

class PortfolioCrudController extends CrudController {

	public function __construct() {

        parent::__construct();

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Portfolio");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/portfolio');
        $this->crud->setEntityNameStrings('портфолио', 'портфолио');

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
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-9',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                                'value' => date('Y-m-d'),
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-3',
                                ],
                            ], 'create');
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-3',
                                ],
                            ], 'update');
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'attributes' => ['readonly' => 'readonly'],
                            ], 'update');
        $this->crud->addField([
                                'name' => 'description',
                                'label' => 'Описание',
                                'type' => 'textarea',
                                'attributes' => ['rows' => 3],
                            ]);        
        // $this->crud->addField([
        //                         'name' => 'content',
        //                         'label' => 'Текст',
        //                         'type' => 'tinymce'
        //                     ]);
        $this->crud->addField([
                                'name' => 'options',
                                'label' => 'Информация',
                                'type' => 'table',
                                'entity_singular' => 'option',
                                'columns' => [
                                    'name' => 'Название',
                                    'desc' => 'Описание'
                                ],
                                'max' => 8,
                                'min' => 2
                            ]);
        $this->crud->addField([
                                'label' => "Главное изображение",
                                'name' => "image",
                                'type' => 'image',
                                'upload' => true,
                                'crop' => true,
                                'aspect_ratio' => 1.332,
                            ]);
        $this->crud->addField([
                                'label' => "Другие изображения (слайдер)",
                                'name' => "photos",
                                'type' => 'dropzone',
                                'prefix' => 'uploads',
                                'upload-url' => '/' . config('backpack.base.route_prefix', 'admin') . '/portfolio-dropzone', 
                            ]);
        $this->crud->addField([
                                'label' => 'Категория',
                                'type' => 'select2_multiple',
                                'name' => 'portfoliocategory',
                                'entity' => 'portfoliocategory',
                                'attribute' => 'name',
                                'model' => "App\Models\PortfolioCategory",
                                'pivot' => true,
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-9',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'status',
                                'label' => 'Статус',
                                'type' => 'enum',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-3',
                                ],
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

    public function DropzoneUpload(DropzoneRequest $request)
    {
        $disk = "uploads";
        $folder = null !== Portfolio::first() ? md5(Portfolio::latest()->first()->id + 1) : md5(1);
        $destination_path = "PORTFOLIO/".$folder;
        $file = $request->file('file');
        try
        {
            $img = \Image::make($file);
            $width = 1024;
            $height = 768;
            // we need to resize image, otherwise it will be cropped 
            if ($img->width() > $width) { 
                $img->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            if ($img->height() > $height) {
                $img->resize(null, $height, function ($constraint) {
                    $constraint->aspectRatio();
                }); 
            }

            $filename = md5($file->getClientOriginalName().time()).'.png';
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $img->stream());
            return response()->json(['success' => true, 'filename' => '/'.$disk.'/'.$destination_path . '/' . $filename]);
        }
        catch (\Exception $e)
        {
            if (empty ($image)) {
                return response('Not a valid image type', 404);
            } else {
                return response('Unknown error', 404);
            }
        }
    }

}
