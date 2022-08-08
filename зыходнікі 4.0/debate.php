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
 * Strings for component 'debate', language 'en', version '4.0'.
 *
 * @package     debate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['active'] = 'Active';
$string['attemptsdeleted'] = 'Debate responses deleted';
$string['cancel'] = 'Cancel';
$string['cancel_team_form'] = 'Cancel';
$string['confirm_delete'] = 'Are you sure you want to delete this response?';
$string['cons'] = 'Negative';
$string['cons_response_count'] = 'Negative response count';
$string['cons_user_count'] = 'Negative user count';
$string['createnew'] = 'Create new team';
$string['debate:addinstance'] = 'Add a new debate instance';
$string['debate:deleteanyresponse'] = 'Delete any debate response';
$string['debate:deleteownresponse'] = 'Delete own debate response';
$string['debate:manageteams'] = 'Manage debate teams';
$string['debate:updateownresponse'] = 'Update own debate response';
$string['debate:view'] = 'View debate content';
$string['debate_team_active'] = 'Debate team: {$a->name} activated.';
$string['debate_team_active_error'] = 'Failed to activate debate team: {$a->name}.';
$string['debate_team_deactive'] = 'Debate team: {$a->name} deactivated.';
$string['debate_team_deactive_error'] = 'Failed to deactivate debate team: {$a->name}.';
$string['debate_team_delete_failed'] = 'Debate team: {$a->name} could not be deleted.';
$string['debate_team_deleted'] = 'Debate team: {$a->name} is successfully deleted.';
$string['debate_team_saved'] = 'Debate team saved.';
$string['debate_teams'] = 'Debate teams';
$string['debate_topic'] = 'Debate topic';
$string['debatename'] = 'Name';
$string['debateresponsecom'] = 'Students must post responses';
$string['debateresponsecomgroup'] = 'Require response';
$string['delete'] = 'Delete';
$string['delete_debate_team'] = 'Delete debate team';
$string['delete_debate_team_confirmation'] = 'Are you sure you want to delete debate team: {$a->name} ?';
$string['edit'] = 'Edit';
$string['edit_mode_active'] = 'Either the edit mode is active or no more response is allowed.';
$string['edit_negative_team'] = 'Edit negative team';
$string['edit_positive_team'] = 'Edit positive team';
$string['empty_response'] = 'Cannot save empty response';
$string['error_add'] = 'Error updating response, please check the typed response, it can only accept text';
$string['error_delete'] = 'Error deleting response, please check database for more info';
$string['event_response_added'] = 'Debate response added';
$string['event_response_added_desc'] = 'The user with id "{$a->userid}" has added a response with id "{$a->objectid}" in the debate with id "{$a->debateid}"';
$string['event_response_deleted'] = 'Debate response deleted';
$string['event_response_deleted_desc'] = 'The user with id {$a->userid} has deleted the response with id {$a->objectid} in the debate with id {$a->debateid}';
$string['event_response_error'] = 'Error from debate response';
$string['event_response_error_desc'] = 'There was an error occurred for user with id {$a->userid} while trying to update a debate response';
$string['event_response_updated'] = 'Debate response updated';
$string['event_response_updated_desc'] = 'The user with id {$a->userid} has updated the response with id {$a->objectid} in the debate with id {$a->debateid}';
$string['goback'] = 'Go back';
$string['grade_debater'] = 'Grade debaters';
$string['groupselection'] = 'Selects groups';
$string['id'] = 'ID';
$string['inactive'] = 'Inactive';
$string['join_debate'] = 'Join/View debate';
$string['manage_negative_team'] = 'Manage negative teams';
$string['manage_positive_team'] = 'Manage positive teams';
$string['manage_teams'] = 'Manage teams';
$string['maximum_character_2'] = 'Maximum 2 digit numbers allowed for the number of responses';
$string['maximum_character_255'] = 'Maximum 255 characters accepted.';
$string['missingidandcmid'] = 'Missing course module ID';
$string['missingresponsetype'] = 'Missing response type';
$string['modulename'] = 'Debate';
$string['modulenameplural'] = 'Debates';
$string['name'] = 'Name';
$string['no_more_response'] = 'No more response allowed for this side from your team.';
$string['no_possible_match'] = 'No matching responses';
$string['no_team'] = 'Your team does not allow responses in this side.';
$string['one_response'] = 'Allow one response in any one side';
$string['one_response_any_side'] = 'Only one response allowed in any one side, you can not add any more responses.';
$string['one_response_each_side'] = 'Only one response allowed in each side, you can not add any more responses as you already have a response for this side.';
$string['pluginadministration'] = 'Debate Admin';
$string['pluginname'] = 'Debate';
$string['possible_match'] = 'Possible matching responses';
$string['privacy:metadata:debate_response'] = 'Information about the response of the debate topic for a debate Course';
$string['privacy:metadata:debate_response:courseid'] = 'The ID of the debate course';
$string['privacy:metadata:debate_response:debateid'] = 'The ID of the debate instance';
$string['privacy:metadata:debate_response:response'] = 'The response of the user for the debate activity';
$string['privacy:metadata:debate_response:responsetype'] = 'The response type for debate activity from the user';
$string['privacy:metadata:debate_response:timecreated'] = 'The timestamp indicating when a user first recorded an interaction with the debate Course';
$string['privacy:metadata:debate_response:timemodified'] = 'The timestamp indicating when a user last recorded an interaction with the debate Course';
$string['privacy:metadata:debate_response:userid'] = 'The ID of the debate response user';
$string['pros'] = 'Positive';
$string['pros_response_count'] = 'Positive response count';
$string['pros_user_count'] = 'Positive user count';
$string['reset_debate_attempts'] = 'Delete debate responses';
$string['reset_debate_teams'] = 'Delete debate teams';
$string['responseallowed'] = 'Response allowed';
$string['save'] = 'Save';
$string['showinmodule'] = 'Show description in the module page';
$string['showinmodule_help'] = 'Show the description in the view module page after the debate topic';
$string['status'] = 'Status';
$string['success_delete'] = 'Successfully deleted the response';
$string['teamsdeleted'] = 'Debate teams deleted';
$string['timemodified'] = 'Time modified';
$string['topicheader'] = 'Topic';
$string['two_response'] = 'Allow one response in each side';
$string['unlimited_response'] = 'Allow unlimited response';
$string['update'] = 'Update';
$string['use_teams'] = 'Use teams feature';
$string['user_response'] = 'User response type';
