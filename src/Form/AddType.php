<?php


namespace App\Form;


use App\DTO\Add;

use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Required;

class AddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder -> add("title", TextType::class,['required'=> true] );
        $builder -> add("price", MoneyType::class, ['required'=>Integer::class]);
        $builder -> add("content",TextType::class, ['required'=> true]);

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=> Add::class]);
    }
}