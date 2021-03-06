<?php

namespace Proxies\__CG__\SYM16\SimpleStockBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Famille extends \SYM16\SimpleStockBundle\Entity\Famille implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'composants', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'id', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'nom', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'createur', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'creation', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'modification'];
        }

        return ['__isInitialized__', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'composants', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'id', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'nom', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'createur', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'creation', '' . "\0" . 'SYM16\\SimpleStockBundle\\Entity\\Famille' . "\0" . 'modification'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Famille $proxy) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function updateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDate', []);

        return parent::updateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addComposant(\SYM16\SimpleStockBundle\Entity\Composant $composant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComposant', [$composant]);

        return parent::addComposant($composant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComposant(\SYM16\SimpleStockBundle\Entity\Composant $composant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComposant', [$composant]);

        return parent::removeComposant($composant);
    }

    /**
     * {@inheritDoc}
     */
    public function getComposants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComposants', []);

        return parent::getComposants();
    }

    /**
     * {@inheritDoc}
     */
    public function isNomNeCreateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNomNeCreateur', []);

        return parent::isNomNeCreateur();
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateur($createur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateur', [$createur]);

        return parent::setCreateur($createur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateur', []);

        return parent::getCreateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreation($creation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreation', [$creation]);

        return parent::setCreation($creation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreation', []);

        return parent::getCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setModification($modification)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModification', [$modification]);

        return parent::setModification($modification);
    }

    /**
     * {@inheritDoc}
     */
    public function getModification()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModification', []);

        return parent::getModification();
    }

}
