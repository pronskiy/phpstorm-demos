<?php

class PostState{}
class Draft extends PostState {}
interface PostIntefrace {}
class DraftP implements PostIntefrace {}

class Post
{
    public function __construct(
        public PostState $state = new Draft(), // Incorrect highlighting here
        public PostIntefrace $istate = new DraftP(),  // Incorrect highlighting here
    ) { }
}
