<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kycs', function (Blueprint $table) {
    $table->increments('id_kyc');
    $table->string('company_name_ar_1');
    $table->string('company_name_en_1');
    $table->string('customer_no_1');
    $table->string('license_type_1');
    $table->string('country_of_incorporation_1');
    $table->string('country_of_operation_1');
    $table->string('cr_license_no_1');
    $table->string('year_of_incorporation_1');
    $table->string('cr_license_issue_date');
    $table->string('cr_license_expiry_date');
    $table->string('capital_qar');
    $table->string('legal_entity_identifier_1');
    $table->string('tax_number_1');
    $table->string('computer_card_no_1');
    $table->string('computer_card_issue_date_1');
    $table->string('computer_card_expiry_date_1');
    $table->string('legal_enity_type_1');
    $table->string('nature_of_business_1');
    $table->string('industry_1');
    $table->string('company_country_name_1');
   $table->string('company_unit_no_1');
   $table->string('company_bulding_no_1');
   $table->string('company_street_no_1');
   $table->string('company_street_name_1');
   $table->string('company_zone_no_1');
   $table->string('company_area_name_1');
   $table->string('company_cityname_1');
   $table->string('company_pob_1');
   $table->string('company_email_1');
   $table->string('company_landline_no_1');
   $table->string('company_mobile_no_1');
   $table->string('company_no_employee_1');
   $table->string('company_source_of_income');
   $table->string('other_income_source_specification');
   $table->string('legal_entity_indentity');
   $table->string('other_company_specification');
   $table->string('other_industry_sepecification');
   $table->string('other_cr_license');
   $table->string('ID');
   $table->string('type');
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kycs');
    }
}
