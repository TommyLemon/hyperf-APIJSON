<?php

namespace App\ApiJson\Handle;

class WhereInHandle extends AbstractHandle
{
    protected function validateCondition(): bool
    {
        return str_ends_with($this->key, '{}') && is_array($this->value);
    }

    protected function buildModel()
    {
        $this->query->whereIn($this->sanitizeKey, $this->value);
    }
}