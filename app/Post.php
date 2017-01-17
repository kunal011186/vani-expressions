<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public static function saveNewPost($data)
    {
        $post = new Post;
        $post->postdate = $data['postdate'];
        $post->content = $data['content'];
        $post->title = $data['title'];
        $post->excerpt = $data['excerpt'];
        $post->slug = $data['slug'];
        $post->published = false;
        $post->save();
    }

    public function updatePost($data)
    {
        $this->postdate = $data['postdate'];
        $this->content = $data['content'];
        $this->title = $data['title'];
        $this->excerpt = $data['excerpt'];
        $this->slug = $data['slug'];
        $this->published = false;
        $this->save();
    }
}
