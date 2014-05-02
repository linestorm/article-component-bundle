<?php

namespace LineStorm\ArticleComponentBundle;

use LineStorm\CmsBundle\DependencyInjection\ContainerBuilder\DoctrineOrmCompilerPass;
use LineStorm\PostBundle\DependencyInjection\ContainerBuilder\ComponentCompilerPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class LineStormArticleComponentBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        //$container->addCompilerPass(new ComponentCompilerPass());

        $modelDir = realpath(__DIR__.'/Resources/config/model/doctrine');
        $mappings = array(
            $modelDir => 'LineStorm\ArticleComponentBundle\Model',
        );
        $container->addCompilerPass(DoctrineOrmCompilerPass::getMappingsPass($mappings));

    }
}
