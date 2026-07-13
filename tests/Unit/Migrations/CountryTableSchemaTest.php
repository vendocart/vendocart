<?php

namespace Migrations;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CountryTableSchemaTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function countries_table_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('countries', [
                'id',
                'name',
                'iso_code_2',
                'iso_code_3',
                'is_active',
                'created_at',
                'updated_at',
            ]),
            'The countries table is missing one or more expected columns.'
        );
    }
}
