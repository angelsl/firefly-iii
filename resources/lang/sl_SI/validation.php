<?php

/**
 * validation.php
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
    'filter_must_be_in'               => 'Filter ":filter" mora biti ena od: :values',
    'filter_not_string'               => 'Filter ":filter" naj bi bil niz besedila',
    'bad_api_filter'                  => 'Ta API končna točka ne podpira ":filter" kot filtra.',
    'nog_logged_in'                   => 'Niste prijavljeni.',
    'bad_type_source'                 => 'Na podlagi tega izvornega računa Firefly III ne more določiti vrste transakcije.',
    'bad_type_destination'            => 'Na podlagi tega ciljnega računa Firefly III ne more določiti vrste transakcije.',
    'missing_where'                   => 'Matriki manjka člen "kjer"',
    'missing_update'                  => 'Matriki manjka člen "posodobi"',
    'invalid_where_key'               => 'JSON vsebuje neveljaven ključ za člen "kjer"',
    'invalid_update_key'              => 'JSON vsebuje neveljaven ključ za člen "posodobi"',
    'invalid_query_data'              => 'V polju %s:%s vaše poizvedbe so neveljavni podatki.',
    'invalid_query_account_type'      => 'Vaša poizvedba vsebuje račune različnih vrst, kar ni dovoljeno.',
    'invalid_query_currency'          => 'Vaša poizvedba vsebuje račune, ki imajo različne nastavitve valute, kar ni dovoljeno.',
    'iban'                            => 'To ni veljaven IBAN.',
    'zero_or_more'                    => 'Vrednost ne more biti negativna.',
    'more_than_zero'                  => 'Znesek mora biti večji od nič.',
    'more_than_zero_correct'          => 'Vrednost mora biti nič ali več.',
    'no_asset_account'                => 'To ni račun sredstev.',
    'date_or_time'                    => 'Vrednost mora biti veljavna vrednost datuma ali časa (ISO 8601).',
    'source_equals_destination'       => 'Izvorni račun je enak ciljnemu računu.',
    'unique_account_number_for_user'  => 'Kaže, da je ta številka računa že v uporabi.',
    'unique_iban_for_user'            => 'Videti je, da je ta IBAN že v uporabi.',
    'reconciled_forbidden_field'      => 'Ta transakcija je že usklajena, ne morete spremeniti ":field"',
    'deleted_user'                    => 'Iz varnostnih razlogov ne morete ustvariti uporabnika s takim e-poštnim naslovom.',
    'rule_trigger_value'              => 'Ta vrednost je neveljavna za izbrani sprožilec.',
    'rule_action_expression'          => 'Neveljaven izraz. :error',
    'rule_action_value'               => 'Ta vrednost ni veljavna za izbrano dejanje.',
    'file_already_attached'           => 'Naložena datoteka ":name" je že priložena temu predmetu.',
    'file_attached'                   => 'Datoteka ":name" je bila uspešno naložena.',
    'file_zero'                       => 'Datoteka je velika nič bajtov.',
    'must_exist'                      => 'ID v polju :attribute ne obstaja v bazi podatkov.',
    'all_accounts_equal'              => 'Vsi računi v tem polju morajo biti enaki.',
    'group_title_mandatory'           => 'Naslov skupine je obvezen, če obstaja več kot ena transakcija.',
    'transaction_types_equal'         => 'Vse razdelitve morajo biti iste vrste.',
    'invalid_transaction_type'        => 'Neveljavna vrsta transakcije.',
    'invalid_selection'               => 'Vaša izbira je neveljavna.',
    'belongs_user'                    => 'Ta vrednost je povezana z objektom, za katerega se zdi, da ne obstaja.',
    'belongs_user_or_user_group'      => 'Ta vrednost je povezana z objektom, za katerega se zdi, da ne obstaja v vaši trenutni finančni upravi.',
    'no_access_group'                 => 'Uporabnik nima dostopa do te administracije.',
    'no_accepted_roles_defined'       => 'Za to končno točko ni bila definirana nobena dostopna vloga, dostop je zavrnjen.',
    'at_least_one_transaction'        => 'Potrebujete vsaj eno transakcijo.',
    'recurring_transaction_id'        => 'Potrebujete vsaj eno transakcijo.',
    'need_id_to_match'                => 'Ta vnos morate predložiti z ID-jem za API, da ga lahko povežete.',
    'too_many_unmatched'              => 'Preveč predloženih transakcij ni mogoče povezati z njihovimi vnosi v bazo podatkov. Prepričajte se, da imajo obstoječi vnosi veljaven ID.',
    'id_does_not_match'               => 'Poslani ID #:id se ne ujema s pričakovanim ID-jem. Prepričajte se, da se ujema s poljem ali ga izpustite.',
    'at_least_one_repetition'         => 'Potrebna je vsaj ena ponovitev.',
    'require_repeat_until'            => 'Zahtevajte bodisi število ponovitev bodisi končni datum (ponavljaj_do). Ne oboje.',
    'require_currency_info'           => 'Vsebina tega polja je neveljavna brez informacij o valuti.',
    'not_transfer_account'            => 'Ta račun ni račun, ki ga je mogoče uporabiti za nakazila.',
    'require_currency_amount'         => 'Vsebina tega polja ni veljavna brez podatkov o tujih zneskih.',
    'require_foreign_currency'        => 'To polje zahteva številko',
    'require_foreign_dest'            => 'Vrednost tega polja se mora ujemati z valuto ciljnega računa.',
    'require_foreign_src'             => 'Vrednost tega polja se mora ujemati z valuto izvornega računa.',
    'equal_description'               => 'Opis transakcije ne sme biti enak globalnemu opisu.',
    'file_invalid_mime'               => 'Datoteka ":name" je vrste ":mime", ki ni sprejeta kot novo naložena.',
    'file_too_large'                  => 'Datoteka ":name" je prevelika.',
    'belongs_to_user'                 => 'Vrednost :attribute ni znana.',
    'accepted'                        => ':attribute mora biti sprejet.',
    'bic'                             => 'To ni veljaven BIC.',
    'at_least_one_trigger'            => 'Pravilo mora imeti vsaj en sprožilec.',
    'at_least_one_active_trigger'     => 'Pravilo mora imeti vsaj en aktiven sprožilec.',
    'at_least_one_action'             => 'Pravilo mora imeti vsaj eno dejanje.',
    'at_least_one_active_action'      => 'Pravilo mora imeti vsaj eno aktivno dejanje.',
    'base64'                          => 'To niso veljavni base64 kodirani podatki.',
    'model_id_invalid'                => 'Dani ID se zdi neveljaven za ta model.',
    'less'                            => ':attribute mora biti manjši od 10.000.000',
    'active_url'                      => ':attribute ni veljaven URL.',
    'after'                           => ':attribute mora biti datum po :date.',
    'date_after'                      => 'Začetni datum mora biti pred končnim datumom.',
    'alpha'                           => ':attribute lahko vsebuje samo črke.',
    'alpha_dash'                      => ':attribute lahko vsebuje samo črke, številke in črtice.',
    'alpha_num'                       => ':attribute lahko vsebuje samo črke in številke.',
    'array'                           => ':attribute naj bo zbirka.',
    'unique_for_user'                 => 'Že obstaja vnos s tem :attribute.',
    'before'                          => ':attribute mora biti datum pred :date.',
    'unique_object_for_user'          => 'To ime je že v uporabi.',
    'unique_account_for_user'         => 'To ime računa je že v uporabi.',

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


    'between.numeric'                 => ':attribute mora biti med :min in :max.',
    'between.file'                    => ':attribute mora biti med :min in :max kilobajti.',
    'between.string'                  => ':attribute mora biti med znaki :min in :max.',
    'between.array'                   => ':attribute mora imeti med :min in :max elementi.',
    'boolean'                         => ':attribute polje mora biti pravilno ali napačno.',
    'confirmed'                       => 'Potrditev :attribute se ne ujema.',
    'date'                            => ':attribute ni veljaven datum.',
    'date_format'                     => ':attribute se ne ujema z obliko :format.',
    'different'                       => ':attribute in :other morata biti različna.',
    'digits'                          => ':attribute mora imeti :digits števil.',
    'digits_between'                  => ':attribute mora biti med :min in :max števkami.',
    'email'                           => ':attribute mora biti veljaven e-naslov.',
    'filled'                          => 'Polje :attribute je obvezno.',
    'exists'                          => 'Izbran :attribute je neveljaven.',
    'image'                           => ':attribute mora biti slika.',
    'in'                              => 'Izbran :attribute ni veljaven.',
    'integer'                         => ':attribute mora biti celo število.',
    'ip'                              => ':attribute mora biti veljaven IP naslov.',
    'json'                            => ':attribute mora biti veljaven JSON niz.',
    'max.numeric'                     => ':attribute ne sme biti večji od :max.',
    'max.file'                        => ':attribute ne sme biti večji od :max kilobajtov.',
    'max.string'                      => ':attribute ne sme biti večja od :max znakov.',
    'max.array'                       => ':attribute ne sme imeti več kot :max elementov.',
    'mimes'                           => ':attribute mora biti datoteka tipa: :values.',
    'min.numeric'                     => ':attribute mora biti najmanj :min.',
    'lte.numeric'                     => ':attribute mora biti manj ali enak kot :value.',
    'min.file'                        => ':attribute mora biti najmanj :min kilobajtov.',
    'min.string'                      => ':attribute mora biti najmanj :min znakov.',
    'min.array'                       => ':attribute mora imeti najmanj :min elementov.',
    'not_in'                          => 'Izbran :attribute ni veljaven.',
    'numeric'                         => ':attribute mora biti število.',
    'scientific_notation'             => ':attribute ne more uporabljati znanstvene notacije.',
    'numeric_native'                  => 'Domači znesek mora biti število.',
    'numeric_destination'             => 'Ciljni znesek mora biti številka.',
    'numeric_source'                  => 'Izvorni znesek mora biti številka.',
    'regex'                           => ':attribute oblika ni veljavna.',
    'required'                        => 'Polje :attribute je obvezno.',
    'required_if'                     => ':attribute polje je obvezno, če :other je :value.',
    'required_unless'                 => ':attribute polje je zahtevano, razen če je :other v :values.',
    'required_with'                   => ':attribute polje je obvezno ko je prisotno :values.',
    'required_with_all'               => ':attribute polje je obvezno ko je prisotno :values.',
    'required_without'                => ':attribute polje je obvezno, ko :values ni prisotno.',
    'required_without_all'            => 'Polje :attribute je obvezno, če ni prisotna nobena od :values.',
    'same'                            => ':attribute in :other se morata ujemati.',
    'size.numeric'                    => ':attribute mora biti :size.',
    'amount_min_over_max'             => 'Najmanjši znesek ne sme biti večji od največjega zneska.',
    'size.file'                       => ':attribute mora biti :size kilobajtov.',
    'size.string'                     => ':attribute mora vsebovati znake :size.',
    'size.array'                      => ':attribute mora vsebovati elemente :size.',
    'unique'                          => ':attribute je že zaseden.',
    'string'                          => ':attribute mora biti niz.',
    'url'                             => 'Format :attribute je neveljaven.',
    'timezone'                        => ':attribute mora biti veljavno območje.',
    '2fa_code'                        => 'Polje :attribute ni veljavno.',
    'dimensions'                      => ':attribute ima neveljavne dimenzije slike.',
    'distinct'                        => 'Polje :attribute ima podvojeno vrednost.',
    'file'                            => ':attribute mora biti datoteka.',
    'in_array'                        => 'Polje :attribute ne obstaja v :other.',
    'present'                         => 'Polje :attribute mora biti prisotno.',
    'amount_zero'                     => 'Skupni znesek ne more biti nič.',
    'current_target_amount'           => 'Trenutni znesek mora biti manjši od ciljnega zneska.',
    'unique_piggy_bank_for_user'      => 'Ime hranilnika mora biti edinstveno.',
    'unique_object_group'             => 'Ime skupine mora biti edinstveno',
    'starts_with'                     => 'Vrednost se mora začeti s :values.',
    'unique_webhook'                  => 'Webhook s to kombinacijo URL-ja, sprožilca, odgovora in dostave že imate.',
    'unique_existing_webhook'         => 'Že imate drug webhook s to kombinacijo URL-ja, sprožilca, odziva in dostave.',
    'same_account_type'               => 'Oba računa morata biti iste vrste računa',
    'same_account_currency'           => 'Oba računa morata imeti isto nastavitev valute',

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


    'secure_password'                 => 'To geslo ni dovolj varno. Prosim poskusite ponovno. Za več informacij obiščite https://bit.ly/FF3-password',
    'valid_recurrence_rep_type'       => 'Neveljavna vrsta ponavljanja za ponavljajoče se transakcije.',
    'valid_recurrence_rep_moment'     => 'Neveljaven trenutek ponovitve za to vrsto ponovitve.',
    'invalid_account_info'            => 'Neveljavni podatki o računu.',
    'attributes'                      => [
        'email'                   => 'e-poštni naslov',
        'description'             => 'opis',
        'amount'                  => 'znesek',
        'transactions.*.amount'   => 'znesek transakcije',
        'name'                    => 'ime',
        'piggy_bank_id'           => 'ID številka hranilnice',
        'targetamount'            => 'ciljni znesek',
        'opening_balance_date'    => 'datum začetnega stanja',
        'opening_balance'         => 'začetno stanje',
        'match'                   => 'ujemanje',
        'amount_min'              => 'najmanjša vrednost',
        'amount_max'              => 'največja vrednost',
        'title'                   => 'naslov',
        'tag'                     => 'oznaka',
        'transaction_description' => 'opis transakcije',
        'rule-action-value.1'     => 'vrednost pravila ukrepanja #1',
        'rule-action-value.2'     => 'vrednost pravila ukrepanja #2',
        'rule-action-value.3'     => 'vrednost pravila ukrepanja #3',
        'rule-action-value.4'     => 'vrednost pravila ukrepanja #4',
        'rule-action-value.5'     => 'vrednost pravila ukrepanja #5',
        'rule-action.1'           => 'pravilo ukrepanja #1',
        'rule-action.2'           => 'pravilo ukrepanja #2',
        'rule-action.3'           => 'pravilo ukrepanja #3',
        'rule-action.4'           => 'pravilo ukrepanja #4',
        'rule-action.5'           => 'pravilo ukrepanja #5',
        'rule-trigger-value.1'    => 'vrednost pravila sprožitve #1',
        'rule-trigger-value.2'    => 'vrednost pravila sprožitve #2',
        'rule-trigger-value.3'    => 'vrednost pravila sprožitve #3',
        'rule-trigger-value.4'    => 'vrednost pravila sprožitve #4',
        'rule-trigger-value.5'    => 'vrednost pravila sprožitve #5',
        'rule-trigger.1'          => 'pravilo sprožilca #1',
        'rule-trigger.2'          => 'pravilo sprožilca #2',
        'rule-trigger.3'          => 'pravilo sprožilca #3',
        'rule-trigger.4'          => 'pravilo sprožilca #4',
        'rule-trigger.5'          => 'pravilo sprožilca #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Za nadaljevanje morate pridobiti veljaven ID izvornega računa in/ali veljavno ime izvornega računa.',
    'withdrawal_source_bad_data'      => '[a] Pri iskanju ID-ja ":id" ali imena ":name" ni bilo mogoče najti veljavnega izvornega računa.',
    'withdrawal_dest_need_data'       => '[a] Za nadaljevanje potrebujete veljaven ID ciljnega računa in/ali veljavno ime ciljnega računa.',
    'withdrawal_dest_bad_data'        => 'Pri iskanju ID-ja ":id" ali imena ":name" ni bilo mogoče najti veljavnega ciljnega računa.',

    'withdrawal_dest_iban_exists'     => 'Ta IBAN ciljnega računa že uporablja račun sredstev ali obveznosti in ga ni mogoče uporabiti kot cilj odliva.',
    'deposit_src_iban_exists'         => 'Ta izvorni račun IBAN že uporablja račun sredstev ali obveznosti in ga ni mogoče uporabiti kot vir priliva.',

    'reconciliation_source_bad_data'  => 'Pri iskanju ID-ja ":id" ali imena ":name" ni bilo mogoče najti veljavnega računa za usklajevanje.',

    'generic_source_bad_data'         => '[e] Ni bilo mogoče najti veljavnega izvornega računa pri iskanju ID-ja ":id" ali imena ":name".',

    'deposit_source_need_data'        => 'Za nadaljevanje morate pridobiti veljaven ID izvornega računa in/ali veljavno ime izvornega računa.',
    'deposit_source_bad_data'         => '[b] Ni bilo mogoče najti veljavnega izvornega računa pri iskanju ID-ja ":id" ali imena ":name".',
    'deposit_dest_need_data'          => '[b] Za nadaljevanje potrebujete veljaven ID ciljnega računa in/ali veljavno ime ciljnega računa.',
    'deposit_dest_bad_data'           => 'Pri iskanju ID-ja ":id" ali imena ":name" ni bilo mogoče najti veljavnega ciljnega računa.',
    'deposit_dest_wrong_type'         => 'Predložen ciljni račun ni prave vrste.',

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


    'transfer_source_need_data'       => 'Za nadaljevanje morate pridobiti veljaven ID izvornega računa in/ali veljavno ime izvornega računa.',
    'transfer_source_bad_data'        => '[c] Ni bilo mogoče najti veljavnega izvornega računa pri iskanju ID-ja ":id" ali imena ":name".',
    'transfer_dest_need_data'         => '[c] Za nadaljevanje potrebujete veljaven ID ciljnega računa in/ali veljavno ime ciljnega računa.',
    'transfer_dest_bad_data'          => 'Pri iskanju ID-ja ":id" ali imena ":name" ni bilo mogoče najti veljavnega ciljnega računa.',
    'need_id_in_edit'                 => 'Vsaka razdelitev mora imeti transaction_journal_id (bodisi veljaven ID ali 0).',

    'ob_source_need_data'             => 'Za nadaljevanje morate pridobiti veljaven ID izvornega računa in/ali veljavno ime izvornega računa.',
    'lc_source_need_data'             => 'Za nadaljevanje morate pridobiti veljaven ID izvornega računa.',
    'ob_dest_need_data'               => '[d] Za nadaljevanje potrebujete veljaven ID ciljnega računa in/ali veljavno ime ciljnega računa.',
    'ob_dest_bad_data'                => 'Pri iskanju ID-ja ":id" ali imena ":name" ni bilo mogoče najti veljavnega ciljnega računa.',
    'reconciliation_either_account'   => 'Če želite predložiti uskladitev, morate predložiti izvorni ali ciljni račun. Ne oboje, ne nobeno.',

    'generic_invalid_source'          => 'Tega računa ne morete uporabiti kot izvorni račun.',
    'generic_invalid_destination'     => 'Tega računa ne morete uporabiti kot ciljni račun.',

    'generic_no_source'               => 'Predložiti morate podatke o izvornem računu ali predložiti ID dnevnika transakcij.',
    'generic_no_destination'          => 'Predložiti morate podatke o ciljnem računu ali predložiti ID dnevnika transakcij.',

    'gte.numeric'                     => ':attribute mora biti večji ali enak :value.',
    'gt.numeric'                      => ':attribute mora biti večji od :value.',
    'gte.file'                        => ':attribute mora biti večji ali enak :value kilobajtov.',
    'gte.string'                      => ':attribute mora biti večji ali enak znakom :value.',
    'gte.array'                       => ':attribute mora imeti :value znakov ali več.',
    'missing_with'                    => 'The :attribute cannot be combined with another field.',

    'amount_required_for_auto_budget' => 'Znesek je zahtevani podatek.',
    'auto_budget_amount_positive'     => 'Znesek mora biti večji od nič.',

    'auto_budget_period_mandatory'    => 'Obdobje samodejnega proračuna je obvezno polje.',

    // no access to administration:
    'no_auth_user_group'              => 'Za dostop do administracije morate biti prijavljeni.',
    'no_access_user_group'            => 'Nimate ustreznih pravic dostopa do te administracije.',
    'administration_owner_rename'     => 'Standardne administracije ne morete preimenovati.',
    'existing_mfa_code'               => 'Prosim vnesite veljavno kodo',
];

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
