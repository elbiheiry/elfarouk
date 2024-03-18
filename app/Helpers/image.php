<?php

use Intervention\Image\Facades\Image;

if (!function_exists('image_store')) {
    function image_store($image, $path)
    {

        $image->store($path ,'public');
        $name = $image->hashName();

        return $name;
    }
}
if (!function_exists('image_edit')) {
    function image_edit($image, $path, $width = null, $height = null)
    {
        return Image::make(storage_path('app/public/' . $path . '/' . $image))
            ->resize($width, $height)
            ->save(storage_path('app/public/' . $path . '/' . $image));
    }
}
?>