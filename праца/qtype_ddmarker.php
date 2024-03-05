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
 * Strings for component 'qtype_ddmarker', language 'en', version '4.0'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Пустэчы дзеля {no} новых маркераў';
$string['alttext'] = 'Альтэрнатывны тэкст';
$string['answer'] = 'Адказ';
$string['bgimage'] = 'Фонавая выява';
$string['clearwrongparts'] = 'Перасунуць хібна зьмесцаваныя маркеры назад на стандартныя стартавыя пазіцыі пад выявай';
$string['coords'] = 'Каардынаты';
$string['correctansweris'] = 'Слушны адказ: {$a}';
$string['draggableimage'] = 'Рухомая выява';
$string['draggableitem'] = 'Рухомы прадмет';
$string['draggableitemheader'] = 'Рухомы прадмет {$a}';
$string['draggableitemtype'] = 'Тып';
$string['draggableword'] = 'Рухомы тэкст';
$string['dropbackground'] = 'Фонавая выява дзеля рухомых маркераў';
$string['dropzone'] = 'Зона пакіданьня {$a}';
$string['dropzoneheader'] = 'Зоны пакіданьня';
$string['dropzones'] = 'Зоны пакіданьня';
$string['dropzones_help'] = 'Зоны пакіданьня могуць быць вызначаны каардынатамі альбо перасунуты ў патрэбнае месца ў рэжыме прадпрагляду.

Пачатковае абраньне фігуры (кола, прастакутніка ці шматкутніка) дадасьць новую фігуру зоны пакіданьня ў левую верхнюю частку прадпрагляду. Мінімізаваньне падзелу Маркераў, можа здасьця карысным дзеля прагляду прадпрагляду падчас рэдагаваньня Зонаў пакіданьня.

Рэдагаваньне фігуры пачынаецца з націску па ёй у прадпраглядзе дзеля адлюстраваньня вагароў рэдагаваньня. Вы здольныя перасоўваць фігуру з дапамогай цэнтральнага вагара альбо зьмяняць памеры фігуры вяршыннымі вагарамі.

Толькі дзеля шматкутнікаў, утрымлівая кнопку control (command на Mac) і націскаючы на вяршынны вагар, вы дадаеце новую вяршыню да шматкутніка. Калі ласка, захоўвайце як мага прасьцейшую форму шматкутніка, без скрыжаваных лініяў.

Інфармацыя пра выкарыстаньне каардынат трыма фігурамі:

* Кола: цэнтар_x, цэнтар_y; радыус<br />прыклад: <code>80,100;50</code>
* Прастакутнік: верхні_левы_x, верхні_левы_y; шырыня, вышыня<br />прыклад: <code>20,60;80,40</code>
* Шматкутнік: x1, y1; x2, y2; ...; xn, yn<br />прыклад: <code>20,60;100,60;20,100</code>

Абраньне тэкста Маркера дадасьць яго да фигуры ў прадпраглядзе.';
$string['followingarewrong'] = 'Наступныя маркеры зьмесцаваны ў хібнай вобласьці : {$a}.';
$string['followingarewrongandhighlighted'] = 'Наступныя маркеры зьмесцаваны ў хібнай вобласьці :  {$a}. Вылучаныя маркеры зараз адлюстроўваюцца са слушным месцаваньнем.<br /> Націсьніце па маркеру, каб вылучыць дазволеную вобласьць.';
$string['formerror_nobgimage'] = 'You need to select an image to use as the background for the drag and drop area.';
$string['formerror_noitemselected'] = 'You have specified a drop zone but not chosen a marker that must be dragged to the zone.';
$string['formerror_nosemicolons'] = 'There are no semicolons in your coordinates string. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Only "{$a}" tags are allowed in the label for a marker.';
$string['formerror_onlyusewholepositivenumbers'] = 'Please use only whole positive numbers to specify x,y coordinates and/or width and height of shapes. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'For a polygon shape you need to specify at least 3 points. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'You have entered the same coordinates twice. Each point must be unique. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'The shape you have defined goes out of the bounds of the background image.';
$string['formerror_toomanysemicolons'] = 'There are too many semicolon-separated parts to the coordinates you have specified. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'The width and height that you have specified are unrecognisable. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'The x,y coordinates that you have specified are unrecognisable. Your coordinates for a {$a->shape} should be expressed as - {$a->coordsstring}.';
$string['infinite'] = 'Infinite';
$string['marker'] = 'Marker';
$string['marker_n'] = 'Marker {no}';
$string['markers'] = 'Markers';
$string['nolabel'] = 'No label text';
$string['noofdrags'] = 'Number';
$string['pleasedragatleastonemarker'] = 'Your answer is not complete; you must place at least one marker on the image.';
$string['pluginname'] = 'Перасоўваньне маркераў';
$string['pluginname_help'] = 'Drag and drop markers require the respondent to drag text labels and drop them into defined drop zones on a background image.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Adding drag and drop markers';
$string['pluginnameediting'] = 'Editing drag and drop markers';
$string['pluginnamesummary'] = 'Markers are dragged and dropped onto a background image.

Note: This question type is not accessible to users who are visually impaired.';
$string['previewareaheader'] = 'Preview';
$string['previewareamessage'] = 'Select a background image file, enter text labels for markers and define the drop zones on the background image to which they must be dragged.';
$string['privacy:metadata'] = 'Drag and drop markers question type plugin allows question authors to set default options as user preferences.';
$string['privacy:preference:defaultmark'] = 'The default mark set for a given question.';
$string['privacy:preference:penalty'] = 'The penalty for each incorrect try when questions are run using the \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:shuffleanswers'] = 'Whether the answers should be automatically shuffled.';
$string['refresh'] = 'Refresh preview';
$string['shape'] = 'Shape';
$string['shape_circle'] = 'Circle';
$string['shape_circle_coords'] = 'x,y;r (where x,y are the coordinates of the centre of the circle and r is the radius)';
$string['shape_circle_lowercase'] = 'circle';
$string['shape_polygon'] = 'Polygon';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (where x1, y1 are the coordinates of the first vertex, x2, y2 are the coordinates of the second etc. There is no need to repeat the coordinates for the first vertex to close the polygon.)';
$string['shape_polygon_lowercase'] = 'polygon';
$string['shape_rectangle'] = 'Rectangle';
$string['shape_rectangle_coords'] = 'x,y;w,h (where x,y are the coordinates of the top left corner of the rectangle and w and h are the width and height of the rectangle)';
$string['shape_rectangle_lowercase'] = 'rectangle';
$string['showmisplaced'] = 'Highlight drop zones which have not had the correct marker dropped on them';
$string['shuffleimages'] = 'Shuffle drag items each time question is attempted';
$string['stateincorrectlyplaced'] = 'State which markers are incorrectly placed';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Drop zone {$a}';
$string['ytop'] = 'Top';
