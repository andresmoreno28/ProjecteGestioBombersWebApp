<?php

namespace App;

use App\Container;
use Illuminate\Database\Eloquent\Model;

class ContainersMaterials extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['container_id', 'material_id'];

    protected function material(){
      return $this->belongsTo('App\Material','material_id','id','materials');
    }

}
