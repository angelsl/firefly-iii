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
    'bad_type_source'                 => 'Firefly III can\'t determine the transaction type based on this source account.',
    'bad_type_destination'            => 'Firefly III can\'t determine the transaction type based on this destination account.',
    'missing_where'                   => 'Mảng bị thiếu mệnh đề "where"',
    'missing_update'                  => 'Mảng bị thiếu mệnh đề "update"',
    'invalid_where_key'               => 'JSON chứa một khóa không hợp lệ cho điều khoản "where"',
    'invalid_update_key'              => 'JSON chứa khóa không hợp lệ cho điều khoản "update"',
    'invalid_query_data'              => 'Có dữ liệu không hợp lệ trong trường %s:%s của truy vấn của bạn.',
    'invalid_query_account_type'      => 'Truy vấn của bạn chứa các loại tài khoản khác nhau, điều này không được phép.',
    'invalid_query_currency'          => 'Truy vấn của bạn chứa các tài khoản có cài đặt tiền tệ khác nhau, điều này không được phép.',
    'iban'                            => 'Đây không phải là một IBAN hợp lệ.',
    'zero_or_more'                    => 'Giá trị không thể âm.',
    'more_than_zero'                  => 'The value must be more than zero.',
    'more_than_zero_correct'          => 'The value must be zero or more.',
    'no_asset_account'                => 'This is not an asset account.',
    'date_or_time'                    => 'Giá trị phải là giá trị ngày hoặc thời gian hợp lệ (ISO 8601).',
    'source_equals_destination'       => 'Tài khoản nguồn bằng với tài khoản đích.',
    'unique_account_number_for_user'  => 'Có vẻ như số tài khoản này đã được sử dụng.',
    'unique_iban_for_user'            => 'Có vẻ như IBAN này đã được sử dụng.',
    'reconciled_forbidden_field'      => 'Giao dịch này đã được đối chiếu, bạn không thể thay đổi ":field"',
    'deleted_user'                    => 'Do những hạn chế về bảo mật, bạn không thể đăng ký bằng địa chỉ email này.',
    'rule_trigger_value'              => 'Giá trị này không hợp lệ cho trình kích hoạt được chọn.',
    'rule_action_expression'          => 'Invalid expression. :error',
    'rule_action_value'               => 'Giá trị này không hợp lệ cho hành động đã chọn.',
    'file_already_attached'           => 'Đã tải lên tập tin ":name" đã được gắn vào đối tượng này.',
    'file_attached'                   => 'Tải lên thành công tập tin ":name".',
    'file_zero'                       => 'The file is zero bytes in size.',
    'must_exist'                      => 'Tải lên thành công tập tin....',
    'all_accounts_equal'              => 'ID trong trường: thuộc tính không tồn tại trong cơ sở dữ liệu....',
    'group_title_mandatory'           => 'Tiêu đề nhóm là bắt buộc khi có nhiều hơn một giao dịch.',
    'transaction_types_equal'         => 'Tất cả các phần tách phải cùng loại.',
    'invalid_transaction_type'        => 'Loại giao dịch không hợp lệ.',
    'invalid_selection'               => 'Lựa chọn của bạn không hợp lệ.',
    'belongs_user'                    => 'Giá trị này liên kết đến thực thể dường như không tồn tại.',
    'belongs_user_or_user_group'      => 'Giá trị này liên kết đến thực thể dường như không tồn tại trong phần quản trị tài chính hiện thời.',
    'no_access_group'                 => 'The user has no access to this administration.',
    'no_accepted_roles_defined'       => 'No access roles have been defined for this endpoint, access denied.',
    'at_least_one_transaction'        => 'Cần ít nhất một giao dịch.',
    'recurring_transaction_id'        => 'Cần ít nhất một giao dịch.',
    'need_id_to_match'                => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'              => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'               => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'         => 'Cần ít nhất một lần lặp lại.',
    'require_repeat_until'            => 'Yêu cầu một số lần lặp lại hoặc ngày kết thúc (repeat_until). Không phải cả hai.',
    'require_currency_info'           => 'Nội dung của trường này không hợp lệ nếu không có thông tin về tiền tệ.',
    'not_transfer_account'            => 'Tài khoản này không phải là tài khoản có thể được sử dụng để chuyển khoản.',
    'require_currency_amount'         => 'Nội dung của trường này không hợp lệ nếu không có thông tin về số lượng nước ngoài.',
    'require_foreign_currency'        => 'This field requires a number',
    'require_foreign_dest'            => 'This field value must match the currency of the destination account.',
    'require_foreign_src'             => 'This field value must match the currency of the source account.',
    'equal_description'               => 'Mô tả giao dịch không nên bằng mô tả toàn cầu.',
    'file_invalid_mime'               => 'File ":name" là loại ":mime" không được chấp nhận khi tải lên mới.',
    'file_too_large'                  => 'File ":name" quá lớn.',
    'belongs_to_user'                 => 'Giá trị của :attribute không xác định.',
    'accepted'                        => 'Thuộc tính: phải được chấp nhận.',
    'bic'                             => 'Đây không phải là BIC hợp lệ.',
    'at_least_one_trigger'            => 'Quy tắc phải có ít nhất một kích hoạt.',
    'at_least_one_active_trigger'     => 'Quy tắc phải có ít nhất một trình kích hoạt đang hoạt động.',
    'at_least_one_action'             => 'Quy tắc phải có ít nhất một hành động.',
    'at_least_one_active_action'      => 'Quy tắc phải có ít nhất một hành động đang hoạt động.',
    'base64'                          => 'Đây không phải là dữ liệu được mã hóa base64 hợp lệ.',
    'model_id_invalid'                => 'ID đã cho có vẻ không hợp lệ cho mô hình này.',
    'less'                            => ':thuộc tính phải nhỏ hơn 10,000,000',
    'active_url'                      => 'Thuộc tính: không phải là một URL hợp lệ.',
    'after'                           => 'Thuộc tính: phải là một ngày sau: ngày.',
    'date_after'                      => '"Ngày bắt đầu" phải trước "Ngày kết thúc".',
    'alpha'                           => 'Thuộc tính: chỉ có thể chứa các chữ cái.',
    'alpha_dash'                      => 'Thuộc tính: chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num'                       => 'Thuộc tính: chỉ có thể chứa các chữ cái và số.',
    'array'                           => 'Thuộc tính: phải là một mảng.',
    'unique_for_user'                 => 'Đã có một mục với thuộc tính này:.',
    'before'                          => 'Thuộc tính: phải là một ngày trước: ngày.',
    'unique_object_for_user'          => 'Tên này đã được sử dụng.',
    'unique_account_for_user'         => 'Tên tài khoản này đã được sử dụng.',

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


    'between.numeric'                 => ':attribute phải nằm trong khoảng :min và :max.',
    'between.file'                    => ':attribute phải nằm trong khoảng :min và :max kilobyte.',
    'between.string'                  => ':attribute phải nằm giữa :min và :max ký tự.',
    'between.array'                   => ':attribute phải nằm giữa :min và :max phần tử.',
    'boolean'                         => 'Trường :attribute phải đúng hoặc sai.',
    'confirmed'                       => 'Xác nhận :attribute không khớp.',
    'date'                            => ':attribute không phải là ngày hợp lệ.',
    'date_format'                     => ':attribute không khớp với định dạng :format.',
    'different'                       => ':attribute và :other phải khác.',
    'digits'                          => ':attribute phải là :digits chữ số.',
    'digits_between'                  => ':attribute phải nằm giữa :min và :max chữ số.',
    'email'                           => ':attribute phải là một địa chỉ email hợp lệ.',
    'filled'                          => 'Trường :attribute là bắt buộc.',
    'exists'                          => ':attribute được chọn không hợp lệ.',
    'image'                           => ':attribute phải là một hình ảnh.',
    'in'                              => ':attribute được chọn không hợp lệ.',
    'integer'                         => ':attribute phải là một số nguyên.',
    'ip'                              => ':attribute phải là một địa chỉ IP hợp lệ.',
    'json'                            => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max.numeric'                     => ':attribute có thể không lớn hơn :max.',
    'max.file'                        => ':attribute có thể không lớn hơn :max kilobytes.',
    'max.string'                      => ':attribute có thể không lớn hơn :max ký tự.',
    'max.array'                       => ':attribute có thể không có nhiều hơn :max các mục.',
    'mimes'                           => ':attribute phải là một tệp loại: :values.',
    'min.numeric'                     => ':attribute ít nhất phải là :min.',
    'lte.numeric'                     => ':attribute phải nhỏ hơn hoặc bằng :value.',
    'min.file'                        => ':attribute ít nhất phải là :min kilobytes.',
    'min.string'                      => ':attribute ít nhất phải là :min ký tự.',
    'min.array'                       => ':attribute phải có ít nhất :min mục.',
    'not_in'                          => ':attribute được chọn không hợp lệ.',
    'numeric'                         => ':attribute phải là một số.',
    'scientific_notation'             => 'The :attribute cannot use the scientific notation.',
    'numeric_native'                  => 'Số tiền gốc phải là một số.',
    'numeric_destination'             => 'Số lượng đích phải là một số.',
    'numeric_source'                  => 'Số lượng nguồn phải là một số.',
    'regex'                           => 'Định dạng :attribute không hợp lệ.',
    'required'                        => 'Trường :attribute là bắt buộc.',
    'required_if'                     => 'Trường :attribute được yêu cầu khi :other là :value.',
    'required_unless'                 => 'Trường :attribute được yêu cầu trừ khi :other nằm trong :values.',
    'required_with'                   => 'Trường :attribute được yêu cầu khi có :values.',
    'required_with_all'               => 'Trường :attribute được yêu cầu khi có :values.',
    'required_without'                => 'Trường :attribute được yêu cầu khi :values không có.',
    'required_without_all'            => 'Trường :attribute được yêu cầu khi không có :values.',
    'same'                            => ':attribute và :other phải khớp.',
    'size.numeric'                    => ':attribute phải là :size.',
    'amount_min_over_max'             => 'Số tiền tối thiểu không thể lớn hơn số tiền tối đa.',
    'size.file'                       => ':attribute phải là :size kilobyte.',
    'size.string'                     => ':attribute phải là :size ký tự.',
    'size.array'                      => ':attribute phải chứa :size mục.',
    'unique'                          => ':attribute đã được sử dụng.',
    'string'                          => ':attribute phải là một chuỗi.',
    'url'                             => 'Định dạng :attribute không hợp lệ.',
    'timezone'                        => ':attribute phải là vùng hợp lệ.',
    '2fa_code'                        => ':attribute hợp lệ là không hợp lệ.',
    'dimensions'                      => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'                        => 'Trường :attribute có giá trị trùng lặp.',
    'file'                            => ':attribute phải là một tệp.',
    'in_array'                        => 'Trường :attribute không tồn tại trong :other.',
    'present'                         => 'Trường :attribute phải được đặt.',
    'amount_zero'                     => 'Tổng số tiền không thể bằng không.',
    'current_target_amount'           => 'Số tiền hiện tại phải nhỏ hơn số tiền mục tiêu.',
    'unique_piggy_bank_for_user'      => 'Tên của con heo đất phải là duy nhất.',
    'unique_object_group'             => 'Tên nhóm phải không bị trùng',
    'starts_with'                     => 'Giá trị phải bắt đầu bằng :values.',
    'unique_webhook'                  => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'         => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'               => 'Cả hai tài khoản phải thuộc cùng một loại tài khoản',
    'same_account_currency'           => 'Cả hai tài khoản phải có cùng cài đặt đơn vị tiền tệ',

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
    'valid_recurrence_rep_type'       => 'Loại lặp lại không hợp lệ cho các giao dịch định kỳ.',
    'valid_recurrence_rep_moment'     => 'Khoảnh khắc lặp lại không hợp lệ cho loại lặp lại này.',
    'invalid_account_info'            => 'Thông tin tài khoản không hợp lệ.',
    'attributes'                      => [
        'email'                   => 'địa chỉ email',
        'description'             => 'mô tả',
        'amount'                  => 'số tiền',
        'transactions.*.amount'   => 'số tiền giao dịch',
        'name'                    => 'tên',
        'piggy_bank_id'           => 'ID heo đất',
        'targetamount'            => 'lượng mục tiêu',
        'opening_balance_date'    => 'ngày mở số dư',
        'opening_balance'         => 'số dư đầu kỳ',
        'match'                   => 'kết quả',
        'amount_min'              => 'số tiền tối thiểu',
        'amount_max'              => 'số tiền tối đa',
        'title'                   => 'tiêu đề',
        'tag'                     => 'nhãn',
        'transaction_description' => 'mô tả giao dịch',
        'rule-action-value.1'     => 'quy tắc hành động giá trị #1',
        'rule-action-value.2'     => 'quy tắc hành động giá trị #2',
        'rule-action-value.3'     => 'quy tắc hành động giá trị #3',
        'rule-action-value.4'     => 'quy tắc hành động giá trị #4',
        'rule-action-value.5'     => 'quy tắc hành động giá trị #5',
        'rule-action.1'           => 'quy tắc hành động #1',
        'rule-action.2'           => 'quy tắc hành động #2',
        'rule-action.3'           => 'quy tắc hành động #3',
        'rule-action.4'           => 'quy tắc hành động #4',
        'rule-action.5'           => 'quy tắc hành động #5',
        'rule-trigger-value.1'    => 'quy tắc kích hoạt giá trị #1',
        'rule-trigger-value.2'    => 'quy tắc kích hoạt giá trị #2',
        'rule-trigger-value.3'    => 'quy tắc kích hoạt giá trị #3',
        'rule-trigger-value.4'    => 'quy tắc kích hoạt giá trị #4',
        'rule-trigger-value.5'    => 'quy tắc kích hoạt giá trị #5',
        'rule-trigger.1'          => 'quy tắc kích hoạt #1',
        'rule-trigger.2'          => 'quy tắc kích hoạt #2',
        'rule-trigger.3'          => 'quy tắc kích hoạt #3',
        'rule-trigger.4'          => 'quy tắc kích hoạt #4',
        'rule-trigger.5'          => 'quy tắc kích hoạt #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'Cần lấy ID tài khoản nguồn hợp lệ và / hoặc tên tài khoản nguồn hợp lệ để tiếp tục.',
    'withdrawal_source_bad_data'      => '[a] Không thể tìm thấy tài khoản nguồn hợp lệ khi tìm kiếm ID ":id" hoặc tên ":name".',
    'withdrawal_dest_need_data'       => '[a] Cần lấy ID tài khoản đích hợp lệ và / hoặc tên tài khoản đích hợp lệ để tiếp tục.',
    'withdrawal_dest_bad_data'        => 'Không thể tìm thấy tài khoản đích hợp lệ khi tìm kiếm ID ":id" hoặc tên ":name".',

    'withdrawal_dest_iban_exists'     => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'         => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data'  => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data'         => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data'        => 'Cần lấy ID tài khoản nguồn hợp lệ và / hoặc tên tài khoản nguồn hợp lệ để tiếp tục.',
    'deposit_source_bad_data'         => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'          => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'           => 'Không thể tìm thấy tài khoản đích hợp lệ khi tìm kiếm ID ":id" hoặc tên ":name".',
    'deposit_dest_wrong_type'         => 'Tài khoản đích đã gửi không đúng loại.',

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


    'transfer_source_need_data'       => 'Cần lấy ID tài khoản nguồn hợp lệ và / hoặc tên tài khoản nguồn hợp lệ để tiếp tục.',
    'transfer_source_bad_data'        => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'         => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'          => 'Không thể tìm thấy tài khoản đích hợp lệ khi tìm kiếm ID ":id" hoặc tên ":name".',
    'need_id_in_edit'                 => 'Mỗi phân chia phải có giao dịch_journal_id (ID hợp lệ hoặc 0).',

    'ob_source_need_data'             => 'Cần lấy ID tài khoản nguồn hợp lệ và / hoặc tên tài khoản nguồn hợp lệ để tiếp tục.',
    'lc_source_need_data'             => 'Cần lấy ID tài khoản hợp lệ để tiếp tục.',
    'ob_dest_need_data'               => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'                => 'Không thể tìm thấy tài khoản đích hợp lệ khi tìm kiếm ID ":id" hoặc tên ":name".',
    'reconciliation_either_account'   => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'          => 'Bạn không thể sử dụng tài khoản này làm tài khoản nguồn.',
    'generic_invalid_destination'     => 'Bạn không thể sử dụng tài khoản này làm tài khoản đích.',

    'generic_no_source'               => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination'          => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric'                     => ':attribute phải lớn hơn hoặc bằng :value.',
    'gt.numeric'                      => ':attribute phải lớn hơn :value.',
    'gte.file'                        => ':attribute phải lớn hơn hoặc bằng :value kilobyte.',
    'gte.string'                      => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
    'gte.array'                       => ':attribute phải có :value mục trở lên.',
    'missing_with'                    => 'The :attribute cannot be combined with another field.',

    'amount_required_for_auto_budget' => 'Tổng số tiền được yêu cầu.',
    'auto_budget_amount_positive'     => 'Số lượng phải lớn hơn 0.',

    'auto_budget_period_mandatory'    => 'Ngân sách tự động là một trường bắt buộc.',

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
