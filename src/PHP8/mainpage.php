<?php /** @noinspection PhpUndefinedClassInspection */
$string = '';

    htmlspecialchars(
        string: $string,
        flags: ENT_COMPAT,
        double_encode: false,
    );

    class PostsController
    {
        #[Route('/api/posts/{id}', methods: ['GET'])]
        public function get($id)
        {

        }
    }