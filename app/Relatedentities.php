<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatedentities extends Model
{
// protected $primaryKey = 'id_kyc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'qdb_arerelatedentities', 'qdb_serialno', 'qdb_country', 'qdb_name', 'qdb_crlicenseno', 'qdb_typeofbusiness','qdb_ownership','qdb_banknameofmainaccount','qdb_kyc','qdb_formstatus'
      ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
