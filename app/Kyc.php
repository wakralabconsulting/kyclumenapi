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
          'company_name_ar_1', 'company_name_en_1', 'customer_no_1', 'license_type_1', 'country_of_incorporation_1', 'country_of_operation_1','cr_license_no_1','year_of_incorporation_1','cr_license_issue_date','cr_license_expiry_date','capital_qar','legal_entity_identifier_1','tax_number_1','computer_card_no_1','computer_card_issue_date_1','computer_card_expiry_date_1','legal_enity_type_1','nature_of_business_1','industry_1','company_country_name_1','company_unit_no_1','company_bulding_no_1','company_street_no_1','company_street_name_1','company_zone_no_1','company_area_name_1','company_cityname_1','company_pob_1','company_email_1','company_landline_no_1','company_mobile_no_1','company_no_employee_1','company_source_of_income','other_income_source_specification','legal_entity_indentity','other_company_specification','other_industry_sepecification','other_cr_license','ID','type'
      ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
