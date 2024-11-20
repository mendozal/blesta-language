<?php
/**
 * Admin Plugin
 *
 * @package blesta
 * @subpackage blesta.language.ko_kr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminPlugin.integrations.features'] = '다음 - 추가 기능';
$lang['AdminPlugin.features.confirm'] = '다음 - 확인';
$lang['AdminPlugin.features.text_remove'] = '제거';
$lang['AdminPlugin.features.text_options'] = '옵션';
$lang['AdminPlugin.features.cron_task_row_add'] = 'Cron 작업 추가';
$lang['AdminPlugin.features.service_tab_row_add'] = '서비스 관리 탭 추가';
$lang['AdminPlugin.features.placeholder_time'] = '예: 14:25 또는 60';
$lang['AdminPlugin.features.placeholder_cron_label'] = '예: Cron 작업 예제';
$lang['AdminPlugin.features.placeholder_name'] = '예: 크론_작업_예시';
$lang['AdminPlugin.features.placeholder_tab_label'] = '예: 비밀번호 변경';
$lang['AdminPlugin.features.placeholder_method_name'] = '예: 탭 비밀번호 변경';
$lang['AdminPlugin.features.tooltip_time'] = '이 작업이 실행되어야 하는 매일 24시간 시간(예: "14:25") 또는 이 크론 작업이 실행되어야 하는 간격(분)';
$lang['AdminPlugin.features.tooltip_type'] = '크론 작업에 사용할 타이밍 유형(시간 또는 간격)';
$lang['AdminPlugin.features.tooltip_description'] = '크론 작업 목록 페이지에 표시되는 설명';
$lang['AdminPlugin.features.tooltip_cron_label'] = '크론 작업의 표시 이름';
$lang['AdminPlugin.features.tooltip_name'] = '코드 베이스에 있는 크론 작업의 이름(예: cron_task_example)을 대소문자로 표시합니다.';
$lang['AdminPlugin.features.tooltip_level'] = '탭을 표시할 인터페이스 수준(스태프 또는 클라이언트)';
$lang['AdminPlugin.features.tooltip_tab_label'] = '서비스 탭의 표시 이름';
$lang['AdminPlugin.features.tooltip_method_name'] = '코드 베이스에서 이 탭에 대해 생성할 메서드의 이름(camelCaseMethodName 형식)입니다.';
$lang['AdminPlugin.features.time'] = '시작 시간/간격';
$lang['AdminPlugin.features.type'] = '유형';
$lang['AdminPlugin.features.description'] = '설명';
$lang['AdminPlugin.features.name'] = '이름';
$lang['AdminPlugin.features.level'] = '레벨';
$lang['AdminPlugin.features.label'] = '라벨';
$lang['AdminPlugin.features.method_name'] = '메서드 이름';
$lang['AdminPlugin.features.heading_optional_functions'] = '선택적 기능';
$lang['AdminPlugin.features.heading_cron_tasks'] = 'Cron 작업';
$lang['AdminPlugin.features.heading_service_tabs'] = '서비스 관리 탭';
$lang['AdminPlugin.features.heading_features'] = '추가 기능';
$lang['AdminPlugin.integrations.placeholder_link'] = '예: 플러그인/지원관리자/클라이언트_티켓/';
$lang['AdminPlugin.integrations.placeholder_label'] = '예: 티켓';
$lang['AdminPlugin.integrations.placeholder_card_callback'] = '예: getClientTickets';
$lang['AdminPlugin.integrations.placeholder_event_callback'] = '예: myClientAddHandlerMethod';
$lang['AdminPlugin.integrations.placeholder_event'] = '예: Clients.Add';
$lang['AdminPlugin.integrations.placeholder_name'] = '예: 확장자 생성기';
$lang['AdminPlugin.integrations.placeholder_action'] = '예: index';
$lang['AdminPlugin.integrations.placeholder_controller'] = '예: admin_main';
$lang['AdminPlugin.integrations.tooltip_link'] = '클라이언트 카드를 클릭할 때 연결할 URI입니다.';
$lang['AdminPlugin.integrations.tooltip_card_callback'] = '카드 값을 가져오기 위해 메인 플러그인 클래스에서 생성할 메서드의 이름입니다.';
$lang['AdminPlugin.integrations.tooltip_level'] = '클라이언트 카드를 표시할 인터페이스 수준';
$lang['AdminPlugin.integrations.tooltip_label'] = '값 아래에 레이블로 표시되는 문자열입니다.';
$lang['AdminPlugin.integrations.tooltip_event_callback'] = '메인 플러그인 클래스에서 생성할 이벤트 핸들러 메서드의 이름입니다.';
$lang['AdminPlugin.integrations.tooltip_event'] = '핸들러를 추가할 이벤트(예: Clients.add). 블레스타가 등록한 핵심 이벤트 목록은 https://docs.blesta.com/display/dev/Event + 핸들러를 참조하세요.';
$lang['AdminPlugin.integrations.tooltip_name'] = '이 작업의 표시 이름(작업 위치에 따라 탐색 텍스트, 위젯 헤더 또는 링크 텍스트)';
$lang['AdminPlugin.integrations.tooltip_action'] = '작업의 콘텐츠를 가져올 URI의 작업(예: 인덱스)';
$lang['AdminPlugin.integrations.tooltip_controller'] = '작업의 콘텐츠를 가져올 URI의 컨트롤러(예: admin_main)';
$lang['AdminPlugin.integrations.tooltip_location'] = '작업을 표시할 인터페이스 내 위치';
$lang['AdminPlugin.integrations.text_remove'] = '제거';
$lang['AdminPlugin.integrations.text_options'] = '옵션';
$lang['AdminPlugin.integrations.text_cards_more_info'] = '고객 카드는 고객 프로필(고객 또는 관리자 영역)에 표시되는 작은 상자로 주로 다양한 통계(예: 서비스, 티켓 또는 주문 수)를 표시하는 데 사용됩니다. 값, 레이블, 배경 및 링크로 구성됩니다.  레이블은 콜백 함수에서 가져온 값 아래에 표시됩니다.';
$lang['AdminPlugin.integrations.text_events_more_info'] = '이것이 Blesta의 후크 시스템입니다.  이벤트는 코어 또는 플러그인에 의해 등록되고, 플러그인은 이러한 이벤트를 수신하고 이벤트에 대한 핸들러 메서드를 정의합니다.  모든 플러그인이 이벤트를 등록할 수 있으므로 이벤트 수는 얼마든지 많을 수 있지만, 블레스타에서 정의한 핵심 이벤트 목록은 https://docs.blesta.com/display/dev/Event+Handlers에서 확인할 수 있습니다.';
$lang['AdminPlugin.integrations.text_actions_more_info'] = '"작업"은 코어 인터페이스를 통해 액세스할 수 있는 플러그인 페이지를 나타냅니다. 여기에는 관리자 및 클라이언트 영역의 탐색 링크, 관리자 영역의 위젯, 클라이언트 프로필 사이드바의 링크가 포함됩니다. 여기에 입력한 컨트롤러와 작업은 간단한 컨트롤러 파일을 생성하는 데 사용됩니다. 또한 각 작업에 대한 샘플 보기 파일이 생성됩니다.';
$lang['AdminPlugin.integrations.link'] = '링크';
$lang['AdminPlugin.integrations.card_callback'] = '콜백 방법';
$lang['AdminPlugin.integrations.level'] = '레벨';
$lang['AdminPlugin.integrations.label'] = '라벨';
$lang['AdminPlugin.integrations.event_callback'] = '콜백 방법';
$lang['AdminPlugin.integrations.event'] = '이벤트';
$lang['AdminPlugin.integrations.name'] = '이름';
$lang['AdminPlugin.integrations.action'] = '액션';
$lang['AdminPlugin.integrations.controller'] = '컨트롤러';
$lang['AdminPlugin.integrations.location'] = '위치';
$lang['AdminPlugin.integrations.heading_more_info'] = '자세한 정보';
$lang['AdminPlugin.integrations.heading_cards'] = '클라이언트 카드';
$lang['AdminPlugin.integrations.heading_events'] = '이벤트 핸들러';
$lang['AdminPlugin.integrations.heading_actions'] = '작업';
$lang['AdminPlugin.integrations.card_row_add'] = '클라이언트 카드 추가';
$lang['AdminPlugin.integrations.event_row_add'] = '이벤트 핸들러 추가';
$lang['AdminPlugin.integrations.action_row_add'] = '작업 추가';
$lang['AdminPlugin.integrations.heading_integrations'] = '핵심 통합';
$lang['AdminPlugin.database.integrations'] = '다음 - 핵심 통합';
$lang['AdminPlugin.database.text_remove'] = '제거';
$lang['AdminPlugin.database.text_options'] = '옵션';
$lang['AdminPlugin.database.text_more_info'] = '이 페이지는 이 플러그인에서 생성하고 관리하는 데이터베이스 테이블에 대한 스키마를 만드는 데 사용됩니다. 설치 및 제거 시 이러한 테이블을 추가 및 제거하기 위한 코드가 생성됩니다. 또한 이러한 테이블에 대한 모델 파일과 몇 가지 기본 기능이 생성됩니다.';
$lang['AdminPlugin.database.placeholder_length'] = '예: 64 또는 \'a\',\'b\',\'c\'';
$lang['AdminPlugin.database.placeholder_column_name'] = '예: column_name';
$lang['AdminPlugin.database.tooltip_primary'] = '이 열을 열의 기본 키로 표시합니다. 복합 키는 현재 지원되지 않습니다m. 복합 키를 사용하거나 기본 키를 사용하지 않으려면 생성된 ***_plugin.php 파일의 install() 메서드를 참조하세요.';
$lang['AdminPlugin.database.tooltip_nullable'] = '이 열에 null 값을 허용할지 여부입니다.';
$lang['AdminPlugin.database.tooltip_default'] = '이 열에 삽입할 기본값입니다. 기본값이 비어 있는 Null 가능 필드의 기본값은 NULL입니다.';
$lang['AdminPlugin.database.tooltip_length'] = '필드의 최대 문자 수를 설정합니다. 열 유형이 "열거형"인 경우 이 형식을 사용하여 값을 입력하세요: \'a\',\'b\',\'c\'...';
$lang['AdminPlugin.database.tooltip_type'] = '데이터베이스의 열 유형입니다.';
$lang['AdminPlugin.database.tooltip_column_name'] = '데이터베이스의 열 이름(예: column_name)입니다.';
$lang['AdminPlugin.database.primary'] = '기본 키';
$lang['AdminPlugin.database.nullable'] = 'Null 가능';
$lang['AdminPlugin.database.default'] = '기본값';
$lang['AdminPlugin.database.length'] = '길이/값';
$lang['AdminPlugin.database.type'] = '유형';
$lang['AdminPlugin.database.column_name'] = '열 이름';
$lang['AdminPlugin.database.placeholder_table_name'] = '예: 확장_테이블_이름';
$lang['AdminPlugin.database.tooltip_table_name'] = '데이터베이스의 테이블 이름(예: 확장_테이블_이름)';
$lang['AdminPlugin.database.table_name'] = '테이블 이름';
$lang['AdminPlugin.database.column_row_add'] = '열 추가';
$lang['AdminPlugin.database.table_row_add'] = '데이터베이스 테이블 추가';
$lang['AdminPlugin.database.heading_more_info'] = '자세한 정보';
$lang['AdminPlugin.database.heading_database'] = '데이터베이스 테이블';
$lang['AdminPlugin.basic.confirm'] = '다음 - 확인';
$lang['AdminPlugin.basic.database'] = '다음 - 데이터베이스 정보';
$lang['AdminPlugin.basic.placeholder_author_url'] = '예: https://blesta.com/';
$lang['AdminPlugin.basic.placeholder_author_name'] = '예: Blesta';
$lang['AdminPlugin.basic.tooltip_logo'] = '플러그인 목록에 표시되는 로고입니다. 이미지 크기는 조정되지 않으므로 이상적인 크기는 150x70입니다.';
$lang['AdminPlugin.basic.tooltip_description'] = '플러그인 목록에 표시되는 설명';
$lang['AdminPlugin.basic.text_remove'] = '제거';
$lang['AdminPlugin.basic.author_row_add'] = '작성자 추가';
$lang['AdminPlugin.basic.text_options'] = '옵션';
$lang['AdminPlugin.basic.author_url'] = '작성자 URL';
$lang['AdminPlugin.basic.author_name'] = '작성자 이름';
$lang['AdminPlugin.basic.logo'] = '로고';
$lang['AdminPlugin.basic.description'] = '설명';
$lang['AdminPlugin.basic.heading_authors'] = '작성자';
$lang['AdminPlugin.basic.heading_basic'] = '기본 정보';
$lang['AdminPlugin.index.boxtitle_extension_generator'] = '확장자 생성기 - 플러그인';
$lang['AdminPlugin.index.page_title'] = '확장 생성기 - %1$s';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissionGroups'] = '이 플러그인에 대해 구성할 모든 권한 그룹을 반환합니다(설치(), 업그레이드() 및 제거() 후에 호출되며, 기존의 모든 권한 그룹을 덮어씁니다).';
$lang['AdminPlugin.getoptionalfunctions.tooltip_getPermissions'] = '이 플러그인에 대해 구성할 모든 권한을 반환합니다(설치(), 업그레이드(), 제거() 후에 호출되며, 기존 권한을 모두 덮어씁니다).';
$lang['AdminPlugin.getoptionalfunctions.tooltip_upgrade'] = '현재 버전(현재 설치된 버전)에서 지정된 파일 세트 버전으로 데이터 마이그레이션을 수행합니다. 실패 시 입력 오류를 설정하여 모듈을 업그레이드하지 못하도록 합니다.';
$lang['AdminPlugin.getcardlevels.staff'] = '직원';
$lang['AdminPlugin.getcardlevels.client'] = '클라이언트';
$lang['AdminPlugin.getactionlocations.widget_staff_billing'] = '위젯 - 청구 개요(직원)';
$lang['AdminPlugin.getactionlocations.widget_client_home'] = '위젯 - 클라이언트 프로필(클라이언트)';
$lang['AdminPlugin.getactionlocations.widget_staff_client'] = '위젯 - 고객 프로필(직원)';
$lang['AdminPlugin.getactionlocations.widget_staff_home'] = '위젯 - 대시보드(직원)';
$lang['AdminPlugin.getactionlocations.action_staff_client'] = '고객 프로필 사이드바(직원)';
$lang['AdminPlugin.getactionlocations.nav_secondary_staff'] = '하위 메뉴 탐색(직원)';
$lang['AdminPlugin.getactionlocations.nav_primary_staff'] = '기본 내비게이션(직원)';
$lang['AdminPlugin.getactionlocations.nav_primary_client'] = '기본 탐색(클라이언트)';

