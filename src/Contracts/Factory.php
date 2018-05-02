<?php

namespace Platformoncloud\Theme\Contracts;

interface Factory
{
    /**
     * Get a theme provider implementation.
     *
     * @param string $driver
     *
     * @return \Platformoncloud\Theme\Contracts\Provider
     */
    public function driver($driver = null);
}
