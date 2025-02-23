<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2025, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.notices.text_days'] = '%1$s 일';
$lang['AdminCompanyBilling.notices.text_day'] = '%1$s Day';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s 일';
$lang['AdminCompanyBilling.invoices.text_day'] = '%1$s Day';
$lang['AdminCompanyBilling.invoices.text_none'] = '없음';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = '두 번째 갱신 시도 간격';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = '두 번째 갱신 시도 간격 임계값';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = '첫 번째 갱신 시도 간격';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = '첫 번째 갱신 시도 간격 임계값';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = '지연 전에 시도할 서비스 갱신 횟수 시도 간격 갱신 시도 간격 2시간 간격';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = '지연 전에 시도할 서비스 갱신 횟수 갱신 시도 간격 1시간 간격 갱신 시도 간격';
$lang['AdminCompanyBilling.latefees.field_submit'] = '설정 업데이트';
$lang['AdminCompanyBilling.latefees.field.fixed'] = '수정됨';
$lang['AdminCompanyBilling.latefees.field.percent'] = '퍼센트';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = '총 인보이스 금액에 적용';
$lang['AdminCompanyBilling.latefees.text_minimum'] = '최소';
$lang['AdminCompanyBilling.latefees.text_amount'] = '금액';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = '수수료 유형';
$lang['AdminCompanyBilling.latefees.text_currency'] = '통화';
$lang['AdminCompanyBilling.latefees.text_enabled'] = '활성화됨';
$lang['AdminCompanyBilling.latefees.heading_basic'] = '기본 옵션';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = '연체료';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = '이 옵션을 선택하면 PostalMethods로 전송되는 모든 인보이스는 흑백이 아닌 컬러로 표시됩니다.';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = '이 옵션을 선택하면 PostalMethods로 전송되는 인보이스는 페이지 앞면과 뒷면에 인쇄를 사용합니다.';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = '테스트할 때 PostalMethods에서 제공하는 테스트 환경 비밀 키를 사용해야 합니다.';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = '우편 방법은 각 우편물과 함께 답장 봉투를 발송합니다.';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = '설정 업데이트';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = '컬러 인쇄';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = '양면 인쇄';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'API 비밀 키';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = '비밀번호';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = '사용자 이름';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = '송장 전달 방법';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'PostalMethods에서 인보이스를 인쇄하여 고객에게 우편으로 발송해 드립니다. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">등록</a>하여 PostalMethods 계정에 가입하고 지금 바로 인보이스 우편 발송을 시작하세요.';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = '우편 방법';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'InterFax를 사용하면 인터넷을 통해 청구서를 팩스로 전송할 수 있습니다. <a href="http://www.interfax.net/" target="_blank">인터팩스 계정에 가입</a>하고 지금 바로 송장 팩스를 시작하세요.';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = '기본 옵션';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = '송장 배달';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = '설정 > 회사 > 청구/결제 > 송장 전달';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = '이 확인란을 선택하면 회사에서 비활성화된 경우 클라이언트에서 설정된 모든 허용되는 결제 유형 재정의가 제거됩니다.';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = '설정 업데이트';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = '현재 클라이언트에 설정된 허용 결제 유형 제거';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = '클라이언트 재정의 제거';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = '자동화된 청산소';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = '신용 카드';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = '선택한 결제 유형만 게이트웨이를 통해 처리할 수 있으며, 활성 게이트웨이가 해당 유형을 지원하더라도 결제 계정으로 추가할 수 있습니다. 이미 수락된 유형을 선택 취소하면 해당 유형의 결제는 처리되지 않습니다.';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = '허용되는 결제 유형';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = '설정 > 회사 > 청구/결제 > 허용되는 결제 유형';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = '설정 업데이트';
$lang['AdminCompanyBilling.customization.remove'] = '제거';
$lang['AdminCompanyBilling.customization.field.inv_font'] = '글꼴 패밀리';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = '송장 파일 유형';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = '마감일 - 표준';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = '마감일 - 프로포마';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = '마감일 - 초안';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = '결제/크레딧';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = '유료 워터마크';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = '회사명/주소';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = '로고';
$lang['AdminCompanyBilling.customization.field.inv_display'] = '인보이스에 표시';
$lang['AdminCompanyBilling.customization.field.inv_template'] = '송장 템플릿';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = '용지 크기';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = '약관';
$lang['AdminCompanyBilling.customization.field.inv_background'] = '배경';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = '로고';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = 'PDF 송장 압축';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = '인보이스 캐시 방법';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = '견적 증분 값';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = '견적 시작 값';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = '견적서 형식';
$lang['AdminCompanyBilling.customization.field.inv_type'] = '송장 유형';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = '인보이스 패딩 문자';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = '송장 패딩 크기';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = '송장 증액 값';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = '견적 송장 시작 값';
$lang['AdminCompanyBilling.customization.field.inv_start'] = '송장 시작 값';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = '견적 송장 형식';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = '송장 초안 형식';
$lang['AdminCompanyBilling.customization.field.inv_format'] = '송장 형식';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = '룩앤필';
$lang['AdminCompanyBilling.customization.heading_cache'] = '캐시';
$lang['AdminCompanyBilling.customization.heading_quotations'] = '견적 옵션';
$lang['AdminCompanyBilling.customization.heading_general'] = '기본 옵션';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = '송장 사용자 지정';
$lang['AdminCompanyBilling.customization.page_title'] = '설정 > 회사 > 청구/결제 > 송장 사용자 지정';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(사용한 %1$s)';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = '사용 가능한 패키지';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = '할당된 패키지';
$lang['AdminCompanyBilling.editcoupon.text_all'] = '모두';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = '쿠폰 편집';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = '패키지 그룹 필터';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = '패키지';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = '제거';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = '약관';
$lang['AdminCompanyBilling.editcoupon.text_period'] = '기간';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = '활성화됨';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = '이 쿠폰은 선택한 기간/기간 중 하나에 대해 주문한 서비스에만 적용할 수 있습니다. 활성화된 서비스가 없는 경우 쿠폰 제한을 평가할 때 해당 서비스 기간은 무시됩니다.';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = '약관';
$lang['AdminCompanyBilling.editcoupon.text_value'] = '가치';
$lang['AdminCompanyBilling.editcoupon.text_type'] = '유형';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = '통화';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = '추가 통화 추가';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = '할인 옵션';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = '서비스 갱신에는 제한이 적용됩니다.';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = '서비스 갱신에는 제한이 적용되지 않습니다.';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = '수량';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = '종료 날짜';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = '시작 날짜';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = '제한 사항';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = '코드 생성';
$lang['AdminCompanyBilling.editcoupon.field_code'] = '쿠폰 코드';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = '내부 전용';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = '구성 가능한 옵션에 적용';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = '서비스 추가 또는 갱신 시 적용';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = '서비스 추가 시에만 적용';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = '기본';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = '쿠폰 편집';
$lang['AdminCompanyBilling.editcoupon.page_title'] = '설정 > 회사 > 청구/결제 > 쿠폰 편집';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = '사용 가능한 패키지';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = '할당된 패키지';
$lang['AdminCompanyBilling.addcoupon.text_all'] = '모두';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = '쿠폰 만들기';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = '패키지 그룹 필터';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = '패키지';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = '제거';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = '약관';
$lang['AdminCompanyBilling.addcoupon.text_period'] = '기간';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = '활성화됨';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = '이 쿠폰은 선택한 기간/기간 중 하나에 대해 주문한 서비스에만 적용할 수 있습니다. 활성화된 서비스가 없는 경우 쿠폰 제한을 평가할 때 해당 서비스 기간은 무시됩니다.';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = '기간 제한';
$lang['AdminCompanyBilling.addcoupon.text_value'] = '가치';
$lang['AdminCompanyBilling.addcoupon.text_type'] = '유형';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = '통화';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = '추가 통화 추가';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = '할인 옵션';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = '서비스 갱신에는 제한이 적용됩니다.';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = '서비스 갱신에는 제한이 적용되지 않습니다.';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = '수량';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = '종료 날짜';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = '시작 날짜';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = '제한 사항';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = '코드 생성';
$lang['AdminCompanyBilling.addcoupon.field_code'] = '쿠폰 코드';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = '내부 전용';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = '구성 가능한 옵션에 적용';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = '서비스 추가 또는 갱신 시 적용';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = '서비스 추가 시에만 적용';
$lang['AdminCompanyBilling.addcoupon.field_status'] = '활성화됨';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = '기본';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = '새 쿠폰';
$lang['AdminCompanyBilling.addcoupon.page_title'] = '설정 > 회사 > 청구/결제 > 새 쿠폰';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = '이 쿠폰을 삭제하시겠습니까?';
$lang['AdminCompanyBilling.coupons.option_delete'] = '삭제';
$lang['AdminCompanyBilling.coupons.option_edit'] = '편집';
$lang['AdminCompanyBilling.coupons.text_multiple'] = '여러';
$lang['AdminCompanyBilling.coupons.text_currency'] = '통화';
$lang['AdminCompanyBilling.coupons.text_options'] = '옵션';
$lang['AdminCompanyBilling.coupons.text_end_date'] = '종료 날짜';
$lang['AdminCompanyBilling.coupons.text_start_date'] = '시작 날짜';
$lang['AdminCompanyBilling.coupons.text_max'] = '최대';
$lang['AdminCompanyBilling.coupons.text_used'] = '사용됨';
$lang['AdminCompanyBilling.coupons.text_discount'] = '할인';
$lang['AdminCompanyBilling.coupons.text_code'] = '코드';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = '쿠폰';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = '쿠폰 추가';
$lang['AdminCompanyBilling.coupons.no_results'] = '쿠폰이 없습니다.';
$lang['AdminCompanyBilling.coupons.page_title'] = '설정 > 회사 > 청구/결제 > 쿠폰';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = '설정 업데이트';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = '자동 이체 보류 알림';
$lang['AdminCompanyBilling.notices.field.third_notice'] = '세 번째 공지 사항';
$lang['AdminCompanyBilling.notices.field.second_notice'] = '두 번째 알림';
$lang['AdminCompanyBilling.notices.field.first_notice'] = '첫 번째 알림';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = '결제 알림 전송 허용';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = '서비스 취소 알림 전송 허용';
$lang['AdminCompanyBilling.notices.text_edit_template'] = '이메일 템플릿 편집';
$lang['AdminCompanyBilling.notices.text_disabled'] = '장애인';
$lang['AdminCompanyBilling.notices.text_duedate'] = '마감일';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = '송장 마감일';
$lang['AdminCompanyBilling.notices.text_after'] = '이후';
$lang['AdminCompanyBilling.notices.text_before'] = '이전';
$lang['AdminCompanyBilling.notices.text_notices'] = '결제 알림은 연체 알림 또는 결제 리마인더로 사용할 수 있습니다.';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = '공지사항';
$lang['AdminCompanyBilling.notices.page_title'] = '설정 > 회사 > 청구/결제 > 공지사항';
$lang['AdminCompanyBilling.invoices.text_sameday'] = '당일 처리';
$lang['AdminCompanyBilling.invoices.text_never'] = '절대로';
$lang['AdminCompanyBilling.invoices.text_any'] = '- 모든 -';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = '설정 업데이트';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = '결제 시까지 대기열 서비스 변경';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = '클라이언트 인터페이스에 세금 ID 필드 표시';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = '기한이 지난 미결 송장 무효화';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = '서비스 취소 시 미결 송장 무효화하기';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = '보류 중인 유료 서비스 자동 프로비저닝';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = '루즈 크레딧 자동 적용';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = '서비스 다운그레이드에 대한 비례 배분 크레딧 발행 허용';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = '클라이언트의 서비스 패키지 변경 허용';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = '클라이언트의 서비스 약관 변경 허용';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = '클라이언트가 기존 서비스에 대한 애드온 생성 허용';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = '애드온 서비스가 상위 서비스와 동기화되도록 허용하기';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = '고객이 수동으로 서비스를 갱신하도록 허용하기';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = '고객의 서비스 취소 허용';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = '구성 가능한 옵션의 서비스 날짜 범위 표시';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = '인보이스에 패키지 설명 포함하기';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = '인보이스 서비스 통합';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = '인보이스 일시 중단 서비스';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = '클라이언트가 인보이스 방법 설정 허용';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = '자동 이체 사용';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = '기한이 지난 인보이스에 연체료 적용';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = '기한이 지난 후 서비스 변경 취소';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = '서비스 갱신 시도';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = '자동 인출 시도';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = '만기일 이후 서비스 일시 중단';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = '만기일 며칠 전 자동 출금';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = '견적 기본 예치금 비율(%)';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = '만료일 후 견적 마감일';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = '견적 만료일';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = '갱신 전 청구일';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = '인보이스 및 청구 옵션';
$lang['AdminCompanyBilling.invoices.page_title'] = '설정 > 회사 > 청구/결제 > 청구서 및 청구 옵션';
$lang['AdminCompanyBilling.!notice.group_settings'] = '참고: 이러한 설정은 회사로부터 설정을 상속받은 클라이언트 그룹에만 적용됩니다.';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = '결제 조건 또는 청구서에 표시할 기타 정보를 입력합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = '추가 글꼴을 사용하려면 사용자 정의 TCPDF 글꼴의 압축을 설치 내 /vendors/tecnickcom/tcpdf/fonts/ 디렉토리에 풀면 됩니다.';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = '인보이스 파일 유형입니다. 인보이스 템플릿은 다양한 파일 유형을 지원할 수 있습니다.';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = '인보이스를 렌더링하는 데 사용할 인보이스 템플릿입니다.';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = '인보이스 용지 크기입니다.';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = '인보이스에 표시할 배경을 업로드합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = '인보이스에 표시할 로고를 업로드합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = '캐시된 PDF 파일을 압축하여 디스크 공간을 절약합니다. 이 옵션을 활성화하면 성능이 저하될 수 있습니다.';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = '각 인보이스의 캐시된 사본을 디스크에 저장합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = '문자 길이가 인보이스 패딩 크기보다 작은 인보이스 번호는 지정된 문자만큼 왼쪽으로 패딩됩니다.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = '인보이스 패딩 크기는 인보이스 번호의 최소 문자 길이를 설정합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = '이후 인보이스 번호는 이 값만큼 증가합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = '인보이스 번호는 이 시작 값에서 시작하여 증가합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = '인보이스 번호는 이 시작 값에서 시작하여 증가합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = '사용 가능한 태그는 다음과 같습니다: {숫자} - 인보이스 번호(필수), {연도} - 4자리 연도, {월} - 2자리 월, {일} - 2자리 월의 요일입니다.';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = '사용 가능한 태그는 다음과 같습니다: {숫자} - 인보이스 번호(필수), {연도} - 4자리 연도, {월} - 2자리 월, {일} - 2자리 월의 요일입니다.';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = '사용 가능한 태그는 다음과 같습니다: {숫자} - 인보이스 번호(필수), {연도} - 4자리 연도, {월} - 2자리 월, {일} - 2자리 월의 요일입니다.';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = '기본적으로 생성되는 인보이스 유형입니다. 견적 인보이스는 결제 및 마감 후 표준 인보이스로 변경됩니다.';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = '보류 중인 자동 인출 알림 이메일을 보내기 위해 계정이 자동 인출되기까지 남은 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = '인보이스 세 번째 연체 알림 이메일 발송 기한 전후의 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = '두 번째 연체 알림 이메일 전송 기한 전후의 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = '첫 번째 연체료 통지 이메일 발송 기한 전후의 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = '이 옵션은 고객에게 서비스 취소 알림을 보낼 수 있는지 여부를 설정합니다.';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = '이 옵션은 고객에게 사용 가능한 결제 알림을 보낼 수 있는지 여부를 설정합니다.';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = '수수료 유형이 백분율인 경우 이 옵션을 선택하면 청구서 총액을 기준으로 수수료가 계산됩니다. 이 옵션을 선택하지 않으면 미결제 금액만을 기준으로 수수료가 계산됩니다.';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = '이 옵션을 선택하면 서비스 변경(예: 업그레이드/다운그레이드)이 대기열에 추가되고 결제가 완료된 후에만 프로비저닝됩니다. 그렇지 않으면 즉시 프로비저닝됩니다.';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = '클라이언트 인터페이스에 세금 ID 필드가 표시되도록 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = '취소된 서비스와 관련된 청구서가 기한이 지난 경우, 선택한 일수 이상 기한이 지나지 않은 경우에만 무효화됩니다.';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = '이 옵션을 선택하면 서비스 취소 시 취소된 서비스와 관련된 모든 미결 청구서도 무효 처리됩니다. 해당 청구서에 서비스와 관련이 없는 항목이 포함되어 있는 경우에는 해당 서비스 항목이 대신 제거되며 청구서는 무효화되지 않습니다.';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = '보류 중이면서 결제된 인보이스가 있는 서비스를 Blesta가 자동으로 프로비저닝하도록 허용하려면 확인란을 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = 'Blesta가 미결 인보이스에 자동으로 크레딧을 적용하도록 허용하려면 확인란을 선택합니다(가장 오래된 인보이스부터).';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = '다운그레이드되는 서비스 또는 서비스 구성 가능 옵션에 대해 비례 배분된 크레딧을 허용하려면 체크합니다.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = '고객이 정기결제 서비스 패키지를 변경할 수 있도록 허용하려면 확인란을 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = '고객이 정기결제 서비스 기간을 변경할 수 있도록 허용하려면 확인란을 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = '고객이 자신을 지원하는 서비스에 대한 애드온을 주문할 수 있도록 허용하려면 확인란을 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = '이 옵션을 선택하면 부모의 월별 또는 연간 기간과 일치하는 새로 생성된 애드온 서비스가 부모의 갱신 날짜에 비례 배분됩니다.';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = '고객이 자신의 서비스를 미리 갱신할 수 있는지 확인합니다.';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = '고객이 직접 서비스를 취소할 수 있도록 허용하려면 확인란을 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = '구성 가능한 각 옵션 인보이스 항목에 서비스 날짜 범위가 포함되어 있는지 확인합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = '서비스 항목에 패키지 설명의 텍스트 버전을 추가하려면 확인란을 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = '고객에 대해 같은 날 갱신되는 서비스에 대해 하나의 인보이스를 생성합니다. 이 옵션을 선택 취소하면 각 서비스에 대해 별도의 인보이스가 생성됩니다.';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = '일시 중단된 서비스에 대한 인보이스를 계속 청구하려면 확인합니다.';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = '고객이 선호하는 인보이스 전달 방법(예: 종이 또는 이메일)을 선택할 수 있도록 하려면 확인란을 선택합니다.';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = '결제 기한이 되면 클라이언트의 자동 인출을 활성화합니다.';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = '기한이 지난 후 설정된 일수만큼 연체료를 적용하여 인보이스를 열어보세요.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = '대기 중인 서비스 변경은 선택한 일수 동안 청구서가 미결제되면 자동으로 취소됩니다.';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = '서비스 자동 갱신을 비활성화하기 전에 서비스 갱신을 처리하려고 시도하고 실패한 횟수입니다.';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = '해당 결제 계좌가 자동 인출되지 않도록 설정되기 전에 결제 계좌를 처리하려고 시도하고 실패한 횟수입니다.';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = '서비스 청구서가 연체된 후 서비스를 일시 중지하기 전에 대기할 수 있는 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = '청구서가 고객의 기본 결제 계정에서 자동 인출되기까지의 일수(고객이 자동 인출을 설정한 경우)입니다.';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = '견적의 기본 초기 입금 비율입니다.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = '견적을 죽은 것으로 설정하기 위해 견적 만료 후 경과한 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = '견적을 발행한 후 만료된 것으로 설정할 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = '서비스 또는 정기 청구서가 갱신되어 청구서를 생성하기까지 남은 일수입니다.';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = '수량은 쿠폰이 만료되기 전에 사용할 수 있는 최대 횟수를 나타냅니다.';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = '기간은 CSV 목록으로 입력해야 합니다(예: \'일\' 행에 입력할 경우 "1,3,4"는 1일, 3일, 4일을 의미).';
$lang['AdminCompanyBilling.!error.extension_zlib'] = '인보이스 압축을 위해서는 Zlib 확장 프로그램이 필요합니다.';
$lang['AdminCompanyBilling.!error.minimum.format'] = '수수료 최소 금액은 숫자여야 합니다.';
$lang['AdminCompanyBilling.!error.amount.format'] = '수수료 금액은 숫자여야 합니다.';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = '견적 증분 값은 숫자여야 합니다.';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = '견적 시작 값은 숫자여야 합니다.';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = '인보이스 증액 값은 숫자여야 합니다.';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = '인보이스 시작 값은 숫자여야 합니다.';
$lang['AdminCompanyBilling.!success.customization_updated'] = '인보이스 사용자 지정 설정이 성공적으로 업데이트되었습니다!';
$lang['AdminCompanyBilling.!success.latefees_updated'] = '연체료 설정이 성공적으로 업데이트되었습니다!';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = '인보이스 배달 설정이 성공적으로 업데이트되었습니다!';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = '수락된 결제 유형 설정이 성공적으로 업데이트되었습니다!';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = '쿠폰이 성공적으로 삭제되었습니다!';
$lang['AdminCompanyBilling.!success.coupon_updated'] = '쿠폰이 성공적으로 업데이트되었습니다!';
$lang['AdminCompanyBilling.!success.coupon_created'] = '쿠폰이 성공적으로 생성되었습니다!';
$lang['AdminCompanyBilling.!success.notices_updated'] = '공지사항이 성공적으로 업데이트되었습니다!';
$lang['AdminCompanyBilling.!success.invoices_updated'] = '인보이스 및 청구 설정이 성공적으로 업데이트되었습니다!';
$lang['AdminCompanyBilling.invoices.text_hour'] = '%1$s 시간';
$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s 시간';
$lang['AdminCompanyBilling.invoices.field.second_attempt_spacing'] = '두 번째 시도 간격';
$lang['AdminCompanyBilling.invoices.field.second_attempt_threshold'] = '두 번째 시도 간격 임계값';
$lang['AdminCompanyBilling.invoices.field.first_attempt_spacing'] = '첫 번째 시도 간격';
$lang['AdminCompanyBilling.invoices.field.first_attempt_threshold'] = '첫 번째 시도 간격 임계값';
$lang['AdminCompanyBilling.invoices.field.attempts'] = '시도';
$lang['AdminCompanyBilling.invoices.field.type'] = '유형';
$lang['AdminCompanyBilling.invoices.field.service_actions'] = '서비스 작업';
$lang['AdminCompanyBilling.invoices.field.service_provisioning_attempts'] = '서비스 프로비저닝 시도';
$lang['AdminCompanyBilling.!tooltip.second_attempt_threshold'] = '다음 시도를 두 번째 시도 간격 설정에 지정된 양만큼 지연시키기 전에 시도할 서비스 작업의 수입니다.';
$lang['AdminCompanyBilling.!tooltip.first_attempt_threshold'] = '첫 번째 시도 간격 설정에 지정된 양만큼 다음 시도를 지연하기 전에 시도할 서비스 작업의 수입니다.';
$lang['AdminCompanyBilling.!tooltip.service_attempts'] = '서비스 작업의 자동 완료가 비활성화되기 전까지 해당 서비스 작업에 대한 처리 시도 및 실패 횟수입니다.';

