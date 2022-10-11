<?php

namespace Tests\Feature;

use function Pest\Laravel\get;

it('asserts home page loads', fn() => get('/')->assertStatus(200));
