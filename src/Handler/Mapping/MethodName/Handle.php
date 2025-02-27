<?php

declare(strict_types=1);

namespace League\Tactician\Handler\Mapping\MethodName;

/**
 * Handle command by calling the "handle" method.
 */
class Handle implements MethodNameInflector
{
    /**
     * {@inheritdoc}
     */
    public function getMethodName(string $commandClassName) : string
    {
        return 'handle';
    }
}
