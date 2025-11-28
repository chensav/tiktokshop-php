<?php
/*
 * This file is part of tiktok-shop.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\TiktokShop\Resources;

use EcomPHP\TiktokShop\Errors\TiktokShopException;
use EcomPHP\TiktokShop\Resource;

class Fbt extends Resource
{
    protected $category = 'fbt';

    protected $version = 202409;

    protected $minimum_version = 202409;

    /**
     * fbt 区域列表
     *
     * @return array|mixed
     * @throws TiktokShopException
     */
    public function merchantsOnboardedRegions()
    {
        return $this->call('GET', 'merchants/onboarded_regions');
    }

}
