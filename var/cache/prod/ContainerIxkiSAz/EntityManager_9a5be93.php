<?php

namespace ContainerIxkiSAz;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder432ec = null;
    private $initializerc5180 = null;
    private static $publicProperties929c6 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getConnection', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getMetadataFactory', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getExpressionBuilder', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'beginTransaction', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getCache', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'transactional', array('func' => $func), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'commit', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->commit();
    }
    public function rollback()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'rollback', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getClassMetadata', array('className' => $className), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'createQuery', array('dql' => $dql), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'createNamedQuery', array('name' => $name), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'createQueryBuilder', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'flush', array('entity' => $entity), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'clear', array('entityName' => $entityName), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->clear($entityName);
    }
    public function close()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'close', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->close();
    }
    public function persist($entity)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'persist', array('entity' => $entity), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'remove', array('entity' => $entity), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'refresh', array('entity' => $entity), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'detach', array('entity' => $entity), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'merge', array('entity' => $entity), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'contains', array('entity' => $entity), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getEventManager', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getConfiguration', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'isOpen', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getUnitOfWork', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getProxyFactory', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'initializeObject', array('obj' => $obj), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'getFilters', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'isFiltersStateClean', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'hasFilters', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return $this->valueHolder432ec->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc5180 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder432ec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder432ec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder432ec->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, '__get', ['name' => $name], $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        if (isset(self::$publicProperties929c6[$name])) {
            return $this->valueHolder432ec->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder432ec;
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
        $targetObject = $this->valueHolder432ec;
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
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder432ec;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder432ec;
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
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, '__isset', array('name' => $name), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder432ec;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder432ec;
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
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, '__unset', array('name' => $name), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder432ec;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder432ec;
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
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, '__clone', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        $this->valueHolder432ec = clone $this->valueHolder432ec;
    }
    public function __sleep()
    {
        $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, '__sleep', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
        return array('valueHolder432ec');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc5180 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc5180;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc5180 && ($this->initializerc5180->__invoke($valueHolder432ec, $this, 'initializeProxy', array(), $this->initializerc5180) || 1) && $this->valueHolder432ec = $valueHolder432ec;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder432ec;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder432ec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
