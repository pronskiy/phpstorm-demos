<?php

class Post {
    public DateTime $updated;
};
$posts = [new Post(), new Post()];

array_map(function ($post) {
    return $post->
}, $posts);

