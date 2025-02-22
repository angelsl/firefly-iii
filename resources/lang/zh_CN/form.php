<?php

/**
 * form.php
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
    // new user:
    'bank_name'                   => '银行名称',
    'bank_balance'                => '余额',
    'current_balance'             => '当前余额',
    'savings_balance'             => '储蓄余额',
    'credit_card_limit'           => '信用卡额度',
    'automatch'                   => '自动匹配',
    'skip'                        => '跳过',
    'enabled'                     => '已启用',
    'name'                        => '名称',
    'active'                      => '启用',
    'amount_min'                  => '最小金额',
    'amount_max'                  => '最大金额',
    'match'                       => '匹配于',
    'strict'                      => '精确模式',
    'repeat_freq'                 => '重复',
    'object_group'                => '组',
    'location'                    => '位置',
    'update_channel'              => '更新频道',
    'currency_id'                 => '货币',
    'transaction_currency_id'     => '货币',
    'auto_budget_currency_id'     => '货币',
    'external_ip'                 => '您的服务器外部IP',
    'attachments'                 => '附件',
    'BIC'                         => '银行识别代码 BIC',
    'verify_password'             => '验证密码安全性',
    'source_account'              => '来源账户',
    'destination_account'         => '目标账户',
    'asset_destination_account'   => '目标账户',
    'include_net_worth'           => '包含于净资产',
    'asset_source_account'        => '来源账户',
    'journal_description'         => '说明',
    'note'                        => '备注',
    'currency'                    => '货币',
    'account_id'                  => '资产账户',
    'budget_id'                   => '预算',
    'bill_id'                     => '账单',
    'opening_balance'             => '初始余额',
    'tagMode'                     => '标签模式',
    'virtual_balance'             => '虚拟账户余额',

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


    'targetamount'                => '目标金额',
    'account_role'                => '账户角色',
    'opening_balance_date'        => '开户日期',
    'cc_type'                     => '信用卡还款计划',
    'cc_monthly_payment_date'     => '信用卡每月还款日期',
    'piggy_bank_id'               => '小猪扑满',
    'returnHere'                  => '返回此处',
    'returnHereExplanation'       => '保存后返回当前页面',
    'returnHereUpdateExplanation' => '更新后返回当前页面',
    'description'                 => '描述',
    'expense_account'             => '支出帐户',
    'revenue_account'             => '收入帐户',
    'decimal_places'              => '小数位数',
    'destination_amount'          => '金额 (目标)',
    'new_email_address'           => '新电子邮件地址',
    'verification'                => '验证',
    'api_key'                     => 'API 密钥',
    'remember_me'                 => '自动登录',
    'liability_type_id'           => '债务类型',
    'liability_type'              => '债务类型',
    'interest'                    => '利息',
    'interest_period'             => '利息期',
    'extension_date'              => '延续日期',
    'type'                        => '类型',
    'convert_Withdrawal'          => '转换支出',
    'convert_Deposit'             => '转换收入',
    'convert_Transfer'            => '转换转帐',
    'amount'                      => '金额',
    'foreign_amount'              => '外币金额',
    'date'                        => '日期',
    'interest_date'               => '利息日期',
    'book_date'                   => '登记日期',
    'process_date'                => '处理日期',
    'category'                    => '分类',
    'tags'                        => '标签',
    'deletePermanently'           => '永久删除',
    'cancel'                      => '取消',
    'targetdate'                  => '目标日期',
    'startdate'                   => '开始日期',
    'tag'                         => '标签',
    'under'                       => '低于',
    'symbol'                      => '符号',
    'code'                        => '代码',
    'iban'                        => '国际银行账户号码 IBAN',
    'account_number'              => '账户号码',
    'creditCardNumber'            => '信用卡卡号',
    'has_headers'                 => '标题',
    'date_format'                 => '日期格式',
    'specifix'                    => '特定的银行或文件修正',
    'attachments[]'               => '附件',
    'title'                       => '标题',
    'notes'                       => '备注',
    'filename'                    => '文件名称',
    'mime'                        => 'Mime 类型',
    'size'                        => '尺寸',
    'trigger'                     => '触发条件',
    'stop_processing'             => '停止处理',
    'start_date'                  => '范围起始',
    'end_date'                    => '范围结束',
    'enddate'                     => '结束日期',
    'move_rules_before_delete'    => '规则组',
    'start'                       => '范围起始',
    'end'                         => '范围结束',
    'delete_account'              => '删除账户“:name”',
    'delete_webhook'              => '删除推送":title"',
    'delete_bill'                 => '删除账单“:name”',
    'delete_budget'               => '删除预算“:name”',
    'delete_category'             => '删除分类“:name”',
    'delete_currency'             => '删除货币“:name”',
    'delete_journal'              => '删除描述为“:description”的交易',
    'delete_attachment'           => '删除附件“:name”',
    'delete_rule'                 => '删除规则“:title”',
    'delete_rule_group'           => '删除规则组“:title”',
    'delete_link_type'            => '删除关联类型“:name”',
    'delete_user'                 => '删除用户“:email”',
    'delete_recurring'            => '删除定期交易“:title”',
    'user_areYouSure'             => '如果您删除用户“:email”，此用户的所有数据都会被删除，且无法恢复。如果您删除自己，您将无法进入此 Firefly III 站点。',
    'attachment_areYouSure'       => '您确定要删除附件“:name”吗？',
    'account_areYouSure'          => '您确定要删除账户“:name”吗？',
    'account_areYouSure_js'       => '确定要删除名称为"{name}"的账户吗？',
    'bill_areYouSure'             => '您确定要删除账单“:name”吗？',
    'rule_areYouSure'             => '您确定要删除规则“:title”吗？',
    'object_group_areYouSure'     => '您确定要删除组“:title”吗？',
    'ruleGroup_areYouSure'        => '您确定要删除规则组“:title”吗？',
    'budget_areYouSure'           => '您确定要删除预算“:name”吗？',
    'webhook_areYouSure'          => '您确定要删除推送":title"吗？',
    'category_areYouSure'         => '您确定要删除分类“:name”吗？',
    'recurring_areYouSure'        => '您确定要删除定期交易“:title”吗？',
    'currency_areYouSure'         => '您确定要删除货币“:name”吗？',
    'piggyBank_areYouSure'        => '您确定要删除存钱罐“:name”吗？',
    'journal_areYouSure'          => '您确定要删除描述为“:description”的交易吗？',
    'mass_journal_are_you_sure'   => '您确定要删除这些交易吗？',

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


    'tag_areYouSure'              => '您确定要删除标签“:tag”吗？',
    'journal_link_areYouSure'     => '您确定要删除 <a href=":source_link">:source</a> 与 <a href=":destination_link">:destination</a> 之间的关联吗？',
    'linkType_areYouSure'         => '您确定要删除关联类型“:name” (“:inward”/“:outward”) 吗？',
    'permDeleteWarning'           => '从 Firefly III 删除内容是永久且无法恢复的。',
    'mass_make_selection'         => '您仍可以取消勾选复选框，以避免项目被删除。',
    'delete_all_permanently'      => '永久删除已选项目',
    'update_all_journals'         => '更新这些交易',
    'also_delete_transactions'    => '与此账户关联的唯一一笔交易也会被删除。|与此账户关联的 :count 笔交易也会被删除。',
    'also_delete_transactions_js' => '没有交易|与此账户关联的唯一一笔交易也会被删除。|与此账户关联的 {count} 笔交易也会被删除。',
    'also_delete_connections'     => '与此关联类型相关联的唯一一笔交易会遗失连接。|与此关联类型相关联的 :count 笔交易会遗失连接。',
    'also_delete_rules'           => '与此规则组关联的唯一一条规则也会被删除。|与此规则组关联的 :count 条规则也会被删除。',
    'also_delete_piggyBanks'      => '与此账户关联的唯一一个存钱罐也会被删除。|与此账户关联的 :count 个存钱罐也会被删除。',
    'also_delete_piggyBanks_js'   => '没有存钱罐|与此账户关联的唯一一个存钱罐也会被删除。|与此账户关联的 {count} 个存钱罐也会被删除。',
    'not_delete_piggy_banks'      => '关联至此组的存钱罐将不会被删除。|关联至此组的 :count 个存钱罐将不会被删除。',
    'bill_keep_transactions'      => '与此账单关联的唯一一笔交易不会被删除。|与此账单关联的 :count 笔交易不会被删除。',
    'budget_keep_transactions'    => '与此预算关联的唯一一笔交易不会被删除。|与此预算关联的 :count 笔交易不会被删除。',
    'category_keep_transactions'  => '与此分类关联的唯一一笔交易不会被删除。|与此分类关联的 :count 笔交易不会被删除。',
    'recurring_keep_transactions' => '由此定期交易建立的唯一一笔交易不会被删除。|由此定期交易建立的 :count 笔交易不会被删除。',
    'tag_keep_transactions'       => '与此标签关联的唯一一笔交易不会被删除。|与此标签关联的 :count 笔交易不会被删除。',
    'check_for_updates'           => '检查更新',
    'liability_direction'         => '债务',
    'delete_object_group'         => '删除组“:title”',
    'email'                       => '电子邮件地址',
    'password'                    => '密码',
    'password_confirmation'       => '确认密码',
    'blocked'                     => '被封禁？',
    'blocked_code'                => '封禁原因',
    'login_name'                  => '登录',
    'is_owner'                    => '是管理员？',
    'url'                         => '网址',
    'bill_end_date'               => '结束日期',

    // import
    'apply_rules'                 => '应用规则',
    'artist'                      => '艺术家',
    'album'                       => '专辑',
    'song'                        => '曲目',

    // admin
    'domain'                      => '域名',
    'single_user_mode'            => '禁止新用户注册',
    'is_demo_site'                => '这是演示网站',

    // import
    'configuration_file'          => '配置文件',
    'csv_comma'                   => '逗号 (,)',
    'csv_semicolon'               => '分号 (;)',
    'csv_tab'                     => 'TAB键 (不可见)',
    'csv_delimiter'               => 'CSV 栏位分隔符号',
    'client_id'                   => '客户端 ID',
    'app_id'                      => '应用 ID',
    'secret'                      => '密钥',
    'public_key'                  => '公共密钥',
    'country_code'                => '国家代码',
    'provider_code'               => '银行或资料提供者',
    'fints_url'                   => 'FinTS API 网址',
    'fints_port'                  => '端口',
    'fints_bank_code'             => '银行代码',
    'fints_username'              => '用户名',
    'fints_password'              => 'PIN / 密码',
    'fints_account'               => 'FinTS 帐户',
    'local_account'               => 'Firefly III 账户',

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


    'from_date'                   => '日期自',
    'to_date'                     => '日期至',
    'due_date'                    => '到期日',
    'payment_date'                => '付款日期',
    'invoice_date'                => '发票日期',
    'internal_reference'          => '内部引用',
    'inward'                      => '内向描述',
    'outward'                     => '外向描述',
    'rule_group_id'               => '规则组',
    'transaction_description'     => '交易描述',
    'first_date'                  => '初次日期',
    'transaction_type'            => '交易类型',
    'repeat_until'                => '重复直到',
    'recurring_description'       => '定期交易描述',
    'repetition_type'             => '重复类型',
    'foreign_currency_id'         => '外币',
    'repetition_end'              => '重复结束',
    'repetitions'                 => '重复',
    'calendar'                    => '日历',
    'weekend'                     => '周末',
    'client_secret'               => '客户端密钥',
    'withdrawal_destination_id'   => '目标账户',
    'deposit_source_id'           => '来源账户',
    'expected_on'                 => '预计日期',
    'paid'                        => '已付款',
    'auto_budget_type'            => '自动预算',
    'auto_budget_amount'          => '自动预算金额',
    'auto_budget_period'          => '自动预算周期',
    'collected'                   => '已收藏',
    'submitted'                   => '已提交',
    'key'                         => '按键',
    'value'                       => '记录内容',
    'webhook_delivery'            => '发送格式',
    'webhook_response'            => '响应内容',
    'webhook_trigger'             => '触发条件',
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
