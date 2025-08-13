<?php

namespace BeeboIO\WordPress\Server;

class Plugin
{
    protected static Plugin $instance;

    final protected function __construct()
    {
        //
    }

    public static function load(): self
    {
        return self::$instance ??= new self;
    }

    public static function activate(): void
    {
        //
    }

    public static function deactivate(): void
    {
        //
    }
}
