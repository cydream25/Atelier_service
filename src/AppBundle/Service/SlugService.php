<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 23/01/18
 * Time: 14:43
 */
namespace AppBundle\Service;


class SlugService
{

    private $article;

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    public function generateSlug(){
        return str_replace(' ','_',$this->article->getTitle());
    }
}