<?php


namespace App\Model;

use App\Service\TypeQuestion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormQuestions extends AbstractType {

	public function buildForm( FormBuilderInterface $builder, array $options ) {
		$builder
			->add( 'answer', null, array('label' => false) )
			->addEventListener( FormEvents::PRE_SET_DATA, function ( FormEvent $event ) {
				$data = $event->getData();
				$form = $event->getForm();
				$type = $data->getType();
				switch ( $type ) {
					case ( $type == 'text' ):
//						$form->add ( 'type', TextType::class );
						break;
					case ( $type == 'radio' ):
						$form->add( 'type', ChoiceType::class, [
							'choices' => [
								'Yes' => 'yes',
								'No'  => 'no'
							], 'multiple'=>false,'expanded'=>true, 'label' => false
						] );
						break;
					case ( $type == 'checkbox' ):
						$form->add( 'type', ChoiceType::class, [
							'choices' => [
								'Yes'  => 'yes',
								'No'  => 'no'
							], 'multiple'=>false,'expanded'=>true, 'label' => false
						] );
						break;
				}
			} );
	}

	public function configureOptions( OptionsResolver $resolver ) {
		$resolver->setDefaults( [
			'data_class' => "App\Entity\Answer"
//			'data_class' => "App\Entity\AnswerGroup"
		] );
	}


}