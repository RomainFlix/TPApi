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
 * @Route("/films")
 */
class FilmController {
    function getAllFilms() {
        $films=[
            [
                "id"=>"1",
                "titre"=>"Harry potter",
                "annee"=>"14/02/2018",
                "poster"=>"15/03/2019",
                "synopsis"=>"Super blablallblalblalblalblalblalbla",
            ],

            [
                "id"=>"2",
                "titre"=>"Richard",
                "annee"=>"14/12/2118",
                "poster"=>"28/03/2974",
                "synopsis"=>"Super tozureizzer",
            ],
        ];
        $jsonResponse=json_encode($films);

        return new Response($jsonResponse);
    }

    function getFilm($id) {
        $film=[
            "id"=>$id,
            "titre"=>"Film ".$id,
        ];

        $jsonResponse=json_encode($film);

        return new Response($jsonResponse);
    }

    function deleteFilm($id) {
        $jsonResponse=json_encode([]);

        return new Response($jsonResponse);
    }

    function createFilm(Request $request) {
        $body=$request->getContent();
        $body=json_decode($body);
        $jsonResponse=json_encode([]);

        return new Response($jsonResponse, 201);
    }

    function updateFilm(Request $request) {
        $body=$request->getContent();
        $body=json_decode($body);
        $jsonResponse=json_encode([]);

        return new Response($jsonResponse);
    }
}