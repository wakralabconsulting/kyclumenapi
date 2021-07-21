<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyrepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyrepresentatives', function (Blueprint $table) {
          $table->increments('id');
          $table->string('qdb_name');
          $table->uuid('BID');
          $table->string('qdb_designation');
          $table->string('qdb_landlineno');
          $table->string('qdb_mobileno');
          $table->string('qdb_department');
          $table->string('qdb_email');
          $table->string('qdb_kyc');
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
        Schema::dropIfExists('companyrepresentatives');
    }
}
