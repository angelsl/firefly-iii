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
    'filter_must_be_in'               => 'Filtrul ":filter" trebuie să fie unul din: :values',
    'filter_not_string'               => 'Filtrul ":filter" este așteptat să fie un șir de text',
    'bad_api_filter'                  => 'Acest obiectiv API nu acceptă ":filter" ca un filtru.',
    'nog_logged_in'                   => 'You are not logged in.',
    'bad_type_source'                 => 'Firefly III nu poate determina tipul de tranzacție pe baza acestui cont sursă.',
    'bad_type_destination'            => 'Firefly III nu poate determina tipul de tranzacție bazat pe acest cont de destinație.',
    'missing_where'                   => 'Array lipseşte "unde clauza',
    'missing_update'                  => 'Array lipsește clauza de actualizare',
    'invalid_where_key'               => 'JSON conține o cheie nevalidă pentru „unde clauza -”',
    'invalid_update_key'              => 'JSON conține o cheie invalidă pentru clauza de actualizare',
    'invalid_query_data'              => 'Există date invalide în câmpul %s:%s al interogării dvs.',
    'invalid_query_account_type'      => 'Interogarea dvs. conține conturi de diferite tipuri, care nu sunt permise.',
    'invalid_query_currency'          => 'Interogarea dvs. conține conturi care au setări diferite pentru valută, ceea ce nu este permis.',
    'iban'                            => 'Acesta nu este un IBAN valabil.',
    'zero_or_more'                    => 'Valoarea nu poate fi negativă.',
    'more_than_zero'                  => 'Valoarea trebuie să fie mai mare decât zero.',
    'more_than_zero_correct'          => 'Valoarea trebuie să fie zero sau mai mare.',
    'no_asset_account'                => 'Acesta nu este un cont de active.',
    'date_or_time'                    => 'Valoarea trebuie să fie o dată validă sau o valoare în timp (ISO 8601).',
    'source_equals_destination'       => 'Contul sursă este egal cu contul de destinație.',
    'unique_account_number_for_user'  => 'Se pare că acest număr de cont este deja utilizat.',
    'unique_iban_for_user'            => 'Se pare că acest IBAN este deja utilizat.',
    'reconciled_forbidden_field'      => 'Această tranzacție este deja reconciliată, nu puteți schimba ":field"',
    'deleted_user'                    => 'Din cauza constrângerilor de securitate, nu vă puteți înregistra utilizând această adresă de e-mail.',
    'rule_trigger_value'              => 'Această valoare nu este validă pentru declanșatorul selectat.',
    'rule_action_expression'          => 'Expresie invalidă. :error',
    'rule_action_value'               => 'Această valoare nu este validă pentru acțiunea selectată.',
    'file_already_attached'           => 'Fișierul încărcat ":name" este deja atașat acestui obiect.',
    'file_attached'                   => 'Fișierul ":name" a fost încărcat cu succes.',
    'file_zero'                       => 'Fișierul are dimensiunea zero octeți.',
    'must_exist'                      => 'Câmpul ID :attribute nu există în baza de date.',
    'all_accounts_equal'              => 'Toate conturile din acest câmp trebuie să fie egale.',
    'group_title_mandatory'           => 'Un titlu de grup este obligatoriu atunci când există mai multe tranzacții.',
    'transaction_types_equal'         => 'Toate împărțirile trebuie să fie de același tip.',
    'invalid_transaction_type'        => 'Tip tranzacție nevalidă.',
    'invalid_selection'               => 'Selecția dvs. este nevalidă.',
    'belongs_user'                    => 'Această valoare este legată de un obiect care pare să nu existe.',
    'belongs_user_or_user_group'      => 'Această valoare este legată de un obiect care nu pare să existe în administrația financiară curentă.',
    'no_access_group'                 => 'The user has no access to this administration.',
    'no_accepted_roles_defined'       => 'Nu au fost definite roluri de acces pentru acest obiectiv, acces refuzat.',
    'at_least_one_transaction'        => 'Aveți nevoie de cel puțin o tranzacție.',
    'recurring_transaction_id'        => 'Aveți nevoie de cel puțin o tranzacție.',
    'need_id_to_match'                => 'Trebuie să adaugati această intrare cu un ID pentru API pentru a putea să se potrivească.',
    'too_many_unmatched'              => 'Prea multe tranzacții introduse nu pot fi corelate cu intrările lor din baza lor de date. Asigurați-vă că intrările existente au un ID valid.',
    'id_does_not_match'               => 'ID #:id nu se potrivește cu ID-ul preconizat. Asigură-te că se potrivește sau omite câmpul.',
    'at_least_one_repetition'         => 'Aveți nevoie de cel puțin o repetare.',
    'require_repeat_until'            => 'Solicitați fie un număr de repetări, fie o dată de încheiere (repeat_until). Nu amândouă.',
    'require_currency_info'           => 'Conținutul acestui câmp este nevalid fără informații despre monedă.',
    'not_transfer_account'            => 'Acest cont nu este un cont care poate fi utilizat pentru transferuri.',
    'require_currency_amount'         => 'Conținutul acestui câmp este nevalid fără informații despre monedă.',
    'require_foreign_currency'        => 'Acest câmp necesită un număr',
    'require_foreign_dest'            => 'Această valoare a câmpului trebuie să corespundă cu moneda contului de destinație.',
    'require_foreign_src'             => 'Această valoare a câmpului trebuie să corespundă valutei contului sursă.',
    'equal_description'               => 'Descrierea tranzacției nu trebuie să fie egală cu descrierea globală.',
    'file_invalid_mime'               => 'Fișierul ":name" este de tip ":mime" și nu este acceptat ca o încărcare nouă.',
    'file_too_large'                  => 'Fișierul ":name" este prea mare.',
    'belongs_to_user'                 => 'Valoarea :attribute este necunoscută.',
    'accepted'                        => 'Câmpul :attribute trebuie să fie acceptat.',
    'bic'                             => 'Acesta nu este un BIC valabil.',
    'at_least_one_trigger'            => 'Regula trebuie să aibă cel puțin un declanșator.',
    'at_least_one_active_trigger'     => 'Regula trebuie să aibă cel puțin un declanșator activ.',
    'at_least_one_action'             => 'Regula trebuie să aibă cel puțin o acțiune.',
    'at_least_one_active_action'      => 'Regula trebuie să aibă cel puțin o acțiune activă.',
    'base64'                          => 'Acest lucru nu este valabil pentru datele encoded base64.',
    'model_id_invalid'                => 'ID-ul dat nu pare valid pentru acest model.',
    'less'                            => ':attribute trebuie să fie mai mic decât 10,000,000',
    'active_url'                      => ':attribute nu este o adresă URL validă.',
    'after'                           => ':attribute trebuie să fie o dată ulterioară :date.',
    'date_after'                      => 'Data de început trebuie să fie înainte de data de sfârșit.',
    'alpha'                           => ':attribute poate conține numai litere.',
    'alpha_dash'                      => ':attribute poate conține numai litere, numere și liniuțe.',
    'alpha_num'                       => ':attribute poate conține numai litere și numere.',
    'array'                           => ':attribute trebuie să fie o matrice (array).',
    'unique_for_user'                 => 'Există deja o intrare cu acest :attribute.',
    'before'                          => ':attribute trebuie să fie o dată înainte de :date.',
    'unique_object_for_user'          => 'Acest nume este deja folosit.',
    'unique_account_for_user'         => 'Acest nume de cont este deja utilizat.',

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


    'between.numeric'                 => ':attribute trebuie să fie între :min și :max.',
    'between.file'                    => ':attribute trebuie să fie între :min și :max kilobyți.',
    'between.string'                  => ':attribute trebuie să fie între :min și :max caractere.',
    'between.array'                   => ':attribute trebuie să aibă între :min și :max articole.',
    'boolean'                         => ':attribute trebuie să fie adevărat sau fals.',
    'confirmed'                       => ':attribute confirmarea nu se potrivește.',
    'date'                            => ':attribute nu este o dată validă.',
    'date_format'                     => ':attribute nu se potrivește cu formatul :format.',
    'different'                       => ':attribute și :other trebuie să fie diferite.',
    'digits'                          => ':attribute trebuie să fie :digits digits.',
    'digits_between'                  => ':attribute trebuie să fie între :min și :max digits.',
    'email'                           => ':attribute trebuie să fie o adresă de e-mail validă.',
    'filled'                          => 'Câmpul :attribute este necesar.',
    'exists'                          => 'Câmpul selectat :attribute este invalid.',
    'image'                           => 'Câmpul :attribute trebuie să fie o imagine.',
    'in'                              => 'Câmpul selectat :attribute este invalid.',
    'integer'                         => ':attribute trebuie să fie un număr întreg.',
    'ip'                              => ':attribute trebuie să fie o adresă IP valabilă.',
    'json'                            => ':attribute trebuie să fie un șir JSON valid.',
    'max.numeric'                     => ':attribute nu poate fi mai mare decât :max.',
    'max.file'                        => ':attribute nu poate fi mai mare decât :max kilobyți.',
    'max.string'                      => ':attribute nu poate fi mai mare decât :max caractere.',
    'max.array'                       => ':attribute nu poate avea mai mult de :max articole.',
    'mimes'                           => ':attribute trebuie să fie un fișier de tipul: :values.',
    'min.numeric'                     => ':attribute trebuie să aibă măcar :min.',
    'lte.numeric'                     => ':attribute trebuie să fie mai mic sau egal :value.',
    'min.file'                        => ':attribute trebuie să aibă măcar :min kilobyți.',
    'min.string'                      => ':attribute trebuie să aibă măcar :min caractere.',
    'min.array'                       => ':attribute trebuie să aibă măcar :min articole.',
    'not_in'                          => 'Câmpul selectat :attribute este invalid.',
    'numeric'                         => 'Câmpul :attribute trebuie să fie un număr.',
    'scientific_notation'             => ':attribute nu poate folosi o notare științifică.',
    'numeric_native'                  => 'Suma nativă trebuie să fie un număr.',
    'numeric_destination'             => 'Suma destinației trebuie să fie un număr.',
    'numeric_source'                  => 'Suma sursei trebuie să fie un număr.',
    'regex'                           => 'Câmpul :attribute are format nevalid.',
    'required'                        => 'Câmpul :attribute este obligatoriu.',
    'required_if'                     => 'Câmpul :attribute este obligatoriu când :other este :value.',
    'required_unless'                 => 'Câmpul :attribute este obligatoriu dacă nu :other este în :values.',
    'required_with'                   => 'Câmpul :attribute este obligatoriu când :values este prezent.',
    'required_with_all'               => 'Câmpul :attribute este obligatoriu când :values este prezent.',
    'required_without'                => 'Câmpul :attribute este obligatoriu când :values nu este prezent.',
    'required_without_all'            => 'Câmpul :attribute este obligatoriu când nici unul dintre :values este prezent.',
    'same'                            => ':attribute și :other trebuie să se potrivească.',
    'size.numeric'                    => ':attribute trebuie să fie :size.',
    'amount_min_over_max'             => 'Suma minimă nu poate fi mai mare decât suma maximă.',
    'size.file'                       => ':attribute trebuie să aibă :size kilobyți.',
    'size.string'                     => ':attribute trebuie să aibă :size caractere.',
    'size.array'                      => ':attribute trebuie să contină :size articole.',
    'unique'                          => ':attribute a fost deja luat.',
    'string'                          => ':attribute trebuie să fie un șir de caractere.',
    'url'                             => ':attribute format este invalid.',
    'timezone'                        => ':attribute trebuie să fie o zonă validă.',
    '2fa_code'                        => 'Câmpul :attribute este invalid.',
    'dimensions'                      => ':attribute are dimensiuni de imagine nevalide.',
    'distinct'                        => 'Câmpul :attribute are o valoare duplicată.',
    'file'                            => ':attribute trebuie să fie un fișier.',
    'in_array'                        => 'Câmpul :attribute nu există în :other.',
    'present'                         => 'Câmpul :attribute trebuie să fie prezent.',
    'amount_zero'                     => 'Suma totală nu poate fi zero.',
    'current_target_amount'           => 'Suma curentă trebuie să fie mai mică decât suma vizată.',
    'unique_piggy_bank_for_user'      => 'Numele pușculiței trebuie să fie unic.',
    'unique_object_group'             => 'Numele grupului trebuie să fie unic',
    'starts_with'                     => 'Valoarea trebuie să înceapă cu :values.',
    'unique_webhook'                  => 'Aveți deja un webhook cu această combinație de URL, declanșator, răspuns și livrare.',
    'unique_existing_webhook'         => 'Aveți deja un alt webhook cu această combinație de URL, declanșator, răspuns și livrare.',
    'same_account_type'               => 'Ambele conturi trebuie să fie de acelaşi tip de cont',
    'same_account_currency'           => 'Ambele conturi trebuie să aibă aceeași monedă',

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


    'secure_password'                 => 'Aceasta nu este o parolă sigură. Vă rugăm să încercați din nou. Pentru mai multe informații, vizitați https://bit.ly/FF3-password',
    'valid_recurrence_rep_type'       => 'Tip de repetare nevalid pentru tranzacțiile recurente.',
    'valid_recurrence_rep_moment'     => 'Momentul repetiției nevalid pentru acest tip de repetare.',
    'invalid_account_info'            => 'Informațiile contului nevalide.',
    'attributes'                      => [
        'email'                   => 'adresă e-mail',
        'description'             => 'descriere',
        'amount'                  => 'sumă',
        'transactions.*.amount'   => 'suma tranzacției',
        'name'                    => 'nume',
        'piggy_bank_id'           => 'ID-ul pușculiței',
        'targetamount'            => 'suma țintă',
        'opening_balance_date'    => 'data de deschidere a soldului',
        'opening_balance'         => 'soldul de deschidere',
        'match'                   => 'potrivire',
        'amount_min'              => 'suma minimă',
        'amount_max'              => 'suma maximă',
        'title'                   => 'titlu',
        'tag'                     => 'etichetă',
        'transaction_description' => 'descrierea tranzacției',
        'rule-action-value.1'     => 'valoarea regulii de acțiune #1',
        'rule-action-value.2'     => 'valoarea regulii de acțiune #2',
        'rule-action-value.3'     => 'valoarea regulii de acțiune #3',
        'rule-action-value.4'     => 'valoarea regulii de acțiune #4',
        'rule-action-value.5'     => 'valoarea regulii de acțiune #5',
        'rule-action.1'           => 'regula acțiunii #1',
        'rule-action.2'           => 'regula acțiunii #2',
        'rule-action.3'           => 'regula acțiunii #3',
        'rule-action.4'           => 'regula acțiunii #4',
        'rule-action.5'           => 'regula acțiunii #5',
        'rule-trigger-value.1'    => 'valoarea regulii de declanșare #1',
        'rule-trigger-value.2'    => 'valoarea regulii de declanșare #2',
        'rule-trigger-value.3'    => 'valoarea regulii de declanșare #3',
        'rule-trigger-value.4'    => 'valoarea regulii de declanșare #4',
        'rule-trigger-value.5'    => 'valoarea regulii de declanșare #5',
        'rule-trigger.1'          => 'regulă de declanșare #1',
        'rule-trigger.2'          => 'regulă de declanșare #2',
        'rule-trigger.3'          => 'regulă de declanșare #3',
        'rule-trigger.4'          => 'regulă de declanșare #4',
        'rule-trigger.5'          => 'regulă de declanșare #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Trebuie să continuați să obțineți un ID de cont sursă valabil și / sau un nume de cont sursă valabil.',
    'withdrawal_source_bad_data'      => '[a] Nu s-a putut găsi un cont sursă valid când se caută ID-ul ":id" sau numele ":name".',
    'withdrawal_dest_need_data'       => '[a] Trebuie să obții un ID de cont de destinație valabil și/sau un nume de cont de destinație valabil.',
    'withdrawal_dest_bad_data'        => 'Nu s-a găsit un cont de destinaţie valabil la căutarea ID ":id" sau nume ":name".',

    'withdrawal_dest_iban_exists'     => 'Acest cont de destinație IBAN este deja utilizat de un cont de active sau de un pasiv și nu poate fi utilizat ca destinație de retragere.',
    'deposit_src_iban_exists'         => 'Acest cont de sursă IBAN este deja utilizat de un cont de active sau de un pasiv și nu poate fi folosit ca sursă de depozit.',

    'reconciliation_source_bad_data'  => 'Nu s-a găsit un cont valid de reconciliere la căutarea ID-ului ":id" sau numele ":name".',

    'generic_source_bad_data'         => '[e] Nu s-a putut găsi un cont sursă valid când se caută ID-ul ":id" sau numele ":name".',

    'deposit_source_need_data'        => 'Trebuie să continuați să obțineți un ID de cont sursă valabil și / sau un nume de cont sursă valabil.',
    'deposit_source_bad_data'         => '[b] Nu s-a putut găsi un cont sursă valid când se caută ID-ul ":id" sau numele ":name".',
    'deposit_dest_need_data'          => '[b] Trebuie să continui un ID de cont de destinație valabil și/sau un nume de cont de destinație valabil.',
    'deposit_dest_bad_data'           => 'Nu s-a găsit un cont de destinaţie valabil la căutarea ID ":id" sau nume ":name".',
    'deposit_dest_wrong_type'         => 'Contul de destinație trimis nu este de tipul potrivit.',

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


    'transfer_source_need_data'       => 'Trebuie să continuați să obțineți un ID de cont sursă valabil și / sau un nume de cont sursă valabil.',
    'transfer_source_bad_data'        => '[c] Nu s-a putut găsi un cont sursă valid când se caută ID-ul ":id" sau numele ":name".',
    'transfer_dest_need_data'         => '[c] Trebuie să obții un ID de cont de destinație valabil și/sau un nume de cont de destinație valabil.',
    'transfer_dest_bad_data'          => 'Nu s-a găsit un cont de destinaţie valabil la căutarea ID ":id" sau nume ":name".',
    'need_id_in_edit'                 => 'Fiecare împărțire trebuie să aibă transaction_journal_id (fie ID valid sau 0).',

    'ob_source_need_data'             => 'Pentru a continua, trebuie să obțineți un ID sursă validă și / sau un nume valid al contului sursă valabil.',
    'lc_source_need_data'             => 'Trebuie să obții un ID de cont sursă valabil pentru a continua.',
    'ob_dest_need_data'               => '[d] Trebuie să obții un ID de cont de destinație valabil și/sau un nume de cont de destinație valabil.',
    'ob_dest_bad_data'                => 'Nu s-a găsit un cont de destinaţie valabil la căutarea ID ":id" sau nume ":name".',
    'reconciliation_either_account'   => 'Pentru a adăuga o reconciliere, trebuie să adaugați fie un cont sursă sau de destinație. Nu ambele, nici niciunul.',

    'generic_invalid_source'          => 'Nu puteți utiliza acest cont ca și cont sursă.',
    'generic_invalid_destination'     => 'Nu puteți utiliza acest cont ca și cont de destinație.',

    'generic_no_source'               => 'Trebuie să adaugați informațiile contului sursă sau să adăugați un ID al jurnalului tranzacției.',
    'generic_no_destination'          => 'Trebuie să adaugați informațiile contului sursă sau să adăugați un ID al jurnalului tranzacției.',

    'gte.numeric'                     => ':attribute trebuie să fie mai mare sau egal cu :value.',
    'gt.numeric'                      => ':attribute trebuie să fie mai mare decât :value.',
    'gte.file'                        => ':attribute trebuie să fie mai mare sau egal cu :value kilobytes.',
    'gte.string'                      => ':attribute trebuie să fie mai mare sau egal cu :value caractere.',
    'gte.array'                       => ':attribute trebuie sa aiba :value valori sau mai multe.',
    'missing_with'                    => 'The :attribute cannot be combined with another field.',

    'amount_required_for_auto_budget' => 'Suma este necesară.',
    'auto_budget_amount_positive'     => 'Suma trebuie să fie mai mare decât zero.',

    'auto_budget_period_mandatory'    => 'Perioada de autobuget este un câmp obligatoriu.',

    // no access to administration:
    'no_auth_user_group'              => 'You have to be logged in to access this administration.',
    'no_access_user_group'            => 'Nu aveți drepturile de acces corecte pentru această administrare.',
    'administration_owner_rename'     => 'Nu vă puteți redenumi administrarea standard.',
    'existing_mfa_code'               => 'Please enter a valid code',
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
