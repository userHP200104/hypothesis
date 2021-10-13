<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AuthorForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('authFirstName', TextType::class)
            ->add('authLastName', TextType::class)
            ->add('authUserName', TextType::class)
            ->add('authEmail', EmailType::class)
            ->add('authPhoneNumber', TextType::class)
            ->add('authPassword', PasswordType::class)
            ->add('register', SubmitType::class, ['label' => 'Register']);
    }
}

?>