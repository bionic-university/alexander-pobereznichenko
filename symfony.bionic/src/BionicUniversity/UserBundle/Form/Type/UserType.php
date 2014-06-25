<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 6/15/14
 * Time: 12:19 PM
 */

namespace BionicUniversity\UserBundle\Form\Type;


use BionicUniversity\UserBundle\Form\EventListener\AddRoleFieldSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\SecurityContext;

class UserType extends AbstractType
{
    /**
     * @var SecurityContext
     */
    private $securityContext;

    function __construct(SecurityContext $securityContext)
    {
        $this->securityContext = $securityContext;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
        $builder->add('username', 'text', array(
            'label'=> 'Имя'
        ));

        $builder->add('password', 'repeated', array(
            'first_name' => 'pass',
            'second_name' => 'confirm',
            'type' => 'password',
            'label' => false,
        ));

        $builder->addEventSubscriber(new AddRoleFieldSubscriber($this->securityContext));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BionicUniversity\UserBundle\Entity\User'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'user';
    }

} 