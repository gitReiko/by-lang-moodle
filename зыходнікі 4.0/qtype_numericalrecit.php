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
 * Strings for component 'qtype_numericalrecit', language 'en', version '4.0'.
 *
 * @package     qtype_numericalrecit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Absolute error';
$string['addcolumn'] = 'Column';
$string['addline'] = 'Line';
$string['addmorepartsblanks'] = 'Blanks for {no} more parts';
$string['algebraic_formula'] = 'Algebraic formula';
$string['answer'] = 'Answer*';
$string['answer_help'] = '**Required**.
must be a list of numbers, or a list of strings depending on the answer
type chosen. When there is only one answer, a number or string can be
entered directly. Please note that the number of elements in the list
defines the number of answer fields for this part.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre><br>
<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit.html-en.html#14_Answer" target="_blank">Learn more</a>';
$string['answercombinedunitmulti'] = 'Answer and unit for part {$a->part}';
$string['answercombinedunitsingle'] = 'Answer and unit';
$string['answercoordinatemulti'] = 'Answer for part {$a->part} and coordinate {$a->numanswer}';
$string['answercoordinatesingle'] = 'Answer for coordinate {$a->numanswer}';
$string['answermark'] = 'Part\'s mark*';
$string['answermark_help'] = '**Required**.
The mark for the answer of this part, which should be a number greater than 0.
 The default mark of the whole question is the sum of all its parts marks.

Note: If this part\'s mark field is left blank, the part will be deleted when the question is saved.<br>
<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#13_Note_of_the_part" target="_blank">Learn more</a>';
$string['answermissing'] = 'Please input answer formula first';
$string['answermulti'] = 'Answer for part {$a->part}';
$string['answerno'] = 'Part {$a}';
$string['answersingle'] = 'Answer';
$string['answertype'] = 'Answer type';
$string['answertype_help'] = 'There are four answer types.

Number, numeric and numerical formula answers requires number or a list of numbers as answer.

Algebraic formula answers requires a string or list of strings as answer.

Different answer types will impose different restrictions while inputting answers, so students will
need to know how to input them. The format check in the question code will
also tell them when they type if something is wrong. Please read the documentation for details.';
$string['answerunitmulti'] = 'Unit for part {$a->part}';
$string['answerunitsingle'] = 'Unit';
$string['automark'] = 'Enable automatic grading';
$string['calculate'] = 'Calculate';
$string['checkvarshdr'] = 'Check variables instantiation';
$string['choiceno'] = 'No';
$string['choiceyes'] = 'Yes';
$string['commonsiunit'] = 'Common SI unit';
$string['correctansweris'] = 'One possible correct answer is: {$a}';
$string['correctfeedback'] = 'For any correct response';
$string['correctfeedback_help'] = 'This feedback will be show to students that get the maximum mark at this part. It can include global and locals variables that will be replaced by their values';
$string['correctness'] = 'Grading criterion*';
$string['correctness_help'] = '**Required**. You can choose either relative error or absolute error with error
range. Relative error cannot be used for algebraic answer type.

For the precise definition of the relative error and absolute error when there is more than one answer field, see documentation.';
$string['correctness_link'] = 'https://moodleformulas.org/';
$string['correctnessexpert'] = 'Expert';
$string['correctnesssimple'] = 'Simple';
$string['defaultanswermark'] = 'Default part\'s mark';
$string['defaultanswermark_desc'] = 'Default part\'s mark for new question\'s parts';
$string['defaultanswertype'] = 'Default answer type';
$string['defaultanswertype_desc'] = 'Default answer type for new question\'s parts';
$string['defaultcorrectness'] = 'Default grading criteria';
$string['defaultcorrectness_desc'] = 'Default grading criteria for new question\'s parts';
$string['defaultunitpenalty'] = 'Default unit penalty';
$string['defaultunitpenalty_desc'] = 'Default penalty for wrong unit (0-1)';
$string['descriptionhere'] = 'Description here';
$string['docs'] = '<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html" target="_blank" class="btn btn-light"><i class="fa fa-info-circle"></i> Documentation</a>';
$string['error_algebraic_var'] = 'Syntax error of defining algebraic variable.';
$string['error_answer_missing'] = 'No answer has been defined.';
$string['error_answerbox_duplicate'] = 'Each answer field placeholder can only be used once in a part.';
$string['error_answertype_mistmatch'] = 'Answer type mismatch: Numerical answer type requires number and algebraic answer type requires string';
$string['error_criterion'] = 'The grading criterion must be evaluated to a single number.';
$string['error_eval_numerical'] = 'Some expressions cannot be evaluated numerically.';
$string['error_fixed_range'] = 'Syntax error of a fixed range.';
$string['error_forbid_char'] = 'Formula or expression contains forbidden characters or operators.';
$string['error_forloop'] = 'Syntax error of the for loop.';
$string['error_forloop_expression'] = 'Expression of the for loop must be a list.';
$string['error_forloop_var'] = 'Variable of the for loop has some errors.';
$string['error_func_param'] = 'Wrong number or wrong type of parameters for the function {$a}()';
$string['error_mark'] = 'The answer mark must take a value larger than 0.';
$string['error_no_answer'] = 'At least one answer is required.';
$string['error_placeholder_format'] = 'Wrong placeholder\'s format or forbidden characters.';
$string['error_placeholder_main_duplicate'] = 'Duplicated placeholder in the main question text.';
$string['error_placeholder_missing'] = 'This placeholder is missing from the main question text.';
$string['error_placeholder_sub_duplicate'] = 'This placeholder has already been defined in some other part.';
$string['error_placeholder_too_long'] = 'The placeholder\'s length is limited to 40 characters.';
$string['error_randvars_set_size'] = 'The number of generable elements in the set must be larger than 1.';
$string['error_randvars_type'] = 'All elements in the set must have exactly the same type and size.';
$string['error_rule'] = 'Rule parsing error!';
$string['error_ruleid'] = 'No such rule exists in the file with the id/name.';
$string['error_subexpression_empty'] = 'A subexpression is empty.';
$string['error_syntax'] = 'Syntax error.';
$string['error_unit'] = 'Unit parsing error!';
$string['error_unitpenalty'] = 'The penalty must be a number between 0 and 1.';
$string['error_validation_eval'] = 'Try evalution error!';
$string['error_vars_array_index_nonnumeric'] = 'Non-numeric value cannot be used as list index.';
$string['error_vars_array_index_out_of_range'] = 'List index out of range !!!';
$string['error_vars_array_size'] = 'Size of list must be within 1 to 1000.';
$string['error_vars_array_type'] = 'Element in the same list must be of the same type, either number or string.';
$string['error_vars_array_unsubscriptable'] = 'Variable is unsubscriptable.';
$string['error_vars_bracket_mismatch'] = 'Bracket mismatch.';
$string['error_vars_end_separator'] = 'Missing an assignment separator at the end.';
$string['error_vars_name'] = 'The syntax of the variable name is incorrect.';
$string['error_vars_reserved'] = 'Function {$a}() is reserved and cannot be used as variable.';
$string['error_vars_string'] = 'Error! Either a string without closing double quote, or use of non-accepted character such as \'.';
$string['error_vars_undefined'] = 'Variable \'{$a}\' has not been defined.';
$string['feedback'] = 'Part general feedback';
$string['feedback_help'] = 'This part feedback will be show to all students. It can include global and locals variables that will be replaced by their values.<br><a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#12_General_feedback" target="_blank">Learn more</a>';
$string['fillallfields'] = 'Please fill all fields';
$string['functiontakesatleasttwo'] = 'The function {$a} must have at least two arguments';
$string['functiontakesnoargs'] = 'The function {$a} does not take any arguments';
$string['functiontakesonearg'] = 'The function {$a} must have exactly one argument';
$string['functiontakesoneortwoargs'] = 'The function {$a} must have either one or two arguments';
$string['functiontakestwoargs'] = 'The function {$a} must have exactly two arguments';
$string['globaloptions'] = '[Global] -';
$string['globalvarshdr'] = 'Variables';
$string['illegalformulasyntax'] = 'Illegal formula syntax starting with \'{$a}\'';
$string['incorrectfeedback'] = 'For any incorrect response';
$string['incorrectfeedback_help'] = 'This feedback will be show to students that don\'t get any mark at this part. It can include global and locals variables that will be replaced by their values';
$string['instantiate'] = 'Instantiate';
$string['mainq'] = 'Main question';
$string['modelanswer'] = 'Model answer';
$string['none'] = 'None';
$string['notavailable'] = 'N/A';
$string['number'] = 'Number';
$string['number_unit'] = 'Number and unit';
$string['numdataset'] = 'Number of dataset';
$string['numdataset_help'] = 'Nombre de jeux de données.<br><a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#19_Variable_instantiation_test" target="_blank">Learn more</a>';
$string['numeric'] = 'Numeric';
$string['numeric_unit'] = 'Numeric and unit';
$string['numerical_formula'] = 'Formula with steps RÉCIT';
$string['numerical_formula_unit'] = 'Numerical formula and unit';
$string['otherrule'] = 'Other rules';
$string['otherrule_help'] = 'Here the question\' author can define additional conversion rules for other accepted base units. See documentation for the advanced usages.';
$string['partiallycorrectfeedback'] = 'For any partially correct response';
$string['partiallycorrectfeedback_help'] = 'This feedback will be show to students that don\'t get the maximum mark at this part. It can include global and locals variables that will be replaced by their values';
$string['placeholder'] = 'Placeholder name';
$string['placeholder_help'] = 'A placeholder is a used to identify the location in the main question
text that will be replaced by the content of the part. It is a
string of alphanumeric characters prefixed by \'**#**\', such as #1, #2a, #2b and #A.

If this field is left empty, the part will be appended at the end of the main question text.';
$string['pleaseputananswer'] = 'Please put an answer in each input field.';
$string['pluginname'] = 'Formula with steps RÉCIT';
$string['pluginname_help'] = 'To start using this question, please go to <a href="https://ena.recitfad.com/course/view.php?id=455">tutorial</a>.

For possible questions, please go to <a href="https://ena.recitfad.com/course/view.php?id=455">examples</a>.

For the full documentation, please go to <a target="_blank" href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html">documentation</a>.';
$string['pluginname_link'] = 'https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html';
$string['pluginnameadding'] = 'Adding a formulas with steps RÉCIT question';
$string['pluginnameediting'] = 'Editing a formulas with steps RÉCIT question';
$string['pluginnamesummary'] = 'Question type with random values and multiple answers
The answer fields can be placed anywhere so that we can create questions involving various structures such as vectors, polynomials and matrix.
Other features such as unit checking and multiple parts questions are also integrated tightly and easy to use.';
$string['postunit'] = 'Unit';
$string['postunit_help'] = '<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#15_Unit" target="_blank">Learn more</a>';
$string['privacy:metadata'] = 'The Formulas question type plugin does not store any personal data.';
$string['qtextpreview'] = 'Preview using dataset';
$string['questiontext'] = 'Question text';
$string['questiontext_help'] = 'In addition to the normal question text, you can also use global variables and placeholders here.

Global variables will be replaced by their values and placeholders will be replaced by parts.
    A simple example with variables <tt> A, B, C </tt> and placeholders <tt> #1, #2, #3 </tt> is:

<pre class="prettyprint">What is the result of {A} + {B}?<br>{#1}<br>What is the result of {A} - {B}?<br>{#2}<br>What is the result of {C} / {B}?<br>{#3}</pre><br>
<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#11_Text_of_the_question" target="_blank">Learn more</a>';
$string['relerror'] = 'Relative error';
$string['renew'] = 'Update';
$string['ruleid'] = 'Basic conversion rules';
$string['ruleid_help'] = 'This question type has a build-in unit conversion system and has basic conversion rules.

The basic one is the "Common SI unit" rules that will convert standard units
such as unit for length, say, km, m, cm and mm. This option has no
effect if no unit has been used.';
$string['save'] = 'Save';
$string['settingusepopup'] = 'Use tooltips';
$string['settingusepopup_desc'] = 'Display correct answer and feedback in a tooltip';
$string['showexample'] = 'Create Example';
$string['stepfeedback'] = 'Step Feedback';
$string['stepfeedback_help'] = 'Step Feedback.<br><a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#18_Description_of_the_step" target="_blank">Learn more</a>';
$string['stepmark'] = 'Step Mark';
$string['steppart'] = 'Step Part';
$string['subqoptions'] = 'Extra options';
$string['subqtext'] = 'Part\'s text';
$string['subqtext_help'] = 'Part text and answer fields places can be specified here. The placeholders that can be used to specifie answer fields places are:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

The <tt> {_0}, {_1}, {_2} </tt> are the input fields for coordinates and <tt> {_u} </tt> is the input field for unit.

All missing fields are automatically appended at the end of the part\'s text. A special case is that if <tt> {_0}, {_u} </tt> are specified consecutively, and there is only one coordinate and unit, i.e. <tt> {_0}{_u} </tt>, they will be combined into a single long input answer field for both answer and unit.<br>
<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#11_Text_of_the_question" target="_blank">Learn more</a>';
$string['takephoto'] = 'Take Photo';
$string['unit'] = 'Unit';
$string['unitpenalty'] = 'Deduction for wrong unit (0-1)*';
$string['unitpenalty_help'] = 'This option specify the mark you want to penalize the student for a wrong unit.

It takes value between 0 to 1. If it takes value 1, the unit and answer
must be correct at the same time in order to get mark. That is the unit
and answer are treated as one entity. On the other hand, if it takes
value 0, students can get full mark for only correct answer, all random
string will have no effect at the end of answer.

Therefore, it is recommended to use value 1 whenever the answer has no associated unit.';
$string['unsupportedformulafunction'] = 'The function {$a} is not supported';
$string['valuetable'] = 'Value Table';
$string['vars1'] = 'Local variables';
$string['vars1_help'] = 'You can define variables here in the same way as global variables are defined at the question level. Variables defined here can be used in the part\'s answer or feedback
and their scope of visibility is limited to the part.';
$string['vars2'] = 'Grading variables';
$string['vars2_help'] = 'All local variables and the student\'s responses can be used here. See documentation for advanced usages.<br><a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#16_Random_variables" target="_blank">Learn more</a>';
$string['varsdata'] = 'Instantiated dataset';
$string['varsglobal'] = 'Global variables';
$string['varsglobal_help'] = 'Formulas can be specified here to manipulate the instantiated random variables
(all random variables are available here). The full list of mathematical
functions and operators is given in the documentation.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre><br>
<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#17_Global_variables" target="_blank">Learn more</a>';
$string['varsrandom'] = 'Random variables';
$string['varsrandom_help'] = 'New random values are generated for these variables at the beginning of each attempt.  It can
be done by defining a set of elements to choose from:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

The elements can be numbers, strings or lists of them. At the start of a new attempt, one element will be drawn from the set and assigned to the variable
on the left.  Also, for a set of number, you can use the range notation like 10:100:10 (see example E above.). <br>
<a href="https://htmlpreview.github.io/?https://github.com/SN-RECIT-formation-a-distance/moodle-qtype_numericalrecit/blob/master/docs/question-formule-demarche-recit-en.html#16_Random_variables" target="_blank">Learn more</a>';
$string['varsstatistics'] = 'Statistics';
$string['yougotnright'] = 'You have correctly answered {$a->num} part(s) of this question.';
