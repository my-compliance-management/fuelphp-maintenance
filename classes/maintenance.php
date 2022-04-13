<?php
/**
 * Add maintenance mode
 *
 * @package    Maintenance
 * @version    0.1
 * @author     Hinashiki
 * @license    MIT License
 * @copyright  2015 - Hinashiki
 * @link       https://github.com/hinashiki/fuelphp-maintenance
 */

namespace Maintenance;

class MaintenanceMode
{
	public static function check($section = null)
	{
		// it's already everywhere, easier to place this here than redo it everywhere.
		// deny xhr requests from guests.
		if(!\Auth::check()){
			$request = \Request::main();
			$method = $request->get_method();
			if($method == "POST" && (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
				throw new \HttpNoAccessException();
			}

			unset($method);
		}

		// check if we are in maintenance mode
		if(\Auth::get('group') != 100) {
			if(self::maintenance($section)) {
				throw new \HttpServerMaintenanceException('Maintenance mode.', 503);
			}
		}
	}

	public static function maintenance($section = null)
	{
		try {
			$system_key = "maintenance:sections:system";
			$section_key = "maintenance:sections:{$section}";
			$redis = \Resque::redis();

			$system = $redis->exists($system_key) ?? false;
			if( !$system && $section) {
				return $redis->exists($section_key) ?? false;
			}

			return $system;

		} catch(\Exception $e){
			return false;
		}

		/*$all = \Config::get('maintenance.maintenance_mode') === true;
		if(!$all && $section) {
			return \Config::get("maintenance.sections.{$section}", false) === true;
		}

		return $all;*/
	}
}
