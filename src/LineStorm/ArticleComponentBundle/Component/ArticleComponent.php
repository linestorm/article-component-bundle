<?php

namespace LineStorm\ArticleComponentBundle\Component;

use Andy\PortfolioBundle\Entity\Article;
use LineStorm\Content\Component\AbstractBodyComponent;
use LineStorm\Content\Component\ComponentInterface;
use LineStorm\Content\Component\View\ComponentView;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class ArticleComponent
 *
 * @package LineStorm\Content\Component\Article
 */
class ArticleComponent extends AbstractBodyComponent implements ComponentInterface
{
    /**
     * Fetch the component id string
     *
     * @return string
     */
    public function getId()
    {
        return 'articles';
    }

    /**
     * Fetch the component name
     *
     * @return mixed
     */
    public function getName()
    {
        return  'Article';
    }

    /**
     * @inheritdoc
     */
    public function isSupported($entity)
    {
        return ($entity instanceof Article);
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
