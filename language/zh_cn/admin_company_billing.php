<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s 小时';
$lang['AdminCompanyBilling.invoices.text_hour'] = '%1$s 小时';
$lang['AdminCompanyBilling.invoices.text_none'] = '无';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = '第二次续保间隔';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = '第二次续保尝试间隔阈值';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = '第一次续保间隔';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = '第一次续保尝试间隔阈值';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = '在延迟之前尝试服务续订的次数 间隔尝试续订间隔 2 小时';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = '在延迟之前尝试续订服务的次数 间隔尝试 续订尝试间隔 1 小时';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = '输入付款条件或您希望在发票上显示的任何其他信息。';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = '形式发票格式';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = '如需其他字体，请将自定义 TCPDF 字体解压缩到安装目录下的 /vendors/tecnickcom/tcpdf/fonts/ 目录中。';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = '发票草稿格式';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = '发票文件类型。发票模板可能支持各种文件类型。';
$lang['AdminCompanyBilling.customization.field.inv_format'] = '发票格式';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = '用于渲染发票的发票模板。';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = '外观和感觉';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = '发票纸张大小。';
$lang['AdminCompanyBilling.customization.heading_cache'] = '缓存';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = '上传将出现在发票上的背景。';
$lang['AdminCompanyBilling.customization.heading_quotations'] = '报价选项';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = '上传要出现在发票上的徽标。';
$lang['AdminCompanyBilling.customization.heading_general'] = '基本选项';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = '压缩缓存的 PDF 文件以节省磁盘空间。启用此选项可能会降低性能。';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = '发票定制';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = '在磁盘上保存每张发票的缓存副本。';
$lang['AdminCompanyBilling.customization.page_title'] = '设置 > 公司 > 账单/付款 > 发票定制';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = '字符长度小于发票填充大小的发票号码将向左填充给定的字符。';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(已使用 %1$s）';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = '发票填充大小设置发票号码的最小字符长度。';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = '可用套餐';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = '以后的发票号码将按此值递增。';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = '指定包件';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = '发票号码将从该起始值开始（并递增）。';
$lang['AdminCompanyBilling.editcoupon.text_all'] = '全部';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = '发票号码将从该起始值开始（并递增）。';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = '编辑优惠券';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = '可用标记包括{num}--发票号码（必填）； {year} --四位数字的年； {month} --两位数字的月； {day} --两位数字的月日。';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = '包装组过滤器';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = '可用标记包括{num}--发票号码（必填）； {year} --四位数字的年； {month} --两位数字的月； {day} --两位数字的月日。';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = '套餐';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = '可用标记包括{num}--发票号码（必填）； {year} --四位数字的年； {month} --两位数字的月； {day} --两位数字的月日。';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = '移除';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = '默认创建的发票类型。形式发票在付款和关闭后会更改为标准发票。';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = '不适用';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = '账户自动扣款前发送待自动扣款通知邮件的天数。';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = '条款';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = '在发票到期之前或之后发送第三封逾期通知电子邮件的天数。';
$lang['AdminCompanyBilling.editcoupon.text_period'] = '期间';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = '在发票到期之前或之后发送第二封逾期通知电子邮件的天数。';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = '已启用';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = '在发票到期之前或之后发送第一封逾期通知电子邮件的天数。';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = '此优惠券仅适用于在所选条款/期限内订购的服务。如果都未启用，则在评估优惠券限制时将忽略服务期限。';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = '该选项设置是否可以向客户发送服务取消通知。';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = '条款';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = '该选项设置是否可以向客户发送任何可用的付款通知。';
$lang['AdminCompanyBilling.editcoupon.text_value'] = '价值';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = '可用套餐';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = '更新设置';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = '如果费用类型是百分比，则选中此项可根据发票总额计算费用。如果不勾选此项，则只根据未付金额计算费用。';
$lang['AdminCompanyBilling.editcoupon.text_type'] = '类型';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = '如果勾选，服务更改（即升级/降级）将排队等待，只有在付款后才会提供。否则，将立即提供。';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = '货币';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = '选中可在客户端界面显示税号字段。';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = '添加其他货币';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = '如果与已取消服务相关的发票已逾期，则只有在逾期天数未超过所选天数时才会作废。';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = '折扣选项';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = '选中后，服务取消也会使与取消服务相关的任何未结发票作废。如果发票中包含与服务无关的细列项目，服务细列项目将被删除，发票不会作废。';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = '续订服务有限制';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = '勾选是否允许 Blesta 自动提供待处理且发票已支付的服务。';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = '限制不适用于续订服务';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = '选中允许 Blesta 自动将贷项应用于未结发票（最旧发票优先）。';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = '数量';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = '选中允许为降级的服务或服务可配置选项按比例计算积分。';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = '结束日期';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = '勾选允许客户更改定期服务套餐。';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = '开始日期';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = '勾选允许客户更改定期服务的期限。';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = '局限性';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = '勾选允许客户为其支持的任何服务订购附加组件。';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = '生成代码';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = '选中此选项后，新创建的附加服务如果与父节点的月度或年度条款一致，则将按比例计算到父节点的续订日期。';
$lang['AdminCompanyBilling.editcoupon.field_code'] = '优惠券代码';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = '检查是否允许客户提前续订自己的服务。';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = '仅供内部使用';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = '勾选允许客户取消自己的服务。';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = '应用于可配置选项';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = '选中以包括每个可配置选项发票项目的服务日期范围。';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = '服务添加或更新时应用';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = '选中可将文字版 "软件包说明 "附加到服务细列项目。';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = '仅在添加服务时适用';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = '为客户同一天续订的服务创建一张发票。取消选中将为每项服务创建一张单独的发票。';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = '基本';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = '选中以继续开具暂停服务的发票。';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = '编辑优惠券';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = '勾选允许客户选择他们喜欢的发票交付方式（如纸质或电子邮件）。';
$lang['AdminCompanyBilling.editcoupon.page_title'] = '设置 > 公司 > 账单/付款 > 编辑优惠券';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = '在客户到期付款时启用自动扣款功能。';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = '指定包件';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = '到期日前自动扣款天数';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = '彩色印刷';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = '对到期后配置天数的未结发票收取滞纳金。';
$lang['AdminCompanyBilling.addcoupon.text_all'] = '全部';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = '当发票在选定天数内未支付时，排队的服务变更将自动取消。';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = '创建优惠券';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = '在禁用服务自动续订之前，尝试和失败处理服务续订的次数。';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = '包装组过滤器';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = '在付款账户被禁止自动扣款之前，处理该付款账户的尝试次数和失败次数。';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = '套餐';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = '服务发票逾期后暂停服务的等待天数。';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = '移除';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = '自动从客户默认付款账户扣款的发票到期前天数（如果客户已配置为自动扣款）。';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = '不适用';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = '报价的默认初始存款百分比。';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = '条款';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = '报价到期后将其设置为无效的天数。';
$lang['AdminCompanyBilling.addcoupon.text_period'] = '期间';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = '发出报价后将其设置为过期的天数。';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = '已启用';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = '服务或定期发票续订前生成发票的天数。';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = '此优惠券仅适用于在所选条款/期限内订购的服务。如果都未启用，则在评估优惠券限制时将忽略服务期限。';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = '数量表示优惠券过期前最多可使用的次数。';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = '任期限制';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = '术语应以 CSV 列表形式输入（例如，在 "日 "行输入 "1,3,4"，表示 1 天、3 天和 4 天）。';
$lang['AdminCompanyBilling.addcoupon.text_value'] = '价值';
$lang['AdminCompanyBilling.!error.extension_zlib'] = '发票压缩需要 Zlib 扩展。';
$lang['AdminCompanyBilling.addcoupon.text_type'] = '类型';
$lang['AdminCompanyBilling.!error.minimum.format'] = '费用 最低金额必须是一个数字。';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = '货币';
$lang['AdminCompanyBilling.!error.amount.format'] = '收费金额必须是一个数字。';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = '添加其他货币';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = '报价增量值必须是一个数字。';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = '折扣选项';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = '报价起始值必须是一个数字。';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = '续订服务有限制';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = '发票增量值必须是一个数字。';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = '限制不适用于续订服务';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = '发票起始值必须是数字。';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = '数量';
$lang['AdminCompanyBilling.!success.customization_updated'] = '发票自定义设置已成功更新！';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = '结束日期';
$lang['AdminCompanyBilling.!success.latefees_updated'] = '逾期费用设置已成功更新！';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = '开始日期';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = '发票交付设置已成功更新！';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = '局限性';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = '接受的付款类型设置已成功更新！';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = '生成代码';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = '优惠券已成功删除！';
$lang['AdminCompanyBilling.addcoupon.field_code'] = '优惠券代码';
$lang['AdminCompanyBilling.!success.coupon_updated'] = '优惠券已成功更新！';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = '仅供内部使用';
$lang['AdminCompanyBilling.!success.coupon_created'] = '优惠券已成功创建！';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = '应用于可配置选项';
$lang['AdminCompanyBilling.!success.notices_updated'] = '通知已成功更新！';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = '服务添加或更新时应用';
$lang['AdminCompanyBilling.!success.invoices_updated'] = '发票和收费设置已成功更新！';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = '仅在添加服务时适用';
$lang['AdminCompanyBilling.addcoupon.field_status'] = '已启用';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = '基本';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = '新优惠券';
$lang['AdminCompanyBilling.addcoupon.page_title'] = '设置 > 公司 > 账单/付款 > 新优惠券';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = '您确定要删除这张优惠券吗？';
$lang['AdminCompanyBilling.coupons.option_delete'] = '删除';
$lang['AdminCompanyBilling.coupons.option_edit'] = '编辑';
$lang['AdminCompanyBilling.coupons.text_multiple'] = '多个';
$lang['AdminCompanyBilling.coupons.text_currency'] = '货币';
$lang['AdminCompanyBilling.coupons.text_options'] = '选项';
$lang['AdminCompanyBilling.coupons.text_end_date'] = '结束日期';
$lang['AdminCompanyBilling.coupons.text_start_date'] = '开始日期';
$lang['AdminCompanyBilling.latefees.field_submit'] = '更新设置';
$lang['AdminCompanyBilling.coupons.text_max'] = '最大';
$lang['AdminCompanyBilling.latefees.field.fixed'] = '固定式';
$lang['AdminCompanyBilling.coupons.text_used'] = '二手';
$lang['AdminCompanyBilling.latefees.field.percent'] = '百分比';
$lang['AdminCompanyBilling.coupons.text_discount'] = '折扣';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = '适用于发票总金额';
$lang['AdminCompanyBilling.coupons.text_code'] = '代码';
$lang['AdminCompanyBilling.latefees.text_minimum'] = '最低';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = '优惠券';
$lang['AdminCompanyBilling.latefees.text_amount'] = '金额';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = '添加优惠券';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = '收费类型';
$lang['AdminCompanyBilling.coupons.no_results'] = '没有优惠券。';
$lang['AdminCompanyBilling.latefees.text_currency'] = '货币';
$lang['AdminCompanyBilling.coupons.page_title'] = '设置 > 公司 > 账单/付款 > 优惠券';
$lang['AdminCompanyBilling.latefees.text_enabled'] = '已启用';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = '更新设置';
$lang['AdminCompanyBilling.latefees.heading_basic'] = '基本选项';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = '自动借记待处理通知';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = '滞纳金';
$lang['AdminCompanyBilling.notices.field.third_notice'] = '第三次通知';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = '请注意，如果选中该选项，发送到 PostalMethods 的所有发票都将是彩色的，而不是黑白的。';
$lang['AdminCompanyBilling.notices.field.second_notice'] = '第二次通知';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = '如果选中此选项，发送到 PostalMethods 的发票将在页面正反面使用打印。';
$lang['AdminCompanyBilling.notices.field.first_notice'] = '第一份通知';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = '测试时请务必使用 PostalMethods 提供的测试环境密钥。';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = '允许发送付款通知';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = '邮政方法将在每次邮寄时随附一个回邮信封。';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = '允许发送服务取消通知';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = '双面打印';
$lang['AdminCompanyBilling.notices.text_edit_template'] = '编辑电子邮件模板';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'API 密钥';
$lang['AdminCompanyBilling.notices.text_disabled'] = '残疾';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = '密码';
$lang['AdminCompanyBilling.notices.text_duedate'] = '到期日';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = '用户名';
$lang['AdminCompanyBilling.notices.text_days'] = '%1$s 天';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = '发票交付方式';
$lang['AdminCompanyBilling.notices.text_day'] = '%1$s 日';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'PostalMethods 为您打印、装箱并向客户邮寄发票。<a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">注册</a>PostalMethods 账户，立即开始邮寄发票。';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = '发票到期日';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = '邮寄方式';
$lang['AdminCompanyBilling.notices.text_after'] = '之后';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'InterFax 允许您通过互联网传真发票。<a href="http://www.interfax.net/" target="_blank">注册</a> InterFax 账户，立即开始传真发票。';
$lang['AdminCompanyBilling.notices.text_before'] = '之前';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.notices.text_notices'] = '付款通知可用作逾期通知或付款提醒。';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = '基本选项';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = '通知';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = '发票交付';
$lang['AdminCompanyBilling.notices.page_title'] = '设置 > 公司 > 账单/付款 > 通知';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = '设置 > 公司 > 账单/付款 > 发票交付';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = '报价 默认存款百分比 (%)';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = '形式发票起始值';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s 天';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = '如果公司已禁用客户设置的接受付款类型覆盖，则选中此复选框将删除客户设置的接受付款类型覆盖';
$lang['AdminCompanyBilling.invoices.text_day'] = '%1$s 日';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = '更新设置';
$lang['AdminCompanyBilling.invoices.text_sameday'] = '当天';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = '移除客户当前设置的可接受付款类型';
$lang['AdminCompanyBilling.invoices.text_never'] = '从不';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = '移除客户端重载';
$lang['AdminCompanyBilling.invoices.text_any'] = '- 任何 -';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = '自动交换中心';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = '更新设置';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = '信用卡';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = '报价到期后的死期';
$lang['AdminCompanyBilling.customization.field.inv_start'] = '发票起始值';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = '队列服务更改，直至付费';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = '只有选中的支付类型可通过网关处理，或可添加为支付账户，即使正在使用的网关支持该类型。取消选中已接受的类型将导致无法处理该类型的付款。';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = '在客户端界面显示税号字段';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = '接受的付款类型';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = '到期后几天未结发票作废';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = '设置 > 公司 > 账单/付款 > 接受的付款类型';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = '取消服务时未结发票作废';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = '更新设置';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = '自动提供付费待办服务';
$lang['AdminCompanyBilling.customization.remove'] = '移除';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = '自动应用松动积分';
$lang['AdminCompanyBilling.customization.field.inv_font'] = '字体家族';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = '允许按比例为服务降级发放积分';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = '发票文件类型';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = '允许客户更改服务套餐';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = '到期日 - 标准';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = '允许客户更改服务条款';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = '到期日 - 备考';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = '允许客户为现有服务创建附加组件';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = '应提交日期 - 草稿';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = '允许附加服务与其父服务同步';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = '付款/贷记';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = '允许客户手动续订服务';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = '付费水印';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = '允许客户取消服务';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = '公司名称/地址';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = '显示可配置选项的服务日期范围';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = '标志';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = '在发票上包含包装说明';
$lang['AdminCompanyBilling.customization.field.inv_display'] = '在发票上显示';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = '共同开具服务发票';
$lang['AdminCompanyBilling.customization.field.inv_template'] = '发票模板';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = '暂停服务发票';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = '纸张大小';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = '允许客户设置发票方式';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = '条款';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = '启用自动借记';
$lang['AdminCompanyBilling.customization.field.inv_background'] = '背景介绍';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = '对到期后的未结发票收取滞纳金';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = '标志';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = '到期后几天取消服务变更';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = '压缩 PDF 发票';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = '服务续订尝试';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = '发票缓存方法';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = '自动借记尝试';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = '报价增量值';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = '到期后几天暂停服务';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = '报价起始值';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = '报价有效期';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = '报价格式';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = '续订前发票天数';
$lang['AdminCompanyBilling.customization.field.inv_type'] = '发票类型';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = '发票和收费选项';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = '发票填充字符';
$lang['AdminCompanyBilling.invoices.page_title'] = '设置 > 公司 > 账单/付款 > 发票和收费选项';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = '发票填充尺寸';
$lang['AdminCompanyBilling.!notice.group_settings'] = '注意：这些设置只适用于从公司继承其设置的客户组。';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = '发票增量值';
$lang['AdminCompanyBilling.invoices.field.second_attempt_spacing'] = '第二次尝试间距';
$lang['AdminCompanyBilling.invoices.field.second_attempt_threshold'] = '第二次尝试间距阈值';
$lang['AdminCompanyBilling.invoices.field.first_attempt_spacing'] = '第一次尝试间距';
$lang['AdminCompanyBilling.invoices.field.first_attempt_threshold'] = '第一次尝试间距阈值';
$lang['AdminCompanyBilling.invoices.field.attempts'] = '尝试';
$lang['AdminCompanyBilling.invoices.field.type'] = '类型';
$lang['AdminCompanyBilling.invoices.field.service_actions'] = '服务行动';
$lang['AdminCompanyBilling.invoices.field.service_provisioning_attempts'] = '服务提供尝试';
$lang['AdminCompanyBilling.!tooltip.second_attempt_threshold'] = '在按第二次尝试间隔设置指定的数量延迟下一次尝试之前尝试的服务操作次数';
$lang['AdminCompanyBilling.!tooltip.first_attempt_threshold'] = '在按首次尝试间隔设置指定的数量延迟下一次尝试之前尝试的服务操作次数';
$lang['AdminCompanyBilling.!tooltip.service_attempts'] = '在禁用自动完成服务操作之前，尝试处理服务操作的次数和失败次数。';

