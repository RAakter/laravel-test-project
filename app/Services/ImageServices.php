<?php
namespace App\services;
use App\Utility;

class ImageServices
{
    protected $request;

    public function __construct()
    {
        $this->request = app('request');
    }

    public function imageStore($name)
    {
        $path =[];
        if ($this->request->hasFile('logo')){
            $path['logo'] = Utility::file_upload($this->request,'logo',$name.'_Photo');
        }
        else {
            $path['logo'] = null;
        }

        return $path;
    }

    public function imageUpdate($company, $name)
    {
        $path =[];
        if($this->request->hasFile('logo')){
            if(file_exists($company->logo)){
                unlink($company->logo);
            }
            $path['logo'] = Utility::file_upload($this->request,'logo', $name.'_Photo');
        }else{
            $path['logo']=[];
        }

        return  $path;
    }
}
