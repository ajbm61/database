<?php
/**
 * FuelPHP\Database is an easy flexible PHP 5.3+ Database Abstraction Layer
 *
 * @package    FuelPHP\Database
 * @version    1.0
 * @author     Frank de Jonge
 * @license    MIT License
 * @copyright  2011 - 2012 FuelPHP Development Team
 */

namespace FuelPHP\Database\Compiler;

use FuelPHP\Database\Compiler;
use FuelPHP\Database\Collector;

class Pgsql extends Compiler
{
	/**
	 * Compile a returning statement
	 *
	 * @param   Collector  $collection  query collector
	 * @return  string     returning sql
	 */
	public function compileReturning(Collector $collector)
	{
		if ($returning = $collector->getInsertIdField())
		{
			return 'RETURNING '.$this->quoteIdentifier($returning);
		}
	}
}