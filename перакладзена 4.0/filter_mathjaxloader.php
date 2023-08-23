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
 * Strings for component 'filter_mathjaxloader', language 'en', version '4.0'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Дадатковыя падзяляльнікі выразаў';
$string['additionaldelimiters_help'] = 'Фільтар MathJax аналізуе тэкст на наяўнасьць выразаў у межах знакаў-падзяляльнікаў.

Сюды льга дадаць сьпіс пазнавальных знакаў-падзяляльнікаў (напрыклад, карыстаны ў AsciiMath). Падзяляльнікі могуць утрымліваць некалькі знакаў, а некалькі падзяляльнікаў льга падзяліць коскамі.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'Спасылка на MathJax';
$string['httpsurl_help'] = 'Поўная спасылка на бібліятэку MathJax.';
$string['localinstall'] = 'Мясцовая ўсталёўка MathJax';
$string['localinstall_help'] = 'Стандартная канфігурацыя MathJax выкарыстоўвае CDN версію MathJax, але MathJax льга ўсталяваць на месцы пры патрэбе.

Гэта можа быць карысна для эканоміі шырыні Інтэрнэт трафіка ці абмежаваньняў мясцовага проксі.

Для выкарыстаньня мясцовая ўсталёўкі MathJax, спачатку спампуйце поўную бібліятэку MathJax з https://www.mathjax.org/. Потым усталюйце яе на вэб-сэрвер. Нарэшце абнавіце налады MathJax фільтра, httpurl і/альбо httpsurl на новую спасылку на мясцовы MathJax.js .';
$string['mathjaxsettings'] = 'Наладка MathJax';
$string['mathjaxsettings_desc'] = 'Стандартная канфігурацыя MathJax добра падыходзіць для большасьці карыстальнікаў, але MathJax выдатна паддаецца наладцы, і тут льга дадаць любыя налады канфігурацыі MathJax.';
$string['privacy:metadata'] = 'Плагін MathJax не захоўвае аніякіх асабістых дадзеных.';
$string['texfiltercompatibility'] = 'Сумяшчальнасьць з фільтрам TeX';
$string['texfiltercompatibility_help'] = 'Фільтар MathJax льга выкарыстоўваць у якасьці замены фільтра выразаў TeX.

Для падтрымцы ўсіх падзяляльнікаў фільтра выразаў TeX, MathJax будзе наладжаны для адлюстраваньня ўсіх выразаў "у радке" з тэкстам.';
