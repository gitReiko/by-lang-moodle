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
 * Strings for component 'local_lessonexport', language 'en', version '4.0'.
 *
 * @package     local_lessonexport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotatepermission'] = 'annot-forms';
$string['annotatepermission_desc'] = 'Annotate document forms';
$string['assemblepermission'] = 'assemble';
$string['assemblepermission_desc'] = 'Assemble the document';
$string['copypermission'] = 'copy';
$string['copypermission_desc'] = 'Copy the document';
$string['covercolour'] = 'Front cover banner colour';
$string['covercolour_desc'] = 'The colour of the banner on the front cover that contains the lesson title.';
$string['created'] = 'Created on {$a}';
$string['customfont'] = 'Default PDF font family';
$string['customfont_desc'] = 'Default font to use in the printed PDF. Possible fonts include: times (Times-Roman), timesb (Times-Bold), timesi (Times-Italic), timesbi (Times-BoldItalic), helvetica (Helvetica), helveticab (Helvetica-Bold), helveticai, helveticabi, courier (Courier), courierb (Courier-Bold), courieri (Courier-Oblique), courierbi (Courier-BoldOblique), symbol (Symbol), zapfdingbats (ZapfDingbats)';
$string['essay'] = 'Essay';
$string['exportpdf'] = 'Export as PDF';
$string['exportstrict'] = 'Strict exporting';
$string['exportstrict_desc'] = 'Whether documents should throw exceptions or suppress them when erroring.';
$string['extractpermission'] = 'extract';
$string['extractpermission_desc'] = 'Extract pages from the document';
$string['failedinsertimage'] = 'Failed to insert image: {$a}';
$string['filename'] = 'Export {$a->lessonname} {$a->timestamp}';
$string['fonts'] = 'fonts';
$string['fontspage'] = 'PDF Fonts';
$string['formfillpermission'] = 'fill-forms';
$string['formfillpermission_desc'] = 'Fill forms on the document';
$string['highdefpermission'] = 'print-high';
$string['highdefpermission_desc'] = 'Print the document in high definition';
$string['landscape'] = 'Landscape';
$string['landscape_desc'] = 'Landscape orientation';
$string['language'] = 'Language';
$string['language_desc'] = 'If your language follows a set of rules (RTL text, special characters), please select your language here.';
$string['lessonexport:exportpdf'] = 'Export lesson as PDF';
$string['lessonexportfailed'] = 'Export of lesson \'{$a}\' failed';
$string['lessonexportfailed_body'] = 'The lesson \'{$a->name}\' has been updated, but the attempt to export and email it has failed, after {$a->exportattempts} attempts. If the lesson is updated again, then further attempts will be made to export it. The Lesson can be found at: {$a->url}.';
$string['lessonpage'] = 'Lesson Pages';
$string['lessonupdated'] = 'Lesson \'{$a}\' updated';
$string['lessonupdated_body'] = 'Updated export attached';
$string['matching'] = 'Matching';
$string['modified'] = 'Last modified by {$a->modifiedby} on {$a->timemodified}';
$string['modifypermission'] = 'modify';
$string['modifypermission_desc'] = 'Modify the document';
$string['multichoice'] = 'Multiple choice';
$string['numerical'] = 'Numerical';
$string['pdfcoverdownloaded'] = 'Front cover downloaded information';
$string['pdfcoverdownloaded_desc'] = 'Whether or not to show the date the document was downloaded on the cover page.';
$string['pdfcoverupdated'] = 'Front cover updated information';
$string['pdfcoverupdated_desc'] = 'Whether or not to show the date the document was last updated on the cover page.';
$string['pdfexcludepages'] = 'Excluded page types';
$string['pdfexcludepages_desc'] = 'Page types to exclude from being exported.';
$string['pdfexportanswers'] = 'Export question answers';
$string['pdfexportanswers_desc'] = 'Whether or not to export the answers to questions.';
$string['pdffooterbottomleft'] = 'The bottom-left field of the footer.';
$string['pdffooterbottomleft_desc'] = 'The bottom-left area of the footer to be filled with text. This may include HTML tags for formatting, links, etc.';
$string['pdffooterbottommiddle'] = 'The bottom-middle field of the footer.';
$string['pdffooterbottommiddle_desc'] = 'The bottom-middle area of the footer to be filled with text. This may include HTML tags for formatting, links, etc.';
$string['pdffooterbottomright'] = 'The bottom-right field of the footer.';
$string['pdffooterbottomright_desc'] = 'The bottom-right area of the footer to be filled with text. This may include HTML tags for formatting, links, etc.';
$string['pdffootertopleft'] = 'The top-left field of the footer.';
$string['pdffootertopleft_desc'] = 'The top-left area of the footer to be filled with text. This may include HTML tags for formatting, links, etc.';
$string['pdffootertopmiddle'] = 'The top-middle field of the footer.';
$string['pdffootertopmiddle_desc'] = 'The top-middle area of the footer to be filled with text. This may include HTML tags for formatting, links, etc.';
$string['pdffootertopright'] = 'The top-right field of the footer.';
$string['pdffootertopright_desc'] = 'The top-right area of the footer to be filled with text. This may include HTML tags for formatting, links, etc.';
$string['pdffrontcoverpagenumbers'] = 'Front cover page numbers';
$string['pdffrontcoverpagenumbers_desc'] = 'Toggles whether or not page numbers should be shown on the front cover of a document.';
$string['pdfownerpassword'] = 'PDF document owner password';
$string['pdfownerpassword_desc'] = 'A owner password to apply to PDF documents. Leave blank for none';
$string['pdfpageorientation'] = 'Document page orientation';
$string['pdfpageorientation_desc'] = 'The orientation of the document pages (portrait or landscape)';
$string['pdfprotection'] = 'PDF permissions';
$string['pdfprotection_desc'] = 'Permissions to apply to generated PDF documents.';
$string['pdfuserpassword'] = 'PDF document user password';
$string['pdfuserpassword_desc'] = 'A user password to apply to PDF documents. Leave blank for none';
$string['plugingroup'] = 'Lesson Export';
$string['pluginname'] = 'Lesson Export PDF';
$string['portrait'] = 'Portrait';
$string['portrait_desc'] = 'Portrait orientation';
$string['printed'] = 'This document was downloaded on {$a}';
$string['printpermission'] = 'print';
$string['printpermission_desc'] = 'Print the document';
$string['publishemail'] = 'Auto-publish email';
$string['publishemail_desc'] = 'The email address that PDFs will be sent to automatically whenever a lesson changes';
$string['publishername'] = 'Unknown';
$string['righttoleft'] = 'Right To Left';
$string['righttoleft_desc'] = 'Whether or not to print text from right to left.';
$string['shortanswer'] = 'Short answer';
$string['truefalse'] = 'True/false';
