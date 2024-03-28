<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
   #[Route(path: "/", name:"home")]
   public function index(Request $request): Response{
      //var_dump($request->query->get('nom'));
      //dump($request->query->get('nom'));
      //die;
      // dd($request);
      return new Response("Hello ".$request->query->get('nom','world!!!'));
   }
}
