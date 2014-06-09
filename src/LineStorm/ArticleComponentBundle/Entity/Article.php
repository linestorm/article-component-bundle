<?php

namespace LineStorm\ArticleComponentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LineStorm\ArticleComponentBundle\Model\Article as BaseArticle;

/**
 * Class Article
 *
 * @package LineStorm\ArticleComponentBundle\Entity
 * @author  Andy Thorne <contrabandvr@gmail.com>
 */
class Article extends BaseArticle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
}
