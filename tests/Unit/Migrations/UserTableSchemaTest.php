<?php

namespace Tests\Unit\Migrations;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class UserTableSchemaTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function users_table_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('users', [
                'id',
                'first_name',
                'last_name',
                'email',
                'email_verified_at',
                'password',
                'remember_token',
                'created_at',
                'updated_at',
            ]),
            'The users table is missing one or more expected columns.'
        );
    }
}
