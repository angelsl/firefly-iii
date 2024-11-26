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
    'filter_must_be_in'               => 'Filter ":filter" must be one of: :values',
    'filter_not_string'               => 'Filter ":filter" is expected to be a string of text',
    'bad_api_filter'                  => 'This API endpoint does not support ":filter" as a filter.',
    'nog_logged_in'                   => 'You are not logged in.',
    'bad_type_source'                 => '„Firefly III“ negali nustatyti operacijos tipo pagal šią šaltinio paskyrą.',
    'bad_type_destination'            => '„Firefly III“ negali nustatyti operacijos tipo pagal šią paskirties paskyrą.',
    'missing_where'                   => 'Masyve trūksta „kur“ sąlygos',
    'missing_update'                  => 'Masyve trūksta „update“ sąlygos',
    'invalid_where_key'               => 'JSON yra netinkamas sąlygos raktas „kur“',
    'invalid_update_key'              => 'JSON yra netinkamas sąlygos raktas „update“',
    'invalid_query_data'              => 'Jūsų užklausos lauke %s:%s yra neteisingų duomenų.',
    'invalid_query_account_type'      => 'Jūsų užklausoje yra skirtingų tipų paskyrų, o tai neleidžiama.',
    'invalid_query_currency'          => 'Jūsų užklausoje yra paskyrų, kuriose nustatyti skirtingi valiutos nustatymai, o tai neleidžiama.',
    'iban'                            => 'Tai nėra galiojantis IBAN.',
    'zero_or_more'                    => 'Vertė negali būti neigiama.',
    'more_than_zero'                  => 'The value must be more than zero.',
    'more_than_zero_correct'          => 'The value must be zero or more.',
    'no_asset_account'                => 'This is not an asset account.',
    'date_or_time'                    => 'Reikšmė turi būti tinkama datos arba laiko reikšmė (ISO 8601).',
    'source_equals_destination'       => 'Šaltinio paskyra yra lygi paskirties paskyrai.',
    'unique_account_number_for_user'  => 'Panašu, kad šis sąskaitos numeris jau naudojamas.',
    'unique_iban_for_user'            => 'Panašu, kad šios sąskaitos numeris jau naudojamas.',
    'reconciled_forbidden_field'      => 'This transaction is already reconciled, you cannot change the ":field"',
    'deleted_user'                    => 'Dėl saugumo apribojimų negalite registruotis naudodami šį el. pašto adresą.',
    'rule_trigger_value'              => 'Ši vertė netinkama pasirinktam aktyvikliui.',
    'rule_action_expression'          => 'Invalid expression. :error',
    'rule_action_value'               => 'Ši vertė netinkama pasirinktam veiksmui.',
    'file_already_attached'           => 'Įkeltas failas „:name“ jau pridėtas prie šio objekto.',
    'file_attached'                   => 'Failas „:name“ sėkmingai įkeltas.',
    'file_zero'                       => 'The file is zero bytes in size.',
    'must_exist'                      => 'ID lauke :atributas duomenų bazėje neegzistuoja.',
    'all_accounts_equal'              => 'Visos sąskaitos šiame lauke turi būti lygios.',
    'group_title_mandatory'           => 'Grupės pavadinimas yra privalomas, kai yra daugiau nei viena operacija.',
    'transaction_types_equal'         => 'Visi perskirtymai turi būti to paties tipo.',
    'invalid_transaction_type'        => 'Neteisingas operacijos tipas.',
    'invalid_selection'               => 'Jūsų pasirinkimas neteisingas.',
    'belongs_user'                    => 'This value is linked to an object that does not seem to exist.',
    'belongs_user_or_user_group'      => 'This value is linked to an object that does not seem to exist in your current financial administration.',
    'no_access_group'                 => 'The user has no access to this administration.',
    'no_accepted_roles_defined'       => 'No access roles have been defined for this endpoint, access denied.',
    'at_least_one_transaction'        => 'Reikia bent vienos operacijos.',
    'recurring_transaction_id'        => 'Reikia bent vienos operacijos.',
    'need_id_to_match'                => 'Turite pateikti šį įrašą su ID, kad API galėtų jį suderinti.',
    'too_many_unmatched'              => 'Per daug pateiktų operacijų negalima suderinti su atitinkamais duomenų bazės įrašais. Įsitikinkite, kad esami įrašai turi galiojantį ID.',
    'id_does_not_match'               => 'Pateiktas ID #:id neatitinka laukiamo ID. Įsitikinkite, kad jis atitinka arba praleiskite lauką.',
    'at_least_one_repetition'         => 'Reikia bent vieno pakartojimo.',
    'require_repeat_until'            => 'Reikalauti pakartojimų skaičiaus arba pabaigos datos (kartoti_iki). Ne abu.',
    'require_currency_info'           => 'Šio lauko turinys negalioja be informacijos apie valiutą.',
    'not_transfer_account'            => 'Ši sąskaita nėra paskyra, kurią galima naudoti pervedimams.',
    'require_currency_amount'         => 'Šio lauko turinys negalioja be informacijos apie užsienio sumą.',
    'require_foreign_currency'        => 'Šiame lauke reikalingas skaičius',
    'require_foreign_dest'            => 'Ši lauko vertė turi atitikti paskirties paskyros valiutą.',
    'require_foreign_src'             => 'Ši lauko vertė turi atitikti šaltinio paskyros valiutą.',
    'equal_description'               => 'Operacijos aprašymas neturėtų būti lygus visuotiniam aprašui.',
    'file_invalid_mime'               => 'Failas „:name“ yra „:mime“ tipo, kuris nepriimamas kaip naujas įkėlimas.',
    'file_too_large'                  => 'Failas ":name" yra per didelis.',
    'belongs_to_user'                 => ':attribute reikšmė nežinoma.',
    'accepted'                        => ':attribute turi būti priimtas.',
    'bic'                             => 'Tai nėra galiojantis BIC.',
    'at_least_one_trigger'            => 'Taisyklėje turi būti bent vienas aktyviklis.',
    'at_least_one_active_trigger'     => 'Taisyklėje turi būti bent vienas aktyviklis.',
    'at_least_one_action'             => 'Taisyklėje turi būti bent vienas veiksmas.',
    'at_least_one_active_action'      => 'Taisyklėje turi būti bent vienas aktyvus veiksmas.',
    'base64'                          => 'Tai negalioja base64 užkoduoti duomenys.',
    'model_id_invalid'                => 'Nurodytas ID šiam modeliui atrodo netinkamas.',
    'less'                            => ':attribute must be less than 10,000,000',
    'active_url'                      => 'The :attribute is not a valid URL.',
    'after'                           => 'The :attribute must be a date after :date.',
    'date_after'                      => 'The start date must be before the end date.',
    'alpha'                           => 'The :attribute may only contain letters.',
    'alpha_dash'                      => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'                       => 'The :attribute may only contain letters and numbers.',
    'array'                           => 'The :attribute must be an array.',
    'unique_for_user'                 => 'There already is an entry with this :attribute.',
    'before'                          => 'The :attribute must be a date before :date.',
    'unique_object_for_user'          => 'This name is already in use.',
    'unique_account_for_user'         => 'This account name is already in use.',

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


    'between.numeric'                 => 'The :attribute must be between :min and :max.',
    'between.file'                    => 'The :attribute must be between :min and :max kilobytes.',
    'between.string'                  => 'The :attribute must be between :min and :max characters.',
    'between.array'                   => 'The :attribute must have between :min and :max items.',
    'boolean'                         => 'The :attribute field must be true or false.',
    'confirmed'                       => 'The :attribute confirmation does not match.',
    'date'                            => 'The :attribute is not a valid date.',
    'date_format'                     => 'The :attribute does not match the format :format.',
    'different'                       => 'The :attribute and :other must be different.',
    'digits'                          => 'The :attribute must be :digits digits.',
    'digits_between'                  => 'The :attribute must be between :min and :max digits.',
    'email'                           => 'The :attribute must be a valid email address.',
    'filled'                          => 'The :attribute field is required.',
    'exists'                          => 'The selected :attribute is invalid.',
    'image'                           => 'The :attribute must be an image.',
    'in'                              => 'The selected :attribute is invalid.',
    'integer'                         => 'The :attribute must be an integer.',
    'ip'                              => 'The :attribute must be a valid IP address.',
    'json'                            => 'The :attribute must be a valid JSON string.',
    'max.numeric'                     => 'The :attribute may not be greater than :max.',
    'max.file'                        => 'The :attribute may not be greater than :max kilobytes.',
    'max.string'                      => 'The :attribute may not be greater than :max characters.',
    'max.array'                       => 'The :attribute may not have more than :max items.',
    'mimes'                           => 'The :attribute must be a file of type: :values.',
    'min.numeric'                     => 'The :attribute must be at least :min.',
    'lte.numeric'                     => 'The :attribute must be less than or equal :value.',
    'min.file'                        => 'The :attribute must be at least :min kilobytes.',
    'min.string'                      => 'The :attribute must be at least :min characters.',
    'min.array'                       => 'The :attribute must have at least :min items.',
    'not_in'                          => 'The selected :attribute is invalid.',
    'numeric'                         => 'The :attribute must be a number.',
    'scientific_notation'             => 'The :attribute cannot use the scientific notation.',
    'numeric_native'                  => 'The native amount must be a number.',
    'numeric_destination'             => 'The destination amount must be a number.',
    'numeric_source'                  => 'The source amount must be a number.',
    'regex'                           => 'The :attribute format is invalid.',
    'required'                        => 'The :attribute field is required.',
    'required_if'                     => 'The :attribute field is required when :other is :value.',
    'required_unless'                 => 'The :attribute field is required unless :other is in :values.',
    'required_with'                   => 'The :attribute field is required when :values is present.',
    'required_with_all'               => 'The :attribute field is required when :values is present.',
    'required_without'                => 'The :attribute field is required when :values is not present.',
    'required_without_all'            => 'The :attribute field is required when none of :values are present.',
    'same'                            => 'The :attribute and :other must match.',
    'size.numeric'                    => 'The :attribute must be :size.',
    'amount_min_over_max'             => 'The minimum amount cannot be larger than the maximum amount.',
    'size.file'                       => 'The :attribute must be :size kilobytes.',
    'size.string'                     => 'The :attribute must be :size characters.',
    'size.array'                      => 'The :attribute must contain :size items.',
    'unique'                          => 'The :attribute has already been taken.',
    'string'                          => 'The :attribute must be a string.',
    'url'                             => 'The :attribute format is invalid.',
    'timezone'                        => 'The :attribute must be a valid zone.',
    '2fa_code'                        => 'The :attribute field is invalid.',
    'dimensions'                      => 'The :attribute has invalid image dimensions.',
    'distinct'                        => 'The :attribute field has a duplicate value.',
    'file'                            => 'The :attribute must be a file.',
    'in_array'                        => 'The :attribute field does not exist in :other.',
    'present'                         => 'The :attribute field must be present.',
    'amount_zero'                     => 'The total amount cannot be zero.',
    'current_target_amount'           => 'The current amount must be less than the target amount.',
    'unique_piggy_bank_for_user'      => 'The name of the piggy bank must be unique.',
    'unique_object_group'             => 'The group name must be unique',
    'starts_with'                     => 'The value must start with :values.',
    'unique_webhook'                  => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'         => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'               => 'Both accounts must be of the same account type',
    'same_account_currency'           => 'Both accounts must have the same currency setting',

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


    'secure_password'                 => 'This is not a secure password. Please try again. For more information, visit https://bit.ly/FF3-password',
    'valid_recurrence_rep_type'       => 'Invalid repetition type for recurring transactions.',
    'valid_recurrence_rep_moment'     => 'Invalid repetition moment for this type of repetition.',
    'invalid_account_info'            => 'Invalid account information.',
    'attributes'                      => [
        'email'                   => 'email address',
        'description'             => 'description',
        'amount'                  => 'amount',
        'transactions.*.amount'   => 'transaction amount',
        'name'                    => 'name',
        'piggy_bank_id'           => 'piggy bank ID',
        'targetamount'            => 'target amount',
        'opening_balance_date'    => 'opening balance date',
        'opening_balance'         => 'opening balance',
        'match'                   => 'match',
        'amount_min'              => 'minimum amount',
        'amount_max'              => 'maximum amount',
        'title'                   => 'title',
        'tag'                     => 'tag',
        'transaction_description' => 'transaction description',
        'rule-action-value.1'     => 'rule action value #1',
        'rule-action-value.2'     => 'rule action value #2',
        'rule-action-value.3'     => 'rule action value #3',
        'rule-action-value.4'     => 'rule action value #4',
        'rule-action-value.5'     => 'rule action value #5',
        'rule-action.1'           => 'rule action #1',
        'rule-action.2'           => 'rule action #2',
        'rule-action.3'           => 'rule action #3',
        'rule-action.4'           => 'rule action #4',
        'rule-action.5'           => 'rule action #5',
        'rule-trigger-value.1'    => 'rule trigger value #1',
        'rule-trigger-value.2'    => 'rule trigger value #2',
        'rule-trigger-value.3'    => 'rule trigger value #3',
        'rule-trigger-value.4'    => 'rule trigger value #4',
        'rule-trigger-value.5'    => 'rule trigger value #5',
        'rule-trigger.1'          => 'rule trigger #1',
        'rule-trigger.2'          => 'rule trigger #2',
        'rule-trigger.3'          => 'rule trigger #3',
        'rule-trigger.4'          => 'rule trigger #4',
        'rule-trigger.5'          => 'rule trigger #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'withdrawal_source_bad_data'      => '[a] Nepavyko rasti galiojančios šaltinio paskyros ieškant ID „:id“ arba pavadinimo „:name“.',
    'withdrawal_dest_need_data'       => '[a] Norint tęsti, reikia gauti galiojantį paskirties paskyros ID ir (arba) galiojantį paskirties paskyros pavadinimą.',
    'withdrawal_dest_bad_data'        => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',

    'withdrawal_dest_iban_exists'     => 'Šią paskirties sąskaitą IBAN jau naudoja turto sąskaita arba įsipareigojimas ir jos negalima naudoti kaip išėmimo paskirties vietą.',
    'deposit_src_iban_exists'         => 'Ši šaltinio sąskaita IBAN jau naudojama turto sąskaitoje arba įsipareigojime ir negali būti naudojama kaip indėlių šaltinis.',

    'reconciliation_source_bad_data'  => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data'         => '[e] Nepavyko rasti galiojančios šaltinio paskyros ieškant ID „:id“ arba pavadinimo „:name“.',

    'deposit_source_need_data'        => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'deposit_source_bad_data'         => '[b] Nepavyko rasti galiojančios šaltinio paskyros ieškant ID ":id" arba pavadinimo ":name".',
    'deposit_dest_need_data'          => '[b] Norint tęsti, reikia gauti galiojantį paskirties paskyros ID ir (arba) galiojantį paskirties paskyros pavadinimą.',
    'deposit_dest_bad_data'           => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'deposit_dest_wrong_type'         => 'The submitted destination account is not of the right type.',

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


    'transfer_source_need_data'       => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'transfer_source_bad_data'        => '[c] Nepavyko rasti galiojančios šaltinio paskyros ieškant ID „:id“ arba pavadinimo „:name“.',
    'transfer_dest_need_data'         => '[c] Norint tęsti, reikia gauti galiojantį paskirties paskyros ID ir (arba) galiojantį paskirties paskyros pavadinimą.',
    'transfer_dest_bad_data'          => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'need_id_in_edit'                 => 'Each split must have transaction_journal_id (either valid ID or 0).',

    'ob_source_need_data'             => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'lc_source_need_data'             => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'               => '[d] Norint tęsti, reikia gauti galiojantį paskirties paskyros ID ir (arba) galiojantį paskirties paskyros pavadinimą.',
    'ob_dest_bad_data'                => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'reconciliation_either_account'   => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'          => 'You can\'t use this account as the source account.',
    'generic_invalid_destination'     => 'You can\'t use this account as the destination account.',

    'generic_no_source'               => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination'          => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric'                     => 'The :attribute must be greater than or equal to :value.',
    'gt.numeric'                      => 'The :attribute must be greater than :value.',
    'gte.file'                        => 'The :attribute must be greater than or equal to :value kilobytes.',
    'gte.string'                      => 'The :attribute must be greater than or equal to :value characters.',
    'gte.array'                       => 'The :attribute must have :value items or more.',
    'missing_with'                    => 'The :attribute cannot be combined with another field.',

    'amount_required_for_auto_budget' => 'The amount is required.',
    'auto_budget_amount_positive'     => 'The amount must be more than zero.',

    'auto_budget_period_mandatory'    => 'The auto budget period is a mandatory field.',

    // no access to administration:
    'no_auth_user_group'              => 'You have to be logged in to access this administration.',
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
    'administration_owner_rename'     => 'You can\'t rename your standard administration.',
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
