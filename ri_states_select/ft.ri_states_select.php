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
			'version'          => '0.1',
			'desc'             => 'Creates a select menu with the 50 United States of America.',
			'docs_url'         => 'http://github.com'
			);
			
			
		function display_field($field_name, $field_data, $field_settings)
		{
		 	global $DSP;
			$states = array('AL'=>"Alabama",  
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
			foreach ($states as $key => $value):
				$r .= $DSP->input_select_option($key, $value, $field_data == $key);
			endforeach;
			$r .= $DSP->input_select_footer();			
			return $r; 
		}
}


?>