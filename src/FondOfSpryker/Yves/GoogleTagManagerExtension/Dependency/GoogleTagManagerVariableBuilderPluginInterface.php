<?php

namespace FondOfSpryker\Yves\GoogleTagManagerExtension\Dependency;

interface GoogleTagManagerVariableBuilderPluginInterface
{
    /**
     * @param string $page
     * @param array $params
     *
     * @return array
     */
    public function addVariable(string $page, array $params): array;
}
