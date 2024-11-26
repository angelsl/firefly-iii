<?php

/*
 * rules.php
 * Copyright (c) 2023 james@firefly-iii.org
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

declare(strict_types=1);

return [
    'main_message'                                => 'Дія ":action", присутня в правилі":rule", не може бути застосована до транзакції #:group: :error',
    'find_or_create_tag_failed'                   => 'Не вдалося знайти або створити тег ":tag"',
    'tag_already_added'                           => 'Тег ":tag" вже пов\'язаний з цією транзакцією',
    'inspect_transaction'                         => 'Перевірити транзакцію ":title" @ Firefly III',
    'inspect_rule'                                => 'Перевірити правило ":title" @ Firefly III',
    'journal_other_user'                          => 'Ця операція не належить користувачу',
    'no_such_journal'                             => 'Операція не існує',
    'journal_already_no_budget'                   => 'У цієї операції немає бюджету, тому її не можна видалити',
    'journal_already_no_category'                 => 'Ця операція не має категорії, тому її неможливо видалити',
    'journal_already_no_notes'                    => 'Ця операція не має примітки, тому її неможливо видалити',
    'journal_not_found'                           => 'Firefly III не може знайти запитану транзакцію',
    'split_group'                                 => 'Firefly III не може виконати цю дію на транзакції з декількома розділами',
    'is_already_withdrawal'                       => 'Ця транзакція вже є витратою',
    'is_already_deposit'                          => 'Ця транзакція вже є надходженням',
    'is_already_transfer'                         => 'Ця транзакція вже є переказом',
    'is_not_transfer'                             => 'Ця транзакція не є переказом',
    'complex_error'                               => 'Щось складне пішло не так. Вибачте про це. Будь ласка, огляньте журнали Firefly III',
    'no_valid_opposing'                           => 'Перетворення не вдалося, оскільки не існує дійсного облікового запису з ім\'ям ":account"',
    'new_notes_empty'                             => 'Нотатки, які повинні бути множини, порожні',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III не може перетворити a ":type" у виведення',
    'unsupported_transaction_type_deposit'        => 'Firefly III не може перетворити a ":type" в депозит',
    'unsupported_transaction_type_transfer'       => 'Firefly III не може перетворити a ":type" в передачу',
    'already_has_source_asset'                    => 'Ця транзакція вже має ":name" як рахунок вихідного активу',
    'already_has_destination_asset'               => 'Ця транзакція вже має ":name" як рахунок активу призначення',
    'already_has_destination'                     => 'Ця транзакція вже має ":name" як обліковий запис призначення',
    'already_has_source'                          => 'Ця транзакція вже має ":name" як обліковий запис-джерело',
    'already_linked_to_subscription'              => 'Транзакція вже пов\'язана з передплатою ":name"',
    'already_linked_to_category'                  => 'Операція вже пов\'язана з категорією ":name"',
    'already_linked_to_budget'                    => 'Транзакція вже пов\'язана з бюджетом ":name"',
    'cannot_find_subscription'                    => 'Firefly III не може знайти підписку":name"',
    'no_notes_to_move'                            => 'Операція не має нотаток для переміщення в описі',
    'no_tags_to_remove'                           => 'Операція не має тегів, щоб видалити',
    'not_withdrawal'                              => 'Операція не є виведення коштів',
    'not_deposit'                                 => 'Операція не є депозитом',
    'cannot_find_tag'                             => 'Firefly III не може знайти тег «:tag»',
    'cannot_find_asset'                           => 'Firefly III не може знайти обліковий запис медіафайлів ":name"',
    'cannot_find_accounts'                        => 'Firefly III не може знайти вихідний або кінцевий обліковий запис',
    'cannot_find_source_transaction'              => 'Firefly III не може знайти початкову транзакцію',
    'cannot_find_destination_transaction'         => 'Firefly III не може знайти кінцеву транзакцію',
    'cannot_find_source_transaction_account'      => 'Firefly III не вдається знайти вихідний рахунок транзакції',
    'cannot_find_destination_transaction_account' => 'Firefly III не вдається знайти рахунок цільової транзакції',
    'cannot_find_piggy'                           => 'Firefly III не може знайти скарбницю під назвою ":name"',
    'no_link_piggy'                               => 'Рахунок цієї транзакції не пов\'язані з банком свині, тому жодна дія не буде прийнята',
    'cannot_unlink_tag'                           => 'Тег ":tag" не пов\'язаний з цією операцією',
    'cannot_find_budget'                          => 'Firefly III не може знайти бюджет ":name"',
    'cannot_find_category'                        => 'Firefly III не може знайти категорію":name"',
    'cannot_set_budget'                           => 'Firefly III не може встановити бюджет ":name" в транзакцію типу ":type"',
    'journal_invalid_amount'                      => 'Firefly III не може встановити суму ":amount", оскільки воно не є дійсним числом.',
    'cannot_remove_zero_piggy'                    => 'Неможливо видалити нульову суму з банку свині ":name"',
    'cannot_remove_from_piggy'                    => 'Не вдалося зняти ":amount" зі скарбнички ":name"',
    'cannot_add_zero_piggy'                       => 'Не можна додати нульову суму до скарбнички ":name"',
    'cannot_add_to_piggy'                         => 'Не вдалося додати ":amount" до скарбнички ":name"',
];
