<?php

namespace Tests\Unit\Migrations;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class SettingTableSchemaTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function settings_table_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('settings', [
                'id',
                'key',
                'label',
                'value',
                'group',
                'is_autoload',
                'created_at',
                'updated_at',
            ]),
            'The settings table is missing one or more expected columns.'
        );
    }
}
