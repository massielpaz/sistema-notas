<?php

/**
 * Establece una cabezera para redireccionar a una url especifica
 */
function ridireccionar_url(string $url, bool $permanent = false): void
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}
