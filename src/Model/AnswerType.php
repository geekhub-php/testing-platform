<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 06.12.18
 * Time: 21:04
 */

namespace App\Model;


use App\Entity\Answer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->addEventListener( FormEvents::PRE_SET_DATA, function ( FormEvent $event ) {
				$data = $event->getData();
				$form = $event->getForm();
				$type = $data->getType();
				switch ( $type ) {
					case ( $type == 'text' ):
						$form->add('answer', TextType::class, [
							'label' => false
						]);
						break;
					case ( $type == 'radio' ):
						$form->add( 'answer', ChoiceType::class, [
							'choices' => [
								'Male' => 'Male',
								'Female'  => 'Female'
							], 'multiple'=>false,'expanded'=>true, 'label' => false
						] );
						break;
					case ( $type == 'checkbox' ):
						$form->add( 'answer', ChoiceType::class, [
							'choices' => [
								'Yes'  => 'yes',
								'No'  => 'no'
							], 'multiple'=>false,'expanded'=>true, 'label' => false
						] );
						break;
				}
			} )
		;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Answer::class,
		));
	}
}