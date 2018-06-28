<?php
/**
 * Created by PhpStorm.
 * User: thdeg
 * Date: 27/06/18
 * Time: 10:59
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function homepage(){
        return $this->render('public/home.html.twig');
    }
}