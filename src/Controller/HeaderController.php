<?php
// src/Controller/HeaderController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HeaderController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><header>Lucky number: '.$number.'</header></html>'
        );
    }
}