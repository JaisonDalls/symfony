<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class ConferenceController extends AbstractController
{

    /**
     * @Route("/hello/{name}", name="homepage")
     */
    public function index(string $name=''): Response
    {     
        $greet = '';
        if($name){
            $greet = sprintf('<h2>Hello %s!</h2>', htmlspecialchars($name));
        }   
        return new Response(<<<EOF
            <html>
                <body>
                    $greet
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
        EOF
        );
    } 
}
