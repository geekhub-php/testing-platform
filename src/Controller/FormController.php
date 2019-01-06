<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\AnswerGroup;
use App\Entity\Question;
use App\Model\FormQuestions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home(Request $request)
    {
        $question1 = new Question();
        $question1->setQuestion('What is you name?');
        $question1->setType(Question::TYPE_TEXT);

        $question2 = new Question();
        $question2->setQuestion('You gender?');
        $question2->setType(Question::TYPE_RADIO);
        $question2->setOptions(['Male', 'Female']);

        $question3 = new Question();
        $question3->setQuestion('3 question');
        $question3->setType(Question::TYPE_CHECKBOX);
        $question3->setOptions(['Yes', 'No']);

        $question4 = new Question();
        $question4->setQuestion('Выберите вариант ответа');
        $question4->setType(Question::TYPE_CHECKBOX);
        $question4->setOptions(['Первый вариант ответа', 'Второй вариант ответа', 'Третий вариант ответа', 'Все варианты']);

        $answer1 = new Answer();
        $answer2 = new Answer();
        $answer3 = new Answer();
        $answer4 = new Answer();
        $answer1->setQuestion($question1->getQuestion());
        $answer1->setType($question1->getType());

        $answer2->setQuestion($question2->getQuestion());
        $answer2->setType($question2->getType());
        $answer2->setOptions($question2->getOptions());

        $answer3->setQuestion($question3->getQuestion());
        $answer3->setType($question3->getType());
        $answer3->setOptions($question3->getOptions());

        $answer4->setQuestion($question4->getQuestion());
        $answer4->setType($question4->getType());
        $answer4->setOptions($question4->getOptions());

        $answers = new AnswerGroup();
        $answers->addAnswer($answer1);
        $answers->addAnswer($answer2);
        $answers->addAnswer($answer3);
        $answers->addAnswer($answer4);
        $answers->setName('TODO');

        $form = $this->createForm(FormQuestions::class, $answers);
        $form->handleRequest($request);
        dump($form->handleRequest($request));

        if ($form->isSubmitted() && $form->isValid()) {
            $list = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($answers);
            $em->flush();
            dump($answers->getAnswers());
        }

        return $this->render('question.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show")
     */
    public function show()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        return $this->render('home.html.twig');
    }
}
