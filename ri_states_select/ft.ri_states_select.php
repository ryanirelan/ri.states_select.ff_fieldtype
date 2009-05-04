<?php

if ( ! defined('EXT')) exit('Invalid file request');


/**
 * States Select Class
 * @package   States Select
 * @author    Ryan Irelan <ryan@irelan.net>
 * @copyright 2009 Ryan Irelan
 * @license   http://creativecommons.org/licenses/by-sa/3.0/ Attribution-Share Alike 3.0 Unported
 */

class Ri_states_select extends Fieldframe_Fieldtype {

	var $info = array(
			'name'             => 'RI States Select',
			'version'          => '0.2',
			'desc'             => 'Creates a select menu with the 50 United States of America.',
			'docs_url'         => 'http://github.com'
			);


		/**
		 * Display Field
		 *
		 * @param  string  $field_name      The field's name
		 * @param  mixed   $field_data      The field's current value
		 * @param  array   $field_settings  The field's settings
		 * @return string  The field's HTML
		 */
		function display_field($field_name, $field_data, $field_settings)
		{
		 	global $DSP;
			$states = array(
						'AL'=>"Alabama",
						'AK'=>"Alaska",
						'AZ'=>"Arizona",
						'AR'=>"Arkansas",
						'CA'=>"California",
						'CO'=>"Colorado",
						'CT'=>"Connecticut",
						'DE'=>"Delaware",
						'DC'=>"District Of Columbia",
						'FL'=>"Florida",
						'GA'=>"Georgia",
						'HI'=>"Hawaii",
						'ID'=>"Idaho",
						'IL'=>"Illinois",
						'IN'=>"Indiana",
						'IA'=>"Iowa",
						'KS'=>"Kansas",
						'KY'=>"Kentucky",
						'LA'=>"Louisiana",
						'ME'=>"Maine",
						'MD'=>"Maryland",
						'MA'=>"Massachusetts",
						'MI'=>"Michigan",
						'MN'=>"Minnesota",
						'MS'=>"Mississippi",
						'MO'=>"Missouri",
						'MT'=>"Montana",
						'NE'=>"Nebraska",
						'NV'=>"Nevada",
						'NH'=>"New Hampshire",
						'NJ'=>"New Jersey",
						'NM'=>"New Mexico",
						'NY'=>"New York",
						'NC'=>"North Carolina",
						'ND'=>"North Dakota",
						'OH'=>"Ohio",
						'OK'=>"Oklahoma",
						'OR'=>"Oregon",
						'PA'=>"Pennsylvania",
						'RI'=>"Rhode Island",
						'SC'=>"South Carolina",
						'SD'=>"South Dakota",
						'TN'=>"Tennessee",
						'TX'=>"Texas",
						'UT'=>"Utah",
						'VT'=>"Vermont",
						'VA'=>"Virginia",
						'WA'=>"Washington",
						'WV'=>"West Virginia",
						'WI'=>"Wisconsin",
						'WY'=>"Wyoming");


			$r = $DSP->input_select_header($field_name);
			$r .= $DSP->input_select_option('', '--');
			foreach ($states as $key => $value):
				$r .= $DSP->input_select_option($key, $value, $field_data == $key);
			endforeach;
			$r .= $DSP->input_select_footer();
			return $r;
		}

		/**
		 * Display Cell
		 *
		 * @param  string  $cell_name      The cell's name
		 * @param  mixed   $cell_data      The cell's current value
		 * @param  array   $cell_settings  The cell's settings
		 * @return string  The cell's HTML
		 * @author Brandon Kelly <me@brandon-kelly.com>
		 */
		function display_cell($cell_name, $cell_data, $cell_settings)
		{
			return $this->display_field($cell_name, $cell_data, $cell_settings);
		}

}


?>