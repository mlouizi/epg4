<?php

namespace Proxies\__CG__\Eplugg\BackBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RelationshipAction extends \Eplugg\BackBundle\Entity\RelationshipAction implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'userAction', 'actionType', 'actionDate', '' . "\0" . 'Eplugg\\BackBundle\\Entity\\RelationshipAction' . "\0" . 'relationship');
        }

        return array('__isInitialized__', 'id', 'userAction', 'actionType', 'actionDate', '' . "\0" . 'Eplugg\\BackBundle\\Entity\\RelationshipAction' . "\0" . 'relationship');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RelationshipAction $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserAction($userAction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserAction', array($userAction));

        return parent::setUserAction($userAction);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserAction', array());

        return parent::getUserAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setActionType($actionType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActionType', array($actionType));

        return parent::setActionType($actionType);
    }

    /**
     * {@inheritDoc}
     */
    public function getActionType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActionType', array());

        return parent::getActionType();
    }

    /**
     * {@inheritDoc}
     */
    public function setActionDate($actionDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActionDate', array($actionDate));

        return parent::setActionDate($actionDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getActionDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActionDate', array());

        return parent::getActionDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelationship(\Eplugg\BackBundle\Entity\Relationship $relationship)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelationship', array($relationship));

        return parent::setRelationship($relationship);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelationship()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelationship', array());

        return parent::getRelationship();
    }

}
