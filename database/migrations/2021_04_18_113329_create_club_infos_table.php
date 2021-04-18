<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateClubInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_infos', function (Blueprint $table) {
            $table->id();
            $table->string('club_name');
            $table->char('club_type',3);
            $table->string('club_website')->nullable();
            $table->string('club_purpose')->nullable();
            $table->string('club_icon')->nullable(); 
            $table->string('club_introduce')->nullable();
            $table->string('club_cover')->nullable();
            $table->string('club_place')->nullable();
            $table->string('club_time')->nullable();
            $table->string('source_of_funding')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('club_infos');
    }
}
