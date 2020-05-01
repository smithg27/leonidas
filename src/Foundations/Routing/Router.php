<?php


namespace Foundations\Routing;


use \Psr\Container\ContainerInterface;

/**
 * Used for easy routing of http requests.
 * Class Router
 */

/**
 * Class Router
 */
class Router
{
    protected ContainerInterface $diContainer;
    protected array $registeredRoutes = [];

    public function addDependencyInjectionContainer(ContainerInterface $container): void
    {
        $this->diContainer = $container;
    }

    public function route(): void
    {
    }
}
