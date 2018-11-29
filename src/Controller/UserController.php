<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;



class UserController extends AbstractController
{
    /**
     * @Route("/user/registration")
     */

    public function registrationForm(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('secondName', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('phone', NumberType::class)
            ->add('photo', TextType::class)
            ->add('role', ChoiceType::class, array(
                'label' => 'Role ',
                'choices'  => array(
                    'Super admin' => 3,
                    'Admin' => 2,
                    'Student' => 1,
                    'Abiturient' => 0,
                )))
            ->add('save', SubmitType::class, array('label' => 'Create user'))
            ->getForm();
        $form->handleRequest($request);
        dump($form->getData());
        return $this->render('user/registration.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}