 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('synopsys');
            $table->integer('duration');
            $table->string('youtube')->nulltable();
            $table->string('cover');
            $table->timestamp('released_at')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('user_id')->nulltable();
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
        Schema::dropIfExists('users');
    }
};
