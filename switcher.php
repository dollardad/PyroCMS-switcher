<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Switcher Plugin
 *
 * usage {{ switcher:class_row class="left|center|right" }}
 * Note:
 * Each class is separated by the pipe key and no spaces.
 * No limit to the number of alternate classes.
 *
 * @package		PyroCMS
 * @author		Kevin Phillips
 * @copyright	Copyright (c) Kevin Phillips
 * @link http://www.kevinphillips.co.nz
 * @param string
 * @return string
 * @version 1.1
 *
 */
class Plugin_Switcher extends Plugin {
        
    function class_row()
    {
        $classes = $this->attribute('class');
        
        $values = explode('|', $classes);
        
        // Uses Codeigniter String Helper function alternator();
        if( ! function_exists('alternator'))
        {
            $CI =& get_instance();
            $CI->load->helper('string');
        }
        return call_user_func_array('alternator', $values);
    }
}

/* End of file switcher.php */