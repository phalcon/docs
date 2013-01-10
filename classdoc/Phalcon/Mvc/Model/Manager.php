<?php

namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\Manager
 *
 * This components controls the initialization of models, keeping record of relations
 * between the different models of the application.
 *
 * A ModelsManager is injected to a model via a Dependency Injector Container such as Phalcon\DI.
 *
 * <code>
 * $dependencyInjector = new Phalcon\DI();
 *
 * $dependencyInjector->set('modelsManager', function(){
 *      return new Phalcon\Mvc\Model\Manager();
 * });
 *
 * $robot = new Robots($dependencyInjector);
 * </code>
 */
class Manager implements Phalcon\Mvc\Model\ManagerInterface, Phalcon\DI\InjectionAwareInterface, Phalcon\Events\EventsAwareInterface
{
/**
 * Phalcon\Mvc\Model\Manager constructor
 */
public function __construct() {}

/**
 * Sets the DependencyInjector container
 *
 * @param Phalcon\DiInterface $dependencyInjector
 */
public function setDI($dependencyInjector) {}

/**
 * Returns the DependencyInjector container
 *
 * @return Phalcon\DiInterface
 */
public function getDI() {}

/**
 * Sets the event manager
 *
 * @param Phalcon\Events\ManagerInterface $eventsManager
 */
public function setEventsManager($eventsManager) {}

/**
 * Returns the internal event manager
 *
 * @return Phalcon\Events\ManagerInterface
 */
public function getEventsManager() {}

/**
 * Initializes a model in the model manager
 *
 * @param Phalcon\Mvc\ModelInterface $model
 */
public function initialize($model) {}

/**
 * Check of a model is already initialized
 *
 * @param string $modelName
 * @return bool
 */
public function isInitialized($modelName) {}

/**
 * Get last initialized model
 *
 * @return Phalcon\Mvc\ModelInterface
 */
public function getLastInitialized() {}

/**
 * Loads a model throwing an exception if it doesn't exist
 *
 * @return Phalcon\Mvc\ModelInterface
 */
public function load($modelName) {}

/**
 * Setup a 1-1 relation between two models
 *
 * @param 	Phalcon\Mvc\Model $model
 * @param mixed $fields
 * @param string $referenceModel
 * @param mixed $referencedFields
 * @param array $options
 */
public function addHasOne($model, $fields, $referenceModel, $referencedFields, $options) {}

/**
 * Setup a relation reverse 1-1  between two models
 *
 * @param 	Phalcon\Mvc\Model $model
 * @param mixed $fields
 * @param string $referenceModel
 * @param mixed $referencedFields
 * @param array $options
 */
public function addBelongsTo($model, $fields, $referenceModel, $referencedFields, $options) {}

/**
 * Setup a relation 1-n between two models
 *
 * @param 	Phalcon\Mvc\ModelInterface $model
 * @param mixed $fields
 * @param string $referenceModel
 * @param mixed $referencedFields
 * @param array $options
 */
public function addHasMany($model, $fields, $referenceModel, $referencedFields, $options) {}

/**
 * Checks whether a model has a belongsTo relation with another model
 *
 * @param 	string $modelName
 * @param 	string $modelRelation
 * @return 	boolean
 */
public function existsBelongsTo($modelName, $modelRelation) {}

/**
 * Checks whether a model has a hasMany relation with another model
 *
 * @param 	string $modelName
 * @param 	string $modelRelation
 * @return 	boolean
 */
public function existsHasMany($modelName, $modelRelation) {}

/**
 * Checks whether a model has a hasOne relation with another model
 *
 * @param 	string $modelName
 * @param 	string $modelRelation
 * @return 	boolean
 */
public function existsHasOne($modelName, $modelRelation) {}

/**
 * Helper method to query records based on a relation definition
 *
 * @param array $relation
 * @param string $method
 * @param Phalcon\Mvc\ModelInterface $record
 * @param array $parameters
 * @return Phalcon\Mvc\Model\Resultset\Simple
 */
protected function _getRelationRecords() {}

/**
 * Gets belongsTo related records from a model
 *
 * @param string $method
 * @param string $modelName
 * @param string $modelRelation
 * @param Phalcon\Mvc\Model $record
 * @param array $parameters
 * @return Phalcon\Mvc\Model\ResultsetInterface
 */
public function getBelongsToRecords($method, $modelName, $modelRelation, $record, $parameters) {}

/**
 * Gets hasMany related records from a model
 *
 * @param string $method
 * @param string $modelName
 * @param string $modelRelation
 * @param Phalcon\Mvc\Model $record
 * @param array $parameters
 * @return Phalcon\Mvc\Model\ResultsetInterface
 */
public function getHasManyRecords($method, $modelName, $modelRelation, $record, $parameters) {}

/**
 * Gets belongsTo related records from a model
 *
 * @param string $method
 * @param string $modelName
 * @param string $modelRelation
 * @param Phalcon\Mvc\Model $record
 * @param array $parameters
 * @return Phalcon\Mvc\Model\ResultsetInterface
 */
public function getHasOneRecords($method, $modelName, $modelRelation, $record, $parameters) {}

/**
 * Gets belongsTo relations defined on a model
 *
 * @param  Phalcon\Mvc\ModelInterface $model
 * @return array
 */
public function getBelongsTo($model) {}

/**
 * Gets hasMany relations defined on a model
 *
 * @param  Phalcon\Mvc\ModelInterface $model
 * @return array
 */
public function getHasMany($model) {}

/**
 * Gets hasOne relations defined on a model
 *
 * @param  Phalcon\Mvc\ModelInterface $model
 * @return array
 */
public function getHasOne($model) {}

/**
 * Gets hasOne relations defined on a model
 *
 * @param  Phalcon\Mvc\ModelInterface $model
 * @return array
 */
public function getHasOneAndHasMany($model) {}

/**
 * Query the relationships between two models
 *
 * @param string $first
 * @param string $second
 * @return array
 */
public function getRelations($first, $second) {}

/**
 * Creates a Phalcon\Mvc\Model\Query without execute it
 *
 * @param string $phql
 * @return Phalcon\Mvc\Model\Query
 */
public function createQuery($phql) {}

/**
 * Creates a Phalcon\Mvc\Model\Query and execute it
 *
 * @param string $phql
 * @param array $placeholders
 * @return Phalcon\Mvc\Model\Query
 */
public function executeQuery($phql, $placeholders) {}

/**
 * Creates a Phalcon\Mvc\Model\Query\Builder
 *
 * @param string $params
 * @return Phalcon\Mvc\Model\Query\Builder
 */
public function createBuilder($params) {}

}