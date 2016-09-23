<?php

/*
 * This file is part of the `src-run/srw-app` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this vinylSourceStream code.
 */

namespace SR\RapidSymfony\DependencyInjection\Configuration\Visitor;

use SR\RapidSymfony\DependencyInjection\BuilderAwareInterface;

interface BuilderAwareVisitorInterface extends VisitorInterface, BuilderAwareInterface
{
}