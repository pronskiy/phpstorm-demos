<?php

class Status
{
    const DRAFT = 'draft';
    const PUBLISHED = 'published';
    const ARCHIVED = 'archived';
    const DELETED = 'deleted';
}

function acceptStatus(string $status = Status::DRAFT)
{
    //region ...
    echo $status;
    //endregion
}
