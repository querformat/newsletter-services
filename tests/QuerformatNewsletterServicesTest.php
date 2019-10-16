<?php

/*
 * This file is part of querformat/newsletter-services
 *
 * (c) Enrico Schiller
 *
 * @license LGPL-3.0-or-later
 */

namespace Querformat\NewsletterServices\Tests;

use Querformat\NewsletterServices\QuerformatNewsletterServiceseBundle;
use PHPUnit\Framework\TestCase;

class QuerformatNewsletterServicesTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new QuerformatNewsletterServices();

        $this->assertInstanceOf('Querformat\NewsletterServices\QuerformatNewsletterServicesBundle', $bundle);
    }
}
