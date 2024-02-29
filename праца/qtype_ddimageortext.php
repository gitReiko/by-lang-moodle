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
 * Strings for component 'qtype_ddimageortext', language 'en', version '4.0'.
 *
 * @package     qtype_ddimageortext
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoredropzones'] = 'Пустэчы дзеля {no} дадатковых вобласьцяў пакіданьня';
$string['addmoreimages'] = 'Пустэчы дзеля {no} дадатковых рухомых прадметаў';
$string['answer'] = 'Адказ';
$string['bgimage'] = 'Выява фону';
$string['blank'] = 'пуста';
$string['correctansweris'] = 'Слушны адказ: {$a}';
$string['deletedchoice'] = '[Выдалены выбар]';
$string['draggableimage'] = 'Рухомая выява';
$string['draggableitem'] = 'Рухомы прадмет';
$string['draggableitemheader'] = 'Рухомы прадмет {$a}';
$string['draggableitems'] = 'Рухомыя прадметы';
$string['draggableitemtype'] = 'Тып';
$string['draggableword'] = 'Рухомы тэкст';
$string['dropbackground'] = 'Фонавая выява дзеля маркераў перацягваньня';
$string['dropzone'] = 'Вобласьць пакіданьня {$a}';
$string['dropzoneheader'] = 'Вобласьці пакіданьня';
$string['formerror_disallowedtags'] = 'У гэтым рухомым тэксьце дазволены толькі тэгі "{$a}".';
$string['formerror_multipledraginstance'] = 'Вы ўжо абіралі гэтую выяву {$a} у якасьці слушнага выбару дзеля вобласьці пакіданьня, але прадмет нельга пакідаць неабмежаваную колькасьць разоў.';
$string['formerror_multipledraginstance2'] = 'Вы ўжо абіралі гэтую выяву ў якасьці слушнага выбару дзеля вобласьці пакіданьня, але прадмет нельга пакідаць неабмежаваную колькасьць разоў.';
$string['formerror_noallowedtags'] = 'HTML-тэгі забаронены ў гэтым тэксьце, што з\'яўляецца альтэрнатыўным тэкстам для рухомай выявы.';
$string['formerror_nobgimage'] = 'Вы мусіце абраць выяву, якую будзеце выкарыстоўваць у якасьці фону дзеля вобласьці пакіданьня.';
$string['formerror_nofile'] = 'Вы мусіце запампаваць альбо абраць файл дзеля тутэйшага выкарыстаньня.';
$string['formerror_nofile3'] = 'Вы мусіце абраць файл выявы тут альбо выдаліць зьвязаны зь ім подпіс ды зьняць сьцяжок неабмежаванага выкарыстаньня.';
$string['formerror_noimageselected'] = 'Вы мусіце абраць рухомы прадмет, які будзе слушным адказам для гэтай вобласьці пакіданьня.';
$string['formerror_notintxleft'] = 'Каардыната x мусіць з\'яўляецца цэлым лікам.';
$string['formerror_notintytop'] = 'Каардыната y мусіць з\'яўляецца цэлым лікам.';
$string['formerror_noxleft'] = 'You must provide a value for the x coordinate for the top left corner of this drop area. You can drag and drop the drop area above to set the coordinates or enter them manually here.';
$string['formerror_noytop'] = 'You must provide a value for the y coordinate for the top left corner of this drop area. You can drag and drop the drop area above to set the coordinates or enter them manually here.';
$string['infinite'] = 'Неабмежаванае выкарыстаньне';
$string['label'] = 'Тэкст';
$string['nolabel'] = 'No label text';
$string['pleasedraganimagetoeachdropregion'] = 'Your answer is not complete; please drag an item to each drop region.';
$string['pluginname'] = 'Перацягваньне на выяву';
$string['pluginname_help'] = 'Drag and drop onto image questions require the respondent to drag images or text labels and drop them into defined drop zones on a background image. Draggable items may be grouped so that all items in a particular group are coloured the same as the drop zones. Draggable items marked as unlimited may be dropped into more than one zone.';
$string['pluginname_link'] = 'question/type/ddimageortext';
$string['pluginnameadding'] = 'Adding drag and drop onto image';
$string['pluginnameediting'] = 'Editing drag and drop onto image';
$string['pluginnamesummary'] = 'Images or text labels are dragged and dropped into drop zones on a background image.

Note: This question type is not accessible to users who are visually impaired.';
$string['previewareaheader'] = 'Preview';
$string['previewareamessage'] = 'Select a background image, specify draggable items and define drop zones on the background image into which they must be dragged.';
$string['privacy:metadata'] = 'Drag and drop onto image question type plugin allows question authors to set default options as user preferences.';
$string['privacy:preference:defaultmark'] = 'The default mark set for a given question.';
$string['privacy:preference:penalty'] = 'The penalty for each incorrect try when questions are run using the \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:shuffleanswers'] = 'Whether the answers should be automatically shuffled.';
$string['refresh'] = 'Refresh preview';
$string['shuffleimages'] = 'Shuffle drag items each time question is attempted';
$string['summarisechoice'] = '{$a->no}. {$a->text}';
$string['summarisechoiceno'] = 'Item {$a}';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Drop zone {$a}';
$string['xleft'] = 'Left';
$string['ytop'] = 'Top';
