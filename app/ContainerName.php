<?php

namespace App;

use App\Container;
use Illuminate\Database\Eloquent\Model;

class ContainerName extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom'];

    /**
     * Container.
     * Get the containers of the name.
     */
    public function containers()
    {
        return $this->hasMany(Container::class);
    }
}
