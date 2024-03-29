<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory ;

    // /**
    //  * Return the sluggable configuration array for this model.
    //  *
    //  * @return array
    //  */
    // public function sluggable()
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name'
    //         ]
    //     ];
    // }

    public function flavours()
    {
        return $this->hasMany(ProductFlavour::class);
    }

    public function ingredients()
    {
        return $this->hasMany(ProductIngredient::class);
    }

    public function delete()
    {
        foreach ($this->flavours() as $flavour) {
            @unlink(storage_path('app/public/products/'.$flavour->image));
        }
        foreach ($this->ingredients() as $ingredient) {
            @unlink(storage_path('app/public/products/'.$ingredient->image));
        }
        @unlink(storage_path('app/public/products/' . $this->image));
        return parent::delete(); // TODO: Change the autogenerated stub
    }
}
