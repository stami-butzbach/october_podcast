<?php namespace Stamibutzbach\Podcast\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePodcastsTable extends Migration
{

    public function up()
    {
        Schema::create('stamibutzbach_podcast_podcasts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stamibutzbach_podcast_podcasts');
    }

}
