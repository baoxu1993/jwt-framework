<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2019 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Encryption\Algorithm\KeyEncryption;

use AESKW\A192KW as Wrapper;

final class A192KW extends AESKW
{
    public function name(): string
    {
        return 'A192KW';
    }

    protected function getWrapper()
    {
        return new Wrapper();
    }
}
