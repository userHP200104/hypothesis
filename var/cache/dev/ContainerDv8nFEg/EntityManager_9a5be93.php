<?php

namespace ContainerDv8nFEg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb484f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer95ea5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa2c27 = [
        
    ];

    public function getConnection()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getConnection', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getMetadataFactory', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getExpressionBuilder', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'beginTransaction', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getCache', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'transactional', array('func' => $func), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->transactional($func);
    }

    public function commit()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'commit', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->commit();
    }

    public function rollback()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'rollback', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getClassMetadata', array('className' => $className), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'createQuery', array('dql' => $dql), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'createNamedQuery', array('name' => $name), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'createQueryBuilder', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'flush', array('entity' => $entity), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'clear', array('entityName' => $entityName), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->clear($entityName);
    }

    public function close()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'close', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->close();
    }

    public function persist($entity)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'persist', array('entity' => $entity), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'remove', array('entity' => $entity), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'refresh', array('entity' => $entity), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'detach', array('entity' => $entity), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'merge', array('entity' => $entity), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'contains', array('entity' => $entity), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getEventManager', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getConfiguration', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'isOpen', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getUnitOfWork', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getProxyFactory', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'initializeObject', array('obj' => $obj), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'getFilters', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'isFiltersStateClean', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'hasFilters', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return $this->valueHolderb484f->hasFilters();
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

        $instance->initializer95ea5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb484f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb484f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb484f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, '__get', ['name' => $name], $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        if (isset(self::$publicPropertiesa2c27[$name])) {
            return $this->valueHolderb484f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb484f;

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

        $targetObject = $this->valueHolderb484f;
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
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb484f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb484f;
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
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, '__isset', array('name' => $name), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb484f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb484f;
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
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, '__unset', array('name' => $name), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb484f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb484f;
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
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, '__clone', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        $this->valueHolderb484f = clone $this->valueHolderb484f;
    }

    public function __sleep()
    {
        $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, '__sleep', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;

        return array('valueHolderb484f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer95ea5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer95ea5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer95ea5 && ($this->initializer95ea5->__invoke($valueHolderb484f, $this, 'initializeProxy', array(), $this->initializer95ea5) || 1) && $this->valueHolderb484f = $valueHolderb484f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb484f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb484f;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
