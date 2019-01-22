<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'required' => false,
            ])
            ->add('description',TextareaType::class)
            ->add('equipement',TextareaType::class)
            ->add('images',FileType::class, [
                'required' => false,
                'data_class' => null
            ])
            ->add('type', TextType::class)
            ->add('lieu', TextType::class)
            ->add('surface', NumberType::class)
            ->add('loyer', NumberType::class)
            ->add('charges', NumberType::class)
            ->add('disponibilite', TextType::class)
            ->add('bureaux', NumberType::class)
            ->add('openSpace', NumberType::class)
            ->add('salleReunion', NumberType::class)
            ->add('espaceDetente', NumberType::class)
            ->add('accueil',TextType::class)
           // ->add('dateCreation')
            ->add('note')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
