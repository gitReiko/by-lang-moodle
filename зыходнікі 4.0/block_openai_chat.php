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
 * Strings for component 'block_openai_chat', language 'en', version '4.0'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['agentname'] = 'Agent name';
$string['agentnamedesc'] = 'The name that the AI will use for itself internally';
$string['apikey'] = 'OpenAI API Key';
$string['apikeydesc'] = 'The API Key for your OpenAI account';
$string['apikeymissing'] = 'Please add your OpenAI API key to the global block settings.';
$string['askaquestion'] = 'Ask a question...';
$string['blocktitle'] = 'Block title';
$string['defaultagentname'] = 'Agent';
$string['defaultprompt'] = 'Below is a conversation between a user and a support agent for a Moodle site, where users go for online learning:';
$string['defaultusername'] = 'User';
$string['erroroccurred'] = 'An error occurred! Please try again later.';
$string['openai_chat'] = 'OpenAI Chat';
$string['openaichat:addinstance'] = 'Add a new OpenAI Chat block';
$string['openaichat:myaddinstance'] = 'Add a new OpenAI Chat block to the My Moodle page';
$string['pluginname'] = 'OpenAI Chat Block';
$string['privacy:metadata'] = 'The OpenAI Chat block stores no personal user data; nor does it, by default, send personal data to OpenAI. However, chat messages submitted by users are sent in their entirety to OpenAI, and are then subject to OpenAI\'s privacy policy (https://openai.com/api/policies/privacy/), which may store messages in order to improve the API.';
$string['prompt'] = 'Completion prompt';
$string['promptdesc'] = 'The prompt the AI will be given before the conversation transcript';
$string['restrictusage'] = 'Restrict chat usage to logged-in users';
$string['restrictusagedesc'] = 'If this box is checked, only logged-in users will be able to use the chat box.';
$string['showlabels'] = 'Show labels';
$string['sourceoftruth'] = 'Source of truth';
$string['sourceoftruthdesc'] = 'Although the AI is very capable out-of-the-box, if it doesn\'t know the answer to a question, it is more likely to give incorrect information confidently than to refuse to answer. In this textbox, you can add common questions and their answers for the AI to pull from. Please put questions and answers in the following format: <pre>Q: Question 1<br />A: Answer 1<br /><br />Q: Question 2<br />A: Answer 2</pre>';
$string['username'] = 'User name';
$string['usernamedesc'] = 'The name that the AI will use for the user internally';
