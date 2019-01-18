<?php
/**
 * Created by PhpStorm.
 * User: Romai
 * Date: 18/01/2019
 * Time: 10:13
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/categories")
 */
class CategorieController {
    function getAllCategories() {
        $categories= [
            ["name" => "Fiction"],
            ["name" => "Fantastique"],
            ["name" => "Sciences"],
        ];
        $jsonResponse = json_encode($categories);
        return new Response($jsonResponse);
    }

    function getCategorie($id) {
        $categorie= [
            "id" => $id,
            "name" => "Catégorie ".$id
        ];

        $jsonResponse = json_encode($categorie);

        return new Response($jsonResponse);
    }

    function deleteCategorie($id){
        $jsonResponse = json_encode([]);
        return new Response($jsonResponse);
    }

    function createCategorie(Request $request){
        $body = $request -> getContent();
        $body = json_decode($body);
        $jsonResponse = json_encode([]);

        return new Response($jsonResponse, 201);
    }

    function updateCategorie(Request $request){
        $body = $request -> getContent();
        $body = json_decode($body);
        $jsonResponse = json_encode([]);

        return new Response($jsonResponse);
    }
}