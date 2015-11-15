<?php
/**
 * Created by PhpStorm.
 * User: resvamon
 * Date: 09/11/2015
 * Time: 17:54
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\DependencyInjection\SensioFrameworkExtraExtension;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Entorno extends Controller
{
    /**
     * @Route(
     *     path = "/miaction/{name}",
     *     name = "app_index_index"
     * )
     */
    Public Function entornAction (Request $request, $name)
    {
       return new Response("Hola " .$name);
    }
}