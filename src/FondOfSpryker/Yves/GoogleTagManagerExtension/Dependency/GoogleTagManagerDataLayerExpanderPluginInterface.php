<?php

namespace FondOfSpryker\Yves\GoogleTagManagerExtension\Dependency;

use Generated\Shared\Transfer\GoogleTagManagerTransfer;

interface GoogleTagManagerDataLayerExpanderPluginInterface
{
    /**
     * @param string $pageType
     * @param array $twigVariableBag
     *
     * @return bool
     */
    public function isApplicable(string $pageType, array $twigVariableBag = []): bool;

    /**
     * @param string $page
     * @param array $twigVariableBag
     * @param array $variableList
     *
     * @return array
     */
    public function expand(string $page, array $twigVariableBag, array $variableList): array;
}
