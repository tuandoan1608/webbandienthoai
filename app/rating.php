<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table='rating';
    protected $fillable=['product_id','custommer_id','comment'];
    public function getcustommer()
    {
        return $this->belongsTo('App\custommer','custommer_id','id');
    }
}
