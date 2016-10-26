<?php
namespace Eplugg\UserBundle\Form\Type;

//use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('username')
            ->add("email")
            ->add('gender', 'hidden')
            ->add('firstname', 'hidden')
            ->add('lastname', 'hidden')
            ->add('job', 'hidden')
            ->add('company_name', 'hidden')
            ->add('activities', 'hidden', array(
                "mapped" => false,
            ))
            ->add('company_city', 'hidden')
            ->add('company_country', 'hidden')
            ->add('birthday', 'hidden')
            ->add('birthmonth', 'hidden')
            ->add('birthyear', 'hidden');

    }
    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}