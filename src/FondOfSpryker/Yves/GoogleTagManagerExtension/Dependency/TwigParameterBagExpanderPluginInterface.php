<?php


namespace FondOfSpryker\Yves\GoogleTagManagerExtension\Dependency;


interface TwigParameterBagExpanderPluginInterface
{
    /**
     * @param array $twigVariableBag
     *
     * @return bool
     */
    public function isApplicable(array $twigVariableBag = []): bool;

    /**
     * @param array $twigVariableBag
     *
     * @return array
     */
    public function expand($twigVariableBag): array;
}
