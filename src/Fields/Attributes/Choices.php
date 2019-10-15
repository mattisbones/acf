<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace WordPlate\Acf\Fields\Attributes;

/**
 * This is the choices trait.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
trait Choices
{
    /**
     * Set the choices array and optional default value.
     *
     * @param array $choices
     * @param mixed $default
     *
     * @return self
     */
    public function choices(array $choices, $default = null): self
    {
        $this->config->set('choices', $choices);

        if ($default) {
            $this->config->set('default_value', $default);
        }

        return $this;
    }
}
