<?php

namespace ContainerFwQXdk4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc22ee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer43a15 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties265b6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getConnection', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getMetadataFactory', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getExpressionBuilder', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'beginTransaction', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getCache', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'transactional', array('func' => $func), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->transactional($func);
    }

    public function commit()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'commit', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->commit();
    }

    public function rollback()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'rollback', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getClassMetadata', array('className' => $className), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'createQuery', array('dql' => $dql), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'createNamedQuery', array('name' => $name), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'createQueryBuilder', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'flush', array('entity' => $entity), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'clear', array('entityName' => $entityName), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->clear($entityName);
    }

    public function close()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'close', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->close();
    }

    public function persist($entity)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'persist', array('entity' => $entity), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'remove', array('entity' => $entity), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'refresh', array('entity' => $entity), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'detach', array('entity' => $entity), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'merge', array('entity' => $entity), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'contains', array('entity' => $entity), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getEventManager', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getConfiguration', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'isOpen', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getUnitOfWork', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getProxyFactory', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'initializeObject', array('obj' => $obj), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'getFilters', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'isFiltersStateClean', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'hasFilters', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return $this->valueHolderc22ee->hasFilters();
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

        $instance->initializer43a15 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc22ee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc22ee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc22ee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, '__get', ['name' => $name], $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        if (isset(self::$publicProperties265b6[$name])) {
            return $this->valueHolderc22ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc22ee;

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

        $targetObject = $this->valueHolderc22ee;
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
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc22ee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc22ee;
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
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, '__isset', array('name' => $name), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc22ee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc22ee;
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
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, '__unset', array('name' => $name), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc22ee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc22ee;
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
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, '__clone', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        $this->valueHolderc22ee = clone $this->valueHolderc22ee;
    }

    public function __sleep()
    {
        $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, '__sleep', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;

        return array('valueHolderc22ee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43a15 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43a15;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer43a15 && ($this->initializer43a15->__invoke($valueHolderc22ee, $this, 'initializeProxy', array(), $this->initializer43a15) || 1) && $this->valueHolderc22ee = $valueHolderc22ee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc22ee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc22ee;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
