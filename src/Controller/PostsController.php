<?php
/**
 * Created by PhpStorm.
 * User: thdeg
 * Date: 27/06/18
 * Time: 12:11
 */

namespace App\Controller;


use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostsController extends AbstractController
{

    public function showPosts (PostsRepository $repository)
    {
        $posts = $repository->findAll();

        return $this->render('public/posts.html.twig', [ 'posts' => $posts ]);
    }

    public function showPost ($slug, PostsRepository $repository){

        $post = $repository->findOneBy(['slug'=> $slug]);

        if ($post === null)
        {
            die('Cet article <b>'.$slug.'</b> n\'existe pas ...');
        }
        $title = $post->getTitle();
        $content = $post->getContent();
        $image = $post->getImage();

        return $this->render('public/post.html.twig', [
            'slug' => $slug,
            'title' => $title,
            'content' => $content,
            'image' => $image
        ]);
    }
}