<?php /** @noinspection PhpNoReturnAttributeCanBeAddedInspection */


    function redirect(string $uri): never {
        header('Location: ' . $uri);
        exit();
    }

    function redirectToLoginPage() {
        redirect('/login');

        echo 'hello world';
    }
