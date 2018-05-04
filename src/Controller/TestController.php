<?php
/**
 * Created by PhpStorm.
 * User: tnina
 * Date: 30/04/2018
 * Time: 11:40
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{

    public function indexAction(){


        return new Response(
            'test'
        );


    }


}