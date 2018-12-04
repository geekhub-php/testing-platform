<?php

namespace App\Controller;


use App\Entity\Answer;
use App\Entity\AnswerGroup;
use App\Model\FormQuestions;
use App\Entity\QuestionGroup;
use App\Entity\Questions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Forms;
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

		$question1 = new Questions;
		$question1->setQuestion( 'What is you name?' );
		$question1->setType(Questions::TYPE_TEXT);

		$question2 = new Questions;
		$question2->setQuestion( 'You gender?' );
		$question2->setType(Questions::TYPE_CHECKBOX);

		$answer1 = new Answer();
		$answer2 = new Answer();
		$answer1->setQuestion( $question1->getQuestion() );
		$answer1->setType( $question1->getType() );
		$answer2->setQuestion( $question2->getQuestion() );
		$answer2->setType( $question2->getType() );

		$answers = new AnswerGroup();
		$answers->answers[] = $answer1;
		$answers->answers[] = $answer2;
		$answers->setName( 'TODO' );
//		dump( $answers );
		$form = $this->createForm( FormQuestions::class, $answer1 );
//		$form = $this->createForm( FormQuestions::class, $answers );
		$form->handleRequest( $request );
//		dump($form);
		if ( $form->isSubmitted() && $form->isValid() ) {
			$list = $form->getData();
			dump( $list );
		}
		return $this->render( 'question.html.twig', [
			'form' => $form->createView(),
			'data'         => $answer2,
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