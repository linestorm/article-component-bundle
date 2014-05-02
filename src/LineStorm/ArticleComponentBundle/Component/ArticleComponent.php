<?php

namespace LineStorm\ArticleComponentBundle\Component;

use LineStorm\Content\Component\AbstractBodyComponent;
use LineStorm\Content\Component\ComponentInterface;
use LineStorm\PostBundle\Model\PostArticle;
use LineStorm\Content\Component\View\ComponentView;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class ArticleComponent
 *
 * @package LineStorm\Content\Component\Article
 */
class ArticleComponent extends AbstractBodyComponent implements ComponentInterface
{
    protected $name = 'Article';
    protected $id = 'articles';

    /**
     * @inheritdoc
     */
    public function isSupported($entity)
    {
        return ($entity instanceof PostArticle);
    }

    /**
     * @inheritdoc
     */
    public function getAssets()
    {
        return array(
            '@LineStormArticleComponentBundle/Resources/public/js/article.js'
        );
    }

    /**
     * @inheritdoc
     */
    public function getView($entity)
    {
        return new ComponentView('LineStormArticleComponentBundle::view.html.twig');
    }

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('articles', 'collection', array(
                'type'      => 'linestorm_component_article',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'label'     => false,
            ))
        ;
    }
} 
