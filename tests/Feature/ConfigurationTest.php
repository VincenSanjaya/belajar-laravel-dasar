<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $firstName = config('contoh.name.first');
        $lastName = config('contoh.name.last');
        $email = config('contoh.email');
        $school = config('contoh.school');

        self::assertEquals("Vincencio", $firstName);
        self::assertEquals("Sanjaya", $lastName);
        self::assertEquals("vincenciogfs15@gmail.com", $email);
        self::assertEquals("SMK Raden Umar Said Kudus", $school);
    }
}
