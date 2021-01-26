<?php

    try {
        changeImportantData();
    } catch (PermissionException) {
        echo "You don't have permission to do this";
    }






try {
    changeImportantData();
} catch (PermissionException) { // The intention is clear: exception details are irrelevant
    echo "You don't have permission to do this";
}


function changeImportantData()
{
    throw new PermissionException();
}