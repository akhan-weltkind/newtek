<?php
namespace App\Modules\Admin\Http\Controllers;

use App\Facades\Uploader;
use App\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;


trait Files
{

    public function deleteUploadfiles($id, $field = false)
    {

        $entity = $this->getModel()->findOrFail($id);

        $config = $this->getConfigFiles();

        if (!array_key_exists($field, $config)) {
            return redirect()->back();
        }

        $config = $config[$field];


        if (isset($entity->{$config['field']})) {
            if (Uploader::delete($entity->{$config['field']}, $config)) {
                $entity->{$config['field']} = '';
                $entity->save();
            }
        }
    }

    protected function after($entity)
    {

        if (Route::getAction() == 'store' || Route::getAction() == 'update') {
            $this->upload($entity);
        }

        if (Route::getAction() == 'edit') {
            view()->share('config', $this->getConfigFiles());
        }

    }

    protected function uploadFiles($entity)
    {
        $config = $this->getConfigFiles();
        foreach ($config as $field => $cnf) {

            if (Request::hasFile($field)) {

                $validator = Validator::make(Request::instance()->all(), [$field => $cnf['validator']]);
                if ($validator->fails()) {
                    $this->throwValidationException(Request::getFacadeRoot(), $validator);
                }

                $file = Request::file($field);

                if (Uploader::upload($file, $cnf,false)) {

                    $entity->{$cnf['field']} = Uploader::getName();
                    $entity->save();
                }
            }
        }
    }

    protected function getConfigFiles()
    {
        return module_config('uploads-file');

    }


}