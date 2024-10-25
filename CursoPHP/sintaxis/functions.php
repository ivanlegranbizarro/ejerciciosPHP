<?php

declare(strict_types=1);

hi('Amanda');

function hi(string $nombre): string
{
    return "Hi, $nombre";
}

// Format time()

echo date('d-m-Y');
