<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 21/02/16
 * Time: 04:51
 */

namespace Eplugg\FrontBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PostForm extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenu','textarea',array('label' => false,'required'=>true))
            ->add('fileImage', 'file',array('label' => false,'required'=>false))
           // ->add('filePdf', 'file',array('label' => false,'required'=>false))
            ->add('partager','submit')


        ;
    }
    public function getName()
    {
        return 'PostForm';
    }
}