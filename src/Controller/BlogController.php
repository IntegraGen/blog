<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index(): Response
    {
        $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();
        return $this->render('blog/index.html.twig', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * @Route("/{id}", name="blog_voir")
     */
    public function voir($id): Response
    {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);
        return $this->render('blog/voir.html.twig', [
            'blog' => $blog,
        ]);
    }

    /* TODO Création de blog */
}
