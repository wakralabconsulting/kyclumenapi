<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cr extends Model
{
// protected $primaryKey = 'id_kyc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $casts = [
        'crs' => 'array'
    ];

     protected $fillable = [
          'qdb_typeofcrlicense'
      ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
