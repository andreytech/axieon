<?php

namespace Tests;

use App\Domain;
use App\Page;
use App\User;
use Faker\Generator;

/**
 * @property Generator faker
 */
trait CreatesTrait
{
    public function createUser(array $attributes = []): User
    {
        return factory(User::class)->create($attributes);
    }

    public function createDomain(array $attributes = []): Domain
    {
        return factory(Domain::class)->create($attributes);
    }

    public function createPage(array $attributes = []): Page
    {
        return factory(Page::class)->create($attributes);
    }
}