<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model {

    protected $table = 'favorites';

    public function favorites() {

        return $this->belongsToMany('App/Models/User');

    }

}