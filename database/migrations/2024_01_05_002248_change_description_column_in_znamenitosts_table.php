<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDescriptionColumnInZnamenitostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('znamenitosts', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('znamenitosts', function (Blueprint $table) {
            $table->string('description')->nullable()->change(); // Ovde vratite originalni tip podataka kolone ako je potrebno
        });
    }
}
