<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    '404_header'              => 'Firefly III не може да намери тази страница.',
    '404_page_does_not_exist' => 'Страницата, която сте поискали не съществува. Моля, проверете дали не сте въвели грешен URL адрес. Направихте ли печатна грешка?',
    '404_send_error'          => 'Ако сте били пренасочени към тази страница автоматично, моля приемете моите извинения. Във вашите дневници има маркер за тази грешка и ще съм ви благодарен, ако ми изпратите грешката.',
    '404_github_link'         => 'Ако сте сигурни, че тази страница трябва да съществува, моля отворете билет на <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Опаааа',
    'fatal_error'             => 'Имаше фатална грешка. Моля, проверете лог файловете в "storage/logs" или използвайте "docker logs -f [container]", за да видите какво се случва.',
    'maintenance_mode'        => 'Firefly III е в режим на поддръжка.',
    'be_right_back'           => 'Веднага се връщам!',
    'check_back'              => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'          => 'Опаааа! Случи се грешка.',
    'db_error_occurred'       => 'Опаааа! Случи се грешка с базата данни.',
    'error_not_recoverable'   => 'За съжаление от тази грешка не се възстановява :(. Firefly III се счупи. Грешката е:',
    'error'                   => 'Грешка',
    'error_location'          => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'              => 'Проследяване на стека',
    'more_info'               => 'Повече информация',

    /*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'collect_info'            => 'Моля, съберете повече информация в директорията <code> storage/logs </code>, където ще намерите файловете на дневника. Ако използвате Docker, използвайте <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'You can read more about collecting error information in <a href="https://docs.firefly-iii.org/how-to/general/debug/">the FAQ</a>.',
    'github_help'             => 'Получете помощ на GitHub',
    'github_instructions'     => 'Добре дошли сте да отворите нов проблем <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">на GitHub</a></strong>.',
    'use_search'              => 'Използвайте търсенето!',
    'include_info'            => 'Включете информацията <a href=":link">от тази debug страница</a>.',
    'tell_more'               => 'Разкажете ни повече от „казва Опаааа!“',
    'include_logs'            => 'Включете регистрационни файлове за грешки (вижте по-горе).',
    'what_did_you_do'         => 'Кажете ни какво правихте.',
    'offline_header'          => 'Вие вероятно не сте на линия',
    'offline_unreachable'     => 'Firefly III е недостижим. Устройството Ви в момента не е на линия или сървърът не работи.',
    'offline_github'          => 'Ако сте сигурни, че Вашето устройство и сървъра са на линия, моля отворете билет на <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
];
