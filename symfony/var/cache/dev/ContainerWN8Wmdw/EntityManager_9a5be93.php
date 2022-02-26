<?php

namespace ContainerWN8Wmdw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2fafc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04ba1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1ad7f = [
        
    ];

    public function getConnection()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getConnection', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getMetadataFactory', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getExpressionBuilder', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'beginTransaction', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getCache', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'transactional', array('func' => $func), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'commit', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->commit();
    }

    public function rollback()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'rollback', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getClassMetadata', array('className' => $className), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'createQuery', array('dql' => $dql), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'createNamedQuery', array('name' => $name), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'createQueryBuilder', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'flush', array('entity' => $entity), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'clear', array('entityName' => $entityName), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->clear($entityName);
    }

    public function close()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'close', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->close();
    }

    public function persist($entity)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'persist', array('entity' => $entity), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'remove', array('entity' => $entity), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'refresh', array('entity' => $entity), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'detach', array('entity' => $entity), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'merge', array('entity' => $entity), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'contains', array('entity' => $entity), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getEventManager', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getConfiguration', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'isOpen', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getUnitOfWork', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getProxyFactory', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'initializeObject', array('obj' => $obj), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'getFilters', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'isFiltersStateClean', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'hasFilters', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return $this->valueHolder2fafc->hasFilters();
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

        $instance->initializer04ba1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2fafc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2fafc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2fafc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, '__get', ['name' => $name], $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        if (isset(self::$publicProperties1ad7f[$name])) {
            return $this->valueHolder2fafc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fafc;

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

        $targetObject = $this->valueHolder2fafc;
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
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fafc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2fafc;
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
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, '__isset', array('name' => $name), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fafc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2fafc;
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
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, '__unset', array('name' => $name), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fafc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2fafc;
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
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, '__clone', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        $this->valueHolder2fafc = clone $this->valueHolder2fafc;
    }

    public function __sleep()
    {
        $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, '__sleep', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;

        return array('valueHolder2fafc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04ba1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04ba1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04ba1 && ($this->initializer04ba1->__invoke($valueHolder2fafc, $this, 'initializeProxy', array(), $this->initializer04ba1) || 1) && $this->valueHolder2fafc = $valueHolder2fafc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2fafc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2fafc;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
