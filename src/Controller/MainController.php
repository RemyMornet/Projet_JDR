<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class MainController extends AbstractController
{
    #[Route("",name:'home')]
    public function home():Response
    {
        return $this->render('main/home.html.twig');
    }

    #[Route("login",name:'login')]
    public function login():Response
    {
        return $this->render('main/login.html.twig');

    }

}