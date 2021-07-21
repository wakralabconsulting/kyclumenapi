<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Le extends Model
{
// protected $primaryKey = 'id_kyc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $casts = [
        'les' => 'array'
    ];

     protected $fillable = [
          'qdb_legalentitytype','qdb_formstatus'
      ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
