<?php

/*
 * This file is part of Jitamin.
 *
 * Copyright (C) Jitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Jitamin\Core\Application;

$container = new Pimple\Container();
$container->register(new Jitamin\Providers\MailProvider());
$container->register(new Jitamin\Providers\HelperProvider());
$container->register(new Jitamin\Providers\SessionProvider());
$container->register(new Jitamin\Providers\LoggingProvider());
$container->register(new Jitamin\Providers\CacheProvider());
$container->register(new Jitamin\Providers\DatabaseProvider());
$container->register(new Jitamin\Providers\AuthenticationProvider());
$container->register(new Jitamin\Providers\NotificationProvider());
$container->register(new Jitamin\Providers\ClassProvider());
$container->register(new Jitamin\Providers\EventDispatcherProvider());
$container->register(new Jitamin\Providers\GroupProvider());
$container->register(new Jitamin\Providers\RouteProvider());
$container->register(new Jitamin\Providers\ActionProvider());
$container->register(new Jitamin\Providers\ExternalLinkProvider());
$container->register(new Jitamin\Providers\AvatarProvider());
$container->register(new Jitamin\Providers\FilterProvider());
$container->register(new Jitamin\Providers\JobProvider());
$container->register(new Jitamin\Providers\QueueProvider());
$container->register(new Jitamin\Providers\ApiProvider());
$container->register(new Jitamin\Providers\CommandProvider());
$container->register(new Jitamin\Providers\PluginProvider());
$container->register(new Jitamin\Providers\UpdateProvider());

$app = new Application($container);

return $app;
