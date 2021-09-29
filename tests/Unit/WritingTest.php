<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class WritingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testWriting()
    {
        Artisan::call('db:seed');

        $this->assertDatabaseHas('orders', [
            'status' => 'processing',
          ]);
    }
}
