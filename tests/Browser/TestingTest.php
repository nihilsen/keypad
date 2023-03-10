<?php

namespace Nihilsen\Keypad\Tests\Browser;

use Illuminate\Support\Facades\DB;
use Laravel\Dusk\Browser;

class TestingTest extends TestCase
{
    /**
     * A basic browser test example.
     */
    public function test_can_run_browser_tests()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/browser-tests')->assertSee("let's get testing!");
        });
    }

    public function test_can_run_migrations()
    {
        expect(fn () => DB::table('keypads')->get())
            ->not->toThrow(\Exception::class)
            ->and(true)->toBeTrue();
    }
}
