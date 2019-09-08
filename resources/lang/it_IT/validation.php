<?php

/**
 * validation.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'iban'                           => 'Questo non è un IBAN valido.',
    'zero_or_more'                   => 'Il valore non può essere negativo.',
    'date_or_time'                   => 'Il valore deve essere un valore valido per una data o per un orario (ISO 8601).',
    'source_equals_destination'      => 'Il conto di origine è uguale al conto di destinazione.',
    'unique_account_number_for_user' => 'Sembra che questo numero di conto sia già in uso.',
    'unique_iban_for_user'           => 'Sembra che questo IBAN sia già in uso.',
    'deleted_user'                   => 'A causa dei vincoli di sicurezza, non è possibile registrarsi utilizzando questo indirizzo email.',
    'rule_trigger_value'             => 'Questo valore non è valido per il trigger selezionato.',
    'rule_action_value'              => 'Questo valore non è valido per l\'azione selezionata.',
    'file_already_attached'          => 'Il file caricato ":name" è già associato a questo oggetto.',
    'file_attached'                  => 'File caricato con successo ":name".',
    'must_exist'                     => 'L\'ID nel campo :attribute non esiste nel database.',
    'all_accounts_equal'             => 'Tutti i conti in questo campo devono essere uguali.',
    'group_title_mandatory'          => 'Il titolo del gruppo è obbligatorio quando ci sono più di una transazione.',
    'transaction_types_equal'        => 'Tutte le suddivisioni devono essere dello stesso tipo.',
    'invalid_transaction_type'       => 'Tipo della transazione non valido.',
    'invalid_selection'              => 'La tua selezione non è valida.',
    'belongs_user'                   => 'Questo valore non è valido per questo campo.',
    'at_least_one_transaction'       => 'Hai bisogno di almeno una transazione.',
    'at_least_one_repetition'        => 'È necessaria almeno una ripetizione.',
    'require_repeat_until'           => 'Richiede un numero di ripetizioni o una data di fine (ripeti fino al), non entrambi.',
    'require_currency_info'          => 'Il contenuto di questo campo non è valido senza informazioni sulla valuta.',
    'require_currency_amount'        => 'Il contenuto di questo campo non è valido senza le informazioni sull\'importo estero.',
    'equal_description'              => 'La descrizione della transazione non deve essere uguale alla descrizione globale.',
    'file_invalid_mime'              => 'Il file ":name" è di tipo ":mime" che non è accettato come nuovo caricamento.',
    'file_too_large'                 => 'Il file ":name" è troppo grande.',
    'belongs_to_user'                => 'Il valore di :attribute è sconosciuto.',
    'accepted'                       => 'L\' :attribute deve essere accettato.',
    'bic'                            => 'Questo non è un BIC valido.',
    'at_least_one_trigger'           => 'Una regola deve avere almeno un trigger.',
    'at_least_one_action'            => 'Una regola deve avere almeno una azione.',
    'base64'                         => 'Questi non sono dati codificati in base64 validi.',
    'model_id_invalid'               => 'L\'ID fornito sembra non essere valido per questo modello.',
    'more'                           => ':attribute deve essere maggiore di zero.',
    'less'                           => ':attribute deve essere minore di 10.000.000',
    'active_url'                     => ':attribute non è un URL valido.',
    'after'                          => ':attribute deve essere una data dopo :date.',
    'alpha'                          => ':attribute può contenere solo lettere.',
    'alpha_dash'                     => ':attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num'                      => ':attribute può contenere solo lettere e numeri.',
    'array'                          => ':attribute deve essere una matrice.',
    'unique_for_user'                => 'C\'è già una voce con questo :attribute.',
    'before'                         => ':attribute deve essere una data prima :date.',
    'unique_object_for_user'         => 'Questo nome è già in uso.',
    'unique_account_for_user'        => 'Il nome del conto è già in uso.',
    'between.numeric'                => ':attribute con questo nome conto è già in uso :min e :max.',
    'between.file'                   => ':attribute deve essere :min e :max kilobyte.',
    'between.string'                 => ':attribute deve essere tra :min e :max caratteri.',
    'between.array'                  => ':attribute deve essere tra :min e :max voci.',
    'boolean'                        => ':attribute deve essere vero o falso.',
    'confirmed'                      => ':attribute la conferma non corrisponde.',
    'date'                           => ':attribute non è una data valida',
    'date_format'                    => ':attribute non corrisponde al formato :format.',
    'different'                      => 'I campi :attribute e :other devono essere diversi.',
    'digits'                         => ':attribute deve essere :digits cifre.',
    'digits_between'                 => ':attribute deve essere :min e :max cifre.',
    'email'                          => ':attribute deve essere un indirizzo email valido.',
    'filled'                         => 'Il campo :attribute è obbligatorio.',
    'exists'                         => ':attribute selezionato non è valido.',
    'image'                          => ':attribute deve essere un\'immagine.',
    'in'                             => ':attribute selezionato non è valido.',
    'integer'                        => ':attribute deve essere un numero intero.',
    'ip'                             => ':attribute deve essere un indirizzo IP valido.',
    'json'                           => ':attribute deve essere una stringa JSON.',
    'max.numeric'                    => ':attribute non può essere maggiore di :max.',
    'max.file'                       => ':attribute non può essere maggiore di :max kilobytes.',
    'max.string'                     => ':attribute non può essere maggiore di :max caratteri.',
    'max.array'                      => ':attribute potrebbe non avere più di :max voce.',
    'mimes'                          => ':attribute deve essere un file di tipo: :values.',
    'min.numeric'                    => ':attribute deve essere almeno :min.',
    'lte.numeric'                    => 'Il campo :attribute deve essere minore o uguale a :value.',
    'min.file'                       => ':attribute deve essere almeno :min kilobytes.',
    'min.string'                     => ':attribute deve essere almeno :min caratteri.',
    'min.array'                      => ':attribute deve avere almeno :min voci.',
    'not_in'                         => ':attribute selezionato è invalido.',
    'numeric'                        => ':attribute deve essere un numero.',
    'numeric_native'                 => 'L\'importo nativo deve essere un numero.',
    'numeric_destination'            => 'L\'importo di destinazione deve essere un numero.',
    'numeric_source'                 => 'L\'importo di origine deve essere un numero.',
    'regex'                          => ':attribute formato non valido',
    'required'                       => 'Il campo :attribute è obbligatorio.',
    'required_if'                    => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless'                => 'Il campo :attribute è obbligatorio a meno che :other è in :values.',
    'required_with'                  => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all'              => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without'               => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all'           => 'Il campo :attribute è obbligatorio quando nessuno di :values è presente.',
    'same'                           => ':attribute e :other deve combaciare.',
    'size.numeric'                   => ':attribute deve essere :size.',
    'amount_min_over_max'            => 'L\'importo minimo non può essere maggiore dell\'importo massimo.',
    'size.file'                      => ':attribute deve essere :size kilobytes.',
    'size.string'                    => ':attribute deve essere :size caratteri.',
    'size.array'                     => ':attribute deve contenere :size voci.',
    'unique'                         => ':attribute è già stato preso.',
    'string'                         => ':attribute deve essere una stringa.',
    'url'                            => ':attribute il formato non è valido.',
    'timezone'                       => ':attribute deve essere una zona valida.',
    '2fa_code'                    => 'Il campo :attribute non è valido.',
    'dimensions'                  => ':attribute ha dimensioni di immagine non valide.',
    'distinct'                    => ':attribute il campo ha un valore doppio.',
    'file'                        => ':attribute deve essere un file.',
    'in_array'                    => ':attribute il campo non esiste in :other.',
    'present'                     => ':attribute il campo deve essere presente.',
    'amount_zero'                 => 'L\'importo totale non può essere zero.',
    'current_target_amount'       => 'L\'importo corrente deve essere minore dell\'importo obiettivo.',
    'unique_piggy_bank_for_user'  => 'Il nome del salvadanaio deve essere unico.',
    'secure_password'             => 'Questa non è una password sicura. Riprova. Per maggiori informazioni visita https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Il tipo di ripetizione della transazione ricorrente non è valido.',
    'valid_recurrence_rep_moment' => 'Il momento di ripetizione per questo tipo di ripetizione non è valido.',
    'invalid_account_info'        => 'Informazione sul conto non valida.',
    'attributes'                     => [
        'email'                   => 'indirizzo email',
        'description'             => 'descrizione',
        'amount'                  => 'importo',
        'name'                    => 'nome',
        'piggy_bank_id'           => 'ID salvadanaio',
        'targetamount'            => 'importo obiettivo',
        'opening_balance_date'    => 'data saldo di apertura',
        'opening_balance'         => 'saldo di apertura',
        'match'                   => 'abbinamento',
        'amount_min'              => 'importo minimo',
        'amount_max'              => 'importo massimo',
        'title'                   => 'titolo',
        'tag'                     => 'etichetta',
        'transaction_description' => 'descrizione transazione',
        'rule-action-value.1'     => 'regola valore azione #1',
        'rule-action-value.2'     => 'regola valore azione #2',
        'rule-action-value.3'     => 'regola valore azione #3',
        'rule-action-value.4'     => 'regola valore azione #4',
        'rule-action-value.5'     => 'regola valore azione #5',
        'rule-action.1'           => 'regola azione #1',
        'rule-action.2'           => 'regola azione #2',
        'rule-action.3'           => 'regola azione #3',
        'rule-action.4'           => 'regola azione #4',
        'rule-action.5'           => 'regola azione #5',
        'rule-trigger-value.1'    => 'valore #1 del trigger della regola',
        'rule-trigger-value.2'    => 'valore #2 del trigger della regola',
        'rule-trigger-value.3'    => 'valore #3 del trigger della regola',
        'rule-trigger-value.4'    => 'valore #4 del trigger della regola',
        'rule-trigger-value.5'    => 'valore #5 del trigger della regola',
        'rule-trigger.1'          => 'trigger #1 della regola',
        'rule-trigger.2'          => 'trigger #2 della regola',
        'rule-trigger.3'          => 'trigger #3 della regola',
        'rule-trigger.4'          => 'trigger #4 della regola',
        'rule-trigger.5'          => 'trigger #5 della regola',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'    => 'È necessario ottenere un ID e/o un nome del conto di origine validi per continuare.',
    'withdrawal_source_bad_data'     => 'Non è stato possibile trovare un conto d\'origine valido effettuando la ricerca con l\'ID ":id" o il nome ":name".',
    'withdrawal_dest_need_data'      => 'È necessario ottenere un ID e/o un nome del conto di destinazione validi per continuare.',
    'withdrawal_dest_bad_data'       => 'Non è stato possibile trovare un conto di destinazione valido effettuando la ricerca con l\'ID ":id" o il nome ":name".',

    'deposit_source_need_data' => 'È necessario ottenere un ID e/o un nome del conto di origine validi per continuare.',
    'deposit_source_bad_data'  => 'Non è stato possibile trovare un conto d\'origine valido effettuando la ricerca con l\'ID ":id" o il nome ":name".',
    'deposit_dest_need_data'   => 'È necessario ottenere un ID e/o un nome del conto di destinazione validi per continuare.',
    'deposit_dest_bad_data'    => 'Non è stato possibile trovare un conto di destinazione valido effettuando la ricerca con l\'ID ":id" o il nome ":name".',

    'transfer_source_need_data' => 'È necessario ottenere un ID e/o un nome del conto di origine validi per continuare.',
    'transfer_source_bad_data'  => 'Non è stato possibile trovare un conto d\'origine valido effettuando la ricerca con l\'ID ":id" o il nome ":name".',
    'transfer_dest_need_data'   => 'È necessario ottenere un ID e/o un nome del conto di destinazione validi per continuare.',
    'transfer_dest_bad_data'    => 'Non è stato possibile trovare un conto di destinazione valido effettuando la ricerca con l\'ID ":id" o il nome ":name".',
    'need_id_in_edit'           => 'Ogni suddivisione deve avere un "transaction_journal_id" (un ID valido oppure 0).',

    'ob_source_need_data' => 'È necessario ottenere un ID e/o un nome del conto di origine validi per continuare.',
    'ob_dest_need_data'   => 'È necessario ottenere un ID e/o un nome del conto di destinazione validi per continuare.',
    'ob_dest_bad_data'    => 'Non è stato possibile trovare un conto di destinazione valido effettuando la ricerca con l\'ID ":id" o il nome ":name".',

    'generic_invalid_source' => 'Non puoi utilizzare questo conto come conto di origine.',
    'generic_invalid_destination' => 'Non puoi utilizzare questo conto come conto di destinazione.',
];
