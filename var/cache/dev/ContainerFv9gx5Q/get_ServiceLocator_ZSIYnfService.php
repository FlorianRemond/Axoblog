<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Z_SIYnf' shared service.

return $this->privates['.service_locator.Z_SIYnf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\BlogController::index' => ['privates', '.service_locator.hsWoe8a', 'get_ServiceLocator_HsWoe8aService.php', true],
    'App\\Controller\\BlogController:index' => ['privates', '.service_locator.hsWoe8a', 'get_ServiceLocator_HsWoe8aService.php', true],
], [
    'App\\Controller\\BlogController::index' => '?',
    'App\\Controller\\BlogController:index' => '?',
]);
