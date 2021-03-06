<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Core\Dashboard;

use Sylius\Component\Core\Model\ChannelInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface DashboardStatisticsProviderInterface
{
    /**
     * @param ChannelInterface $channel
     *
     * @return DashboardStatistics
     */
    public function getStatisticsForChannel(ChannelInterface $channel);
}
