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
$string['formerror_nobgimage'] = 'Вы мусіце абраць выяву, што будзе ўжывацца ў якасьці фона для вобласьці пакіданьня.';
$string['formerror_noitemselected'] = 'Вы вызначылі вобласьць пакіданьня, але не абралі маркер, які трэба перасунуць у гэтую вобласьць.';
$string['formerror_nosemicolons'] = 'У радку каардынат няма кропак з коскай. Вашыя каардынаты {$a->shape} мусяць быць пададзены ў форме - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'У назьве маркера дазволены толькі тэгі "{$a}".';
$string['formerror_onlyusewholepositivenumbers'] = 'Калі ласка, выкарыстоўвайце толькі цэлыя станоўчыя лічбы дзеля вызначэньня каардынат x,y і/ці шырыні ды вышыні фігураў. Вашыя каардынаты для {$a->shape} мусяць быць вызначаны ў форме - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Дзеля шматкутніка трыба вызначыць прынамсі 3 вяршыні. Вашыя каардынаты для {$a->shape} мусяць быць вызначаны ў форме - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Вы двойчы ўвялі адны і тыя ж каардынаты. Кожная вяршыня мусіць унікальнай. Вашыя каардынаты для {$a->shape} мусяць быць вызначаны ў форме - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Вызначаная вамі фігура выходзіць за межы фонавай выявы.';
$string['formerror_toomanysemicolons'] = 'У вызначаных вамі каардынатах маецца зашмат кропак з коскай. Вашыя каардынаты для {$a->shape} мусяць быць вызначаны ў форме - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Вызначаныя вамі шырыня і вышыня не распазнаюцца. Вашыя каардынаты для {$a->shape} мусяць быць вызначаны ў форме - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Вызначаныя вамі каардынаты x,y не распазнаюцца. Вашыя каардынаты для {$a->shape} мусяць быць вызначаны ў форме - {$a->coordsstring}.';
$string['infinite'] = 'Неабмежаванае выкарыстаньне';
$string['marker'] = 'Маркер';
$string['marker_n'] = 'Маркер {no}';
$string['markers'] = 'Маркеры';
$string['nolabel'] = 'Адсутнічае тэкст назвы';
$string['noofdrags'] = 'Нумар';
$string['pleasedragatleastonemarker'] = 'Вашы адказ ня выкананы; вы мусіце зьмесцаваць на выяву прынамсі адзін маркер.';
$string['pluginname'] = 'Перасоўваньне маркераў';
$string['pluginname_help'] = 'Перасоўваньне маркераў патрабуе ад студэнта перасоўваньня тэкста ў вобласьці пакіданьня на фонавыя выявы.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Даданьне маркераў перасоўваньня';
$string['pluginnameediting'] = 'Рэдагаваньне маркераў перасоўваньня';
$string['pluginnamesummary'] = 'Маркеры перасоўваюцца на фонавую выяву.

Нататка: Гэты тып пытаньня не дапушчальны для карыстальнікаў з праблемамі зроку.';
$string['previewareaheader'] = 'Прадпрагляд';
$string['previewareamessage'] = 'Абярыце фонавую выяву, вызначце тэкст маркераў і вобласьці пакіданьня дзеля іх.';
$string['privacy:metadata'] = 'Плагін тып пытаньня Перасоўваньне маркераў дазваляе аўтарам усталёўваць стандартныя опцыі ў якасьці карыстальніцкіх пераваг.';
$string['privacy:preference:defaultmark'] = 'Стандартная адзнака, вызначаная для паданага пытаньня.';
$string['privacy:preference:penalty'] = 'Штраф за кожную хібную спробу выкананьня пытаньня ў рэжымах паводзінаў \'Інтэрактыўны з некалькімі спробамі\' і \'Адаптыўны рэжым\'.';
$string['privacy:preference:shuffleanswers'] = 'Ці трэба аўтаматычна перамешваць адказы.';
$string['refresh'] = 'Абнавіць прадпрагляд';
$string['shape'] = 'Фігура';
$string['shape_circle'] = 'Кола';
$string['shape_circle_coords'] = 'x,y;r (дзе x,y - каардынаты цэнтра кола, а r - радыус)';
$string['shape_circle_lowercase'] = 'кола';
$string['shape_polygon'] = 'Шматкутнік';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (дзе x1, y1 - каардынаты першай вяршыні, x2, y2 каардынаты другой вяршыні, і гэтак далей. Дзеля замыканьня ня трэба паўтараць каардынаты першай вяршыні.)';
$string['shape_polygon_lowercase'] = 'шматкутнік';
$string['shape_rectangle'] = 'Прастакутнік';
$string['shape_rectangle_coords'] = 'x,y;w,h (дзе x,y - каардынаты левага верхняга кута прастакутніка, w ды h - шырыня і вышыня прастакутніка)';
$string['shape_rectangle_lowercase'] = 'прастакутнік';
$string['showmisplaced'] = 'Вылучыць вобласьці пакіданьня, на якія не перасунуты належным чынам маркер';
$string['shuffleimages'] = 'Перамешваць рухомыя прадметы падчас кожнага новага спрабаваньня';
$string['stateincorrectlyplaced'] = 'Вызначыць хібна зьмесцаваныя маркеры';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Вобласьць пакіданьня {$a}';
$string['ytop'] = 'Верх';
