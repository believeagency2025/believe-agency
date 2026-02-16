<?php

namespace App\Traits;

trait Translatable
{
    /**
     * Get all translations for a given field as an array.
     */
    public function getTranslations(string $field): array
    {
        $value = $this->getRawOriginal($field);

        if (is_array($value)) {
            return $value;
        }

        if (is_string($value)) {
            return json_decode($value, true) ?: [];
        }

        return [];
    }
}
