<?php
/**
 * Created by PhpStorm.
 * User: dimitry.krychylskyy
 * Date: 18/05/2018
 * Time: 14:36
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class InfosController extends Controller
{
    public  function hello(){
        return $this->render('infos.html.twig', [
            'message' => "Hello world",
        ]);
    }
}