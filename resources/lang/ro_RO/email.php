<?php

/**
 * email.php
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
    // common items
    'greeting'                                 => 'Salut,',
    'closing'                                  => 'Bip boop,',
    'signature'                                => 'Robot Mail Firefly III',
    'footer_ps'                                => 'PS: Acest mesaj a fost trimis deoarece o solicitare de la IP :ipAddress a declanşat-o.',

    // admin test
    'admin_test_subject'                       => 'Un mesaj de testare de la instalarea Firefly III',
    'admin_test_body'                          => 'Acesta este un mesaj de test de la instanța dvs. Firefly III. Acesta a fost trimis la :email.',

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


    // invite
    'invitation_created_subject'               => 'A fost creată o invitație',
    'invitation_created_body'                  => 'Utilizatorul admin ":email" a creat o invitație de utilizator care poate fi utilizată de către oricine se află în spatele adresei de e-mail ":invitee". Invitația va fi valabilă pentru 48 de ore.',
    'invite_user_subject'                      => 'Ați fost invitat să creați un cont Firefly III.',
    'invitation_introduction'                  => 'Ați fost invitat să creați un cont Firefly III pe **:host**. Firefly III este un manager personal de finanțe, personal personal. Toți copiii grozavi îl folosesc.',
    'invitation_invited_by'                    => 'Ai fost invitat de ":admin" și această invitație a fost trimisă la ":invitee". Asta ești tu, nu?',
    'invitation_url'                           => 'Invitația este valabilă pentru 48 de ore și poate fi răscumpărată prin navigarea la [Firefly III](:url). Bucurați-vă!',

    // new IP
    'login_from_new_ip'                        => 'Autentificare nouă pe Firefly III',
    'slack_login_from_new_ip'                  => 'New Firefly III login from IP :ip (:host)',
    'new_ip_body'                              => 'Firefly III a detectat o nouă autentificare în contul dvs. de la o adresă IP necunoscută. Dacă nu v-ați conectat niciodată de la adresa IP de mai jos, sau a trecut mai mult de șase luni, Firefly III vă va avertiza.',
    'new_ip_warning'                           => 'Dacă recunoști această adresă IP sau autentificare, poți ignora acest mesaj. Dacă nu te-ai logat, sau dacă nu ai nici o idee despre ce este vorba, verifică-ți securitatea, schimbă-o și deconectează toate celelalte sesiuni. Pentru a face acest lucru, accesați pagina de profil. Bineînțeles că ai Autentificare în Doi Pași activat deja, nu? Rămâi în siguranță!',
    'ip_address'                               => 'Adresa IP',
    'host_name'                                => 'Gazdă',
    'date_time'                                => 'Dată și oră',

    // access token created
    'access_token_created_subject'             => 'Un nou token de acces a fost creat',
    'access_token_created_body'                => 'Cineva (sperăm că dvs.) tocmai a creat un nou Firefly III API Access Token pentru contul dvs. de utilizator.',
    'access_token_created_explanation'         => 'Cu acest token, pot accesa **toate** din înregistrările financiare prin API-ul Firefly III.',
    'access_token_created_revoke'              => 'Dacă nu ai fost tu, te rugăm să revoci acest token cât mai curând posibil la :url',

    // registered
    'registered_subject'                       => 'Bun venit la Firefly III!',
    'registered_subject_admin'                 => 'S-a înregistrat un utilizator nou',
    'admin_new_user_registered'                => 'S-a înregistrat un utilizator nou. Utilizatorul **:email** a primit ID-ul de utilizator #:id.',
    'registered_welcome'                       => 'Bine ați venit la [Firefly III](:address). Înregistrarea dvs. a făcut-o, și acest e-mail este aici pentru a-l confirma. Yay!',
    'registered_pw'                            => 'Dacă v-ați uitat deja parola, vă rugăm să o resetați folosind [instrumentul de resetare a parolei](:address/parolă/resetare).',
    'registered_help'                          => 'Există o pictogramă de ajutor în colțul din dreapta sus al fiecărei pagini. Dacă ai nevoie de ajutor, apasă pe ea!',
    'registered_closing'                       => 'Bucurați-vă de el!',
    'registered_firefly_iii_link'              => 'Firefly III:',
    'registered_pw_reset_link'                 => 'Resetare parolă:',
    'registered_doc_link'                      => 'Documentaţie:',

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


    // new version
    'new_version_email_subject'                => 'O nouă versiune Firefly III este disponibilă',

    // email change
    'email_change_subject'                     => 'Adresa ta de email a fost schimbată',
    'email_change_body_to_new'                 => 'Dumneavoastră sau cineva cu acces la contul dvs. Firefly III v-a schimbat adresa de e-mail. Dacă nu ați așteptat acest mesaj, vă rugăm să îl ignorați și să îl ștergeți.',
    'email_change_body_to_old'                 => 'Dumneavoastră sau cineva cu acces la contul dvs. Firefly III v-a schimbat adresa de e-mail. Dacă nu v-ați așteptat ca acest lucru să se întâmple, **trebuie** să urmați linkul "undo" de mai jos pentru a vă proteja contul!',
    'email_change_ignore'                      => 'Dacă ați inițiat această schimbare, puteți ignora în siguranță acest mesaj.',
    'email_change_old'                         => 'Vechea adresă de e-mail a fost: :email',
    'email_change_old_strong'                  => 'Vechea adresă de e-mail a fost: **:email**',
    'email_change_new'                         => 'Noua adresă de e-mail este: :email',
    'email_change_new_strong'                  => 'Noua adresă de e-mail este: **:email**',
    'email_change_instructions'                => 'Nu puteți utiliza Firefly III până când nu confirmați această modificare. Vă rugăm să urmați link-ul de mai jos pentru a face acest lucru.',
    'email_change_undo_link'                   => 'Pentru a anula modificarea, urmați acest link:',

    // OAuth token created
    'oauth_created_subject'                    => 'Un nou client OAuth a fost creat',
    'oauth_created_body'                       => 'Cineva (sperăm că dvs.) tocmai a creat un nou client Firefly III API OAuth pentru contul dvs. de utilizator. Este etichetat ":name" şi are URL-ul de apel invers `:url`.',
    'oauth_created_explanation'                => 'Cu acest client, ei pot accesa **toate** din înregistrările financiare prin API-ul Firefly III.',
    'oauth_created_undo'                       => 'Dacă nu aţi fost dumneavoastră, vă rugăm să revocaţi acest client cât mai curând posibil la `:url`',

    // reset password
    'reset_pw_subject'                         => 'Solicitarea de resetare a parolei',
    'reset_pw_instructions'                    => 'Cineva a încercat să-ți reseteze parola. Dacă ai fost, te rugăm să urmezi link-ul de mai jos pentru a face acest lucru.',
    'reset_pw_warning'                         => '**PLEASE** verifică dacă linkul chiar merge la Firefly III pe care te aștepți să-l merge!',

    // error
    'error_subject'                            => 'Am descoperit o eroare în Firefly III',
    'error_intro'                              => 'Firefly III v:version a întâmpinat o eroare: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                               => 'Eroarea a fost de tip ":class".',
    'error_timestamp'                          => 'Eroarea a apărut pe/la: :time.',
    'error_location'                           => 'Această eroare a apărut în fișierul "<span style="font-family: monospace;">:file</span>" pe linia :line cu codul :code.',
    'error_user'                               => 'Eroarea a fost întâlnită de utilizatorul #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                            => 'Nu a existat niciun utilizator conectat pentru această eroare sau niciun utilizator nu a fost detectat.',
    'error_ip'                                 => 'Adresa IP asociată acestei erori este: :ip',
    'error_url'                                => 'URL-ul este: :url',
    'error_user_agent'                         => 'Agent utilizator: :userAgent',
    'error_stacktrace'                         => 'Erorile sunt mai jos. Dacă credeți că acesta este un bug în Firefly III, puteți transmite acest mesaj la <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Acest lucru poate ajuta la rezolvarea problemei pe care tocmai ați întâlnit-o.',
    'error_github_html'                        => 'Dacă preferați, puteți de asemenea deschide o nouă problemă pe <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                        => 'Dacă preferați, puteți de asemenea deschide o nouă problemă pe <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_stacktrace_below'                   => 'Stacktrack-ul complet este mai jos:',
    'error_headers'                            => 'Următoarele antete pot fi, de asemenea, relevante:',
    'error_post'                               => 'Acest lucru a fost trimis de utilizator:',

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


    // report new journals
    'new_journals_subject'                     => 'Firefly III a creat o nouă tranzacție, Firefly III a creat :count tranzacții noi',
    'new_journals_header'                      => 'Firefly III a creat o tranzacție pentru dvs. O puteți găsi în instalarea dvs. Firefly III:|Firefly III a creat :count tranzacții pentru dvs. Le puteți găsi în instalarea Firefly III:',

    // bill warning
    'bill_warning_subject_end_date'            => 'Factura dvs. ":name" trebuie să fie scadentă in :diff zile',
    'bill_warning_subject_now_end_date'        => 'Factura ta ":name" este scadenta azi',
    'bill_warning_subject_extension_date'      => 'Factura ta ":name" urmează să fie prelungită sau anulată în :diff zile',
    'bill_warning_subject_now_extension_date'  => 'Factura dvs. ":name" urmează să fie extinsă sau anulată',
    'bill_warning_end_date'                    => 'Factura ta **":name"** urmează să fie scadenta pe :date. Acest moment va trece în aproximativ **:diff zile**.',
    'bill_warning_extension_date'              => 'Factura ta **":name"** urmează să fie prelungită sau anulată pe :date. Acest moment va trece în aproximativ **:diff zile**.',
    'bill_warning_end_date_zero'               => 'Factura ta **":name"** urmează să se termine pe :date. Acest moment va trece **ASTAZI**',
    'bill_warning_extension_date_zero'         => 'Factura dvs. **":name"** urmează să fie extinsă sau anulată pe :date. Acest moment va trece **ASTAZI**',
    'bill_warning_please_action'               => 'Vă rugăm să luați măsurile corespunzătoare.',

    // user has enabled MFA
    'enabled_mfa_subject'                      => 'Ați activat autentificarea multi-factor',
    'enabled_mfa_slack'                        => 'Dvs. (:email) ați activat autentificarea cu mai multe factori. Este acest lucru incorect? Verificați setările!',
    'have_enabled_mfa'                         => 'You have enabled multi-factor authentication on your Firefly III account ":email". This means that you will need to use an authenticator app to log in from now on.',
    'enabled_mfa_warning'                      => 'If you did not enable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'disabled_mfa_subject'                     => 'You have disabled multi-factor authentication!',
    'disabled_mfa_slack'                       => 'You (:email) have disabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_disabled_mfa'                        => 'You have disabled multi-factor authentication on your Firefly III account ":email".',
    'disabled_mfa_warning'                     => 'If you did not disable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'new_backup_codes_subject'                 => 'You have generated new back-up codes',
    'new_backup_codes_slack'                   => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III. Is this not correct? Check your settings!',
    'new_backup_codes_intro'                   => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III if you lose access to your authenticator app.',
    'new_backup_codes_warning'                 => 'Please store these codes in a safe place. If you lose them, you will not be able to log in to Firefly III. If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    'used_backup_code_subject'                 => 'You have used a back-up code to login',
    'used_backup_code_slack'                   => 'You (:email) have used a back-up code to login',

    'used_backup_code_intro'                   => 'You (:email) have used a back-up code to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                 => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    // few left:
    'mfa_few_backups_left_subject'             => 'You have only :count backup code(s) left!',
    'mfa_few_backups_left_slack'               => 'You (:email) have only :count backup code(s) left!',
    'few_backup_codes_intro'                   => 'You (:email) have used most of your backup codes, and now have only :count left. Please generate new ones as soon as possible.',
    'few_backup_codes_warning'                 => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // NO left:
    'mfa_no_backups_left_subject'              => 'You have NO backup codes left!',
    'mfa_no_backups_left_slack'                => 'You (:email) NO backup codes left!',
    'no_backup_codes_intro'                    => 'You (:email) have used ALL of your backup codes. Please generate new ones as soon as possible.',
    'no_backup_codes_warning'                  => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                  => 'You have tried and failed to use multi-factor authentication :count times now!',
    'mfa_many_failed_slack'                    => 'You (:email) have tried and failed to use multi-factor authentication :count times now. Is this not correct? Check your settings!',
    'mfa_many_failed_attempts_intro'           => 'You (:email) have tried :count times to use a multi-factor authentication code, but these login attempts have failed. Are you sure you are using the right MFA code? Are you sure the time on the server is correct?',
    'mfa_many_failed_attempts_warning'         => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

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
