<?php

namespace App;

use App\ContainerName;
use App\Material;
use App\User;
use App\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'es_dun_vehicle',
        'container_parent_id',
        'user_id',
        'vehicle_id',
        'container_name_id'
    ];

    /**
     * Eloquent: Relationships.
     **************************************************************************/
    /**
     * Parent Container.
     * Get the parent container of the container.
     *
     * The method name "parent()" is translated to 'parent_id', for this reason
     * we passed 'container_parent_id' in the second parameter.
     *
     * If the FK had been called 'parent_id', the second parameter would not have
     * been necessary.
     */
    public function parent()
    {
        return $this->belongsTo(Container::class, 'container_parent_id');
    }

    /**
     * Containers.
     * Get the containers of the container (parent).
     */
    public function containers()
    {
        return $this->hasMany(Container::class, 'container_parent_id');
    }

    /**
     * User.
     * Get the user of the container.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Vehicle.
     * Get the vehicle of the container.
     */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    /**
     * Name.
     * Get the name of the container.
     */
    public function container_name()
    {
        return $this->belongsTo(ContainerName::class);
    }
    // Una altra manera d'obtenir-lo.
    protected function nom(){
      return $this->belongsTo('App\ContainerName','container_name_id','id','containers');
    }

    /**
     * Materials.
     * The materials that belong to the container.
     */
    public function materials()
    {
        return $this->belongsToMany(Material::class)
            ->withPivot('id','quantitat_prevista', 'quantitat', 'es_del_parc');
    }
}
