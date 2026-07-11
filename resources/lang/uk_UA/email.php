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

declare(strict_types=1);

return [
    // common items
    'greeting'                                   => 'Привіт,',
    'closing'                                    => 'Біп-буп,',
    'signature'                                  => 'Поштовий робот Firefly III',
    'footer_ps'                                  => 'PS: Це повідомлення було надіслано, оскільки надійшов запит з IP-адреси :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Тестове повідомлення з вашого додатку Firefly III',
    'admin_test_body'                            => 'Це тестове повідомлення з вашого додатку Firefly III. Воно було надіслано на :email.',
    'admin_test_message'                         => 'This is a test message from your Firefly III instance over channel ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Запрошення створено',
    'invitation_created_body'                    => 'Адміністратор ":email" створив запрошення для користувача з адресою електронної пошти ":invitee. Запрошення буде дійсне протягом 48 годин.',
    'invite_user_subject'                        => 'Вас запросили створити обліковий запис Firefly III.',
    'invitation_introduction'                    => 'Вас запросили створити обліковий запис Firefly III на **:host**. Firefly III — це персональний приватний фінансовий менеджер, який розміщується на власному сервері. Всі круті хлопці ним користуються.',
    'invitation_invited_by'                      => 'Ви були запрошені ":admin" і це запрошення було відправлено ":invitee". Це ви, так?',
    'invitation_url'                             => 'Запрошення дійсне протягом 48 годин і може бути використане на [Firefly III](:url). Насолоджуйтесь!',

    // new IP
    'login_from_new_ip'                          => 'Новий вхід в Firefly III',
    'slack_login_from_new_ip'                    => 'Новий вхід на Firefly III з IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III виявив новий вхід до вашого облікового запису з невідомої IP-адреси. Якщо ви ніколи не входили з IP-адреси, наведеної нижче, або після вашого останнього входу минуло більше шести місяців, Firefly III попередить вас про це.',
    'new_ip_warning'                             => 'Якщо ви впізнаєте цю IP-адресу або логін, ви можете проігнорувати це повідомлення. Якщо ви не ввійшли або не знаєте, про що йдеться, перевірте надійність свого пароля, змініть його та вийдіть із усіх інших сеансів. Для цього перейдіть на сторінку свого профілю. Звичайно, у вас уже ввімкнено двофакторна авторизація, чи не так? Будьте обережними!',
    'ip_address'                                 => 'IP-адреса',
    'host_name'                                  => 'Хост',
    'date_time'                                  => 'Дата + час',
    'user_agent'                                 => 'Браузер',

    // access token created
    'access_token_created_subject'               => 'Створено новий токен доступу',
    'access_token_created_body'                  => 'Хтось (сподіваюся, ви) щойно створив новий токен доступу Firefly III API для вашого облікового запису.',
    'access_token_created_explanation'           => 'За допомогою цього токена ви можете отримати доступ до **всіх** своїх фінансових записів через Firefly III API.',
    'access_token_created_revoke'                => 'Якщо це не ви, якнайшвидше анулюйте цей токен через :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Невідомий користувач намагався увійти в систему',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III виявив невдалу спробу входу',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'If you recognize this IP address or the login attempt, you can ignore this message. If you didn\'t try to login, of if you have no idea what this is about, verify your password security, change it, and log out all other sessions. To do this, go to your profile page. Of course you have 2FA enabled already, right? Stay safe!',

    // registered
    'registered_subject'                         => 'Ласкаво просимо у Firefly III!',
    'registered_subject_admin'                   => 'Зареєструвався новий користувач',
    'admin_new_user_registered'                  => 'Зареєструвався новий користувач. Користувач **:email** отримав ідентифікатор користувача #:id.',
    'registered_welcome'                         => 'Ласкаво просимо до [Firefly III](:address). Ваша реєстрація пройшла успішно, цей лист надіслано для підтвердження. Ура!',
    'registered_pw'                              => 'Якщо ви забули пароль, то відновіть його за допомогою [засобу скидання пароля](:address/password/reset).',
    'registered_help'                            => 'У верхньому правому куті кожної сторінки є іконка довідки. Якщо вам потрібна допомога, натисніть її!',
    'registered_closing'                         => 'Насолоджуйтесь!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Скидання пароля:',
    'registered_doc_link'                        => 'Документація:',

    // new version
    'new_version_email_subject'                  => 'Доступна нова версія Firefly III',

    // email change
    'email_change_subject'                       => 'Вашу електронну адресу Firefly III було змінено',
    'email_change_body_to_new'                   => 'Ви або хтось із доступом до вашого облікового запису Firefly III змінили вашу електронну адресу. Якщо ви очікували це повідомлення, проігноруйте його та видаліть.',
    'email_change_body_to_old'                   => 'Ви або хтось із доступом до вашого облікового запису Firefly III змінили вашу електронну адресу. Якщо це не ви або зміни небажані, ви **має** скористатись посиланням «скасувати» нижче, щоб захистити свій обліковий запис!',
    'email_change_ignore'                        => 'Якщо ви ініціювали цю зміну, можете сміливо ігнорувати це повідомлення.',
    'email_change_old'                           => 'Стара електронна адреса: :email',
    'email_change_old_strong'                    => 'Стара електронна адреса: **:email**',
    'email_change_new'                           => 'Нова адреса електронної пошти::email',
    'email_change_new_strong'                    => 'Нова адреса електронної пошти:**:email**',
    'email_change_instructions'                  => 'Ви не можете використовувати Firefly III, доки не підтвердите цю зміну. Натисніть посилання нижче, щоб зробити це.',
    'email_change_undo_link'                     => 'Щоб скасувати зміни, натисніть це посилання:',

    // OAuth token created
    'oauth_created_subject'                      => 'Створено новий обліковий запис OAuth',
    'oauth_created_body'                         => 'Хтось (сподіваємось, ви) щойно створив новий клієнт Firefly III OAuth API для вашого облікового запису користувача. Він позначений «:name» і має зворотну URL-адресу «:url».',
    'oauth_created_explanation'                  => 'За допомогою цього клієнта ви можете отримати доступ до **всіх** своїх фінансових записів через Firefly III API.',
    'oauth_created_undo'                         => 'Якщо це не ви, відкликайте цей клієнт якомога швидше на `:url`',

    // reset password
    'reset_pw_subject'                           => 'Запит на зміну пароля',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'Хтось намагався змінити ваш пароль. Якщо це ви, натисніть посилання нижче, щоб зробити це.',
    'reset_pw_warning'                           => '**БУДЬ ЛАСКА** переконайтеся, що посилання справді веде до сервера Firefly III, який ви очікували!',

    // error
    'error_subject'                              => 'Помилка у Firefly III',
    'error_intro'                                => 'Firefly III v:version виявив помилку: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Помилка була типу ":class".',
    'error_timestamp'                            => 'Сталася помилка о :time.',
    'error_location'                             => 'Сталася помилка у файлі "<span style="font-family: monospace;">:file</span>" line :line with :code.',
    'error_user'                                 => 'Користувач #:id, <a href="mailto::email">:email</a> виявив помилку.',
    'error_no_user'                              => 'Не знайдено жодного користувача, пов\'язвного з цією помилкою, або ж користувача не виявлено.',
    'error_ip'                                   => 'IP-адреса, пов\'язана з цією помилкою: :ip',
    'error_url'                                  => 'URL-адреса: :url',
    'error_user_agent'                           => 'Користувач: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'За бажанням ви також можете відкрити нове звернення на <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Якщо бажаєте, ви також можете відкрити нове звернення на https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Повна інформація про помилку нижче:',
    'error_headers'                              => 'Наступні заголовки також можуть бути актуальними:',
    'error_post'                                 => 'Ця інформація була представлена користувачем:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III створив нову транзакцію|Firefly III створив :count нових транзакцій',
    'new_journals_header'                        => 'Firefly III створив для вас транзакцію. Ви можете знайти її у Firefly III:|Firefly III створив :count транзакції для вас. Ви можете знайти їх у Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'You have :count subscriptions that are overdue to be paid',
    'subscriptions_overdue_subject_single'       => 'You have a subscription that is overdue to be paid',
    'subscriptions_overdue_warning_intro_single' => 'You have one subscription that is overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_warning_intro_multi'  => 'You have :count subscription(s) that are overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_please_action_single' => 'Perhaps you have simply not linked a transaction to this subscription. In that case, please do so. You will NOT get another warning about this overdue subscription. A new warning will be sent out for the NEXT due payment.',
    'subscriptions_overdue_please_action_multi'  => 'Perhaps you have simply not linked a transaction to these subscriptions. In that case, please do so. You will NOT get another warning about these overdue subscriptions. A new warning will be sent out for the NEXT due payments.',
    'subscriptions_overdue_outro'                => 'If you believe this message is wrong, please contact the Firefly III developer. Thank you for using Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Your subscription ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'          => 'Your subscription ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'        => 'Your subscription ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date'    => 'Your subscription ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                      => 'Your subscription **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'                => 'Your subscription **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'                 => 'Your subscription **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'           => 'Your subscription **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'                 => 'Будь ласка, вживіть відповідних заходів.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'You have enabled multi-factor authentication',
    'enabled_mfa_slack'                          => 'You (:email) have enabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_enabled_mfa'                           => 'You have enabled multi-factor authentication on your Firefly III account ":email". This means that you will need to use an authenticator app to log in from now on.',
    'enabled_mfa_warning'                        => 'If you did not enable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'disabled_mfa_subject'                       => 'You have disabled multi-factor authentication!',
    'disabled_mfa_slack'                         => 'You (:email) have disabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_disabled_mfa'                          => 'You have disabled multi-factor authentication on your Firefly III account ":email".',
    'disabled_mfa_warning'                       => 'If you did not disable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'new_backup_codes_subject'                   => 'Ви згенерували нові резервні коди',
    'new_backup_codes_slack'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III. Is this not correct? Check your settings!',
    'new_backup_codes_intro'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III if you lose access to your authenticator app.',
    'new_backup_codes_warning'                   => 'Please store these codes in a safe place. If you lose them, you will not be able to log in to Firefly III. If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    'used_backup_code_subject'                   => 'You have used a back-up code to login',
    'used_backup_code_slack'                     => 'You (:email) have used a back-up code to login',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    // few left:
    'mfa_few_backups_left_subject'               => 'У вас залишилося лише :count резервних кодів!',
    'mfa_few_backups_left_slack'                 => 'You (:email) have only :count backup code(s) left!',
    'few_backup_codes_intro'                     => 'You (:email) have used most of your backup codes, and now have only :count left. Please generate new ones as soon as possible.',
    'few_backup_codes_warning'                   => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'У вас НЕ залишилось резервних кодів!',
    'mfa_no_backups_left_slack'                  => 'You (:email) NO backup codes left!',
    'no_backup_codes_intro'                      => 'You (:email) have used ALL of your backup codes. Please generate new ones as soon as possible.',
    'no_backup_codes_warning'                    => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'You have tried and failed to use multi-factor authentication :count times now!',
    'mfa_many_failed_slack'                      => 'You (:email) have tried and failed to use multi-factor authentication :count times now. Is this not correct? Check your settings!',
    'mfa_many_failed_attempts_intro'             => 'You (:email) have tried :count times to use a multi-factor authentication code, but these login attempts have failed. Are you sure you are using the right MFA code? Are you sure the time on the server is correct?',
    'mfa_many_failed_attempts_warning'           => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',
];
