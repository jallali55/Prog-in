<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \App\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'start_date', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'end_date', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'nb_persons', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'place_disponible', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'price_event', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'images', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'nbViews', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'promotion'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'start_date', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'end_date', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'nb_persons', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'place_disponible', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'price_event', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'images', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'nbViews', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Event' . "\0" . 'promotion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', []);

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($start_date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', [$start_date]);

        parent::setStartDate($start_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDate', []);

        return parent::getEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndDate($end_date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndDate', [$end_date]);

        parent::setEndDate($end_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbPersons()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbPersons', []);

        return parent::getNbPersons();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbPersons($nb_persons): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbPersons', [$nb_persons]);

        parent::setNbPersons($nb_persons);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceEvent', []);

        return parent::getPriceEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceEvent($price_event): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceEvent', [$price_event]);

        parent::setPriceEvent($price_event);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbViews()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbViews', []);

        return parent::getNbViews();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbViews($nbViews): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbViews', [$nbViews]);

        parent::setNbViews($nbViews);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', []);

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function setReservations($reservations): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReservations', [$reservations]);

        parent::setReservations($reservations);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotion', []);

        return parent::getPromotion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPromotion($promotion): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPromotion', [$promotion]);

        parent::setPromotion($promotion);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function setImages($images): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImages', [$images]);

        parent::setImages($images);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaceDisponible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaceDisponible', []);

        return parent::getPlaceDisponible();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaceDisponible($place_disponible): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaceDisponible', [$place_disponible]);

        parent::setPlaceDisponible($place_disponible);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromo', []);

        return parent::getPromo();
    }

}
