<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use OpenApi\Annotations as OA ;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     */
    public function indexAction(Request $request)
    {

	    $swagger=\OpenApi\scan(dirname(dirname(__FILE__)));

    }

    public function df(){
        dump(1);
        exit;
    }
}
