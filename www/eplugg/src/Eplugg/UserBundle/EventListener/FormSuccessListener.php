<?php

// src/FBN/UserBundle/EventListener/FormSuccessListener.php

namespace Eplugg\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible to change the redirection when a form is successfully filled
 */
class FormSuccessListener implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onFormSuccess',    // Not working
            FOSUserEvents::CHANGE_PASSWORD_SUCCESS => 'onFormSuccess', // Working
            FOSUserEvents::PROFILE_EDIT_SUCCESS => 'onFormSuccess',    // Working
        );
    }

    public function onFormSuccess(FormEvent $event)
    {
        $url = $this->router->generate('eplug_signup_step2');

        $event->setResponse(new RedirectResponse($url));
    }
}