<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
protected $primaryKey = 'id_kyc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'qdb_namear', 'qdb_name', 'qdb_customerno', 'qdb_typeofcrlicense', 'qdb_countryofincorporation', 'qdb_countryofoperations','qdb_crlicenseno','qdb_yearincorporation','qdb_crlicenseissuedate','qdb_crlicenseexpirydate','qdb_capitalinqar','qdb_legalentityidentifier','qdb_taxnumber','qdb_computercardno','qdb_computercardissuedate','qdb_computercardexpirydate','qdb_legalentitytype','qdb_natureofbusiness','qdb_industry','qdb_addresscountryname','qdb_unitno','qdb_buildingno','qdb_streetno','qdb_streetname','qdb_zoneno','qdb_areaname','qdb_cityname','qdb_pobox','qdb_email','qdb_landlineno','qdb_mobileno','qdb_numberofemployees','qdb_sourceofincome','qdb_othersourceofincome','qdb_otherlegalentitytype','qdb_type','qdb_otherindsutry','qdb_othercrlicense','qdb_legalentityidentifierdetails','qdb_formtype','qdb_kyc','qdb_formstatus'
      ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
