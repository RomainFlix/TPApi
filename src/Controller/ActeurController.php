<?php
/**
 * Created by PhpStorm.
 * User: Romai
 * Date: 18/01/2019
 * Time: 10:11
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/acteurs")
 */
class ActeurController {
    function getAllActeurs() {
        $acteurs=[
            [
                "nom"=>"Flix",
                "prenom"=>"Romain",
            ],
            [
                "nom"=>"Khechine",
                "prenom"=>"Ryad",
            ],
            [
                "nom"=>"Umtiti",
                "prenom"=>"Samuel",
            ],
        ];
        $jsonResponse=json_encode($acteurs);

        return new Response($jsonResponse);
    }

    function getActeur($id) {
        $acteur=[
            "id"=>$id,
            "nom"=>"Acteur ".$id,
        ];

        $jsonResponse=json_encode($acteur);

        return new Response($jsonResponse);
    }

    function deleteActeur($id) {
        $jsonResponse=json_encode([]);

        return new Response($jsonResponse);
    }

    function createActeur(Request $request) {
        $body=$request->getContent();
        $body=json_decode($body);
        $jsonResponse=json_encode([]);

        return new Response($jsonResponse, 201);
    }

    function updateActeur(Request $request) {
        $body=$request->getContent();
        $body=json_decode($body);
        $jsonResponse=json_encode([]);

        return new Response($jsonResponse);
    }
}