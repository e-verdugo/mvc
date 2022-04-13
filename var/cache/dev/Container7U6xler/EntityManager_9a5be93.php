<?php

namespace Container7U6xler;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf32a7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer21f32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5d2b = [
        
    ];

    public function getConnection()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getConnection', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getMetadataFactory', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getExpressionBuilder', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'beginTransaction', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getCache', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'transactional', array('func' => $func), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'commit', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->commit();
    }

    public function rollback()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'rollback', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getClassMetadata', array('className' => $className), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'createQuery', array('dql' => $dql), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'createNamedQuery', array('name' => $name), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'createQueryBuilder', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'flush', array('entity' => $entity), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'clear', array('entityName' => $entityName), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->clear($entityName);
    }

    public function close()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'close', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->close();
    }

    public function persist($entity)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'persist', array('entity' => $entity), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'remove', array('entity' => $entity), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'refresh', array('entity' => $entity), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'detach', array('entity' => $entity), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'merge', array('entity' => $entity), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'contains', array('entity' => $entity), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getEventManager', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getConfiguration', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'isOpen', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getUnitOfWork', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getProxyFactory', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'initializeObject', array('obj' => $obj), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'getFilters', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'isFiltersStateClean', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'hasFilters', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return $this->valueHolderf32a7->hasFilters();
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

        $instance->initializer21f32 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf32a7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf32a7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf32a7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, '__get', ['name' => $name], $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        if (isset(self::$publicPropertiesa5d2b[$name])) {
            return $this->valueHolderf32a7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32a7;

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

        $targetObject = $this->valueHolderf32a7;
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
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32a7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf32a7;
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
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, '__isset', array('name' => $name), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32a7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf32a7;
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
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, '__unset', array('name' => $name), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf32a7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf32a7;
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
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, '__clone', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        $this->valueHolderf32a7 = clone $this->valueHolderf32a7;
    }

    public function __sleep()
    {
        $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, '__sleep', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;

        return array('valueHolderf32a7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer21f32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer21f32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer21f32 && ($this->initializer21f32->__invoke($valueHolderf32a7, $this, 'initializeProxy', array(), $this->initializer21f32) || 1) && $this->valueHolderf32a7 = $valueHolderf32a7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf32a7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf32a7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
