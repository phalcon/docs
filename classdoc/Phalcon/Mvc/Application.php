<?php

namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\Application
 *
 * This component encapsulates all the complex operations behind instantiating every component
 * needed and integrating it with the rest to allow the MVC pattern to operate as desired.
 *
 *<code>
 *
 * class Application extends \Phalcon\Mvc\Application
 * {
 *
 *		/**
 *		 * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
 *		 *\/
 *		protected function _registerServices()
 *		{
 *
 *		}
 *
 *		/**
 *		 * This method execute the right module
 *		 *\/
 *		public function main()
 *		{
 *			$this->registerModules(array(
 *				'frontend' => array(
 *					'className' => 'Multiple\Frontend\Module',
 *					'path' => '../apps/frontend/Module.php'
 *				),
 *				'backend' => array(
 *					'className' => 'Multiple\Backend\Module',
 *					'path' => '../apps/backend/Module.php'
 *				)
 *			));
 *		}
 *	}
 *
 *	$application = new Application();
 *	$application->main();
 *
 *</code>
 */
class Application extends Phalcon\DI\Injectable implements Phalcon\Events\EventsAwareInterface, Phalcon\DI\InjectionAwareInterface
{
/**
 * Register an array of modules present in the application
 *
 *<code>
 *	$this->registerModules(array(
 *		'frontend' => array(
 *			'className' => 'Multiple\Frontend\Module',
 *			'path' => '../apps/frontend/Module.php'
 *		),
 *		'backend' => array(
 *			'className' => 'Multiple\Backend\Module',
 *			'path' => '../apps/backend/Module.php'
 *		)
 *	));
 *</code>
 *
 * @param array $modules
 * @param boolean $merge
 */
public function registerModules($modules, $merge) {}

/**
 * Return the modules registered in the application
 *
 * @return array
 */
public function getModules() {}

/**
 * Handles a MVC request
 *
 * @return Phalcon\Http\ResponseInterface
 */
public function handle() {}

/**
 * Sets the dependency injector
 *
 * @param Phalcon\DiInterface $dependencyInjector
 */
public function setDI($dependencyInjector) {}

/**
 * Returns the internal dependency injector
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
 * Magic method __get
 *
 * @param string $propertyName
 */
public function __get($propertyName) {}

}