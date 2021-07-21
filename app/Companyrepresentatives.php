<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Companyrepresentatives extends Model
{
// protected $primaryKey = 'id_kyc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'qdb_name', 'qdb_designation', 'qdb_landlineno', 'qdb_mobileno', 'qdb_department', 'qdb_email','BID','qdb_kyc','qdb_formstatus'
      ];
      public static function boot()
          {
              parent::boot();
              self::creating(function ($model) {
                  $model->BID = Str::uuid()->toString();
              });
          }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
