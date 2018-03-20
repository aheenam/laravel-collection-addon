<?php

use Illuminate\Support\Collection;

Collection::macro('hasAny', function (array $subset) {
    if (!$subset instanceof Collection) {
        $subset = Collection::make($subset);
    }
    return $subset->filter(function ($value, $key) {
        return $this->has($value);
    })->isNotEmpty();
});
