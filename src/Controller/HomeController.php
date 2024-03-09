<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{

    #[Route("/recette/{slug}-{id}", name: "recipe.show", requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function index(Request $request, string $slug, int $id): Response
    {
        // dd($request->attributes->getInt('id'));
        dd($slug, $id);
        return new Response('hello la team '. strtoupper($request->query->get('team', 'noteam')).'!' );
    }
}
