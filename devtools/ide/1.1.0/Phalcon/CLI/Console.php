<?php 

namespace Phalcon\CLI {

	/**
	 * Phalcon\CLI\Console
	 *
	 * This component allows to create CLI applications using Phalcon
	 */
	
	class Console extends \Phalcon\Di\Injectable implements \Phalcon\Events\EventsAwareInterface, \Phalcon\Di\InjectionAwareInterface {

		protected $_modules;

		protected $_moduleObject;

		/**
		 * \Phalcon\CLI\Console constructor
		 */
		public function __construct($dependencyInjector=null){ }


		/**
		 * Register an array of modules present in the console
		 *
		 *<code>
		 *	$application->registerModules(array(
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
		 */
		public function registerModules($modules){ }


		/**
		 * Merge modules with the existing ones
		 *
		 *<code>
		 *	$application->addModules(array(
		 *		'admin' => array(
		 *			'className' => 'Multiple\Admin\Module',
		 *			'path' => '../apps/admin/Module.php'
		 *		)
		 *	));
		 *</code>
		 *
		 * @param array $modules
		 */
		public function addModules($modules){ }


		/**
		 * Return the modules registered in the console
		 *
		 * @return array
		 */
		public function getModules(){ }


		/**
		 * Handle the command-line arguments.
		 *  
		 * 
		 * <code>
		 * 	$arguments = array(
		 * 		'task' => 'taskname',
		 * 		'action' => 'action',
		 * 		'params' => array('parameter1', 'parameter2')
		 * 	);
		 * 	$console->handle($arguments);
		 * </code>
		 *
		 * @param array $arguments
		 * @return mixed
		 */
		public function handle($arguments=null){ }

	}
}
