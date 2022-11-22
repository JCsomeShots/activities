<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * The main mod_activities configuration form.
 *
 * @package     mod_activities
 * @copyright   2022 JcSomeCodes <juancarlo.castillo20@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/course/moodleform_mod.php');
require_once('../../config.php');
require_once($CFG->libdir.'/formslib.php');

/**
 * Module instance settings form.
 *
 * @package     mod_activities
 * @copyright   2022 JcSomeCodes <juancarlo.castillo20@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_option_form extends moodleform {

    /**
     * Defines forms elements
     */
    public function definition() {
        global $CFG , $DB;

        $mform = $this->_form;


        $mform->createElement('text', 'option', get_string('optionone', 'activities'));
        $mform->setType('option', PARAM_TEXT);
        // $mform->createElement('hidden', 'optionid', 0);
        // $mform->setType('optionid', PARAM_INT);

        $mform->createElement('text', 'option', get_string('optiontwo', 'activities'));
        $mform->createElement('hidden', 'optionid', 1);
        $mform->setType('optionid', PARAM_INT);

        $mform->createElement('text', 'option', get_string('optionthree', 'activities'));
        $mform->createElement('hidden', 'optionid', 2);
        $mform->setType('optionid', PARAM_INT);





        // $repeatarray = array();
        // $repeatarray[] = $mform->createElement('text', 'option', get_string('optionno', 'choice'));
        // // $repeatarray[] = $mform->createElement('text', 'limit', get_string('limitno', 'choice'));
        // $repeatarray[] = $mform->createElement('hidden', 'optionid', 0);
    
        // // if ($this->_instance){
        // //     $repeatno = $DB->count_records('choice_options', array('choiceid'=>$this->_instance));
        // //     $repeatno += 2;
        // // } else {
        // //     $repeatno = 3;
        // // }
        // $repeatno = 3;
    
        // $repeateloptions = array();
        // $repeateloptions['limit']['default'] = 0;
        // // $repeateloptions['limit']['hideif'] = array('limitanswers', 'eq', 0);
        // $repeateloptions['limit']['rule'] = 'numeric';
        // $repeateloptions['limit']['type'] = PARAM_INT;
    
        // $repeateloptions['option']['helpbutton'] = array('choiceoptions', 'choice');
        // $mform->setType('option', PARAM_CLEANHTML);
    
        // $mform->setType('optionid', PARAM_INT);
    
        // $this->repeat_elements($repeatarray, $repeatno,
        //             $repeateloptions, 3, null, false);


        // $this->add_action_buttons();
    }
}
