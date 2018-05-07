<?php

namespace App;

use App\User;
use App\ContainerName;
use App\Material;
use App\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    /**
     * Eloquent: Relationships.
     **************************************************************************/
    /**
     * User.
     * Get the user of the container.
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /**
     * Vehicle.
     * Get the vehicle of the container.
     */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class)->withDefault();
    }

    /**
     * Name.
     * Get the name associated with the container.
     */
    public function name()
    {
        return $this->hasOne(ContainerName::class);
    }

    /**
     * Materials.
     * Get the materials of the container.
     */
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
