<?php
function updateSessionFields(SESSION_KEYS $key, array $fields): void
{

    flushSessionByKey($key);
    $_SESSION[$key->value]['fields'] = $fields;
}

function flushSessionByKey(SESSION_KEYS $key): void
{
    unset($_SESSION[$key->value]);
}

function formSessionData(SESSION_KEYS $key): array
{
    $fields = $_SESSION[$key->value]['fields'] ?? [];
    $errors = $_SESSION[$key->value]['errors'] ?? [];
    if (!empty($_SESSION[$key->value])) {
        unset($_SESSION[$key->value]);
    }
    return compact('fields', 'errors');
}