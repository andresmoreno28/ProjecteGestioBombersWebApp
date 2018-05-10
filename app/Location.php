<?php

namespace App;

use App\Region;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['codi', 'nom', 'region_id'];

    /**
     * Eloquent: Relationships.
     **************************************************************************/
    /**
     * Region.
     * Get the region of the location.
     */
    public function region()
    {
        return $this->belongsTo(Region::class)->withDefault();
    }

   /**
     * Get the user that owns the location.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
