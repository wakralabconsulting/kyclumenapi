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
      $table->increments('id');
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
