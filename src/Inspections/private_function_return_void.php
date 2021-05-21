<?php /** @noinspection PhpUnusedPrivateMethodInspection */

    class Message
    {
        private function echo(): void
        {
            echo 'Message';
        }

        private function process()
        {
            $this->echo();
        }
    }