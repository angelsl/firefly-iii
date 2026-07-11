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
    'greeting'                                   => 'Привет,',
    'closing'                                    => 'Бип-бип,',
    'signature'                                  => 'Почтовый робот Firefly III',
    'footer_ps'                                  => 'PS: Это сообщение было отправлено, потому что его запросили с IP :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Тестовое сообщение от вашей установки Firefly III',
    'admin_test_body'                            => 'Это тестовое сообщение с вашего сервера Firefly III. Оно было отправлено на :email.',
    'admin_test_message'                         => 'Это тестовое сообщение от вашего Firefly III через канал ":channel".',
    'admin_test_link'                            => 'Ссылка ниже должна вести на ваш экземпляр Firefly III и начинаться с «http» или «https». Если это не так, задайте переменную окружения APP_URL: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Приглашение было создано',
    'invitation_created_body'                    => 'Администратор ":email" создал приглашение пользователю с адресом электронной почты ":invitee". Приглашение действительно в течение 48 часов.',
    'invite_user_subject'                        => 'Вас пригласили создать аккаунт в Firefly III.',
    'invitation_introduction'                    => 'Вас пригласили создать аккаунт Firefly III на **:host**. Firefly III – это персональный, приватный менеджер финансов, размещаемый на собственном сервере. Все крутые ребята им пользуются.',
    'invitation_invited_by'                      => 'Вас пригласил ":admin" и это приглашение было отправлено ":invitee". Это вы, верно?',
    'invitation_url'                             => 'Приглашение действительно в течение 48 часов и может быть использовано на [Firefly III](:url). Наслаждайтесь!',

    // new IP
    'login_from_new_ip'                          => 'Новый вход в Firefly III',
    'slack_login_from_new_ip'                    => 'Новый вход Firefly III с IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III зафиксировал вход в ваш аккаунт с неизвестного IP-адреса. Если вы никогда не входили в систему с IP-адреса, указанного ниже, или это было более шести месяцев назад, Firefly III предупредит вас.',
    'new_ip_warning'                             => 'Если вы узнаёте этот IP адрес или логин, вы можете проигнорировать данное сообщение. Если вы не входили в систему, и не понимаете, что происходит, проверьте безопасность вашего пароля, измените его и выйдите из всех других сессий. Для этого перейдите на страницу своего профиля. Конечно, же у вас уже включена двухфакторная аутентификация, верно? Оставайтесь в безопасности!',
    'ip_address'                                 => 'IP-адрес',
    'host_name'                                  => 'Сервер',
    'date_time'                                  => 'Дата и время',
    'user_agent'                                 => 'Браузер',

    // access token created
    'access_token_created_subject'               => 'Создан новый токен доступа',
    'access_token_created_body'                  => 'Кто-то (надеемся, что вы) только что создал новый токен доступа к Firefly III API для вашей учетной записи.',
    'access_token_created_explanation'           => 'С помощью этого токена, они смогут получить доступ ко **всем** вашим финансовым записям через Firefly III API.',
    'access_token_created_revoke'                => 'Если это были не вы, пожалуйста отзовите токен как можно скорее по адресу :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Неизвестный пользователь пытался войти в систему',
    'unknown_user_body'                          => 'Неизвестный пользователь (:ip) пытался войти в Firefly III. Использованный адрес электронной почты был ":address".',
    'unknown_user_message'                       => 'Они (`:ip`) использовали адрес электронной почты ":address".',

    // known user login attempt
    'failed_login_subject'                       => 'Обнаружена ошибка входа в систему Firefly III',
    'failed_login_body'                          => 'Firefly III обнаружил, что кто-то (вы?) не смог войти с учетной записью ":email". Пожалуйста, убедитесь, что это были вы.',
    'failed_login_message'                       => 'Обнаружена неудачная попытка входа (:ip) в вашу учетную запись Firefly III ":email".',
    'failed_login_warning'                       => 'Если вы узнаете этот IP-адрес или попытку входа, вы можете проигнорировать это сообщение. Если вы не пытались войти или не знаете, о чем идет речь, проверьте надежность пароля, измените его и выйдите из всех других сеансов. Для этого перейдите на страницу своего профиля. Конечно, у вас уже включена 2FA, верно? Берегите себя!',

    // registered
    'registered_subject'                         => 'Добро пожаловать в Firefly III!',
    'registered_subject_admin'                   => 'Новый пользователь зарегистрирован',
    'admin_new_user_registered'                  => 'Зарегистрирован новый пользователь с электронной почтой: **:email** ему присвоен ID #:id.',
    'registered_welcome'                         => 'Добро пожаловать в [Firefly III](:address). Подтверждаем вашу регистрацию этим e-mail. Ура!',
    'registered_pw'                              => 'Если вы забыли ваш пароль, пожалуйста, создайте его повторно используя [оснастку по сбросу пароля](:address/password/reset).',
    'registered_help'                            => 'В верхнем правом углу страницы есть иконка справки. Если вам нужна помощь, нажмите её!',
    'registered_closing'                         => 'Наслаждайтесь!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Сбросить пароль:',
    'registered_doc_link'                        => 'Документация:',

    // new version
    'new_version_email_subject'                  => 'Доступна новая версия Firefly III',

    // email change
    'email_change_subject'                       => 'Ваш адрес электронной почты Firefly III был изменен',
    'email_change_body_to_new'                   => 'Вы или кто-то, у кого есть доступ к вашей учетной записи Firefly III, изменил адрес вашей электронной почты. Если вы не ожидали этого сообщения, проигнорируйте и удалите его.',
    'email_change_body_to_old'                   => 'Вы или кто-то, у кого есть доступ к вашей учетной записи Firefly III, изменили ваш адрес электронной почты. Если это не вы, то **необходимо** пройти по ссылке «отменить» ниже, чтобы защитить свой аккаунт!',
    'email_change_ignore'                        => 'Если вы инициировали это изменение, вы можете спокойно проигнорировать это сообщение.',
    'email_change_old'                           => 'Старый адрес электронной почты: :email',
    'email_change_old_strong'                    => 'Старый адрес электронной почты: **:email**',
    'email_change_new'                           => 'Новый адрес электронной почты: :email',
    'email_change_new_strong'                    => 'Новый адрес электронной почты: **:email**',
    'email_change_instructions'                  => 'Вы не можете использовать Firefly III, пока не подтвердите это изменение. Для подтверждения перейдите по ссылке ниже.',
    'email_change_undo_link'                     => 'Чтобы отменить изменения, перейдите по ссылке:',

    // OAuth token created
    'oauth_created_subject'                      => 'Создан новый OAuth клиент',
    'oauth_created_body'                         => 'Кто-то (надеемся, что вы) только что создал новый клиент API OAuth для вашей учетной записи с именем ":name" и обратным URL `:url`.',
    'oauth_created_explanation'                  => 'С помощью этого токена, доступны **все** ваши финансовые записи через Firefly III API.',
    'oauth_created_undo'                         => 'Если это были не вы, пожалуйста, отзовите этого клиента как можно скорее по адресу `:url`',

    // reset password
    'reset_pw_subject'                           => 'Ваш запрос на сброс пароля',
    'reset_pw_message'                           => 'Инструкции по сбросу пароля вы получили в письме. Если это были вы, пожалуйста, следуйте инструкциям.',
    'reset_pw_instructions'                      => 'Кто-то пытался сбросить ваш пароль. Если это были Вы, пожалуйста, перейдите по ссылке ниже, чтобы сделать это.',
    'reset_pw_warning'                           => '**ПОЖАЛУЙСТА** проверьте, что ссылка ведёт на Firefly III, как вы ожидаете!',

    // error
    'error_subject'                              => 'Найдена ошибка в Firefly III',
    'error_intro'                                => 'В Firefly III v:version произошла ошибка: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Ошибка типа ":class".',
    'error_timestamp'                            => 'Ошибка произошла в: :time.',
    'error_location'                             => 'Эта ошибка произошла в файле <span style="font-family: monospace;">:file</span> в строке :line с кодом :code.',
    'error_user'                                 => 'У пользователя #:id произошла ошибка, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Пользователь не авторизован из-за этой ошибки или пользователь не был обнаружен.',
    'error_ip'                                   => 'IP адрес, связанный с этой ошибкой: :ip',
    'error_url'                                  => 'URL-адрес: :url',
    'error_user_agent'                           => 'User agent: :userAgent',
    'error_stacktrace'                           => 'Полный stacktrace находится ниже. Если вы считаете, что это ошибка в Firefly III, вы можете направить это сообщение на <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii. rg</a>. Это может помочь исправить ошибку, с которой вы столкнулись.',
    'error_github_html'                          => 'Если вы предпочитаете, вы также можете создать новый тикет на <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Если вы предпочитаете, вы также можете открыть новый тикет на https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Полная трассировка стека:',
    'error_headers'                              => 'Заголовки также могут иметь отношение к следующим темам:',
    'error_post'                                 => 'Это было отправлено пользователем:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III создал новую транзакцию|Firefly III создал :count новых транзакций',
    'new_journals_header'                        => 'Firefly III создал для вас транзакцию. Вы можете найти её в вашей установке Firefly III: |Firefly III создал для вас :count транзакций. Вы можете найти их в вашей установке Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'У вас :count просроченных по оплате подписок',
    'subscriptions_overdue_subject_single'       => 'У вас есть просроченная по оплате подписка',
    'subscriptions_overdue_warning_intro_single' => 'У вас есть одна просроченная подписка. По следующим датам ожидался платёж, однако он так и не поступил.',
    'subscriptions_overdue_warning_intro_multi'  => 'У вас есть :count просроченных подписок. По следующим датам ожидался платёж, однако он так и не поступил.',
    'subscriptions_overdue_please_action_single' => 'Возможно, вы просто забыли привязать транзакцию к этой подписке. Если это так, то сделайте это прямо сейчас. Повторного напоминания об этом пропущенном платеже больше не будет. Следующее уведомление придёт только при наступлении очередного срока оплаты.',
    'subscriptions_overdue_please_action_multi'  => 'Возможно, вы просто забыли привязать транзакцию к этим подпискам. Если это так, сделайте это прямо сейчас. Повторного напоминания об этих просроченных подписках не будет. Следующее предупреждение придёт только для новых предстоящих платежах.',
    'subscriptions_overdue_outro'                => 'Если вы считаете, что это сообщение неправильное, пожалуйста, свяжитесь с разработчиком Firefly III. Благодарим вас за использование Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Ваша подписка ":name" должна закончиться через :diff дней',
    'bill_warning_subject_now_end_date'          => 'Ваша подписка ":name" заканчивается сегодня',
    'bill_warning_subject_extension_date'        => 'Ваша подписка ":name" должна быть продлена или отменена через :diff дней',
    'bill_warning_subject_now_extension_date'    => 'Ваша подписка ":name" должна быть продлена или отменена сегодня',
    'bill_warning_end_date'                      => 'Ваша подписка **":name"** должна закончиться :date. Этот момент наступит примерно через **:diff дней**.',
    'bill_warning_extension_date'                => 'Ваша подписка **:name"** должна быть продлена или отменена :date. Этот момент наступит примерно через **:diff дней**.',
    'bill_warning_end_date_zero'                 => 'Ваша подписка **":name"** заканчивается :date. Этот момент пройдет **СЕГОДНЯ!**',
    'bill_warning_extension_date_zero'           => 'Ваша подписка **":name"** должна быть продлена или отменена :date. Этот момент пройдет **СЕГОДНЯ!**',
    'bill_warning_please_action'                 => 'Просим принять соответствующие меры.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Вы включили многофакторную аутентификацию',
    'enabled_mfa_slack'                          => 'Вы (:email) включили многофакторную аутентификацию. Это не правильно? Проверьте настройки!',
    'have_enabled_mfa'                           => 'Вы включили многофакторную аутентификацию для вашей учетной записи Firefly III ":email". Это означает, что вам нужно будет использовать приложение аутентификации для входа в систему.',
    'enabled_mfa_warning'                        => 'Если вы не включили это, немедленно обратитесь к администратору или проверьте документацию Firefly III.',

    'disabled_mfa_subject'                       => 'Вы отключили многофакторную аутентификацию!',
    'disabled_mfa_slack'                         => 'Вы (:email) отключили многофакторную аутентификацию. Это не правильно? Проверьте настройки!',
    'have_disabled_mfa'                          => 'Вы отключили многофакторную аутентификацию на вашей учетной записи Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Если вы не отключили это, немедленно обратитесь к администратору или проверьте документацию Firefly III.',

    'new_backup_codes_subject'                   => 'Вы создали новые резервный коды',
    'new_backup_codes_slack'                     => 'Вы (:email) создали новые резервные коды. Они могут быть использованы для входа в Firefly III. Это не правильно? Проверьте ваши настройки!',
    'new_backup_codes_intro'                     => 'Вы (:email) создали новые резервные коды. Они могут быть использованы для входа в Firefly III, если вы потеряете доступ к вашему приложению для аутентификации.',
    'new_backup_codes_warning'                   => 'Пожалуйста, храните эти коды в надежном месте. Если вы потеряете их, вы не сможете войти в Firefly III. Если вы этого не делали, немедленно свяжитесь с администратором или проверьте документацию Firefly III.',

    'used_backup_code_subject'                   => 'Вы использовали резервный код для входа',
    'used_backup_code_slack'                     => 'Вы (:email) использовали резервный код для входа',

    'used_backup_code_intro'                     => 'Вы (:email) использовали резервный код для входа в Firefly III. Теперь у вас на один резервный код меньше. Пожалуйста, удалите его из своего списка.',
    'used_backup_code_warning'                   => 'Если вы этого не делали, немедленно обратитесь к администратору или изучите документацию по Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Осталось только :count резервных кодов!',
    'mfa_few_backups_left_slack'                 => 'Осталось (:email) только :count резервных кодов!',
    'few_backup_codes_intro'                     => 'Вы (:email) использовали большую часть своих резервных кодов, у вас осталось :count кодов. Пожалуйста, сгенерируйте новые как можно скорее.',
    'few_backup_codes_warning'                   => 'Без резервных кодов вы не можете восстановить свой логин MFA, если потеряете доступ к генератору кода.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'У вас не осталось резервных кодов!',
    'mfa_no_backups_left_slack'                  => 'У вас (:email) не осталось резервных кодов!',
    'no_backup_codes_intro'                      => 'Вы (:email) использовали ВСЕ резервные коды. Пожалуйста, сгенерируйте новые как можно скорее.',
    'no_backup_codes_warning'                    => 'Без резервных кодов вы не можете восстановить свой логин MFA, если потеряете доступ к генератору кода.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Вы пытались и не смогли использовать многофакторную аутентификацию :count раз!',
    'mfa_many_failed_slack'                      => 'Вы (:email) пытались и не смогли использовать многофакторную аутентификацию :count раз. Это не так? Проверьте настройки!',
    'mfa_many_failed_attempts_intro'             => 'Вы (:email) пробовали :count раз использовать многофакторный код аутентификации, но эти попытки не удались. Вы уверены, что используете правильный MFA код? Вы уверены, что время на сервере правильно?',
    'mfa_many_failed_attempts_warning'           => 'Если вы этого не делали, немедленно свяжитесь с администратором или проверьте документацию Firefly III.',
];
