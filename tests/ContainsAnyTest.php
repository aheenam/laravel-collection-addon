<?php

namespace Aheenam\LaravelCollectionAddon\Test;

use Illuminate\Support\Collection;

class ContainsAnyTest extends TestCase
{
    /** @test */
    public function it_checks_for_any_of_the_given_items()
    {
        $collection = Collection::make([
            1, 2, 3
        ]);

        $this->assertTrue($collection->containsAny([1,2]));
        $this->assertTrue($collection->containsAny([3,2]));
        $this->assertTrue($collection->containsAny([4,2]));
        $this->assertFalse($collection->containsAny([4,5]));
    }
}
