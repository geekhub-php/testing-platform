<?php

namespace App\Model;

use App\Entity\Answer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                /**
                 * @var Answer
                 */
                $answer = $event->getData();
                $options = $answer->getOptions();
                if (null != $options) {
                    $options = array_flip($options);
                }
                $form = $event->getForm();
                $type = $answer->getType();
                switch ($type) {
                    case 'text':
                        $form->add('answer', TextType::class, [
                            'label' => false,
                        ]);
                        break;
                    case 'radio':
                        $form->add('answer', ChoiceType::class, [
                            'choices' => $options,
                            'multiple' => false,
                            'expanded' => true,
                            'label' => false,
                        ]);
                        break;
                    case 'checkbox':
                        $form->add('answer', ChoiceType::class, [
                            'choices' => $options,
                            'multiple' => true,
                            'expanded' => true,
                            'label' => false,
                        ]);
                        break;
                }
            });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Answer::class,
        ));
    }
}
