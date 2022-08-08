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
 * Strings for component 'jitsi', language 'en', version '4.0'.
 *
 * @package     jitsi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['URLguest'] = 'URL Guest';
$string['access'] = 'Access';
$string['accessto'] = 'Access to {$a}. Enter the name to be displayed.';
$string['accesstotitle'] = 'Access to {$a}';
$string['accesstowithlogin'] = 'Access to {$a}.';
$string['account'] = 'Account';
$string['accountconnected'] = 'Account successfully connected and put <b>in use</b>.';
$string['accountinsufficientprivileges'] = 'The streaming account set up has insufficient privileges. Please contact your administrator.';
$string['accounts'] = 'Streaming/Recording Accounts';
$string['activatetooltip'] = 'Click to put into use';
$string['addaccount'] = 'Add account';
$string['adminaccountex'] = 'At least one account is required in order to stream/record sessions with the "Moodle integrated" method for streaming.
 </br>Just one account can be "<b>in use</b>" and will be used to stream/record all your teacher sessions.
 </br>When adding new accounts it\'s recommended <b>to name them with real account names</b> because in the future you could be required to re-login in order to re-authorize the account.
 </br>Only accounts with no recordings related to teacher\'s Jitsi activities and no recordings pending to be deleted from the streaming servers can be removed here using the trash icon.
 </br>New accounts without credentials could appear here when Jitsi activities backups from other server are restored in this one with accounts that was not present here.';
$string['alias'] = 'Alias';
$string['allow'] = 'Start of videoconference';
$string['apikeyid8x8'] = 'Api Key ID';
$string['apikeyid8x8ex'] = 'Api Key ID to use with 8x8 server. You can get it from the 8x8 server administration. (https://jaas.8x8.com/)';
$string['appaccessinfo'] = 'If you want to join the meeting using a mobile device, you will need the Jitsi Meet mobile application.';
$string['appid'] = 'App_ID';
$string['appidex'] = 'App ID for token configuration';
$string['appinstalledtext'] = 'If you already have the app:';
$string['appnotinstalledtext'] = 'If you don\'t have the app yet:';
$string['attendeesreport'] = 'Attendees report';
$string['authq'] = 'Login with this account to get credentials and put "in use"?';
$string['blurbutton'] = 'Background options';
$string['blurbuttonex'] = 'Show background options';
$string['buttondownloadapp'] = 'Download application';
$string['buttonopeninbrowser'] = 'Open in browser';
$string['buttonopenwithapp'] = 'Join this meeting using the app';
$string['calendarstart'] = 'The videoconference \'{$a}\' start';
$string['click'] = 'Click';
$string['close'] = 'Finish of videoconference';
$string['closebeforeopen'] = 'Could not update the session. You have specified a close date before the open date.';
$string['completiondetail:minutes'] = 'Attend {$a} minutes';
$string['completionminutes'] = 'Student must attend';
$string['completionminutes_help'] = 'Number of minutes that student must attend to give the activity as completed';
$string['completionminutesex'] = 'Minutes to attend';
$string['confirmdeleterecordinactivity'] = 'Confirm you want to delete this recording. This operation can\'t be undone.';
$string['connectedattendeesnow'] = 'Connected attendees now';
$string['copied'] = 'Copied to clipboard';
$string['deeplink'] = 'Deep Link';
$string['deeplinkex'] = 'Allows the transfer of the session to jitsi app.';
$string['deleteq'] = 'Delete and disconect this acco?';
$string['deletesourceq'] = 'Are you sure? The recording will be permanently deleted from the video server and it can not be recovered';
$string['deletesources'] = 'Recordings available to delete';
$string['deletetooltip'] = 'Delete';
$string['deprecated'] = 'Deprecated';
$string['deprecatedex'] = 'Deprecated params that probably will not work because Jitsi Meet changed its implementation';
$string['desktopaccessinfo'] = 'If you want to join the meeting, click on the button below to open Jitsi in your browser.';
$string['domain'] = 'Domain';
$string['domainex'] = 'Domain Jitsi Server to use. You can search in Google for alternative public Jitsi servers that could be nearest to your users and with less latency.
 If you have your private own Jitsi Server inform it here without "https://".';
$string['editrecordname'] = 'Edit record name';
$string['entersession'] = 'Enter to session';
$string['errordeleting'] = 'Error deleting';
$string['experimental'] = 'Experimental';
$string['experimentalex'] = 'These are options that we are experimenting with and that may disappear in future versions.';
$string['finish'] = 'The session has finish.';
$string['finishandreturn'] = 'Finish and Return';
$string['finishandreturnex'] = 'Return to course when finish the session';
$string['finishinvitation'] = 'Invitation link will expire on';
$string['fullscreen'] = 'Full Screen';
$string['guestform'] = 'Enter to guest form';
$string['hasentered'] = 'has entered on your private Jitsi session';
$string['help'] = 'Help';
$string['helpex'] = 'Instruction text for show at Jitsi activity';
$string['here'] = 'here';
$string['identification'] = 'ID User';
$string['identificationex'] = 'ID to show in the session';
$string['instruction'] = 'Click the button to access';
$string['integrated'] = 'Moodle Integrated';
$string['inuse'] = '<b>(in use)</b>';
$string['invitations'] = 'Invitations';
$string['invitationsnotactivated'] = 'The invitations is not activated';
$string['invitebutton'] = 'Invite Options';
$string['invitebuttonex'] = 'Show invite options on session';
$string['iscalling'] = 'is calling you to enter on his private Jitsi';
$string['jitsi'] = 'Jitsi';
$string['jitsi:addinstance'] = 'Add a new Jitsi';
$string['jitsi:createlink'] = 'Create link to invite to session';
$string['jitsi:hide'] = 'Hide recordings';
$string['jitsi:moderation'] = 'Jitsi Moderation';
$string['jitsi:record'] = 'Record session';
$string['jitsi:sharedesktop'] = 'Share Desktop';
$string['jitsi:view'] = 'View Jitsi';
$string['jitsi:viewusersonsession'] = 'Access to the attendees reports';
$string['jitsiinterface'] = 'Jitsi interface';
$string['jitsiname'] = 'Session name';
$string['linkexpiredon'] = 'This link expired on {$a}';
$string['loginq'] = 'Do you want to put in use this accout?';
$string['logintooltip'] = 'Credentials for this account are required';
$string['loginyoutube'] = 'Log In Youtube';
$string['logoutyoutube'] = 'Log Out Youtube';
$string['mailprivacy'] = 'Email only will use for gravatar option';
$string['messageprovider:callprivatesession'] = 'Call to Jitsi private';
$string['messageprovider:onprivatesession'] = 'User on private session';
$string['minpretime'] = 'Minutes to access';
$string['minpretime_help'] = 'Users with moderation permissions will be able to access these minutes before the start';
$string['minutesconnected'] = 'You have been connected for {$a} minutes';
$string['modulename'] = 'Jitsi';
$string['modulename_help'] = 'Use the Jitsi module for videoconference. These videoconferences will use your Moodle username by displaying your username and avatar in videoconferences.

Jitsi-meet is an open-source videoconferencing solution that enables you to easily build and implement secure video conferencing solutions.';
$string['modulenameplural'] = 'Jitsis';
$string['myprivatesession'] = 'My private session';
$string['nameandsurname'] = 'Firstname + Lastname';
$string['newvaluefor'] = 'New value for';
$string['noinviteaccess'] = 'Guest access is currently not allowed.';
$string['nojitsis'] = 'No Jitsi activities found';
$string['nostart'] = 'The session has not started. You can access {$a} minutes before the start';
$string['notloggedin'] = 'Account credentials required';
$string['noviewpermission'] = 'You do not have permission for view this Jitsi session';
$string['oauthid'] = 'OAuth2 id';
$string['oauthidex'] = 'Oauth2 id google account';
$string['oauthsecret'] = 'OAuth2 secret';
$string['oauthsecretex'] = 'Oauth2 Secret google account';
$string['participantspane'] = 'Participants panel';
$string['participantspaneex'] = 'Show the participants panel to all users. When uncheck only users with Jitsi Moderation capability (mod/jitsi:moderation), usually teachers, can watch the panel.';
$string['participatingsession'] = 'Participating in session';
$string['password'] = 'Password';
$string['passwordex'] = 'Password for protect your sessions. Recommended if you use public server';
$string['pluginadministration'] = 'Jitsi administration';
$string['pluginname'] = 'Jitsi';
$string['preparing'] = 'Preparing. Please wait...';
$string['privacy:metadata:jitsi'] = 'In order to integrate with a Jitsi session, user data needs to be exchanged with that service.';
$string['privacy:metadata:jitsi:avatar'] = 'The avatar is sent from moodle to show to the other users of the Jitsi session';
$string['privacy:metadata:jitsi:username'] = 'The username is sent from moodle to show to the other users of the Jitsi session';
$string['privatekey'] = 'Private key';
$string['privatekeyex'] = 'Private key to sign the token with 8x8 server. You can get it from the 8x8 server administration. (https://jaas.8x8.com/)';
$string['privatesession'] = '{$a} private session';
$string['privatesessiondisabled'] = 'Private sessions are disabled';
$string['privatesessions'] = 'Private sessions';
$string['privatesessionsex'] = 'Add private sessions to user profiles';
$string['raisehand'] = 'Raise hand button';
$string['raisehandex'] = 'Show the raisehad button to all users. When users raise their hands they can access to the participants panel. If you hide the participants panels may be you should hide this button.';
$string['reactions'] = 'Reactions';
$string['reactionsex'] = 'Shows sound emoticons of applause, surprise, etc ... "Raise hand button" enabled is required';
$string['record'] = 'Record option';
$string['recordex'] = 'Allow record option';
$string['records'] = 'Records';
$string['recordtitle'] = 'Record';
$string['secret'] = 'Secret';
$string['secretex'] = 'Secret for token configuration';
$string['securitybutton'] = 'Security Button';
$string['securitybuttonex'] = 'Show security button on session';
$string['separator'] = 'Separator';
$string['separatorex'] = 'Define the field separator for the session name';
$string['server'] = 'Jitsi Server';
$string['serverexpl'] = 'Jitsi Server url';
$string['sessionisbeingrecorded'] = 'Session is being recorded';
$string['sessionnamefields'] = 'Session name fields';
$string['sessionnamefieldsex'] = 'Fields that define the session name';
$string['sharetoinvite'] = 'Share this link to invite someone to the session';
$string['showavatars'] = 'Show avatars in Jitsi';
$string['showavatarsex'] = 'Show the avatar of the user in Jitsi. If the user has no profile picture this will load the default profile picture from Moodle instead of the initials Jitsi will show when no picture is set.';
$string['simultaneouscameras'] = 'Simultaneous cameras';
$string['simultaneouscamerasex'] = 'Number of simultaneous cameras';
$string['startstream'] = 'Start stream';
$string['stopstream'] = 'Stop stream';
$string['streamingandrecording'] = 'Streaming and recording';
$string['streamingbutton'] = 'Youtube Streaming';
$string['streamingbuttonex'] = 'Show streaming option.';
$string['streamingconfig'] = 'Streaming configuration';
$string['streamingconfigex'] = 'Youtube Streaming. For integrate method you need add the following url to Authorized redirect URIs \'{$a}\' on Google api console.';
$string['streamingoption'] = 'Method';
$string['streamingoptionex'] = 'Choose if you want automatic integration with youtube streaming or use the streaming option of Jitsi interface';
$string['tablelistjitsis'] = 'List with all the videos in your Streaming/Recording Accounts providers which are available to be deleted because they are no more linked in Jitsi activities in this moodle instance. You can safely delete them in order to free up space on the streaming server. The list could include videos that now are in the \'Recycle bin\' in some course. It\'s recommended to delete just old recordings that you know won\'t be required. </br></br> <b>¡¡¡ WARNING!!! </b>If you have moodle backup instances you should NOT remove these videos if they are linked in other instances.';
$string['toenter'] = 'to enter';
$string['tokenconfiguration8x8ex'] = 'If you use 8x8 servers you need to configure the following parameters.';
$string['tokenconfigurationex'] = 'Empty for servers without token';
$string['tokennconfig'] = 'Token configuration';
$string['tokennconfig8x8'] = '8x8 Servers configuration';
$string['updated'] = 'Updated';
$string['usercall'] = '{$a} calls you for a private Jitsi';
$string['userenter'] = '{$a} is on Jitsi';
$string['username'] = 'Username';
$string['validitytime'] = 'Validity time';
$string['validitytime_help'] = 'Link validity time';
$string['validitytimevalidation'] = 'The invitation cannot expire before the session start date or after the session end date.';
$string['warningprivate'] = 'If you access, {$a} will be warned with a notification.';
$string['watermarklink'] = 'Watermark Link';
$string['watermarklinkex'] = 'Watermark Link';
$string['youtubebutton'] = 'Youtube sharing option';
$string['youtubebuttonex'] = 'Show youtube sharing option';
