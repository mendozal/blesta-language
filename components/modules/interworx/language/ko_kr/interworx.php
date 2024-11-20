<?php
/**
 * Interworx
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Interworx.!error.api.duplicate_email'] = '중복 이메일, 해당 이메일이 이미 존재합니다. 다른 이메일을 선택해 주세요.';
$lang['Interworx.!error.api.no_accounts'] = '계정을 찾을 수 없습니다.';
$lang['Interworx.!error.api.no_reseller_id'] = '이 API 호출에는 리셀러_id';
$lang['Interworx.!error.api.create_reseller.missing_fields'] = 'createReseller에는 사용자 이름, 이메일 및 비밀번호가 필요합니다.';
$lang['Interworx.!error.api.create_reseller.no_array'] = 'createReseller에는 전달된 배열이 필요합니다.';
$lang['Interworx.!error.api.no_reseller_access'] = '리셀러는 이 API 호출을 사용할 수 없습니다. 관리자 권한이 있어야 합니다.';
$lang['Interworx.!error.api.no_domain'] = 'API에 도메인 필드가 누락되었습니다. 도메인 필드는 필수입니다.';
$lang['Interworx.!error.api.duplicate_username'] = '중복된 사용자 아이디, 해당 사용자 아이디가 이미 존재합니다. 다른 사용자 아이디를 선택해 주세요.';
$lang['Interworx.!error.api.duplicate_domain'] = '중복 도메인, 해당 도메인이 이미 존재합니다. 다른 도메인을 선택하세요.';
$lang['Interworx.!error.api.no_packages'] = '패키지 정보 검색 중, 이 사용자에 대한 패키지를 찾을 수 없음';
$lang['Interworx.!error.api.no_ips'] = 'IP 정보 검색 중, 이 Interworx 사용자에 대해 사용 가능한 IP가 없음';
$lang['Interworx.!error.api.create_account.username_characters'] = '사용자 아이디에는 공백이나 특수 문자를 사용할 수 없습니다.';
$lang['Interworx.!error.api.create_account.username_length'] = '사용자 아이디는 1~8자 사이여야 합니다.';
$lang['Interworx.!error.api.create_account.missing_fields'] = 'createAccount에는 사용자 이름, 이메일, 비밀번호, 도메인이 필요합니다.';
$lang['Interworx.!error.api.create_account.no_array'] = 'createAccount에는 전달된 배열이 필요합니다.';
$lang['Interworx.!error.api.package_types'] = '패키지 유형이 일치하지 않습니다. 리셀러 패키지와 비리셀러 패키지 간에는 변경할 수 없습니다.';
$lang['Interworx.!error.api.reported_error'] = 'API 호출에서 오류가 보고되었습니다:';
$lang['Interworx.!error.api.soap_error'] = 'SOAP 오류. SOAP가 설치되어 있고 올바르게 구성되었는지 확인하세요. 또한 호스트 및 포트 설정이 올바른지 확인하세요.';
$lang['Interworx.!error.api.no_action'] = 'API에 전달할 액션이 필요합니다.';
$lang['Interworx.!error.api.no_controller'] = 'API를 사용하려면 api_controller를 전달해야 합니다.';
$lang['Interworx.!error.api.internal'] = '내부 오류가 발생했거나 서버가 요청에 응답하지 않았습니다.';
$lang['Interworx.!error.interworx_email.format'] = '유효한 이메일 주소를 입력하세요.';
$lang['Interworx.!error.interworx_confirm_password.matches'] = '비밀번호가 일치하지 않습니다.';
$lang['Interworx.!error.interworx_password.length'] = '비밀번호는 6자 이상이어야 합니다.';
$lang['Interworx.!error.interworx_password.format'] = '비밀번호를 입력하세요.';
$lang['Interworx.!error.interworx_username.length'] = '사용자 아이디의 길이는 1~8자 사이여야 합니다.';
$lang['Interworx.!error.interworx_username.format'] = '사용자 아이디는 영숫자만 포함할 수 있습니다.';
$lang['Interworx.!error.interworx_domain.format'] = '다음과 같은 형식의 유효한 도메인 이름을 입력하세요.';
$lang['Interworx.!error.meta[package].empty'] = 'Interworx 패키지가 필요합니다.';
$lang['Interworx.!error.meta[type].valid'] = '계정 유형은 표준 또는 리셀러여야 합니다.';
$lang['Interworx.!error.name_servers_count'] = '네임 서버를 2개 이상 정의해야 합니다.';
$lang['Interworx.!error.name_servers_valid'] = '입력한 네임 서버 중 하나 이상이 유효하지 않습니다.';
$lang['Interworx.!error.account_limit_valid'] = '계정 제한은 비워 두거나(무제한 계정의 경우) 정수 값으로 설정해야 합니다.';
$lang['Interworx.!error.remote_key_valid_connection'] = '서버에 연결할 수 없습니다. 호스트 이름, 포트 번호 및 원격 키가 올바른지 확인하세요.';
$lang['Interworx.!error.remote_key_valid'] = '원격 키가 유효하지 않은 것 같습니다.';
$lang['Interworx.!error.user_name_valid'] = '사용자 이름이 유효하지 않은 것 같습니다.';
$lang['Interworx.!error.host_name_valid'] = '호스트 이름이 유효하지 않은 것 같습니다.';
$lang['Interworx.!error.server_name_valid'] = '서버 레이블을 입력해야 합니다.';
$lang['Interworx.service_info.option_login'] = '로그인';
$lang['Interworx.service_info.options'] = '옵션';
$lang['Interworx.service_info.server'] = '서버';
$lang['Interworx.service_info.password'] = '비밀번호';
$lang['Interworx.service_info.email'] = '이메일';
$lang['Interworx.tab_client_actions.field_password_submit'] = '비밀번호 업데이트';
$lang['Interworx.tab_client_actions.field_interworx_confirm_password'] = '비밀번호 확인';
$lang['Interworx.tab_client_actions.field_interworx_password'] = '비밀번호';
$lang['Interworx.tab_client_actions.change_password'] = '비밀번호 변경';
$lang['Interworx.tab_client_actions'] = '작업';
$lang['Interworx.tab_unavailable.message'] = '이 정보는 아직 제공되지 않습니다.';
$lang['Interworx.tab_stats.package_info.opt_unlimited'] = '무제한';
$lang['Interworx.tab_stats.package_info.opt_siteworx_accounts'] = '판매할 수 있는 계정 수';
$lang['Interworx.tab_stats.package_info.opt_oversell_storage'] = '스토리지 초과 판매';
$lang['Interworx.tab_stats.package_info.opt_oversell_bandwidth'] = '대역폭 초과 판매';
$lang['Interworx.tab_stats.package_info.opt_save_xfer_logs'] = 'XFER 로그 저장';
$lang['Interworx.tab_stats.package_info.opt_burstable'] = '버스터블';
$lang['Interworx.tab_stats.package_info.opt_ssl'] = 'SSL';
$lang['Interworx.tab_stats.package_info.opt_resolve_xferlog_dns'] = 'XFERLOG DNS 확인';
$lang['Interworx.tab_stats.package_info.opt_dns_records'] = 'DNS 액세스';
$lang['Interworx.tab_stats.package_info.opt_crontab'] = 'Cron 액세스';
$lang['Interworx.tab_stats.package_info.opt_cgi_access'] = 'CGI 액세스';
$lang['Interworx.tab_stats.package_info.opt_backup'] = '백업 사용';
$lang['Interworx.tab_stats.package_info.opt_subdomains'] = '하위 도메인';
$lang['Interworx.tab_stats.package_info.opt_slave_domains'] = '슬레이브 도메인';
$lang['Interworx.tab_stats.package_info.opt_pointer_domains'] = '도메인 리디렉션';
$lang['Interworx.tab_stats.package_info.opt_mysql_db_users'] = 'MySQL 사용자';
$lang['Interworx.tab_stats.package_info.opt_mysql_dbs'] = 'MySQL 데이터베이스';
$lang['Interworx.tab_stats.package_info.opt_ftp_accounts'] = 'FTP 계정';
$lang['Interworx.tab_stats.package_info.opt_email_groups'] = '이메일 그룹';
$lang['Interworx.tab_stats.package_info.opt_email_boxes'] = '이메일 계정';
$lang['Interworx.tab_stats.package_info.opt_email_autoresponders'] = '이메일 자동 응답';
$lang['Interworx.tab_stats.package_info.opt_email_aliases'] = '이메일 별칭';
$lang['Interworx.tab_stats.package_info.opt_bandwidth'] = '대역폭';
$lang['Interworx.tab_stats.package_info.opt_storage'] = '디스크 공간';
$lang['Interworx.tab_stats.package_info.name'] = '이름';
$lang['Interworx.tab_stats.package_info.id'] = 'ID';
$lang['Interworx.tab_stats.package_title'] = '패키지 정보';
$lang['Interworx.tab_stats.disk_unlimited'] = '무제한';
$lang['Interworx.tab_stats.disk_heading.limit'] = '제한';
$lang['Interworx.tab_stats.disk_heading.used'] = '사용됨';
$lang['Interworx.tab_stats.disk_title'] = '디스크';
$lang['Interworx.tab_stats.bandwidth_unlimited'] = '무제한';
$lang['Interworx.tab_stats.bandwidth_heading.limit'] = '제한';
$lang['Interworx.tab_stats.bandwidth_heading.used'] = '사용됨';
$lang['Interworx.tab_stats.bandwidth_title'] = '대역폭';
$lang['Interworx.tab_stats.info.ip'] = 'IP 주소';
$lang['Interworx.tab_stats.info.domain'] = '도메인';
$lang['Interworx.tab_stats.info.server'] = '서버';
$lang['Interworx.tab_stats.info_heading.value'] = '가치';
$lang['Interworx.tab_stats.info_heading.field'] = '필드';
$lang['Interworx.tab_stats.info_title'] = '정보';
$lang['Interworx.service_field.tooltip.password'] = '비밀번호를 비워두면 자동으로 생성됩니다.';
$lang['Interworx.service_field.tooltip.username'] = '사용자 아이디를 비워두면 자동으로 생성됩니다.';
$lang['Interworx.service_field.tooltip.email'] = '클라이언트의 이메일 주소를 자동으로 사용하려면 이메일을 비워 두어도 됩니다.';
$lang['Interworx.service_field.tooltip.domain'] = '도메인은 로컬에서만 변경됩니다. Interworx에서는 변경되지 않습니다.';
$lang['Interworx.service_field.tooltip.interworx_reseller_id'] = '리셀러 ID는 로컬에서만 변경됩니다. Interworx에서는 변경되지 않습니다.';
$lang['Interworx.service_field.confirm_password'] = '비밀번호 확인';
$lang['Interworx.service_field.password'] = '비밀번호';
$lang['Interworx.service_field.email'] = '이메일';
$lang['Interworx.service_field.username'] = '사용자 이름';
$lang['Interworx.service_field.domain'] = '도메인';
$lang['Interworx.service_field.reseller_id'] = '리셀러 ID';
$lang['Interworx.package_fields.package'] = 'Interworx 패키지';
$lang['Interworx.package_fields.type_reseller'] = '리셀러';
$lang['Interworx.package_fields.type_standard'] = '표준';
$lang['Interworx.package_fields.type'] = '계정 유형';
$lang['Interworx.row_meta.use_ssl'] = 'API에 연결할 때 SSL 사용(권장)';
$lang['Interworx.row_meta.debug.print'] = '인쇄';
$lang['Interworx.row_meta.debug.log'] = '로그';
$lang['Interworx.row_meta.debug.none'] = '없음';
$lang['Interworx.row_meta.debug'] = '디버깅';
$lang['Interworx.row_meta.account_limit'] = '계정 한도';
$lang['Interworx.row_meta.key'] = '원격 키';
$lang['Interworx.row_meta.default_port'] = '2443';
$lang['Interworx.row_meta.port'] = '포트 번호';
$lang['Interworx.row_meta.host_name'] = '호스트 이름';
$lang['Interworx.row_meta.server_name'] = '서버 레이블';
$lang['Interworx.edit_row.add_btn'] = '서버 편집';
$lang['Interworx.edit_row.remove_name_server'] = '제거';
$lang['Interworx.edit_row.name_server'] = '이름 서버 %1$s';
$lang['Interworx.edit_row.name_server_host_col'] = '호스트 이름';
$lang['Interworx.edit_row.name_server_col'] = '이름 서버';
$lang['Interworx.edit_row.name_server_btn'] = '추가 이름 서버 추가';
$lang['Interworx.edit_row.notes_title'] = '참고';
$lang['Interworx.edit_row.name_servers_title'] = '이름 서버';
$lang['Interworx.edit_row.basic_title'] = '기본 설정';
$lang['Interworx.edit_row.box_title'] = 'Interworx 서버 편집';
$lang['Interworx.add_row.add_btn'] = '서버 추가';
$lang['Interworx.add_row.remove_name_server'] = '제거';
$lang['Interworx.add_row.name_server'] = '이름 서버 %1$s';
$lang['Interworx.add_row.name_server_host_col'] = '호스트 이름';
$lang['Interworx.add_row.name_server_col'] = '이름 서버';
$lang['Interworx.add_row.name_server_btn'] = '추가 이름 서버 추가';
$lang['Interworx.add_row.notes_title'] = '참고';
$lang['Interworx.add_row.name_servers_title'] = '이름 서버';
$lang['Interworx.add_row.basic_title'] = '기본 설정';
$lang['Interworx.add_row.box_title'] = 'Interworx 서버 추가';
$lang['Interworx.order_options.roundrobin'] = '서버 간에 균등하게 배포';
$lang['Interworx.order_options.first'] = '최초의 비풀 서버';
$lang['Interworx.manage.module_groups_no_results'] = '서버 그룹이 없습니다.';
$lang['Interworx.manage.module_rows_no_results'] = '서버가 없습니다.';
$lang['Interworx.manage.module_groups.confirm_delete'] = '이 서버 그룹을 삭제하시겠습니까?';
$lang['Interworx.manage.module_rows.confirm_delete'] = '이 서버를 삭제하시겠습니까?';
$lang['Interworx.manage.module_groups.delete'] = '삭제';
$lang['Interworx.manage.module_rows.delete'] = '삭제';
$lang['Interworx.manage.module_groups.edit'] = '편집';
$lang['Interworx.manage.module_rows.edit'] = '편집';
$lang['Interworx.manage.module_groups_heading.options'] = '옵션';
$lang['Interworx.manage.module_groups_heading.servers'] = '서버 수';
$lang['Interworx.manage.module_groups_heading.name'] = '그룹 이름';
$lang['Interworx.manage.module_rows_heading.options'] = '옵션';
$lang['Interworx.manage.module_rows_heading.accounts'] = '계정';
$lang['Interworx.manage.module_rows_heading.hostname'] = '호스트 이름';
$lang['Interworx.manage.module_rows_heading.name'] = '서버 레이블';
$lang['Interworx.manage.module_groups_title'] = '서버 그룹';
$lang['Interworx.manage.module_rows_title'] = '서버';
$lang['Interworx.add_module_group'] = '서버 그룹 추가';
$lang['Interworx.add_module_row'] = '서버 추가';
$lang['Interworx.tab_stats'] = '통계';
$lang['Interworx.module_group'] = '서버 그룹';
$lang['Interworx.module_row_plural'] = '서버';
$lang['Interworx.module_row'] = '서버';
$lang['Interworx.description'] = 'InterWorx 웹 제어판은 Linux 기반 전용 서버 및 VPS 웹 호스팅 제어판입니다. 시스템 관리자와 웹사이트 관리자 모두를 위한 다양한 기능을 제공합니다.';
$lang['Interworx.!error.soap_required'] = '이 모듈에는 SOAP 확장이 필요합니다.';
$lang['Interworx.!error.libxml_required'] = '이 모듈에는 libxml 확장자가 필요합니다.';
$lang['Interworx.name'] = 'Interworx';
$lang['Interworx.manage.module_rows.count'] = '%1$s / %2$s';
$lang['Interworx.tab_stats.bandwidth_value'] = '%1$s GB';
$lang['Interworx.tab_stats.disk_value'] = '%1$s MB';

