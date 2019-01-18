#  DOC API FLIX KHECHINE

## Film

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /films   | GET |  | 200: ``` [ { "id": 1, "titre": "le grand bleu", "annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla"}, {..} ] ``` |
| /films   | POST      |   *required* body ``` {"titre": "titre", "annee": "annee", "poster": "14/02/2018", "synopsis": "synopsis" } ``` | 201: ``` { "id": 1, "titre": "le grand bleu","annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla", "categories": [ {"id": 1, "titre": "Titre de la categorie"}]} ``` |
| /films/{id}   | GET      |     | 200: ``` { "id": 1, "titre": "le grand bleu", "annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla" , "categories": [ {"id": 1, "titre": "Titre de la categorie"}], , "acteurs": [ {"id": 1, "nom": "Nom", , "prenom": "Prenom"}] } ``` |
| /films/{id}   | DELETE      |     | 200 ``` {} ``` |
| /films/{id}   | PUT      |  *required* body ``` {"titre": "le grand bleu", "annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla"} ```   | 200: ``` { "id": 1, "titre": "titre changer", "annee": "14/02/1993", "synopsis": "testest"}``` |
## Acteur


| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /acteurs   | GET |  | 200: ``` [ { "id": 1, "nom": "Nom", "prenom": "Prenom", film: { "id": 1, "name": "le grand bleu",  "annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla"}, {..} ] ``` |
| /acteurs   | POST      |   *required* body ``` {"nom": "Nom", "prenom": "Prenom", "film": 1, "categorie": 1  } ``` | 201: ``` { "id": 1, "nom": "Nom", "prenom": " Prenom", film: { "id": 1, "name": "le grand bleu",  "annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla"} }``` | 200: ``` { "id": 1, "nom": "Nom", "prenom": "Prenom", film: { "id": 1, "name": "le grand bleu",  "annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla"} }``` |
| /acteurs/{id}   | GET      |     | 200: ``` { "id": 1, "nom": "Nom", "prenom": "Prenom", film: { "id": 1, "name": "le grand bleu",  "annee": "14/02/1990", "poster": "14/02/2018", "synopsis": "blablabla"} }``` |
| /acteurs/{id}   | DELETE      |     | 200 ``` {} ``` |
| /acteurs/{id}   | PUT      |  *required* body ``` {"nom": "Nom", "prenom": "Prenom", "film": 1, "categorie": 1  } ```   | 200: ``` { "id": 1, "nom": "Nom", "prenom": "Prenom", "film": 1}``` |


## Categorie

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /categories   | GET |  | 200: ``` [ { "id": 1, "nom": "fiction"}, {..} ] ``` |
| /categories   | POST      |   *required* body ``` {"nom": "Titre"} ``` | 201: ``` { "id": 1, "nom": "fiction"}``` |
| /categories/{id}   | GET      |     | 200: ``` { "id": 1, "nom": "fiction"}``` |
| /categories/{id}   | DELETE      |     | 200 ``` {} ``` |
| /categories/{id}   | PUT      |  *required* body ``` {"nom": "Titre"} ```   | 200: ``` { "id": 1, "nom": "fiction"}``` |
