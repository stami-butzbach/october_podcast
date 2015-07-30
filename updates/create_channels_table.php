<?php namespace Stadtmissionbutzbach\Podcast\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateChannelsTable extends Migration
{

    public function up()
    {
        Schema::create('stadtmissionbutzbach_podcast_channels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('link');
            $table->text('description');
            $table->string('language');
            $table->string('category');
            $table->string('author');
            $table->boolean('explicit')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stadtmissionbutzbach_podcast_channels');
    }

}
