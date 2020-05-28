<?php

/*
 * This file is part of the Klipper package.
 *
 * (c) François Pluchino <francois.pluchino@klipper.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Klipper\Component\SecurityOauth\Model;

use Klipper\Contracts\Model\ExpirableInterface;

/**
 * @author François Pluchino <francois.pluchino@klipper.dev>
 */
interface OauthTokenInterface extends ExpirableInterface
{
    /**
     * @return static
     */
    public function setToken(?string $token);

    public function getToken(): ?string;
}
