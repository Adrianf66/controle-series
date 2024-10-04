<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

class Series extends Model
{
    use HasFactory;

    protected $fillable = ['name_serie'];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'serie_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('order', function (\Illuminate\Database\Eloquent\Builder $queryBuilder){
            $queryBuilder->orderBy('name_serie');
        });
    }
}
