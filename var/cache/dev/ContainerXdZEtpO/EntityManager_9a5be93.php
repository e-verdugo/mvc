<?php

namespace ContainerXdZEtpO;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere40ab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraab44 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1a254 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getConnection', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getMetadataFactory', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getExpressionBuilder', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'beginTransaction', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getCache', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'transactional', array('func' => $func), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'commit', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->commit();
    }

    public function rollback()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'rollback', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getClassMetadata', array('className' => $className), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'createQuery', array('dql' => $dql), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'createNamedQuery', array('name' => $name), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'createQueryBuilder', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'flush', array('entity' => $entity), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'clear', array('entityName' => $entityName), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->clear($entityName);
    }

    public function close()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'close', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->close();
    }

    public function persist($entity)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'persist', array('entity' => $entity), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'remove', array('entity' => $entity), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'refresh', array('entity' => $entity), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'detach', array('entity' => $entity), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'merge', array('entity' => $entity), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'contains', array('entity' => $entity), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getEventManager', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getConfiguration', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'isOpen', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getUnitOfWork', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getProxyFactory', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'initializeObject', array('obj' => $obj), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'getFilters', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'isFiltersStateClean', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'hasFilters', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return $this->valueHoldere40ab->hasFilters();
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

        $instance->initializeraab44 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere40ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere40ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere40ab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, '__get', ['name' => $name], $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        if (isset(self::$publicProperties1a254[$name])) {
            return $this->valueHoldere40ab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere40ab;

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

        $targetObject = $this->valueHoldere40ab;
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
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere40ab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere40ab;
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
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, '__isset', array('name' => $name), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere40ab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere40ab;
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
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, '__unset', array('name' => $name), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere40ab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere40ab;
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
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, '__clone', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        $this->valueHoldere40ab = clone $this->valueHoldere40ab;
    }

    public function __sleep()
    {
        $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, '__sleep', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;

        return array('valueHoldere40ab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraab44 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraab44;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraab44 && ($this->initializeraab44->__invoke($valueHoldere40ab, $this, 'initializeProxy', array(), $this->initializeraab44) || 1) && $this->valueHoldere40ab = $valueHoldere40ab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere40ab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere40ab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
