<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Schema::create('static_blocks_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('static_block_id');
            $table->text('content')->nullable();
            $table->string('locale')->index();

            $table->unique(['static_block_id','locale']);
            $table->foreign('static_block_id')->references('id')->on('static_blocks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('static_blocks');
        Schema::dropIfExists('static_blocks_translations');
        Schema::enableForeignKeyConstraints();
    }
}
