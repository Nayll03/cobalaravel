<?php

namespace App\Models;

class post
{
    private static $blog_posts =[
        [
            "title" => "Judul tulisan pertama",
            "slug" => "judul-tulisan-pertama",
            "autor" => "Nailli amaliyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam consequatur veniam exercitationem nobis cumque itaque neque provident, perferendis excepturi iure pariatur velit expedita temporibus harum, laborum doloremque consectetur. Voluptatum ducimus earum consequuntur cum exercitationem, aperiam suscipit facilis debitis necessitatibus, possimus aut sunt, a voluptas quae. Iure, ex cum? Unde et iste velit accusantium eligendi, a assumenda necessitatibus. Repellendus maxime sed eum harum praesentium saepe, neque, dignissimos porro, similique rem a vel. Facilis aperiam, alias officia repellat hic labore corrupti tenetur?"
        ],
        [
            "title" => "Judul tulisan kedua",
            "slug" => "judul-tulisan-kedua",
            "autor" => "firly auristella",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique culpa dolorum minus reiciendis rem esse quis sapiente eveniet. Iure numquam quam natus doloribus quis nulla aut dignissimos libero, rerum omnis unde, illo aperiam quas cumque esse et adipisci ducimus labore a ipsa vero obcaecati inventore. Quia ad corporis delectus! Explicabo possimus ea doloremque temporibus earum et natus ipsa quam voluptatum culpa exercitationem tempora recusandae veritatis consequuntur tenetur hic neque eveniet eos consectetur voluptas, omnis alias iure aperiam! Aliquam ipsa natus repellendus quidem beatae nobis vitae dignissimos sunt minima facere, amet rem necessitatibus animi illo, perspiciatis odio eveniet ipsam iure soluta?"
        ]
    ];

    public static function all()
    {
       return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
       return $posts->firstwhere('slug', $slug);
    }
}
