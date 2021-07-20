<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
// protected $primaryKey = 'id_kyc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'name', 'country', 'country_id'
      ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
