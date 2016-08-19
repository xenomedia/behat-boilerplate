<?php

/*
 * This file is part of the Behat\SahiClient.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\SahiClient\Accessor;

/**
 * Label Element Accessor.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class LabelAccessor extends AbstractDomAccessor
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'label';
    }
}
