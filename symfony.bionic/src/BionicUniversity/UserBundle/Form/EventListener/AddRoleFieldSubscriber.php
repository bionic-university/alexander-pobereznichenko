<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 6/25/14
 * Time: 8:43 PM
 */

namespace BionicUniversity\UserBundle\Form\EventListener;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Security\Core\SecurityContext;

class AddRoleFieldSubscriber implements EventSubscriberInterface
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
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     *
     * @api
     */
    public static function getSubscribedEvents()
    {
        return array(FormEvents::PRE_SET_DATA => 'preSetData');
    }

    public function preSetData(FormEvent $event)
    {
        if ($this->securityContext->isGranted('ROLE_ADMIN')) {
            $form = $event->getForm();
            $form->add('roles', 'entity', array(
                'class' => 'BionicUniversity\UserBundle\Entity\Role',
                'property' => 'name',
                'expanded' => true,
                'multiple' => false,
                'label'=>'Роль'
            ));
        }
    }

} 