<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->renameColumn('name', 'owner_name');
            $table->string('company_name');
            $table->string('short_description');
            $table->string('keyword');
            $table->string('phone_hours');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('fanpage_link');
            $table->string('google_plus_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->renameColumn('owner_name', 'name');
            $table->dropColumn([
                'company_name',
                'short_description',
                'keyword',
                'phone_hours',
                'instagram_link',
                'twitter_link',
                'fanpage_link',
                'google_plus_link'
            ]);
        });
    }
}
