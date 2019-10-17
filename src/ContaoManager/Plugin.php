<?php

/*
 * This file is part of querformat/newsletter-services
 *
 * (c) Enrico Schiller
 *
 * @license LGPL-3.0-or-later
 */

namespace Querformat\NewsletterServicesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Querformat\NewsletterServicesBundle\NewsletterServicesBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(NewsletterServicesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
