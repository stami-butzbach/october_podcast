<?php namespace StamiButzbach\Podcast\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('stamibutzbach_podcast_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('backend_users')->onDelete('set null');
            $table->integer('podcast_id')->unsigned()->nullable();
            $table->foreign('podcast_id')->references('id')->on('stamibutzbach_podcast_podcasts')->onDelete('cascade');
            $table->string('title');
            $table->string('subtitle');
            $table->string('slug')->index();
            $table->text('summary');
            $table->integer('duration');
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stamibutzbach_podcast_items');
    }

}
