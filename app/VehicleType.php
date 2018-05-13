<?php

namespace App;

use App\Vehicle;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['codi', 'nom'];

    /**
     * Eloquent: Relationships.
     **************************************************************************/
    /**
     * Vehicles.
     * Get the vehicles of the type.
     */
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
