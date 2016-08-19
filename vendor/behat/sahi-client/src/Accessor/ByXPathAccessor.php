<?php

/*
 * This file is part of the Behat\SahiClient.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\SahiClient\Accessor;

use Behat\SahiClient\Connection;

/**
 * By XPath Accessor.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ByXPathAccessor extends AbstractRelationalAccessor
{
    /**
     * XPath expression
     *
     * @var string
     */
    protected $xpath;

    /**
     * Initialize Accessor.
     *
     * @param string     $xpath     XPath expression
     * @param array      $relations Relations
     * @param Connection $con       Sahi connection
     */
    public function __construct($xpath, array $relations, Connection $con)
    {
        parent::__construct($con);

        foreach ($relations as $relation => $accessor) {
            $this->$relation($accessor);
        }

        $this->xpath = $xpath;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessor()
    {
        $arguments   = array();
        $arguments[] = json_encode($this->xpath);
        if ($this->hasRelations()) {
            $arguments[] = $this->getRelationArgumentsString();
        }

        return sprintf('_sahi._byXPath(%s)', implode(', ', $arguments));
    }
}
