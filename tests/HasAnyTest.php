<?php

namespace Aheenam\LaravelCollectionAddon\Test;

use Illuminate\Support\Collection;

class HasAnyTest extends TestCase
{
    /** @test */
    public function check_if_any_key_exists()
    {
        $collection = Collection::make([
            'name' => 'John Doe',
            'age' => 42
        ]);

        $this->assertTrue($collection->hasAny(['name', 'firstName', 'lastName']));
        $this->assertFalse($collection->hasAny(['nickname', 'firstName', 'lastName']));
    }
}
