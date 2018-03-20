<?php

namespace Aheenam\LaravelCollectionAddon\Test;

use Illuminate\Support\Collection;

class HasAllTest extends TestCase
{
    /** @test */
    public function check_if_all_keys_exist()
    {
        $collection = Collection::make([
            'name' => 'John Doe',
            'age' => 42
        ]);

        $this->assertTrue($collection->hasAll(['age', 'name']));
        $this->assertFalse($collection->hasAll(['name', 'firstName', 'lastName']));
        $this->assertFalse($collection->hasAll(['nickname', 'firstName', 'lastName']));
    }
}
