<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 6/15/14
 * Time: 2:03 PM
 */

namespace BionicUniversity\UserBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\SecurityContext;

class RegistrationType extends AbstractType
{
    /**
     * @var SecurityContext
     */
    private $securityContext;

    function __construct(SecurityContext $securityContext)
    {
        $this->securityContext = $securityContext;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user',  new UserType($this->securityContext));
        $builder->add(
            'terms',
            'checkbox',
            array('property_path' => 'termsAccepted')
        );
        $builder->add('Register', 'submit');
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'registration';
    }


} 