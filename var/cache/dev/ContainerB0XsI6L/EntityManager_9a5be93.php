<?php

namespace ContainerB0XsI6L;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62a05 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc241e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf81e3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getConnection', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getMetadataFactory', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getExpressionBuilder', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'beginTransaction', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getCache', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'transactional', array('func' => $func), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->transactional($func);
    }

    public function commit()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'commit', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->commit();
    }

    public function rollback()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'rollback', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getClassMetadata', array('className' => $className), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'createQuery', array('dql' => $dql), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'createNamedQuery', array('name' => $name), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'createQueryBuilder', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'flush', array('entity' => $entity), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'clear', array('entityName' => $entityName), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->clear($entityName);
    }

    public function close()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'close', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->close();
    }

    public function persist($entity)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'persist', array('entity' => $entity), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'remove', array('entity' => $entity), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'refresh', array('entity' => $entity), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'detach', array('entity' => $entity), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'merge', array('entity' => $entity), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'contains', array('entity' => $entity), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getEventManager', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getConfiguration', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'isOpen', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getUnitOfWork', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getProxyFactory', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'initializeObject', array('obj' => $obj), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'getFilters', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'isFiltersStateClean', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'hasFilters', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return $this->valueHolder62a05->hasFilters();
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

        $instance->initializerc241e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62a05) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62a05 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62a05->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, '__get', ['name' => $name], $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        if (isset(self::$publicPropertiesf81e3[$name])) {
            return $this->valueHolder62a05->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a05;

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

        $targetObject = $this->valueHolder62a05;
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
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a05;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62a05;
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
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, '__isset', array('name' => $name), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a05;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62a05;
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
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, '__unset', array('name' => $name), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62a05;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62a05;
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
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, '__clone', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        $this->valueHolder62a05 = clone $this->valueHolder62a05;
    }

    public function __sleep()
    {
        $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, '__sleep', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;

        return array('valueHolder62a05');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc241e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc241e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc241e && ($this->initializerc241e->__invoke($valueHolder62a05, $this, 'initializeProxy', array(), $this->initializerc241e) || 1) && $this->valueHolder62a05 = $valueHolder62a05;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62a05;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62a05;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
