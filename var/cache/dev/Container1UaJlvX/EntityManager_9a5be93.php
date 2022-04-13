<?php

namespace Container1UaJlvX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6690c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer30865 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1213a = [
        
    ];

    public function getConnection()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getConnection', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getMetadataFactory', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getExpressionBuilder', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'beginTransaction', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getCache', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'transactional', array('func' => $func), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'commit', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->commit();
    }

    public function rollback()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'rollback', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getClassMetadata', array('className' => $className), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'createQuery', array('dql' => $dql), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'createNamedQuery', array('name' => $name), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'createQueryBuilder', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'flush', array('entity' => $entity), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'clear', array('entityName' => $entityName), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->clear($entityName);
    }

    public function close()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'close', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->close();
    }

    public function persist($entity)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'persist', array('entity' => $entity), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'remove', array('entity' => $entity), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'refresh', array('entity' => $entity), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'detach', array('entity' => $entity), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'merge', array('entity' => $entity), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'contains', array('entity' => $entity), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getEventManager', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getConfiguration', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'isOpen', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getUnitOfWork', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getProxyFactory', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'initializeObject', array('obj' => $obj), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'getFilters', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'isFiltersStateClean', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'hasFilters', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return $this->valueHolder6690c->hasFilters();
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

        $instance->initializer30865 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6690c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6690c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6690c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, '__get', ['name' => $name], $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        if (isset(self::$publicProperties1213a[$name])) {
            return $this->valueHolder6690c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6690c;

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

        $targetObject = $this->valueHolder6690c;
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
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6690c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6690c;
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
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, '__isset', array('name' => $name), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6690c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6690c;
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
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, '__unset', array('name' => $name), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6690c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6690c;
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
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, '__clone', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        $this->valueHolder6690c = clone $this->valueHolder6690c;
    }

    public function __sleep()
    {
        $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, '__sleep', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;

        return array('valueHolder6690c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer30865 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer30865;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer30865 && ($this->initializer30865->__invoke($valueHolder6690c, $this, 'initializeProxy', array(), $this->initializer30865) || 1) && $this->valueHolder6690c = $valueHolder6690c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6690c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6690c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
