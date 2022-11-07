<?php
if (!function_exists('randomString')) {
    //si la fonction n'existe pas 
    function randomString($lenght)
    {
        $array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $text = "";

        $lenght = rand(22, $lenght);

        for ($i = 0; $i < $lenght; $i++) {
            $random = rand(0, count($array) - 1);
            $text .= $array[$random];
        }
        return strtoupper($text);
    }
}
if (!function_exists('parseQuery')) {
    function parseQuery()
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);
    }
}
if (!function_exists('isAdd')) {
    function verifAdd($parsingQuery)
    {
        $message = null;
        $add = explode("=", $parsingQuery);
        if ($add[0] == "add") {
            if (strpos($parsingQuery, "=1")) {
                $message =  "<div class='alert alert-success'>Vous êtes maintenant inscrit</div>";
            } elseif (strpos($parsingQuery, "=0")) {
                $message =  "<div class='alert alert-danger'>L'adresse email existe déjà</div>";
            }
        }
        return $message;
    }
}
if (!function_exists('isEmptyUser')) {
    function isEmptyUser($parsingQuery)
    {
        $message = null;
        $error = explode("=", $parsingQuery);
        if ($error[0] == "error") {
            if (strpos($parsingQuery, "=1")) {
                $message =  "<div class='alert alert-danger'>Veuillez remplir les champs</div>";
            }
        }
        return $message;
    }
}
if (!function_exists('isUserCo')) {
    function isUserCo($parsingQuery)
    {
        $message = null;
        $add = explode("=", $parsingQuery);
        if ($add[0] == "co") {
            if (strpos($parsingQuery, "=1")) {
                $message =  "<div class='alert alert-success'>Vous êtes maintenant Connecté</div>";
            } elseif (strpos($parsingQuery, "=0")) {
                $message =  "<div class='alert alert-danger'>Utilisateur ou mot de passe incorrect</div>";
            }
        }
        return $message;
    }
}
