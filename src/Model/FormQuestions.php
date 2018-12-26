<?php


namespace App\Model;

use App\Entity\AnswerGroup;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormQuestions extends AbstractType {

	public function buildForm( FormBuilderInterface $builder, array $options ) {
		$builder
			->add( 'answers', CollectionType::class, array(
				'entry_type'    => AnswerType::class,
				'entry_options' => array( 'label' => false ),
			) );
	}

	public function configureOptions( OptionsResolver $resolver ) {
		$resolver->setDefaults( [
			'data_class' => AnswerGroup::class
		] );
	}
}