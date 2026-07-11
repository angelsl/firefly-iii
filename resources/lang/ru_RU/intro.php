<?php

/**
 * intro.php
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

declare(strict_types=1);

return [
    // index
    'index_intro'                                             => 'Добро пожаловать на главную страницу Firefly III. Уделите немного времени этому краткому обзору, чтобы понять, как работает Firefly III.',
    'index_accounts-chart'                                    => 'Эта диаграмма показывает текущий баланс ваших основных счетов. Видимые счета можно выбрать в настройках.',
    'index_box_out_holder'                                    => 'Небольшие блоки, собранные на этой странице, показывают общее положение дел с вашими финансами.',
    'index_help'                                              => 'Если вам нужна помощь со страницей или формой - нажмите эту кнопку.',
    'index_outro'                                             => 'Большинство страниц Firefly III начнутся с небольшого тура, подобного этому. Пожалуйста, свяжитесь со мной, если у вас возникнут вопросы или комментарии. Наслаждайтесь!',
    'index_sidebar-toggle'                                    => 'Для создания новых транзакций, счётов и прочего используйте меню под этим значком.',
    'index_cash_account'                                      => 'Это ранее созданные счета. Вы можете использовать счёт "Наличные" для отслеживания ваших наличных расходов, но это, в общем-то, не обязательно.',

    // transactions
    'transactions_create_basic_info'                          => 'Введите основную информацию о вашей транзакции. Счёт-источник, счёт назначения, дату и описание.',
    'transactions_create_amount_info'                         => 'Введите сумму транзакции. Если сумма задана в иностранной валюте, эти поля, при необходимости, будут автоматически обновляться.',
    'transactions_create_optional_info'                       => 'Все эти поля являются необязательными. Добавление метаданных сделает ваши транзакции более организованными.',
    'transactions_create_split'                               => 'Если вы хотите разделить транзакцию, добавьте дополнительные фрагменты этой кнопкой',

    // create account:
    'accounts_create_iban'                                    => 'Задайте вашим счетам действующий IBAN. В будущем это может сделать импорт данных очень простым.',
    'accounts_create_asset_opening_balance'                   => 'У счёта активов всегда есть «начальный баланс», показывающий, какая сумма была на этом счету, когда вы начали работать с ним в Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III поддерживает несколько валют. Каждый счёт связан с одной основной валютой, которую вы должны указать здесь.',
    'accounts_create_asset_virtual'                           => 'Иногда бывает удобно предоставить вашему счёту виртуальный баланс: дополнительная сумма, всегда добавленная или выведенная из фактического баланса.',

    // budgets index
    'budgets_index_intro'                                     => 'Бюджеты используются для управления финансами и являются одной из основных функций Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'По мере того, как вы будете тратить деньги, эта диаграмма будет заполняться.',
    'budgets_index_navigate_periods'                          => 'Перемещайтесь между периодами, чтобы планировать бюджеты заранее.',
    'budgets_index_new_budget'                                => 'Создавайте новые бюджеты по своему усмотрению.',
    'budgets_index_list_of_budgets'                           => 'В этой таблице можно задать суммы для каждого бюджета и отслеживать прогресс.',
    'budgets_index_outro'                                     => 'Чтобы узнать больше о бюджетировании, нажмите на значок справки в правом верхнем углу.',

    // reports (index)
    'reports_index_intro'                                     => 'Используйте эти отчеты, чтобы получить подробные сведения о ваших финансах.',
    'reports_index_inputReportType'                           => 'Выберите тип отчета. Просмотрите страницу справки, чтобы узнать, что показывает каждый отчёт.',
    'reports_index_inputAccountsSelect'                       => 'Вы можете исключить или включить основные счета по своему усмотрению.',
    'reports_index_inputDateRange'                            => 'Диапазон дат на ваш выбор - от одного дня до 10 лет и более.',
    'reports_index_extra-options-box'                         => 'В зависимости от выбранного типа отчёта здесь доступны дополнительные фильтры и параметры. Следите за этим блоком при смене типа отчёта.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Этот отчёт даст вам быстрый и полный обзор ваших финансов. Если вы хотите увидеть что-нибудь ещё, то смело обращайтесь ко мне!',
    'reports_report_audit_intro'                              => 'Этот отчёт покажет подробную информацию о ваших основных счетах.',
    'reports_report_audit_optionsBox'                         => 'С помощью этих флажков можно показать или скрыть нужные столбцы.',

    'reports_report_category_intro'                           => 'Этот отчёт даст вам представление об одной или нескольких категориях.',
    'reports_report_category_pieCharts'                       => 'Эти диаграммы дадут вам представление о расходах и доходах по категориям или счетам.',
    'reports_report_category_incomeAndExpensesChart'          => 'На этой диаграмме показаны ваши расходы и доход по каждой категории.',

    'reports_report_tag_intro'                                => 'Этот отчёт даст вам представление об одной или нескольких метках.',
    'reports_report_tag_pieCharts'                            => 'Эти диаграммы дадут вам представление о расходах и доходах по меткам, счетам, категориям или бюджетам.',
    'reports_report_tag_incomeAndExpensesChart'               => 'На этой диаграмме показаны ваши расходы и доходы с определенной меткой.',

    'reports_report_budget_intro'                             => 'Этот отчёт даст вам представление об одном или нескольких бюджетах.',
    'reports_report_budget_pieCharts'                         => 'Эти диаграммы дадут вам представление о расходах по выбранному бюджету или счёту.',
    'reports_report_budget_incomeAndExpensesChart'            => 'На этой диаграмме показаны расходы, сгруппированные по бюджетам.',

    // create transaction
    'transactions_create_switch_box'                          => 'С помощью этих кнопок можно быстро переключить тип транзакции.',
    'transactions_create_ffInput_category'                    => 'В это поле можно ввести любую категорию. Ранее созданные категории будут предложены автоматически.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Свяжите ваш расход с одной из статей бюджета для большего контроля над финансами.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Используйте этот выпадающий список, если ваш расход был произведён в другой валюте.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Используйте этот выпадающий список, если ваш доход получен в другой валюте.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Выберите копилку и привяжите этот перевод к вашим сбережениям.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Это поле показывает, сколько вы сохранили в каждой копилке.',
    'piggy-banks_index_button'                                => 'Рядом с этим индикатором выполнения находятся две кнопки (+ и -) для добавления или удаления денег из каждой копилки.',
    'piggy-banks_index_accountStatus'                         => 'Для каждого основного счёта, связанного хотя бы с одной копилкой, статус указан в этой таблице.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Какова ваша цель? Новый диван, камера, деньги на "чёрный день"?',
    'piggy-banks_create_date'                                 => 'Вы можете указать конкретную дату или крайний срок для наполнения своей копилки.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Диаграмма показывает историю этой копилки.',
    'piggy-banks_show_piggyDetails'                           => 'Некоторые подробности о вашей копилке',
    'piggy-banks_show_piggyEvents'                            => 'Все добавления или изъятия денег из копилки показаны здесь.',

    // bill index
    'bills_index_rules'                                       => 'Здесь вы увидите какие правила будут проверять, была ли эта подписка выполнена',
    'bills_index_paid_in_period'                              => 'Это поле указывает, когда подписка была оплачена последней раз.',
    'bills_index_expected_in_period'                          => 'В этом поле для каждой подписки указывается, ожидается ли начало следующей подписки и когда она наступит.',

    'subscriptions_index_rules'                               => 'Здесь вы видите, какие правила будут проверять, сработала ли эта подписка',
    'subscriptions_index_paid_in_period'                      => 'В этом поле указывается, когда подписка была оплачена в последний раз.',
    'subscriptions_index_expected_in_period'                  => 'В этом поле для каждой подписки указывается, ожидается ли начало следующей подписки и когда она наступит.',

    // show bill
    'bills_show_billInfo'                                     => 'В этой таблице приведена общая информация об этой подписке.',
    'bills_show_billButtons'                                  => 'Используйте эту кнопку для повторного сканирования старых транзакций, чтобы они были сопоставлены с этой подпиской.',
    'bills_show_billChart'                                    => 'Этот график показывает операции, связанные с этой подпиской.',
    'subscriptions_show_billInfo'                             => 'В этой таблице приведена общая информация об этой подписке.',
    'subscriptions_show_billButtons'                          => 'Используйте эту кнопку для повторного сканирования старых операций, для сопоставления с этой подпиской.',
    'subscriptions_show_billChart'                            => 'Этот график показывает операции, связанные с этой подпиской.',

    // create bill
    'bills_create_intro'                                      => 'Используйте подписки, чтобы отслеживать сумму денег, которую вы должны платить каждый период. Подумайте о таких расходах, как аренда, страховка или ипотечные платежи.',
    'bills_create_name'                                       => 'Используйте понятные названия, например «Аренда» или «Расходы на лечение».',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Выберите минимальную и максимальную сумму для этой подписки.',
    'bills_create_repeat_freq_holder'                         => 'Большинство подписок повторяются ежемесячно, но здесь вы можете установить другую частоту.',
    'bills_create_skip_holder'                                => 'Если подписка повторяется каждые 2 недели, поле «пропустить» следует установить на «1», чтобы пропускать каждую вторую неделю.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III позволяет вам использовать правила, автоматически применяющиеся к любой транзакции, которую вы создаёте или редактируете.',
    'rules_index_new_rule_group'                              => 'Вы можете комбинировать правила в группы, чтобы упростить управление ими.',
    'rules_index_new_rule'                                    => 'Создайте столько правил, сколько захотите.',
    'rules_index_prio_buttons'                                => 'Упорядочивайте их так, как вы считаете нужным.',
    'rules_index_test_buttons'                                => 'Вы можете проверить свои правила или применить их к существующим транзакциям.',
    'rules_index_rule-triggers'                               => 'Правила имеют «условия» и «действия», которые вы можете упорядочивать путём перетаскивания.',
    'rules_index_outro'                                       => 'Не забудьте ознакомиться со страницами справки, используя значок (?) В правом верхнем углу!',

    // create rule:
    'rules_create_mandatory'                                  => 'Дайте правилу понятное название и укажите, когда оно должно использоваться.',
    'rules_create_ruletriggerholder'                          => 'Добавьте столько условий, сколько хотите, но помните, что для выполнения действий, должны выполниться ВСЕ условия.',
    'rules_create_test_rule_triggers'                         => 'Используйте эту кнопку, чтобы узнать, какие транзакции будут соответствовать вашему правилу.',
    'rules_create_actions'                                    => 'Установите столько действий, сколько хотите.',

    // preferences
    'preferences_index_tabs'                                  => 'На этих вкладках доступны дополнительные параметры.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III поддерживает несколько валют, которые вы можете изменить на этой странице.',
    'currencies_index_default'                                => 'В Firefly III одна валюта по умолчанию.',
    'currencies_index_buttons'                                => 'Используйте эти кнопки, чтобы изменить валюту по умолчанию или включить другие валюты.',

    // create currency
    'currencies_create_code'                                  => 'Код должен соответствовать требованиям ISO (для новых валют вы можете найти код с помощью Google).',
];
