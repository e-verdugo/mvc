<?php

namespace ContainerFxtQGVZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere3f38 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer73cba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties57474 = [
        
    ];

    public function getConnection()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getConnection', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getMetadataFactory', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getExpressionBuilder', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'beginTransaction', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getCache', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getCache();
    }

    public function transactional($func)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'transactional', array('func' => $func), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'wrapInTransaction', array('func' => $func), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'commit', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->commit();
    }

    public function rollback()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'rollback', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getClassMetadata', array('className' => $className), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'createQuery', array('dql' => $dql), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'createNamedQuery', array('name' => $name), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'createQueryBuilder', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'flush', array('entity' => $entity), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'clear', array('entityName' => $entityName), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->clear($entityName);
    }

    public function close()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'close', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->close();
    }

    public function persist($entity)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'persist', array('entity' => $entity), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'remove', array('entity' => $entity), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'refresh', array('entity' => $entity), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'detach', array('entity' => $entity), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'merge', array('entity' => $entity), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getRepository', array('entityName' => $entityName), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'contains', array('entity' => $entity), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getEventManager', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getConfiguration', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'isOpen', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getUnitOfWork', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getProxyFactory', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'initializeObject', array('obj' => $obj), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'getFilters', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'isFiltersStateClean', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'hasFilters', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return $this->valueHoldere3f38->hasFilters();
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

        $instance->initializer73cba = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere3f38) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere3f38 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere3f38->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, '__get', ['name' => $name], $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        if (isset(self::$publicProperties57474[$name])) {
            return $this->valueHoldere3f38->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3f38;

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

        $targetObject = $this->valueHoldere3f38;
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
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3f38;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere3f38;
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
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, '__isset', array('name' => $name), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3f38;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere3f38;
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
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, '__unset', array('name' => $name), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3f38;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere3f38;
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
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, '__clone', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        $this->valueHoldere3f38 = clone $this->valueHoldere3f38;
    }

    public function __sleep()
    {
        $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, '__sleep', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;

        return array('valueHoldere3f38');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer73cba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer73cba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer73cba && ($this->initializer73cba->__invoke($valueHoldere3f38, $this, 'initializeProxy', array(), $this->initializer73cba) || 1) && $this->valueHoldere3f38 = $valueHoldere3f38;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3f38;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3f38;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
