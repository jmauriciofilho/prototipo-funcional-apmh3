<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content',
        'module_id'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
