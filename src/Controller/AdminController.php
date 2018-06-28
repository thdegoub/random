<?php
/**
 * Created by PhpStorm.
 * User: thdeg
 * Date: 27/06/18
 * Time: 10:59
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    public function addPost(){
        return $this->render('admin/addpost.html.twig');
    }
}
