<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name', 'category_alias', 'parent_id','category_rout'
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
