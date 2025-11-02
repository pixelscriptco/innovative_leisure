<?php

function appendVersion()
{
    $now = new DateTime();
    return '?v=' . urlencode($now->getTimestamp());
}
