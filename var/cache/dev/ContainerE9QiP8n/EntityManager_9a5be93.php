<?php

namespace ContainerE9QiP8n;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7fe55 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9257 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties68898 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getConnection', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getMetadataFactory', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getExpressionBuilder', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'beginTransaction', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getCache', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'transactional', array('func' => $func), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->transactional($func);
    }

    public function commit()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'commit', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->commit();
    }

    public function rollback()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'rollback', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'createQuery', array('dql' => $dql), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'createQueryBuilder', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'flush', array('entity' => $entity), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'clear', array('entityName' => $entityName), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'close', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->close();
    }

    public function persist($entity)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'persist', array('entity' => $entity), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'remove', array('entity' => $entity), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'refresh', array('entity' => $entity), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'detach', array('entity' => $entity), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'merge', array('entity' => $entity), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'contains', array('entity' => $entity), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getEventManager', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getConfiguration', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'isOpen', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getUnitOfWork', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getProxyFactory', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'getFilters', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'isFiltersStateClean', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'hasFilters', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return $this->valueHolder7fe55->hasFilters();
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

        $instance->initializerf9257 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7fe55) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7fe55 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7fe55->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, '__get', ['name' => $name], $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        if (isset(self::$publicProperties68898[$name])) {
            return $this->valueHolder7fe55->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe55;

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

        $targetObject = $this->valueHolder7fe55;
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
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe55;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7fe55;
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
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, '__isset', array('name' => $name), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe55;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7fe55;
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
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, '__unset', array('name' => $name), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe55;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7fe55;
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
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, '__clone', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        $this->valueHolder7fe55 = clone $this->valueHolder7fe55;
    }

    public function __sleep()
    {
        $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, '__sleep', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;

        return array('valueHolder7fe55');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9257 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9257;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9257 && ($this->initializerf9257->__invoke($valueHolder7fe55, $this, 'initializeProxy', array(), $this->initializerf9257) || 1) && $this->valueHolder7fe55 = $valueHolder7fe55;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7fe55;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7fe55;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
