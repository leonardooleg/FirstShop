<?php
namespace App\Traits;

trait UploadTrait
{
    public function uploadImage($uploadedFile)
    {
        $image_name = str_random(20);
        $ext = $uploadedFile->getClientOriginalExtension();
        $image_fullname = $image_name . '.' . $ext;
        $upload_path = '/uploads/post/';
        $image_url = $upload_path . $image_fullname;
         $uploadedFile->move(public_path($upload_path), $image_fullname);
        return $image_url;
    }
}
