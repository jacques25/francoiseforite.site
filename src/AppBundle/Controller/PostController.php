<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends Controller
{
    /**
     * 
     * @Route("/", name="list-post")
     */
    public function listAction()
    { 
        $post = 'hello';
        return $this->render('post/index.html.twig', [
           'post' => $post
        ]); 
    }
}

