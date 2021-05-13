<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

#[Autoconfigure(tags: ['app.my_service'])]
interface MyServiceInterface
{
}
