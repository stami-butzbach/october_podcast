<?php namespace Stadtmissionbutzbach\Podcast\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('stadtmissionbutzbach_podcast_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('backend_users')->onDelete('set null');
            $table->integer('channel_id')->unsigned()->nullable();
            $table->foreign('channel_id')->references('id')->on('stadtmissionbutzbach_podcast_channels')->onDelete('cascade');
            $table->string('title');
            $table->string('link');
            $table->text('description');
            $table->string('category');
            $table->integer('duration');
            $table->timestamp('pub_date')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stadtmissionbutzbach_podcast_items');
    }

}
