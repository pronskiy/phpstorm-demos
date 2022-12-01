In PHP 8.1, use enum instead of a set of constants and get validation out of the box.

```php
enum Status
{
    case Draft;
    case Published;
    case Archived;
}

function acceptStatus(Status $status)
{
}
```
