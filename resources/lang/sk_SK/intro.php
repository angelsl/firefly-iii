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
    'index_intro'                                             => 'Vitajte na titulnej stránke Firefly III. Venujte čas tomuto úvodu, aby ste se dozvedeli, ako Firefly III funguje.',
    'index_accounts-chart'                                    => 'Tento graf zobrazuje aktuálne zostatky vašich majetkových účtov. Aké účty se tu majú zobrazovať, je možné nastaviť v predvoľbách.',
    'index_box_out_holder'                                    => 'Táto malá oblasť a ďalšie vedľa podávajú rýchly prehľad vašej finančnej situácie.',
    'index_help'                                              => 'Ak budete potrebovať pomoc k stránke alebo formuláru, kliknite na toto tlačítko.',
    'index_outro'                                             => 'Väčina stránok Firefly III začína krátkou prehliadkou, ako je táto. Obraťte se na mňa, ak máte otázky alebo komentáre. Nech vám slúži!',
    'index_sidebar-toggle'                                    => 'Na vytváranie nových transakcií, účtov a ostatných položiek, použite ponuku pod touto ikonou.',
    'index_cash_account'                                      => 'Toto sú doteraz vytvorené účty. Hotovostný účet môžete použiť pre sledovanie výdajov v hotovosti, ale nie je to, pochopiteľne, povinné.',

    // transactions
    'transactions_create_basic_info'                          => 'Zadajte základné informácie o transakcii. Zdroj, cieľ, dátum a popis.',
    'transactions_create_amount_info'                         => 'Zadajte sumu transakcie. Ak je to potrebné, polia sa automaticky aktualizujú pre informácie o cudzej mene.',
    'transactions_create_optional_info'                       => 'Tieto polia sú nepovinné. Pridaním ďalších metadát zlepšíte organizáciu vašich transakcií.',
    'transactions_create_split'                               => 'Ak chcete rozdeliť transakciu, týmto tlačítkom vykonáte rozdelenie',

    // create account:
    'accounts_create_iban'                                    => 'Uveďte pre svoje účty platný IBAN identifikátor. V budúcnosti by to mohlo veľmi uľahčiť import dát.',
    'accounts_create_asset_opening_balance'                   => 'Majetkové účty môžu mať „počiatočný zostatok" označujúcí začiatok histórie tohoto účtu vo Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III podporuje viacero mien. Majetkové účty majú jednu hlavnú menu, ktorú je potrebné tu nastaviť.',
    'accounts_create_asset_virtual'                           => 'Niekedy sa môže hodiť dať svojmu účtu virtuálny zostatok: extra sumu, vždy pripočítanú alebo odrátanú od aktuálneho zostatku.',

    // budgets index
    'budgets_index_intro'                                     => 'Rozpočty slúžia na správu vašich financií a tvoria jednu z hlavných funkcií Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Utratené peniaze budou postupne plniť tento pruh.',
    'budgets_index_navigate_periods'                          => 'Prechádzajte obdobiami a jednoducho nastavujte rozpočty vopred.',
    'budgets_index_new_budget'                                => 'Vytvárajte nové rozpočty ako uznáte za vhodné.',
    'budgets_index_list_of_budgets'                           => 'Používajte túto tabuľku pre nastavenie súm pre každý rozpočet a zistite, ako ste na tom s financiami.',
    'budgets_index_outro'                                     => 'Ak se chcete dozvedieť viac o tvorbe rozpočtov, kliknite na ikonu pomocníka v pravom hornom rohu.',

    // reports (index)
    'reports_index_intro'                                     => 'S pomocou týchto prehľadov získate podrobné informácie o svojich financiách.',
    'reports_index_inputReportType'                           => 'Vyberte typ prehľadu. Pozrite sa na stránky pomocníka a zistite, čo vám každý prehľad ukáže.',
    'reports_index_inputAccountsSelect'                       => 'Môžete zahŕňať, alebo vynechávať majetkové účty, ako potrebujete.',
    'reports_index_inputDateRange'                            => 'The selected date range is entirely up to you: from one day to 10 years or more.',
    'reports_index_extra-options-box'                         => 'Podľa toho, aký výkaz ste vybrali, je tu možné vybrať ďalšie filtre a voľby. Pri zmene typu výkazu sledujte túto oblasť.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Tento výkaz vám podá rýchly a podrobný prehľad vašich financií. Ak chcete vidieť niečo iné, neváhajte se na mňa obrátiť!',
    'reports_report_audit_intro'                              => 'Tento výkaz vám podá podrobný prehľad vašich majetkových účtov.',
    'reports_report_audit_optionsBox'                         => 'Pomocou týchto zaškrtávacích políčiek zobrazujte alebo skrývajte stĺpce, které vás (ne)zaujímajú.',

    'reports_report_category_intro'                           => 'Tato zostava vám podá prehľad v jednej alebo viacerých kategóriách.',
    'reports_report_category_pieCharts'                       => 'Tieto grafy vám podajú prehľad výdajov a príjmov pre jednotlivé kategórie alebo účty.',
    'reports_report_category_incomeAndExpensesChart'          => 'Tento graf zobrazuje vaše náklady a príjmy v jednotlivých kategóriách.',

    'reports_report_tag_intro'                                => 'Táto zostava vám podáva prehľad jedného alebo viacerých štítkov.',
    'reports_report_tag_pieCharts'                            => 'Tieto grafy vám podávajú prehľad nákladov a príjmov pre jednotlivé štítky, účty, kategórie alebo rozpočty.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Tento graf zobrazuje vaše výdaje a príjmy pre každý štítok.',

    'reports_report_budget_intro'                             => 'Táto zostava vám podáva prehľad jedného alebo viacerých rozpočtov.',
    'reports_report_budget_pieCharts'                         => 'Tieto grafy vám podávajú prehľad výdajov pro jednotlivé rozpočty alebo účty.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Tento graf zobrazuje vaše výdaje v jednotlivých rozpočtoch.',

    // create transaction
    'transactions_create_switch_box'                          => 'Pomocou týchto tlačidiel môžete rýchlo prepínať typ transakcie, ktorú chcete uložiť.',
    'transactions_create_ffInput_category'                    => 'Do tohto poľa si môžete napísať, čo len chcete. Budú vám navrhované existujúce kategórie.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Prepojte svoj výber s rozpočtom a získate lepšiu kontrolu nad financiami.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Túto rozbaľovaciu ponuku použite, ak je váš výber v inej mene.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Túto rozbaľovaciu ponuku použite, ak je váš vklad v inej mene.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Vyberte pokladničku a prepojte tento prevod so svojimi úsporami.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Toto políčko zobrazuje, koľko ste v každej z pokladničiek ušetrili.',
    'piggy-banks_index_button'                                => 'Vedľa tohto ukazovateľa postupu sa nachádzajú dve tlačítka (+ a -) pre pridanie alebo odobranie peňazí z každej z pokladničiek.',
    'piggy-banks_index_accountStatus'                         => 'Pre každý majetkový účet s aspoň jednou pokladničkou je v tejto tabuľke vypísaný stav.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Čo je vašim cieľom? Nová pohovka, fotoaparát, rezerva pre nečekané výdaje?',
    'piggy-banks_create_date'                                 => 'Pre pokladničku je možné nastaviť cieľový dátum alebo termín.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Tento graf bude zobrazovať históriu vašej pokladničky.',
    'piggy-banks_show_piggyDetails'                           => 'Nejaké podrobnosti o vašej pokladničke',
    'piggy-banks_show_piggyEvents'                            => 'Sú tu uvedené tiež všetky prírastky i výbery.',

    // bill index
    'bills_index_rules'                                       => 'Here you see which rules will check if this subscription is hit',
    'bills_index_paid_in_period'                              => 'This field indicates when the subscription was last paid.',
    'bills_index_expected_in_period'                          => 'This field indicates for each subscription if and when the next subscription is expected to hit.',

    'subscriptions_index_rules'                               => 'Here you see which rules will check if this subscription is hit',
    'subscriptions_index_paid_in_period'                      => 'This field indicates when the subscription was last paid.',
    'subscriptions_index_expected_in_period'                  => 'This field indicates for each subscription if and when the next subscription is expected to hit.',

    // show bill
    'bills_show_billInfo'                                     => 'This table shows some general information about this subscription.',
    'bills_show_billButtons'                                  => 'Use this button to re-scan old transactions so they will be matched to this subscription.',
    'bills_show_billChart'                                    => 'This chart shows the transactions linked to this subscription.',
    'subscriptions_show_billInfo'                             => 'This table shows some general information about this subscription.',
    'subscriptions_show_billButtons'                          => 'Use this button to re-scan old transactions so they will be matched to this subscription.',
    'subscriptions_show_billChart'                            => 'This chart shows the transactions linked to this subscription.',

    // create bill
    'bills_create_intro'                                      => 'Use subscriptions to track the amount of money you\'re due every period. Think about expenses like rent, insurance or mortgage payments.',
    'bills_create_name'                                       => 'Zadajte výstižný názov, ako „Nájomné“ alebo „Životné poistenie“.',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Select a minimum and maximum amount for this subscription.',
    'bills_create_repeat_freq_holder'                         => 'Most subscriptions repeat monthly, but you can set another frequency here.',
    'bills_create_skip_holder'                                => 'If a subscription repeats every 2 weeks, the "skip"-field should be set to "1" to skip every other week.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III umožňuje spravovať pravidlá, ktoré budú automaticky uplatňované na všetky transakcie, ktoré vytvoríte alebo upravíte.',
    'rules_index_new_rule_group'                              => 'Pro jednoduššiu správu je pravidlá možné kombinovať v skupinách.',
    'rules_index_new_rule'                                    => 'Vytvorte si toľko pravidel, koľko potrebujete.',
    'rules_index_prio_buttons'                                => 'Zoraďte ich tak, ako vám to vyhovuje.',
    'rules_index_test_buttons'                                => 'Pravidlá je možné vyskúšať alebo uplatniť na existujúce transakcie.',
    'rules_index_rule-triggers'                               => 'Pravidlá majú „spúšťače“ a „akcie“. Ich poradie je možné meniť ich preťahovaním.',
    'rules_index_outro'                                       => 'Pozrite sa do pomocníka - ikona (?) v pravom hornom rohu!',

    // create rule:
    'rules_create_mandatory'                                  => 'Zvoľte výstižný názov a nastavte, kedy má byť pravidlo spustené.',
    'rules_create_ruletriggerholder'                          => 'Pridajte toľko spúšťačov, koľko potrebujete, ale pamätajte si - aby bola spustená akákoľvek akcia, je potrebné, aby boli splnené podmienky VŠETKÝCH nastavených spúšťačov.',
    'rules_create_test_rule_triggers'                         => 'Toto tlačidlo slúži na zobrazenie transakcií, ktoré zodpovedajú pravidlu.',
    'rules_create_actions'                                    => 'Nastavte toľko akcií, koľko potrebujete.',

    // preferences
    'preferences_index_tabs'                                  => 'Ďalšie možnosti sú k dispozícii v kartách.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III podporuje viacero mien, ktoré môžete menit na tejto stránke.',
    'currencies_index_default'                                => 'Firefly III má jednu predvolenú menu.',
    'currencies_index_buttons'                                => 'Tieto tlačídlá slúžia na zmenu predvolenej meny alebo zapnutie ďalších mien.',

    // create currency
    'currencies_create_code'                                  => 'Tento kód by mal byť v súlade s normou ISO (vyhľadajte si ho pre novú menu).',
];
