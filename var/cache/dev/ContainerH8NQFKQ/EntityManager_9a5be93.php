<?php

namespace ContainerH8NQFKQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54f86 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer899ca = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0c72e = [
        
    ];

    public function getConnection()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getConnection', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getMetadataFactory', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getExpressionBuilder', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'beginTransaction', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getCache', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getCache();
    }

    public function transactional($func)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'transactional', array('func' => $func), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'wrapInTransaction', array('func' => $func), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'commit', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->commit();
    }

    public function rollback()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'rollback', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getClassMetadata', array('className' => $className), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'createQuery', array('dql' => $dql), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'createNamedQuery', array('name' => $name), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'createQueryBuilder', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'flush', array('entity' => $entity), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'clear', array('entityName' => $entityName), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->clear($entityName);
    }

    public function close()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'close', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->close();
    }

    public function persist($entity)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'persist', array('entity' => $entity), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'remove', array('entity' => $entity), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'refresh', array('entity' => $entity), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'detach', array('entity' => $entity), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'merge', array('entity' => $entity), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getRepository', array('entityName' => $entityName), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'contains', array('entity' => $entity), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getEventManager', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getConfiguration', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'isOpen', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getUnitOfWork', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getProxyFactory', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'initializeObject', array('obj' => $obj), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'getFilters', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'isFiltersStateClean', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'hasFilters', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return $this->valueHolder54f86->hasFilters();
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

        $instance->initializer899ca = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54f86) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54f86 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54f86->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, '__get', ['name' => $name], $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        if (isset(self::$publicProperties0c72e[$name])) {
            return $this->valueHolder54f86->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f86;

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

        $targetObject = $this->valueHolder54f86;
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
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f86;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54f86;
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
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, '__isset', array('name' => $name), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f86;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54f86;
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
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, '__unset', array('name' => $name), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54f86;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54f86;
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
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, '__clone', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        $this->valueHolder54f86 = clone $this->valueHolder54f86;
    }

    public function __sleep()
    {
        $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, '__sleep', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;

        return array('valueHolder54f86');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer899ca = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer899ca;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer899ca && ($this->initializer899ca->__invoke($valueHolder54f86, $this, 'initializeProxy', array(), $this->initializer899ca) || 1) && $this->valueHolder54f86 = $valueHolder54f86;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54f86;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54f86;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
