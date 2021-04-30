<?php

namespace ContainerXXxDdiV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getConnection', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getMetadataFactory', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getExpressionBuilder', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'beginTransaction', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getCache', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'transactional', array('func' => $func), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->transactional($func);
    }

    public function commit()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'commit', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->commit();
    }

    public function rollback()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'rollback', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getClassMetadata', array('className' => $className), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'createQuery', array('dql' => $dql), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'createNamedQuery', array('name' => $name), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'createQueryBuilder', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'flush', array('entity' => $entity), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'clear', array('entityName' => $entityName), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->clear($entityName);
    }

    public function close()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'close', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->close();
    }

    public function persist($entity)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'persist', array('entity' => $entity), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'remove', array('entity' => $entity), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'refresh', array('entity' => $entity), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'detach', array('entity' => $entity), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'merge', array('entity' => $entity), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'contains', array('entity' => $entity), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getEventManager', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getConfiguration', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'isOpen', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getUnitOfWork', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getProxyFactory', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'initializeObject', array('obj' => $obj), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'getFilters', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'isFiltersStateClean', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, 'hasFilters', array(), $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        return $this->valueHolder88886->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd7d35 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder88886) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder88886 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder88886->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd7d35 && ($this->initializerd7d35->__invoke($valueHolder88886, $this, '__get', ['name' => $name], $this->initializerd7d35) || 1) && $this->valueHolder88886 = $valueHolder88886;

        if (isset(self::$publicPropertiesce568[$name])) {
            return $this->valueHolder88886->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
