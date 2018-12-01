<?php

namespace App\Controller;


use App\Model\FormQuestions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController {

	/**
	 * @Route("/")
	 * @param Request $request
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function home( Request $request ) {
		$form = $this->createForm( FormQuestions::class );

		$form->handleRequest( $request );
		if ( $form->isSubmitted() && $form->isValid() ) {

			$list = $form->getData();
			var_dump( $list );

		}

		return $this->render( 'question.html.twig', [
			'questionForm' => $form->createView()
		] );
	}

	/**
	 * @Route("/show")
	 */

	public function show() {
		return $this->render( 'home.html.twig' );
	}

	/**
	 * @Route("/test")
	 */

	public function test() {
		return $this->render( 'home.html.twig' );
	}
}