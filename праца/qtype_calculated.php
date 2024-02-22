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
 * Strings for component 'qtype_calculated', language 'en', version '4.0'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Дадаць прадмет';
$string['addmoreanswerblanks'] = 'Дадаць яшчэ адзін бланк адказу.';
$string['addsets'] = 'Дадаць набор(ы)';
$string['answerdisplay'] = 'Адлюстраваньне адказаў';
$string['answerformula'] = 'Формула адказу {$a}';
$string['answerhdr'] = 'Адказ';
$string['answerstoleranceparam'] = 'Параметры допускаў адказаў';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Ўсякае значэньне';
$string['atleastoneanswer'] = 'Вы мусіце ўвесьці прынамсі адзін адказ.';
$string['atleastonerealdataset'] = 'У тэксьце пытаньня мусіць мецца прынамсі адзін рэальны набор дадзеных';
$string['atleastonewildcard'] = 'У формуле адказу мусіць мецца прынамсі адзін падстаўны знак';
$string['calcdistribution'] = 'Дыстрыбуцыя';
$string['calclength'] = 'Дзесяткавыя знакі';
$string['calcmax'] = 'Максімум';
$string['calcmin'] = 'Мінімум';
$string['choosedatasetproperties'] = 'Абярыце ўласьцівасьці падстаўных знакаў набора дадзеных';
$string['choosedatasetproperties_help'] = 'Набор дадзеных - гэта набор значэньняў, што падстаўляецца заміж падстаўных знакаў. Вы можаце стварыць прыватны набор дадзеных дзеля пэўнага пытаньня альбо публічны набор дадзеных, які льга выкарыстоўваць дзеля іншых вылічвальных пытаньняў у катэгорыі.';
$string['correctanswerformula'] = 'Формула слушнага адказу';
$string['correctanswershows'] = 'Слушны адказ паказвае';
$string['correctanswershowsformat'] = 'Фармат';
$string['correctfeedback'] = 'За любы слушны водкліч';
$string['dataitemdefined'] = 'з {$a} вызначанымі лікавымі значэньнямі даступна';
$string['datasetrole'] = 'Падстаўныя знакі <strong>{x..}</strong> будуць заменены лікавымі значэньнямі са сваіх набораў дадзеных';
$string['decimals'] = 'з {$a}';
$string['deleteitem'] = 'Выдаліць прадмет';
$string['deletelastitem'] = 'Выдаліць апошні прадмет';
$string['distributionoption'] = 'Абраць опцыю дыстрыбуцыі';
$string['editdatasets'] = 'Рэдагаваць наборы дадзеных падстаўных знакаў';
$string['editdatasets_help'] = 'Значэньні падстаўных знакаў льга стварыць, шляхам уводу лічбы ўва ўсякі падстаўны знак і націску кнопкі дадаць. Дзеля аўтаматычнага генераваньня 10 і болей значэньняў, абярыце патрэбную колькасьць значэньняў, перш чым націснуць кнопку даданьня. Раўнамернае разьмеркаваньне азначае, што ўсякае значэньне па-за межамі будзе генеравацца з аднолькавай імавернасьцю; лагарыфмічнае разьмеркаваньне азначае, што значэньні ў накірунку ніжняй мяжы больш верагодныя.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'будзе выкарыстоўваць ужо існы публічны набор дадзеных';
$string['existingcategory2'] = 'файл з ужо існага набору файлаў, які таксама выкарыстоўваецца іншымі пытаньнямі ў гэтай катэгорыі';
$string['existingcategory3'] = 'спасылка з ужо існага набору спасылак, які таксама выкарыстоўваецца іншымі пытаньнямі ў гэтай катэгорыі';
$string['forceregeneration'] = 'force regeneration';
$string['forceregenerationall'] = 'forceregeneration of all wildcards';
$string['forceregenerationshared'] = 'forceregeneration of only non-shared wildcards';
$string['functiontakesatleasttwo'] = 'The function {$a} must have at least two arguments';
$string['functiontakesnoargs'] = 'The function {$a} does not take any arguments';
$string['functiontakesonearg'] = 'The function {$a} must have exactly one argument';
$string['functiontakesoneortwoargs'] = 'The function {$a} must have either one or two arguments';
$string['functiontakestwoargs'] = 'The function {$a} must have exactly two arguments';
$string['generatevalue'] = 'Generate a new value between';
$string['getnextnow'] = 'Get new \'Item to Add\' now';
$string['hexanotallowed'] = 'Dataset <strong>{$a->name}</strong> hexadecimal format value {$a->value} is not allowed';
$string['illegalformulasyntax'] = 'Illegal formula syntax starting with \'{$a}\'';
$string['incorrectfeedback'] = 'For any incorrect response';
$string['itemno'] = 'Item {$a}';
$string['itemscount'] = 'Items<br />Count';
$string['itemtoadd'] = 'Item to add';
$string['keptcategory1'] = 'will use the same existing shared dataset as before';
$string['keptcategory2'] = 'a file from the same category reusable set of files as before';
$string['keptcategory3'] = 'a link from the same category reusable set of links as before';
$string['keptlocal1'] = 'will use the same existing private dataset as before';
$string['keptlocal2'] = 'a file from the same question private set of files as before';
$string['keptlocal3'] = 'a link from the same question private set of links as before';
$string['lengthoption'] = 'Select length option';
$string['loguniform'] = 'Лагарыфмічнае';
$string['loguniformbit'] = 'digits, from a loguniform distribution';
$string['makecopynextpage'] = 'Next page (new question)';
$string['mandatoryhdr'] = 'Mandatory wild cards present in answers';
$string['max'] = 'Max';
$string['min'] = 'Min';
$string['minmax'] = 'Range of Values';
$string['missingformula'] = 'Missing formula';
$string['missingname'] = 'Missing question name';
$string['missingquestiontext'] = 'Missing question text';
$string['mustenteraformulaorstar'] = 'You must enter a formula or \'*\'.';
$string['newcategory1'] = 'will use a new shared dataset';
$string['newcategory2'] = 'a file from a new set of files that may also be used by other questions in this category';
$string['newcategory3'] = 'a link from a new set of links that may also be used by other questions in this category';
$string['newlocal1'] = 'will use a new private dataset';
$string['newlocal2'] = 'a file  from a new set of files that will only be used by this question';
$string['newlocal3'] = 'a link from a new set of links that will only be used by this question';
$string['newsetwildcardvalues'] = 'new set(s) of wild card(s) values';
$string['nextitemtoadd'] = 'Next \'Item to Add\'';
$string['nextpage'] = 'Next page';
$string['nocoherencequestionsdatyasetcategory'] = 'For question id {$a->qid}, the category id {$a->qcat} is not identical with the shared wild card {$a->name} category id {$a->sharedcat}. Edit the question.';
$string['nocommaallowed'] = 'The , cannot be used, use . as in 0.013 or 1.3e-2';
$string['nodataset'] = 'nothing - it is not a wild card';
$string['nosharedwildcard'] = 'No shared wild card in this category';
$string['notvalidnumber'] = 'Wild card value is not a valid number';
$string['oneanswertrueansweroutsidelimits'] = 'At least one correct answer outside the true value limits.<br />Modify the answers tolerance settings available as Advanced parameters';
$string['param'] = 'Param {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'For any partially correct response';
$string['pluginname'] = 'Вылічвальнае';
$string['pluginname_help'] = 'Calculated questions enable individual numerical questions to be created using wildcards in curly brackets that are substituted with individual values when the quiz is taken. For example, the question "What is the area of a rectangle of length {l} and width {w}?" would have correct answer formula "{l}*{w}" (where * denotes multiplication).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'Adding a Calculated question';
$string['pluginnameediting'] = 'Editing a Calculated question';
$string['pluginnamesummary'] = 'Calculated questions are like numerical questions but with the numbers used selected randomly from a set when the quiz is taken.';
$string['possiblehdr'] = 'Possible wild cards present only in the question text';
$string['privacy:metadata'] = 'The Calculated question type plugin does not store any personal data.';
$string['questiondatasets'] = 'Question datasets';
$string['questiondatasets_help'] = 'Question datasets of wild cards that will be used in each individual question';
$string['questionstoredname'] = 'Question stored name';
$string['replacewithrandom'] = 'Replace with a random value';
$string['reuseifpossible'] = 'reuse previous value if available';
$string['setno'] = 'Set {$a}';
$string['setwildcardvalues'] = 'set(s) of wild card(s) values';
$string['sharedwildcard'] = 'Shared wild card {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Публічны падстаўны знак';
$string['sharedwildcards'] = 'Shared wild cards';
$string['showitems'] = 'Display';
$string['significantfigures'] = 'with {$a}';
$string['significantfiguresformat'] = 'significant figures';
$string['synchronize'] = 'Synchronise the data from shared datasets with other questions in a quiz';
$string['synchronizeno'] = 'Do not synchronise';
$string['synchronizeyes'] = 'Synchronise';
$string['synchronizeyesdisplay'] = 'Synchronise and display the shared datasets name as prefix of the question name';
$string['tolerance'] = 'Допускі ±';
$string['tolerancetype'] = 'Type';
$string['trueanswerinsidelimits'] = 'Correct answer : {$a->correct} inside limits of true value {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">ERROR Correct answer : {$a->correct} outside limits of true value {$a->true}</span>';
$string['uniform'] = 'Раўнамернае';
$string['uniformbit'] = 'decimals, from a uniform distribution';
$string['unsupportedformulafunction'] = 'The function {$a} is not supported';
$string['updatecategory'] = 'Update the category';
$string['updatedatasetparam'] = 'Update the datasets parameters';
$string['updatetolerancesparam'] = 'Update the answers tolerance parameters';
$string['updatewildcardvalues'] = 'Update the wild card(s) values';
$string['useadvance'] = 'Use the advance button to see the errors';
$string['usedinquestion'] = 'Used in Question';
$string['wildcard'] = 'Wild card {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Wild cards parameters used to generate the values';
$string['wildcardrole'] = 'The wild cards <strong>{x..}</strong> will be substituted by a numerical value from the generated values';
$string['wildcards'] = 'Wild cards {a}...{z}';
$string['wildcardvalues'] = 'Wild card(s) values';
$string['wildcardvaluesgenerated'] = 'Wild card(s) values generated';
$string['youmustaddatleastoneitem'] = 'You must add at least one dataset item before you can save this question.';
$string['youmustaddatleastonevalue'] = 'You must add at least one set of wild card(s) values before you can save this question.';
$string['zerosignificantfiguresnotallowed'] = 'The correct answer cannot have zero significant figures!';
