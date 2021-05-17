<?php

namespace Thomasmoors\Anchor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thomasmoors\Anchor\Anchor
 */
class AnchorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'anchor';
    }
}
