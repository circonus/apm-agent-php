<?php

declare(strict_types=1);

namespace Elastic\Apm\Impl;

use Elastic\Apm\Impl\Log\LoggableInterface;
use Elastic\Apm\Impl\Log\LoggableTrait;
use JsonSerializable;

/**
 * Code in this file is part of implementation internals and thus it is not covered by the backward compatibility.
 *
 * @internal
 */
final class ProcessData implements JsonSerializable, LoggableInterface
{
    use LoggableTrait;

    /** @var int */
    public $pid;

    public function jsonSerialize()
    {
        return ['pid' => $this->pid];
    }
}
