<?php

/*
 * This file is part of querformat/newsletter-services
 *
 * (c) Enrico Schiller
 *
 * @license LGPL-3.0-or-later
 */

namespace Querformat\NewsletterServices\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Querformat\NewsletterServices\QuerformatNewsletterServices;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(QuerformatNewsletterServices::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
