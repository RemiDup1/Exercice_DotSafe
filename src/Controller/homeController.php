<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'app_home_')]
class homeController extends AbstractController
{
    #[Route('/', name: 'app_home_index', methods: ['GET'])]
    public function redirectToMember()    {
        return $this->redirectToRoute('app_member_index');
    }

}
