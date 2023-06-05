<?php 

namespace App\Debug;

enum Status: string
{
    case PUBLISHED = 'published';
    case DRAFT = 'draft';
    case ARCHIVED = 'archived';
    case DELETED = 'deleted';
}

var_dump(Status::DRAFT);

















/** @noinspection PhpIllegalPsrClassPathInspection */
