<?php
/**
 * Created by PhpStorm.
 * User: dimitry.krychylskyy
 * Date: 18/05/2018
 * Time: 13:59
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class MainFormController extends Controller
{
    public function new(Request $request){
        $form = $this->createFormBuilder()
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('e-mail', EmailType::class)
            ->getForm();

        return $this->render('mainForm.html.twig', array('form' => $form->createView(),));
    }
}