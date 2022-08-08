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
 * Strings for component 'block_ask4summary', language 'en', version '4.0'.
 *
 * @package     block_ask4summary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhocqueue'] = 'Adhoc Queued!';
$string['allforums'] = 'Respond to all discussion forums in the course';
$string['answered'] = 'Answered Posts';
$string['answeredposts'] = 'Answered Posts:';
$string['answerq'] = 'Question Answering';
$string['answersettings'] = 'Summary Generation Settings';
$string['ask4summary'] = 'ask4summary';
$string['ask4summary:addinstance'] = 'Add ask4summary block';
$string['ask4summary:myaddinstance'] = 'Add ask4summary to dashboard';
$string['autoforum'] = 'An automatically generated forum';
$string['autoname'] = 'Automatically generated form name (if applicable)';
$string['autoname_desc'] = 'If the automatically generated form option is selected, choose what it should be called.';
$string['avgtime'] = 'Ask4Summary has an average answer time of: {$a} seconds.';
$string['blocka4shelper'] = 'Ask4Summary Helper Name: {$a}';
$string['blockstring'] = 'Ask4Summary Helper Name';
$string['blockstring_desc'] = 'Set the default name for Ask4Summary.';
$string['cannotparse'] = 'Cannot parse course module (disabled or failed): {$a}';
$string['clobjsettings'] = 'Course Learning Object Scan Settings';
$string['config_enablepdf'] = 'Enable PDF Parsing';
$string['config_enablepdf_help'] = 'PDF Parsing requires the external application AbiWord. Without AbiWord, PDF files cannot be parsed.';
$string['configvid'] = 'Configuration';
$string['courseid'] = 'Course ID: {$a}';
$string['coursemoduleid'] = 'Course Module ID: {$a}';
$string['coursemodules'] = 'Course Modules';
$string['crawldepth'] = 'URL Crawling Depth';
$string['crawldepth_desc'] = 'How deep should Ask4Summary analyze additional webpages within a webpage.';
$string['currentcourse'] = 'Working on Course ID: {$a}';
$string['currenton'] = 'Ask4Summary is currently: {$a}';
$string['currentresponse'] = 'Currently Set Response Type: {$a}';
$string['defaultauto'] = 'Ask4Summary Response Forum';
$string['defaultname'] = 'XXXX';
$string['deletedforum'] = 'NOTE: The currently selected forum has been deleted. Please set a new forum in Block Configuration.';
$string['disabled'] = 'Disabled';
$string['docsabi'] = 'PDF: AbiWord';
$string['docsabidesc1'] = 'PDF Processing with Ask4Summary is disabled by default because it requires the external application "AbiWord".';
$string['docsabidesc2'] = 'AbiWord is a free, open source software that is used for word processing. It provides a wide variety of functionality; but, Ask4Summary uses it to get the text content from a course module PDF.';
$string['docsabidesc3'] = 'Ask4Summary will still be functional without the use of this application; however, PDF parsing will not be able to function correctly. Since Ask4Summary needs AbiWord to get the text content, without it, there will be no text content generated from a PDF file. This will record the PDF file in the Ask4Summary database with no text content, rendering the course module useless.';
$string['docsabidesc4'] = 'If you are unsure if your administrator has installed AbiWord, contact them, or simply keep PDF parsing disabled.';
$string['docsabidesc5'] = 'For administrators, to install AbiWord on Ubuntu:';
$string['docsabiinstall1'] = 'Access the terminal';
$string['docsabiinstall2'] = 'Enter "sudo apt install abiword"';
$string['docsabiinstall3'] = 'Or if you would prefer to use the Software Center Ubuntu has:';
$string['docsabiinstall4'] = 'Open Ubuntu Software Center';
$string['docsabiinstall5'] = 'Search for AbiWord';
$string['docsabiinstall6'] = 'Go to the install page for AbiWord';
$string['docsabiinstall7'] = 'Click install';
$string['docsabiinstall8'] = 'Enter your password';
$string['docsabiinstall9'] = 'For other distributions of Linux, please see the AbiWord site, or the additonal link provided:';
$string['docsabilink1'] = 'AbiWord Official Site';
$string['docsabilink2'] = 'How to install AbiWord';
$string['docsabiurl'] = 'For more information on why PDF parsing is disabled by default, see <a href={$a->wwwroot}/blocks/ask4summary/documentation.php?id={$a->id}#abi> the documentation page.</a>';
$string['docsalgo'] = 'How does the algorithm work?';
$string['docsalgodesc'] = 'The VIP Research algorithm works by using Part of Speech analysis, a method which breaks down words by what type they are (noun, adjective, verb, etc). This is done by taking the user question and breaking it apart, sentence by sentence. Afterwards, it analyzes the most important words of that sentence, called "N-Grams", and retrieves their Parts of Speech. Then, with use of "Cosine Similarity", it will compare the N-Grams taken from the user question to the frequency of N-Grams taken from the course content. Then, by comparison to every resource, it will take the sentences that relate the best to the user question.';
$string['docsalgodesc2'] = 'However, there are some limitations of the algorithm. Since the answer is based on frequency of the top Part of Speech N-Grams, certain words not may not be recognized. These words may be critical to the user question, and may result in a different result entirely. So our recommendation is to stick to singular nouns and adjectives in your query.';
$string['docsallforum'] = 'Consider every single forum within the course (this is the default)';
$string['docsanchor'] = 'Documentation';
$string['docsautoforum'] = 'Create a forum in the course, and only consider that (the name can be selected)';
$string['docscm'] = 'What are course modules, and what does Ask4Summary use them for?';
$string['docscmdesc1'] = 'Course modules are activities and resources that are available within the course. Good examples of course modules are things such as assignments, forums, files, and webpage links.';
$string['docscmdesc2'] = 'Ask4Summary scans and parses course modules for their text content to build its N-Gram and Part of Speech database, for learning algorithm purposes.';
$string['docscmdesc3'] = 'The course modules that Ask4Summary currently supports scanning for are:';
$string['docscmdesc4'] = 'There are additional settings also found in "Configure Ask4Summary Block" that specifically relate to course module scanning and parsing.';
$string['docscmdesc5'] = 'These settings include:';
$string['docscmdesc6'] = 'PDF parsing is disabled by default. Please see the PDF: AbiWord section for more information on why.';
$string['docscmdesc7'] = 'The recommendation for improving the quality of sentences parsed would be to include resources and files which are strictly text based. Text based in images cannot be parsed, and documents with special formatting may be parsed differently than expected.';
$string['docscmdesc8'] = 'Our personal recommendation for the best course modules to use would be Word documents, Moodle pages, and PDFs, generally in paragraph format. In a format like this, it makes it very easy for the plugin to gather text content.';
$string['docscmdesc9'] = 'The other two formats, URLs and Powerpoints, are variable in format which can be tricky for the plugin to gather text content. If you would like to use these, consider keeping the crawling depth to 1, including webpages with paragraph content, and to have the Powerpoint slides in some kind of sentence format.';
$string['docscossim'] = 'What is Cosine Similarity?';
$string['docsdescription1'] = 'Ask4Summary is a plugin designed to use the VIP Research Summary Generation algorithm to produce a response to a user query relating to their course. This is implemented in Moodle by utilizing the forum feature which allows course users to post a question and have the plugin generate a response.';
$string['docsdescription2'] = 'This forum can be designated by a teacher and/or an administrator and will check for posts which contain the set "Helper Name" - what users will refer to as Ask4Summary in their question. It will then use the Summary Generation algorithm to produce a response, and directly respond to the same forum posting.';
$string['docsdescription3'] = 'The Ask4Summary plugin also has an additional function, which is the ability to scan and parse course modules text content. These course modules (files such as PDFs, Word Documents, URLs and Powerpoint Presentations) will be then used as a learning tool for the plugin.';
$string['docsdocx'] = 'Microsoft Word files';
$string['docsdocxon'] = 'Whether Word document scanning and parsing should be enabled';
$string['docsenable'] = 'Whether the response functionality should be enabled';
$string['docsenabledesc'] = 'The checkbox may or may not be greyed out, depending if an administrator has disabled the ability to change it';
$string['docsexistingforum'] = 'Consider only a specific forum that already exists in the course (this can be chosen)';
$string['docsforum'] = 'The forum response type';
$string['docshelperdesc'] = 'This is what students need to include within their forum posting (either in the subject or the question itself) to trigger Ask4Summary to answer their question';
$string['docshelpername'] = 'The Ask4Summary helper name';
$string['docsmoreinfo'] = 'For more information, see the following webpages:';
$string['docsngram'] = 'What are N-Grams and POS?';
$string['docspage'] = 'Moodle Pages';
$string['docspageon'] = 'Whether Moodle Page scanning and parsing should be enabled';
$string['docspdf'] = 'PDF files';
$string['docspdfon'] = 'Whether PDF file scanning and parsing should be enabled';
$string['docspptx'] = 'Microsoft Powerpoint Presentation slides';
$string['docspptxon'] = 'Whether Powerpoint scanning and parsing should be enabled';
$string['docsprog'] = 'How can I see the progress of Ask4Summary processes?';
$string['docsprogdesc1'] = 'To see the progress of Ask4Summary processes, head over to the "Logistics" tab, either from the top of this webpage, or from the block itself in your course. Once here, you will be able to see the relative progress of forum posts scanned, forum posts answered, course modules scanned, and course modules remaining.';
$string['docsprogdesc2'] = 'There are specifics and further description within the page itself. See here and read the "Logistics" information at the top of the page for more information:';
$string['docsquery'] = 'How is a question asked? How long does it usually take?';
$string['docsquerydesc1'] = 'Questions are asked by going to the selected forum option, and including "Hi (Helpername)" in the forum post, or including exactly that in the subject of the forum post.';
$string['docsquerydesc2'] = 'For example, if you would like to ask "How long should my report be?" and your helpername is set to "A4S", you would write your forum post as "Hi A4S How long should my report be?", or have your subject as "Hi A4S", then simply have the post contain the question.';
$string['docsquerydesc3'] = 'The time for a question to be answered depends entirely on the length of the question and the amount of files parsed at the time of the question. Generally, however, the process is relatively quick.';
$string['docssettings'] = 'Where are the settings controlled? What can be changed?';
$string['docssettingsdesc1'] = 'All of the plugins settings are controlled in block configuration. To arrive there, simply turn editing on for the course, click the gear on the top right-hand side of the plugin, and choose "Configure Ask4Summary Block."';
$string['docssettingsdesc2'] = 'Once on the edit form screen, there will be several options to choose from:';
$string['docssettingsdesc3'] = 'There are also course module scanning options to choose from, which will be explained in the following section.';
$string['docssettingsdesc4'] = 'It is important to note that these settings will only affect the course which the block was accessed. So, if you have the plugin put in multiple courses, and would like to change the administrator defaults, you will need to individually change each course blocks settings.';
$string['docstime'] = 'Can I control how often questions or course modules are scanned?';
$string['docstimedesc1'] = 'If you are an administrator, you can control the intervals for forum scanning and document scanning from the "Site Administration: Server" tab.';
$string['docstimedesc2'] = 'If you are not an administrator, the default intervals are unintrusive and will not slow down course performance. Course modules, which will certainly take the longest to scan and parse, happen from midnight to six in the morning, so class performance will not be reduced. Forum post scanning is minor, and once posts are scanned it will not consider them again.';
$string['docsurl'] = 'URL webpages';
$string['docsurldepth'] = 'How many webpages found within webpages should be considered when parsing';
$string['docsurlon'] = 'Whether webpage scanning and parsing should be enabled';
$string['docsvipacq'] = 'VIP Research Group Ask CovidQ';
$string['docsvipngram'] = 'VIP Research Group N-Gram POS';
$string['docswhatis'] = 'What is Ask4Summary?';
$string['docx'] = 'DOCX';
$string['enable'] = 'Enable Ask4Summary';
$string['enable_desc'] = 'When enabled, Ask4Summary will parse forums and respond to questions.';
$string['enabled'] = 'Enabled';
$string['enabledocx'] = 'Enable DOCX Parsing';
$string['enabledocx_desc'] = 'When enabled, Ask4Summary will scan DOCX modules and get their content.';
$string['enablepage'] = 'Enable Moodle Page Parsing';
$string['enablepage_desc'] = 'When enabled, Ask4Summary will scan Moodle Pages and get their content.';
$string['enablepdf'] = 'Enable PDF Parsing';
$string['enablepdf_desc'] = 'When enabled, Ask4Summary will scan PDF modules and get their content.';
$string['enablepptx'] = 'Enable PPTX Parsing';
$string['enablepptx_desc'] = 'When enabled, Ask4Summary will scan PPTX modules and get their content.';
$string['enableurl'] = 'Enable URL Parsing';
$string['enableurl_desc'] = 'When enabled, Ask4Summary will scan through course URL links and get their content.';
$string['existinganswer'] = 'Existing N-Gram combination found in summaries!';
$string['existingforum'] = 'An existing forum in the course';
$string['finished'] = 'Finished';
$string['forumposts'] = 'Forum Posts';
$string['forums'] = 'Select the forum (if applicable)';
$string['forums_desc'] = 'Choose which forum should be specifically responded to.';
$string['forumsettings'] = 'Forum Settings';
$string['grantteacher'] = 'Give instructor permissions';
$string['grantteacher_desc'] = 'Give the instructor the ability to enable or disable the Ask4Summary functionality.';
$string['guideanchor'] = 'Student Guide';
$string['identifier'] = 'The Ask4Summary response form.';
$string['location'] = 'Where will the summary be located?';
$string['locationdesc1'] = 'The summary location will be located in the same discussion forum as the original question. It will be seen as a reply to the original forum posting.';
$string['locationdesc2'] = 'If you would like to ask another question, simply follow the same formatting, or, if you chose to use the subject helper name alternative, just reply to an existing post.';
$string['loganchor'] = 'Logistics';
$string['logdesc1'] = 'Here is where the logistics of Ask4Summary\'s core processes are displayed.';
$string['logdesc2'] = 'You will be able to view how many forum posts and course modules Ask4Summary has parsed for this course. Resultingly, you will be able to see how many course modules remain.';
$string['logdesc3'] = 'Furthermore, you will be able to see which specific posts and course modules have been parsed for text content.';
$string['logdesc4'] = 'Changing your course Ask4Summary settings will influence how these logistics are calculated. For example, if you had enabled PDF parsing, and then disabled it, the row will be removed from the table display. This will change the total parsed as well.';
$string['mimetype_docx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
$string['mimetype_pdf'] = 'application/pdf';
$string['mimetype_pptx'] = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
$string['namenote'] = 'Note: You may change the default settings in the block configuration settings.';
$string['ngramscalc'] = 'N-Grams calculated!';
$string['noanswered'] = 'No answered posts.';
$string['noclobjs'] = 'No course learning objects!';
$string['noname'] = 'Helper Name Not Set!';
$string['notanswerable'] = 'Unable to answer question.';
$string['novalid'] = 'No Valid N-Grams.';
$string['page'] = 'Page';
$string['parsed'] = 'Parsed';
$string['parseddocx'] = 'Parsed DOCXs';
$string['parsedpage'] = 'Parsed Pages';
$string['parsedpdf'] = 'Parsed PDFs';
$string['parsedpptx'] = 'Parsed PPTXs';
$string['parsedurl'] = 'Parsed URLs';
$string['pdf'] = 'PDF';
$string['pdf_help'] = 'PDF Parsing';
$string['percent'] = 'Percentage';
$string['pluginname'] = 'Ask4Summary';
$string['post'] = '"{$a}"';
$string['postanswered'] = 'Ask4Summary has answered a total of: {$a} posts.';
$string['postunanswered'] = 'Ask4Summary could not answer a total of: {$a} posts.';
$string['pptx'] = 'PPTX';
$string['prepmsg'] = 'Preparing Message for N-Gram generation.';
$string['prepsent'] = 'Preparing Sentences for N-Gram generation.';
$string['privacy:metadata:block_ask4summary:autoforumid'] = 'The autoforum id value';
$string['privacy:metadata:block_ask4summary:cmid'] = 'The course module ID.';
$string['privacy:metadata:block_ask4summary:courseid'] = 'The course id value';
$string['privacy:metadata:block_ask4summary:depth'] = 'How many sub URLs should be scanned.';
$string['privacy:metadata:block_ask4summary:enabled'] = 'Whether or not the plugin should scan forums.';
$string['privacy:metadata:block_ask4summary:enabledocx'] = 'Whether DOCX filetype scanning should be enabled.';
$string['privacy:metadata:block_ask4summary:enablepage'] = 'Whether Moodle Page scanning should be enabled.';
$string['privacy:metadata:block_ask4summary:enablepdf'] = 'Whether PDF filetype scanning should be enabled.';
$string['privacy:metadata:block_ask4summary:enablepptx'] = 'Whether PPTX filetype scanning should be enabled.';
$string['privacy:metadata:block_ask4summary:enableurl'] = 'Whether the URL scanning should be enabled.';
$string['privacy:metadata:block_ask4summary:forumid'] = 'The forum id value';
$string['privacy:metadata:block_ask4summary:helpername'] = 'The name to be included in Ask4Summary questions.';
$string['privacy:metadata:block_ask4summary:postid'] = 'The forum post id.';
$string['privacy:metadata:block_ask4summary:question'] = 'What the user asked in their forum post.';
$string['privacy:metadata:block_ask4summary:replypostid'] = 'The post id of the response to the user question';
$string['privacy:metadata:block_ask4summary:responsetype'] = 'Whether Ask4Summary should scan all forums, a specific forum or the autoforum.';
$string['privacy:metadata:block_ask4summary:sentence'] = 'A sentence taken from paragraphs in the forum post id, or from a file or URL of valid type in the course.';
$string['privacy:metadata:block_ask4summary:timetaken'] = 'How much time the operation took.';
$string['privacy:metadata:block_ask4summary:topdocs'] = 'How many top-ranked documents should be chosen to take response sentences from.';
$string['privacy:metadata:block_ask4summary:topsentences'] = 'How many top-ranked sentences should be taken from the selected documents.';
$string['privacy:metadata:block_ask4summary:url'] = 'The webpage address of the course module.';
$string['privacy:metadata:block_ask4summary:word'] = 'An N-Gram taken from the forum post sentence.';
$string['privacy:metadata:ngramposservice'] = 'In order to generate N-Grams, Ask4Summary calls upon the N-Gram POS service provided by Dr. Maiga Chang. Only the sentences, taken from the body of text contained in the forum post, is sent to the service, which then calculates the top valid n-grams and returns them back to Ask4Summary for comparison/storage in the database. This data is not kept by the service itself.';
$string['reponsetype_desc'] = 'Pick the method for which Ask4Summary will respond to forums/users.';
$string['responsetype'] = 'Ask4Summary Response Method';
$string['retrieved'] = 'Retrieved Enabled Courses.';
$string['return'] = 'Return to Course Page';
$string['scan'] = 'Forum Scanning';
$string['scan_docs'] = 'Document Scanning';
$string['selectedforum'] = 'Currently Selected Forum: {$a}';
$string['studentvid'] = 'Student Use';
$string['summary'] = '<b>Summary:</b> {$a}';
$string['teachervid'] = 'Teacher Use';
$string['termsofuse'] = 'Terms of Use';
$string['termsofuse1'] = 'The VIP Research Group is a research group led by Prof. Maiga Chang (https://www.athabascau.ca/science-and-technology/our-people/maiga-chang.html) at the School of Computing and Information Systems, Athabasca University. This plugin, Ask4Summary, is one of the research group\'s works. The research group does have a follow-up research plan to improve it and further use it in other research projects.';
$string['termsofuse2'] = 'Almost all of Prof. Chang\'s works are open access (or open source). The N-Gram POS service used by the plugin is open access and running on a self-sponsored server, as all of other research projects (see http://maiga.athabascau.ca/#advanced) they will be always online, improving, and accessible as long as the cost can be affordable and covered by Prof. Chang.';
$string['termsofuse3'] = 'Of course if in any case just like the access volume of the web service becoming high or any business/commercial takes advantage of using it to make money, then the term of using the web service may look for changes; for examples, donations, personal/academic/business license and subscription modes, etc. However, it is really too early to say that.';
$string['timeasked'] = 'Asked on {$a}';
$string['timetaken'] = 'Took {$a} seconds.';
$string['topdoc'] = 'Number of Documents for Summary Generation';
$string['topdoc_desc'] = 'How many documents should be considered for summary generation.';
$string['topsent'] = 'Number of Sentences for Summary Generation';
$string['topsent_desc'] = 'How many sentences should be included in the returned summary.';
$string['total'] = 'Total';
$string['unable'] = 'Sorry! We were unable to generate a response for your question. Try rephrasing or rewording it in another forum post.';
$string['unanswered'] = 'Unanswered Posts';
$string['unansweredposts'] = 'Unable to Answer:';
$string['unknowncm'] = 'SQL query failed... unknown module type collected.';
$string['unparsed'] = 'Unparsed';
$string['unparseddocx'] = 'Unparsed DOCXs';
$string['unparsedpage'] = 'Unparsed Pages';
$string['unparsedpdf'] = 'Unparsed PDFs';
$string['unparsedpptx'] = 'Unparsed PPTXs';
$string['unparsedurl'] = 'Unparsed URLs';
$string['url'] = 'URL';
$string['urlname'] = 'URL: {$a}';
$string['userasked'] = 'by {$a}.';
