<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
//  App\Models\Post::create([
//     'title' => 'Judul Ke Tiga',
//     'category_id' => 3,
//     'slug' => 'judul-ke-tiga',
//     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, earum!',
//     'body' => '<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima iusto, error, qui asperiores expedita odio eum nesciunt saepe, corporis omnis maiores accusantium sequi vitae quos ullam repellat voluptatum repudiandae commodi praesentium? </p><p> Magni temporibus hic laborum voluptatibus non voluptatem aspernatur molestiae laboriosam asperiores corporis odio doloribus sed ducimus ex, facilis at perspiciatis eveniet eaque repudiandae sunt. Laboriosam cumque praesentium nesciunt modi voluptate quibusdam </p><p> exercitationem saepe quae necessitatibus eum vero, sit quidem quas repellendus, omnis alias assumenda iste atque repudiandae unde dolorem maiores sequi illum! Aut hic, ducimus quo perspiciatis sit rem provident nulla, natus asperiores ex laborum dolor quisquam, ipsa laudantium? </p>'
//     ])