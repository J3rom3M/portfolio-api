<?php

namespace ContainerCx3ldcm;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder88886 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7d35 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesce568 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        if ($this->valueHolder88886 === $returnValue = $this->valueHolder88886->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerd7d35 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder88886) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder88886 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, '__get', ['name' => $name], $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        if (isset(self::$publicPropertiesce568[$name])) {
            return $this->valueHolder88886->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88886;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder88886;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88886;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder88886;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, '__isset', array('name' => $name), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88886;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder88886;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, '__unset', array('name' => $name), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88886;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder88886;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, '__clone', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        $this->valueHolder88886 = clone $this->valueHolder88886;
    }

    public function __sleep()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, '__sleep', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return array('valueHolder88886');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7d35 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7d35;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'initializeProxy', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder88886;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder88886;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
