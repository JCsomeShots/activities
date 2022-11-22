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

/**
 * Module instance settings form.
 *
 * @package     mod_activities
 * @copyright   2022 JcSomeCodes <juancarlo.castillo20@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_activities_mod_form extends moodleform_mod {

    /**
     * Defines forms elements
     */
    public function definition() {
        global $CFG , $DB;

        $mform = $this->_form;

        // Adding the "general" fieldset, where all the common settings are shown.
        // $mform->addElement('header', 'general', get_string('general', 'form'));

        // Adding the standard "name" field.
        // $mform->addElement('text', 'name', get_string('activitiesname', 'mod_activities'), array('size' => '64'));

        // if (!empty($CFG->formatstringstriptags)) {
        //     $mform->setType('name', PARAM_TEXT);
        // } else {
        //     $mform->setType('name', PARAM_CLEANHTML);
        // }
        $mform->addElement('static', 'name' , get_string('name' , 'activities'));
        // $mform->setType('text', PARAM_TEXT);

        $mform->addElement('text', 'option0', get_string('optionone', 'activities'));
        $mform->setType('option0', PARAM_TEXT);
        $mform->setDefault('option0', 'Very good');
        $mform->createElement('hidden', 'optionid', 0);
        $mform->setType('optionid', PARAM_INT);
        
        $mform->addElement('text', 'option1', get_string('optiontwo', 'activities'));
        $mform->setType('option1', PARAM_TEXT);
        $mform->setDefault('option1', 'Good');
        $mform->createElement('hidden', 'optionid', 1);
        $mform->setType('optionid', PARAM_INT);
        
        $mform->addElement('text', 'option2', get_string('optionthree', 'activities'));
        $mform->setType('option2', PARAM_TEXT);
        $mform->setDefault('option2', 'Almost good');
        $mform->createElement('hidden', 'optionid', 2);
        $mform->setType('optionid', PARAM_INT);
        
        $mform->addElement('text', 'option3', get_string('optionfour', 'activities'));
        $mform->setType('option3', PARAM_TEXT);
        $mform->setDefault('option3', 'Not so good');
        $mform->createElement('hidden', 'optionid', 3);
        $mform->setType('optionid', PARAM_INT);


    /************************* */

    // $mform = $this->_form;

    // $mform->addElement('header', 'generalhdr', get_string('general'));
    // $this->standard_intro_elements(get_string('labeltext', 'label'));

    // // Label does not add "Show description" checkbox meaning that 'intro' is always shown on the course page.
    // $mform->addElement('hidden', 'showdescription', 1);
    // $mform->setType('showdescription', PARAM_INT);

    // $this->standard_coursemodule_elements();

//-------------------------------------------------------------------------------
// buttons
    $this->add_action_buttons(true, false, null);


    // $repeatarray = array();
    // $repeatarray[] = $mform->createElement('text', 'name', 'choice');
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
    // // $mform->setType('option', PARAM_CLEANHTML);

    // // $mform->setType('optionid', PARAM_INT);

    // $this->repeat_elements($repeatarray, $repeatno,
    //             3, null, false);


    // Make the first option required
    // if ($mform->elementExists('option[0]')) {
    //     $mform->addRule('option[0]', get_string('atleastoneoption', 'choice'), 'required', null, 'client');
    // }
    /************************* */


        // $mform->addRule('name', null, 'required', null, 'client');
        // $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');
        // $mform->addHelpButton('name', 'activitiesname', 'mod_activities');

        // // Adding the standard "intro" and "introformat" fields.
        // if ($CFG->branch >= 29) {
        //     $this->standard_intro_elements();
        // } else {
        //     $this->add_intro_editor();
        // }

        // // Adding the rest of mod_activities settings, spreading all them into this fieldset
        // // ... or adding more fieldsets ('header' elements) if needed for better logic.
        // $mform->addElement('static', 'label1', 'activitiessettings', get_string('activitiessettings', 'mod_activities'));
        // $mform->addElement('header', 'activitiesfieldset', get_string('activitiesfieldset', 'mod_activities'));

        // // Add standard elements.
        // $this->standard_coursemodule_elements();

        // Add standard buttons.
        // $this->add_action_buttons();
    }
}
