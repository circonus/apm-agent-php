<?php

declare(strict_types=1);

namespace Elastic\Apm\AutoInstrument;

interface PluginInterface
{
    public function register(RegistrationContextInterface $ctx): void;

    public function getDescription(): string;
}
