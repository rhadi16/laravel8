<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Postingan Pertama",
            "slug" => "postingan-pertama",
            "author" => "Rhadi Indrawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam assumenda obcaecati at deserunt quae mollitia totam, odit repudiandae repellat id cum magni? Impedit nesciunt omnis quidem sequi commodi adipisci ipsum aliquam suscipit similique, totam corrupti dignissimos accusantium laudantium ad magni necessitatibus, alias doloribus! Harum doloribus error doloremque quas omnis molestiae aperiam rem sequi ipsum consequuntur. Quia nulla suscipit quae voluptatem consequuntur distinctio minima, facere, quis aliquid ex debitis quisquam. Reprehenderit odit deleniti accusamus architecto hic aperiam facere aspernatur magnam sequi!"
        ],
        [
            "title" => "Postingan Kedua",
            "slug" => "postingan-kedua",
            "author" => "Rahmat Arfan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam sit laboriosam tempora consequatur hic architecto a cum possimus eaque! Nobis tempora necessitatibus animi pariatur culpa enim doloribus voluptate, eius magnam blanditiis? Blanditiis itaque perspiciatis debitis quibusdam temporibus vitae odio atque. Recusandae ipsam officiis dolorum ad eius consectetur ratione sint aspernatur nesciunt et doloribus odio cupiditate, maxime dolorem incidunt soluta laudantium, nihil numquam natus, obcaecati molestias beatae similique assumenda. Nihil, qui eligendi aliquid harum earum dolor incidunt dolorum autem suscipit perferendis ipsum quos, iusto aliquam nemo repellat laudantium ratione, repudiandae quas quod praesentium? Magni soluta est fuga hic illo, corrupti cum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
