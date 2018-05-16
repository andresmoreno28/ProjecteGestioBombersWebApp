<?php

namespace App;

use App\Container;
use App\Material;
use Illuminate\Database\Eloquent\Model;

class ContainerMaterial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'container_material';

    public $timestamps = false;

    protected $fillable = ['quantitat_prevista','quantitat','es_del_parc','container_id', 'material_id'];

    protected function material(){
      return $this->belongsTo('App\Material','material_id','id','materials');
    }

}
