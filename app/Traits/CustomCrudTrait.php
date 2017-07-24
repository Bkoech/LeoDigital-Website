<?php

namespace App\Traits;

use Backpack\CRUD\CrudTrait;
use Intervention\Image\ImageManagerStatic as Image;

trait CustomCrudTrait
{
    use CrudTrait;

    public function uploadImageToDisk($value, $attribute_name, $disk, $destination_path, $image_width = NULL, $image_height = NULL)
    {
        $request = \Request::instance();
        // if a new file is uploaded, delete the file from the disk
        if ($request->hasFile($attribute_name) &&
            $this->{$attribute_name} &&
            $this->{$attribute_name} != null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        // if the file input is empty, delete the file from the disk
        if (is_null($value) && $this->{$attribute_name} != null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        // if a new file is uploaded, store it on disk and its filename in the database
        if ($request->hasFile($attribute_name) && $request->file($attribute_name)->isValid()) {
            // 1. Generate a new file name
            $file = $request->file($attribute_name);
            if (!is_null($image_width) || !is_null($image_height)) {

                $new_file_name = md5($file->getClientOriginalName().time()).'.'.'png';
                $dir = $disk.'/'. $destination_path;
                 if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
                $file_path = $dir .'/'. $new_file_name;

                // 2. Resize and save photo
                Image::make($file)->resize($image_width, $image_height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($file_path, 90);
                // 3. Move the new file to the correct path
                // $file_path = $file->storeAs($destination_path, $new_file_name, $disk);
                // dd($file_path, $disk)
                // 4. Save the complete path to the database
                $this->attributes[$attribute_name] = '/'.$file_path;
            } else {
                $new_file_name = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();

                // 2. Move the new file to the correct path
                $file_path = $file->storeAs($destination_path, $new_file_name, $disk);

                // 3. Save the complete path to the database
                $this->attributes[$attribute_name] = '/'.$disk.'/'.$file_path;
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Methods for storing uploaded files (used in CRUD).
    |--------------------------------------------------------------------------
    */

    /**
     * Handle file upload and DB storage for a file:
     * - on CREATE
     *     - stores the file at the destination path
     *     - generates a name
     *     - stores the full path in the DB;
     * - on UPDATE
     *     - if the value is null, deletes the file and sets null in the DB
     *     - if the value is different, stores the different file and updates DB value.
     *
     * @param  [type] $value            Value for that column sent from the input.
     * @param  [type] $attribute_name   Model attribute name (and column in the db).
     * @param  [type] $disk             Filesystem disk used to store files.
     * @param  [type] $destination_path Path in disk where to store the files.
     */
    public function uploadPdfToDisk($value, $attribute_name, $disk, $destination_path)
    {
        $request = \Request::instance();

        // if a new file is uploaded, delete the file from the disk
        if ($request->hasFile($attribute_name) &&
            $this->{$attribute_name} &&
            $this->{$attribute_name} != null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        // if the file input is empty, delete the file from the disk
        if (is_null($value) && $this->{$attribute_name} != null) {
            \Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        // if a new file is uploaded, store it on disk and its filename in the database
        if ($request->hasFile($attribute_name) && $request->file($attribute_name)->isValid()) {
            // 1. Generate a new file name
            $file = $request->file($attribute_name);
            $new_file_name = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();

            // 2. Move the new file to the correct path
            $file_path = $file->storeAs($destination_path, $new_file_name, $disk);

            // 3. Save the complete path to the database
            $this->attributes[$attribute_name] = '/'.$disk.'/'.$file_path;
        }
    }

}
