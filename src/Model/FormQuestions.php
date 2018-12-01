<?php


namespace App\Model;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormQuestions extends AbstractType {

	public function buildForm( FormBuilderInterface $builder, array $options ) {
		$builder
			->add( 'question' )
			->add( 'type', ChoiceType::class, [
				'placeholder' => 'choice type question',
				'choices'     => [
					'Text'     => 'text',
					'Radio'    => 'radio',
					'Checkbox' => 'checkbox',
				],
			] )
		;
	}

	public function configureOptions( OptionsResolver $resolver ) {
		$resolver->setDefaults( [
			'data_class' => "App\Model\QuestionsT"
		] );
	}
}