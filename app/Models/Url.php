<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'url',
        'alias',
    ];

    public $timestamps = false;
    use HasFactory;

    static function generateAlias()
    {
        $shortned = str_random(7);
        if(self::whereAlias($shortned)->count() > 0){
            return generateAlias();
        }
        return $shortned;
    }
}
