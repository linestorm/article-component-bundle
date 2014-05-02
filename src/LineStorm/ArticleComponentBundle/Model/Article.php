<?php

namespace LineStorm\ArticleComponentBundle\Model;

use Doctrine\ORM\Mapping as ORM;

class Article
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var integer
     */
    protected $order;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return Article
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     *
     * @return Article
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
