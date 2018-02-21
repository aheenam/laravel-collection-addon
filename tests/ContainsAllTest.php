<?php

namespace Aheenam\LaravelCollectionAddon\Test;

use Illuminate\Support\Collection;

class ContainsAllTest extends TestCase
{
    /** @test */
    public function it_checks_for_all_items()
    {
        $collection = Collection::make([
            1, 2, 3
        ]);

        $this->assertTrue($collection->containsAll([1,2]));
        $this->assertTrue($collection->containsAll([3,2]));
        $this->assertFalse($collection->containsAll([4,2]));
    }
}
