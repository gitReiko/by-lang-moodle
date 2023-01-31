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
 * Strings for component 'block', language 'en', version '4.0'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Усякая старонка, што адпавядае вышэйазначанаму';
$string['appearsinsubcontexts'] = 'Адлюстроўваецца ў падкантэкстах';
$string['assignrolesinblock'] = 'Прызначыць ролі ў блоке {$a}';
$string['blocksdrawertoggle'] = 'Паказаць/схаваць макет блока';
$string['blocksettings'] = 'Налады блока';
$string['bracketfirst'] = '{$a} (першы)';
$string['bracketlast'] = '{$a} (апошні)';
$string['configureblock'] = 'Наладзіць блок {$a}';
$string['contexts'] = 'Кантэксты старонак';
$string['contexts_help'] = 'Кантэксты - гэта больш пэўныя тыпы старонак, на якіх гэты блок можа адлюстроўвацца ў межах пачатковага месцавання блока. Тут вы будзеце мець розныя варыянты ў залежнасці ад пачатковага і вашага цяперашняга месцавання блока. Напрыклад, вы можаце абмежаваць адлюстраванне блока толькі на старонках форума ў курсе, дадаўшы блок у курс (каб ён адлюстроўваўся ва ўсіх падстаронках), а потым зайсці на форум і адрэдагаваць налады блока, каб абмежаваць яго адлюстраванне толькі старонкамі форума.';
$string['createdat'] = 'Пачатковае месцаванне блока';
$string['createdat_help'] = 'Пачатковае месцаванне, дзе блок быў створаны. Налады блока могуць стаць нагодай яго адлюстравання ў іншых месцах (кантэкстах) у межах пачатковага месцавання. Напрыклад, блок, створаны на старонцы курса, можа адлюстроўвацца ў актыўнасцях у межах гэтага курса. Блок, створаны на галоўнай старонцы сайта, можа адлюстроўвацца на ўсім сайце.';
$string['defaultregion'] = 'Вобласць па змаўчанні';
$string['defaultregion_help'] = 'Тэмы могуць вызначаць адну ці некалькі найменных абласцей, у якіх могуць адлюстроўваюцца блокі. Гэтая налада вызначае, у якой вобласці вы жадаеце размясціць гэты блок па змаўчанні. Пры патрэбе вобласць можа быць перавызначана на пэўных старонках.';
$string['defaultweight'] = 'Вага па змоўчанні';
$string['defaultweight_help'] = 'Вага па змаўчанні дазваляе вам прыкладна вызначыць пажаданае месца адлюстравання ў абранай вобласці, зверху ці знізу. Канчатковае палажэнне вылічаецца з усіх блокаў у гэтай вобласці (тлумачэнне, толькі адзін блок можа быць на самым версе). Пры патрэбе гэтае значэнне можа быць перавызначана на пэўных старонках.';
$string['deleteblock'] = 'Выдаліць блок {$a}';
$string['deleteblockcheck'] = 'Вы ўпэўнены, што жадаеце выдаліць блок {$a}?';
$string['deleteblockinprogress'] = 'Выдаленне блока {$a} ў прагрэсе...';
$string['deleteblockwarning'] = '<p>You are about to delete a block that appears elsewhere.</p><p>Original block location: {$a->location}<br />Display on page types: {$a->pagetype}</p><p>Are you sure you want to continue?</p>';
$string['deletecheck'] = 'Delete {$a} block?';
$string['deletecheck_modal'] = 'Delete block?';
$string['hideblock'] = 'Hide {$a} block';
$string['hidepanel'] = 'Hide panel';
$string['moveblock'] = 'Move {$a} block';
$string['moveblockafter'] = 'Move block to after {$a} block';
$string['moveblockbefore'] = 'Move block to before {$a} block';
$string['moveblockinregion'] = 'Move block to {$a} region';
$string['movingthisblockcancel'] = 'Moving this block ({$a})';
$string['myblocks'] = 'My blocks';
$string['onthispage'] = 'On this page';
$string['pagetypes'] = 'Page types';
$string['pagetypewarning'] = 'The previously specified page type is no longer selectable. Please choose the most appropriate page type below.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Records when the user docked a block';
$string['privacy:metadata:userpref:hiddenblock'] = 'Records when the user collapsed/hid a block';
$string['privacy:request:blockisdocked'] = 'Indicates whether the block was docked';
$string['privacy:request:blockishidden'] = 'Indicates whether the block was hidden/collapsed';
$string['region'] = 'Region';
$string['restrictpagetypes'] = 'Display on page types';
$string['showblock'] = 'Show {$a} block';
$string['showoncontextandsubs'] = 'Display on \'{$a}\' and any pages within it';
$string['showoncontextonly'] = 'Display on \'{$a}\' only';
$string['showonentiresite'] = 'Display throughout the entire site';
$string['showonfrontpageandsubs'] = 'Display on the site home and any pages added to the site home.';
$string['showonfrontpageonly'] = 'Display on the site home only';
$string['subpages'] = 'Select pages';
$string['thisspecificpage'] = 'This specific page';
$string['visible'] = 'Visible';
$string['weight'] = 'Weight';
$string['wherethisblockappears'] = 'Where this block appears';
