<?php
/**
 * Admin Company Billing
 *
 * @package blesta
 * @subpackage blesta.language.pt_br
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminCompanyBilling.invoices.text_hours'] = '%1$s Horas';
$lang['AdminCompanyBilling.invoices.text_hour'] = '%1$s Hora';
$lang['AdminCompanyBilling.invoices.text_none'] = 'Nenhum';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_spacing'] = 'Espaçamento da 2ª tentativa de renovação';
$lang['AdminCompanyBilling.invoices.field.second_renewal_attempt_threshold'] = 'Limite de espaçamento da 2ª tentativa de renovação';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_spacing'] = 'Espaçamento da 1ª tentativa de renovação';
$lang['AdminCompanyBilling.invoices.field.first_renewal_attempt_threshold'] = 'Limite de espaçamento da 1ª tentativa de renovação';
$lang['AdminCompanyBilling.!tooltip.second_renewal_attempt_threshold'] = 'O número de renovações de serviço a serem tentadas antes de atrasar Espaçamento de tentativas Espaçamento de tentativas de renovação com 2 horas de intervalo';
$lang['AdminCompanyBilling.!tooltip.first_renewal_attempt_threshold'] = 'O número de renovações de serviço a serem tentadas antes de atrasar Espaçamento de tentativas Espaçamento de tentativas de renovação com 1 hora de intervalo';
$lang['AdminCompanyBilling.latefees.field_submit'] = 'Atualizar configurações';
$lang['AdminCompanyBilling.latefees.field.fixed'] = 'Fixo';
$lang['AdminCompanyBilling.latefees.field.percent'] = 'Porcentagem';
$lang['AdminCompanyBilling.latefees.field.late_fee_total_amount'] = 'Aplicar ao valor total da fatura';
$lang['AdminCompanyBilling.latefees.text_minimum'] = 'Mínimo';
$lang['AdminCompanyBilling.latefees.text_amount'] = 'Valor';
$lang['AdminCompanyBilling.latefees.text_fee_type'] = 'Tipo de taxa';
$lang['AdminCompanyBilling.latefees.text_currency'] = 'Moeda';
$lang['AdminCompanyBilling.latefees.text_enabled'] = 'Ativado';
$lang['AdminCompanyBilling.latefees.heading_basic'] = 'Opções básicas';
$lang['AdminCompanyBilling.latefees.boxtitle_latefees'] = 'Tarifas atrasadas';
$lang['AdminCompanyBilling.deliverymethods.note_colored'] = 'Observe que, se essa opção estiver marcada, todas as faturas enviadas ao PostalMethods serão coloridas em vez de preto e branco.';
$lang['AdminCompanyBilling.deliverymethods.note_doublesided'] = 'Se essa opção estiver marcada, as faturas enviadas ao PostalMethods usarão impressão na frente e no verso da página.';
$lang['AdminCompanyBilling.deliverymethods.note_apikey'] = 'Certifique-se de usar a chave secreta do ambiente de teste fornecida pela PostalMethods ao testar.';
$lang['AdminCompanyBilling.deliverymethods.note_replyenvelope'] = 'A Postal Methods enviará um envelope de resposta com cada correspondência.';
$lang['AdminCompanyBilling.deliverymethods.field_submit'] = 'Atualizar configurações';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_colored'] = 'Impressão em cores';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_doublesided'] = 'Impressão frente e verso';
$lang['AdminCompanyBilling.deliverymethods.field_postalmethods_apikey'] = 'Chave secreta da API';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_password'] = 'Senha';
$lang['AdminCompanyBilling.deliverymethods.field_interfax_username'] = 'Nome de usuário';
$lang['AdminCompanyBilling.deliverymethods.field_delivery_methods'] = 'Métodos de entrega de faturas';
$lang['AdminCompanyBilling.deliverymethods.postalmethods_desc'] = 'O PostalMethods imprime, empacota e envia faturas aos seus clientes para você. <a href="https://cp.postalmethods.com/public/agentredirect.aspx?agentid=5bcfe2fb-b897-4a26-8c91-4089e92e2a7d" target="_blank">Inscreva-se</a> em uma conta do PostalMethods e comece a enviar faturas hoje mesmo.';
$lang['AdminCompanyBilling.deliverymethods.heading_postalmethods'] = 'PostalMethods';
$lang['AdminCompanyBilling.deliverymethods.interfax_desc'] = 'A InterFax permite que você envie faturas por fax pela Internet. <a href="http://www.interfax.net/" target="_blank">Inscreva-se</a> em uma conta da InterFax e comece a enviar faturas por fax hoje mesmo.';
$lang['AdminCompanyBilling.deliverymethods.heading_interfax'] = 'InterFax';
$lang['AdminCompanyBilling.deliverymethods.heading_basic'] = 'Opções básicas';
$lang['AdminCompanyBilling.deliverymethods.boxtitle_deliverymethods'] = 'Entrega de faturas';
$lang['AdminCompanyBilling.deliverymethods.page_title'] = 'Configurações > Empresa > Faturamento/Pagamento > Entrega de faturas';
$lang['AdminCompanyBilling.acceptedtypes.tooltip_update_clients'] = 'Marcar essa caixa removerá todas as substituições de tipo de pagamento aceitas definidas no cliente se estiverem desativadas na empresa';
$lang['AdminCompanyBilling.acceptedtypes.field_typessubmit'] = 'Atualizar configurações';
$lang['AdminCompanyBilling.acceptedtypes.field_update_clients'] = 'Remover os tipos de pagamento aceitos atualmente definidos nos clientes';
$lang['AdminCompanyBilling.acceptedtypes.client_settings'] = 'Remover substituições de cliente';
$lang['AdminCompanyBilling.acceptedtypes.field_ach'] = 'Câmara de Compensação Automatizada';
$lang['AdminCompanyBilling.acceptedtypes.field_cc'] = 'Cartão de crédito';
$lang['AdminCompanyBilling.acceptedtypes.text_description'] = 'Somente os tipos de pagamento selecionados estão disponíveis para processamento por meio de gateways ou podem ser adicionados como contas de pagamento, mesmo que um gateway ativo aceite o tipo. Desmarcar um tipo que já é aceito fará com que os pagamentos desse tipo não sejam processados.';
$lang['AdminCompanyBilling.acceptedtypes.boxtitle_types'] = 'Tipos de pagamento aceitos';
$lang['AdminCompanyBilling.acceptedtypes.page_title'] = 'Configurações > Empresa > Faturamento/Pagamento > Tipos de pagamento aceitos';
$lang['AdminCompanyBilling.customization.field.customizationsubmit'] = 'Atualizar configurações';
$lang['AdminCompanyBilling.customization.remove'] = 'Remover';
$lang['AdminCompanyBilling.customization.field.inv_font'] = 'Família de fontes';
$lang['AdminCompanyBilling.customization.field.inv_mimetype'] = 'Tipo de arquivo de fatura';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_inv'] = 'Data de vencimento - Padrão';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_proforma'] = 'Data de vencimento - Pro Forma';
$lang['AdminCompanyBilling.customization.field.inv_display_due_date_draft'] = 'Data de vencimento - Rascunhos';
$lang['AdminCompanyBilling.customization.field.inv_display_payments'] = 'Pagamentos/Créditos';
$lang['AdminCompanyBilling.customization.field.inv_display_paid_watermark'] = 'Marca d\'água PAGA';
$lang['AdminCompanyBilling.customization.field.inv_display_company'] = 'Nome/Endereço da empresa';
$lang['AdminCompanyBilling.customization.field.inv_display_logo'] = 'Logotipo';
$lang['AdminCompanyBilling.customization.field.inv_display'] = 'Exibir na fatura';
$lang['AdminCompanyBilling.customization.field.inv_template'] = 'Modelo de fatura';
$lang['AdminCompanyBilling.customization.field.inv_paper_size'] = 'Tamanho do papel';
$lang['AdminCompanyBilling.customization.field.inv_terms'] = 'Termos';
$lang['AdminCompanyBilling.customization.field.inv_background'] = 'Histórico';
$lang['AdminCompanyBilling.customization.field.inv_logo'] = 'Logotipo';
$lang['AdminCompanyBilling.customization.field.inv_cache_compress'] = 'Comprimir faturas em PDF';
$lang['AdminCompanyBilling.customization.field.inv_cache'] = 'Método de cache de fatura';
$lang['AdminCompanyBilling.customization.field.quotation_increment'] = 'Valor de incremento de cotação';
$lang['AdminCompanyBilling.customization.field.quotation_start'] = 'Valor inicial da cotação';
$lang['AdminCompanyBilling.customization.field.quotation_format'] = 'Formato de cotação';
$lang['AdminCompanyBilling.customization.field.inv_type'] = 'Tipo de fatura';
$lang['AdminCompanyBilling.customization.field.inv_pad_str'] = 'Caractere de preenchimento da fatura';
$lang['AdminCompanyBilling.customization.field.inv_pad_size'] = 'Tamanho do preenchimento da fatura';
$lang['AdminCompanyBilling.customization.field.inv_increment'] = 'Valor de incremento da fatura';
$lang['AdminCompanyBilling.customization.field.inv_proforma_start'] = 'Valor inicial da fatura pró-forma';
$lang['AdminCompanyBilling.customization.field.inv_start'] = 'Valor inicial da fatura';
$lang['AdminCompanyBilling.customization.field.inv_proforma_format'] = 'Formato de fatura pró-forma';
$lang['AdminCompanyBilling.customization.field.inv_draft_format'] = 'Formato de rascunho de fatura';
$lang['AdminCompanyBilling.customization.field.inv_format'] = 'Formato da fatura';
$lang['AdminCompanyBilling.customization.heading_lookandfeel'] = 'Aparência e sensação';
$lang['AdminCompanyBilling.customization.heading_cache'] = 'Cache';
$lang['AdminCompanyBilling.customization.heading_quotations'] = 'Opções de cotação';
$lang['AdminCompanyBilling.customization.heading_general'] = 'Opções básicas';
$lang['AdminCompanyBilling.customization.boxtitle_customization'] = 'Personalização da fatura';
$lang['AdminCompanyBilling.customization.page_title'] = 'Configurações > Empresa > Faturamento/Pagamento > Personalização da fatura';
$lang['AdminCompanyBilling.editcoupon.text_used_qty'] = '(usado %1$s)';
$lang['AdminCompanyBilling.editcoupon.text_available_packages'] = 'Pacotes disponíveis';
$lang['AdminCompanyBilling.editcoupon.text_assigned_packages'] = 'Pacotes atribuídos';
$lang['AdminCompanyBilling.editcoupon.text_all'] = 'Todos';
$lang['AdminCompanyBilling.editcoupon.field_couponsubmit'] = 'Editar cupom';
$lang['AdminCompanyBilling.editcoupon.field_package_group_id'] = 'Filtro de grupo de pacotes';
$lang['AdminCompanyBilling.editcoupon.heading_packages'] = 'Pacotes';
$lang['AdminCompanyBilling.editcoupon.option_remove'] = 'Remover';
$lang['AdminCompanyBilling.editcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.editcoupon.text_terms'] = 'Termos';
$lang['AdminCompanyBilling.editcoupon.text_period'] = 'Período';
$lang['AdminCompanyBilling.editcoupon.text_enabled'] = 'Ativado';
$lang['AdminCompanyBilling.editcoupon.description_terms'] = 'Esse cupom só pode ser aplicado a serviços solicitados para um dos termos/períodos selecionados. Se nenhum estiver ativado, o prazo do serviço será ignorado ao avaliar as limitações do cupom.';
$lang['AdminCompanyBilling.editcoupon.heading_terms'] = 'Termos';
$lang['AdminCompanyBilling.editcoupon.text_value'] = 'Valor';
$lang['AdminCompanyBilling.editcoupon.text_type'] = 'Tipo';
$lang['AdminCompanyBilling.editcoupon.text_currency'] = 'Moeda';
$lang['AdminCompanyBilling.editcoupon.categorylink_addcurrency'] = 'Adicionar moeda adicional';
$lang['AdminCompanyBilling.editcoupon.heading_discount'] = 'Opções de desconto';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_yes'] = 'As limitações se aplicam à renovação de serviços';
$lang['AdminCompanyBilling.editcoupon.field_limit_recurring_no'] = 'As limitações não se aplicam à renovação de serviços';
$lang['AdminCompanyBilling.editcoupon.field_max_qty'] = 'Quantidade';
$lang['AdminCompanyBilling.editcoupon.field_end_date'] = 'Data final';
$lang['AdminCompanyBilling.editcoupon.field_start_date'] = 'Data de início';
$lang['AdminCompanyBilling.editcoupon.heading_limitations'] = 'Limitações';
$lang['AdminCompanyBilling.editcoupon.text_generate_code'] = 'Gerar código';
$lang['AdminCompanyBilling.editcoupon.field_code'] = 'Código de cupom';
$lang['AdminCompanyBilling.editcoupon.field_internal_use_only'] = 'Somente para uso interno';
$lang['AdminCompanyBilling.editcoupon.field_apply_package_options'] = 'Aplicar a opções configuráveis';
$lang['AdminCompanyBilling.editcoupon.field_recurring_yes'] = 'Aplicar quando o serviço for adicionado ou renovado';
$lang['AdminCompanyBilling.editcoupon.field_recurring_no'] = 'Aplicar somente quando o serviço for adicionado';
$lang['AdminCompanyBilling.editcoupon.heading_basic'] = 'Básico';
$lang['AdminCompanyBilling.editcoupon.boxtitle_edit'] = 'Editar cupom';
$lang['AdminCompanyBilling.editcoupon.page_title'] = 'Configurações > Empresa > Faturamento/pagamento > Editar cupom';
$lang['AdminCompanyBilling.addcoupon.text_available_packages'] = 'Pacotes disponíveis';
$lang['AdminCompanyBilling.addcoupon.text_assigned_packages'] = 'Pacotes atribuídos';
$lang['AdminCompanyBilling.addcoupon.text_all'] = 'Todos';
$lang['AdminCompanyBilling.addcoupon.field_couponsubmit'] = 'Criar cupom';
$lang['AdminCompanyBilling.addcoupon.field_package_group_id'] = 'Filtro de grupo de pacotes';
$lang['AdminCompanyBilling.addcoupon.heading_packages'] = 'Pacotes';
$lang['AdminCompanyBilling.addcoupon.option_remove'] = 'Remover';
$lang['AdminCompanyBilling.addcoupon.not_applicable'] = 'N/A';
$lang['AdminCompanyBilling.addcoupon.text_terms'] = 'Termos';
$lang['AdminCompanyBilling.addcoupon.text_period'] = 'Período';
$lang['AdminCompanyBilling.addcoupon.text_enabled'] = 'Ativado';
$lang['AdminCompanyBilling.addcoupon.description_terms'] = 'Esse cupom só pode ser aplicado a serviços solicitados para um dos termos/períodos selecionados. Se nenhum estiver ativado, o prazo do serviço será ignorado ao avaliar as limitações do cupom.';
$lang['AdminCompanyBilling.addcoupon.heading_terms'] = 'Limitações de prazo';
$lang['AdminCompanyBilling.addcoupon.text_value'] = 'Valor';
$lang['AdminCompanyBilling.addcoupon.text_type'] = 'Tipo';
$lang['AdminCompanyBilling.addcoupon.text_currency'] = 'Moeda';
$lang['AdminCompanyBilling.addcoupon.categorylink_addcurrency'] = 'Adicionar moeda adicional';
$lang['AdminCompanyBilling.addcoupon.heading_discount'] = 'Opções de desconto';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_yes'] = 'As limitações se aplicam à renovação de serviços';
$lang['AdminCompanyBilling.addcoupon.field_limit_recurring_no'] = 'As limitações não se aplicam à renovação de serviços';
$lang['AdminCompanyBilling.addcoupon.field_max_qty'] = 'Quantidade';
$lang['AdminCompanyBilling.addcoupon.field_end_date'] = 'Data final';
$lang['AdminCompanyBilling.addcoupon.field_start_date'] = 'Data de início';
$lang['AdminCompanyBilling.addcoupon.heading_limitations'] = 'Limitações';
$lang['AdminCompanyBilling.addcoupon.text_generate_code'] = 'Gerar código';
$lang['AdminCompanyBilling.addcoupon.field_code'] = 'Código de cupom';
$lang['AdminCompanyBilling.addcoupon.field_internal_use_only'] = 'Somente para uso interno';
$lang['AdminCompanyBilling.addcoupon.field_apply_package_options'] = 'Aplicar a opções configuráveis';
$lang['AdminCompanyBilling.addcoupon.field_recurring_yes'] = 'Aplicar quando o serviço for adicionado ou renovado';
$lang['AdminCompanyBilling.addcoupon.field_recurring_no'] = 'Aplicar somente quando o serviço for adicionado';
$lang['AdminCompanyBilling.addcoupon.field_status'] = 'Ativado';
$lang['AdminCompanyBilling.addcoupon.heading_basic'] = 'Básico';
$lang['AdminCompanyBilling.addcoupon.boxtitle_new'] = 'Novo cupom';
$lang['AdminCompanyBilling.addcoupon.page_title'] = 'Configurações > Empresa > Faturamento/pagamento > Novo cupom';
$lang['AdminCompanyBilling.coupons.confirm_delete'] = 'Tem certeza de que deseja excluir esse cupom?';
$lang['AdminCompanyBilling.coupons.option_delete'] = 'Excluir';
$lang['AdminCompanyBilling.coupons.option_edit'] = 'Editar';
$lang['AdminCompanyBilling.coupons.text_multiple'] = 'Múltiplos';
$lang['AdminCompanyBilling.coupons.text_currency'] = 'Moeda';
$lang['AdminCompanyBilling.coupons.text_options'] = 'Opções';
$lang['AdminCompanyBilling.coupons.text_end_date'] = 'Data final';
$lang['AdminCompanyBilling.coupons.text_start_date'] = 'Data de início';
$lang['AdminCompanyBilling.coupons.text_max'] = 'Máximo';
$lang['AdminCompanyBilling.coupons.text_used'] = 'Usado';
$lang['AdminCompanyBilling.coupons.text_discount'] = 'Desconto';
$lang['AdminCompanyBilling.coupons.text_code'] = 'Código';
$lang['AdminCompanyBilling.coupons.boxtitle_coupons'] = 'Cupons';
$lang['AdminCompanyBilling.coupons.categorylink_addcoupon'] = 'Adicionar cupom';
$lang['AdminCompanyBilling.coupons.no_results'] = 'Não há cupons.';
$lang['AdminCompanyBilling.coupons.page_title'] = 'Configurações > Empresa > Faturamento/pagamento > Cupons';
$lang['AdminCompanyBilling.notices.field.noticessubmit'] = 'Atualizar configurações';
$lang['AdminCompanyBilling.notices.field.notice_pending_autodebit'] = 'Aviso de débito automático pendente';
$lang['AdminCompanyBilling.notices.field.third_notice'] = 'Terceiro aviso';
$lang['AdminCompanyBilling.notices.field.second_notice'] = 'Segundo aviso';
$lang['AdminCompanyBilling.notices.field.first_notice'] = 'Primeiro aviso';
$lang['AdminCompanyBilling.notices.field.send_payment_notices'] = 'Permitir o envio de avisos de pagamento';
$lang['AdminCompanyBilling.notices.field.send_cancellation_notice'] = 'Permitir o envio de avisos de cancelamento de serviço';
$lang['AdminCompanyBilling.notices.text_edit_template'] = 'Editar modelo de e-mail';
$lang['AdminCompanyBilling.notices.text_disabled'] = 'Desativado';
$lang['AdminCompanyBilling.notices.text_duedate'] = 'Data de vencimento';
$lang['AdminCompanyBilling.notices.text_days'] = '%1$s Dias';
$lang['AdminCompanyBilling.notices.text_day'] = '%1$s Dia';
$lang['AdminCompanyBilling.notices.text_inv_duedate'] = 'Data de vencimento da fatura';
$lang['AdminCompanyBilling.notices.text_after'] = 'Depois de';
$lang['AdminCompanyBilling.notices.text_before'] = 'Antes de';
$lang['AdminCompanyBilling.notices.text_notices'] = 'Os avisos de pagamento podem ser usados como avisos de atraso ou lembretes de pagamento.';
$lang['AdminCompanyBilling.notices.boxtitle_notices'] = 'Avisos';
$lang['AdminCompanyBilling.notices.page_title'] = 'Configurações > Empresa > Faturamento/pagamento > Avisos';
$lang['AdminCompanyBilling.invoices.text_days'] = '%1$s Dias';
$lang['AdminCompanyBilling.invoices.text_day'] = '%1$s Dia';
$lang['AdminCompanyBilling.invoices.text_sameday'] = 'Mesmo dia';
$lang['AdminCompanyBilling.invoices.text_never'] = 'Nunca';
$lang['AdminCompanyBilling.invoices.text_any'] = '- Qualquer -';
$lang['AdminCompanyBilling.invoices.field.invoicessubmit'] = 'Atualizar configurações';
$lang['AdminCompanyBilling.invoices.field.process_paid_service_changes'] = 'Alterações no serviço de fila até o pagamento';
$lang['AdminCompanyBilling.invoices.field.show_client_tax_id'] = 'Mostrar o campo de ID de imposto na interface do cliente';
$lang['AdminCompanyBilling.invoices.field.void_inv_canceled_service_days'] = 'Anular faturas em aberto dias após o vencimento';
$lang['AdminCompanyBilling.invoices.field.void_invoice_canceled_service'] = 'Anular faturas em aberto no cancelamento de serviços';
$lang['AdminCompanyBilling.invoices.field.auto_paid_pending_services'] = 'Provisão automática de serviços pendentes pagos';
$lang['AdminCompanyBilling.invoices.field.auto_apply_credits'] = 'Aplicar automaticamente créditos soltos';
$lang['AdminCompanyBilling.invoices.field.client_prorate_credits'] = 'Permitir a emissão de créditos rateados para downgrades de serviço';
$lang['AdminCompanyBilling.invoices.field.client_change_service_package'] = 'Permitir que os clientes alterem o pacote de serviços';
$lang['AdminCompanyBilling.invoices.field.client_change_service_term'] = 'Permitir que os clientes alterem os termos de serviço';
$lang['AdminCompanyBilling.invoices.field.client_create_addons'] = 'Permitir que os clientes criem complementos para serviços existentes';
$lang['AdminCompanyBilling.invoices.field.synchronize_addons'] = 'Permitir que os serviços adicionais sejam sincronizados com seus serviços principais';
$lang['AdminCompanyBilling.invoices.field.clients_renew_services'] = 'Permitir que os clientes renovem os serviços manualmente';
$lang['AdminCompanyBilling.invoices.field.clients_cancel_services'] = 'Permitir que os clientes cancelem serviços';
$lang['AdminCompanyBilling.invoices.field.inv_lines_verbose_option_dates'] = 'Exibir o intervalo de datas de serviço para opções configuráveis';
$lang['AdminCompanyBilling.invoices.field.inv_append_descriptions'] = 'Incluir descrições de pacotes nas faturas';
$lang['AdminCompanyBilling.invoices.field.inv_group_services'] = 'Serviços de faturamento em conjunto';
$lang['AdminCompanyBilling.invoices.field.inv_suspended_services'] = 'Fatura de serviços suspensos';
$lang['AdminCompanyBilling.invoices.field.client_set_invoice'] = 'Permitir que o cliente defina o método de fatura';
$lang['AdminCompanyBilling.invoices.field.autodebit'] = 'Ativar débito automático';
$lang['AdminCompanyBilling.invoices.field.apply_inv_late_fees'] = 'Aplicar taxa de atraso a faturas abertas após o vencimento';
$lang['AdminCompanyBilling.invoices.field.cancel_service_changes_days'] = 'Cancelar alterações no serviço dias após o vencimento';
$lang['AdminCompanyBilling.invoices.field.service_renewal_attempts'] = 'Tentativas de renovação do serviço';
$lang['AdminCompanyBilling.invoices.field.autodebit_attempts'] = 'Tentativas de débito automático';
$lang['AdminCompanyBilling.invoices.field.suspend_services_days_after_due'] = 'Suspender serviços dias após o vencimento';
$lang['AdminCompanyBilling.invoices.field.autodebit_days_before_due'] = 'Débito automático dias antes da data de vencimento';
$lang['AdminCompanyBilling.invoices.field.quotation_deposit_percentage'] = 'Cotação Percentual de depósito padrão (%)';
$lang['AdminCompanyBilling.invoices.field.quotation_dead_days'] = 'Cotação Dias mortos após o vencimento';
$lang['AdminCompanyBilling.invoices.field.quotation_valid_days'] = 'Dias de vencimento da cotação';
$lang['AdminCompanyBilling.invoices.field.inv_days_before_renewal'] = 'Dias da fatura antes da renovação';
$lang['AdminCompanyBilling.invoices.boxtitle_invoices'] = 'Opções de fatura e cobrança';
$lang['AdminCompanyBilling.invoices.page_title'] = 'Configurações > Empresa > Faturamento/Pagamento > Opções de fatura e cobrança';
$lang['AdminCompanyBilling.!notice.group_settings'] = 'OBSERVAÇÃO: Essas configurações só se aplicam a Grupos de Clientes que herdam suas configurações da Empresa.';
$lang['AdminCompanyBilling.!tooltip.inv_terms'] = 'Digite as condições de pagamento ou qualquer outra informação que você queira que apareça na fatura.';
$lang['AdminCompanyBilling.!tooltip.inv_font'] = 'Para obter fontes adicionais, descompacte suas fontes TCPDF personalizadas no diretório /vendors/tecnickcom/tcpdf/fonts/ em sua instalação.';
$lang['AdminCompanyBilling.!tooltip.inv_mimetype'] = 'O tipo de arquivo da fatura. Os modelos de faturas podem suportar vários tipos de arquivos.';
$lang['AdminCompanyBilling.!tooltip.inv_template'] = 'O modelo de fatura a ser usado para renderizar a fatura.';
$lang['AdminCompanyBilling.!tooltip.inv_paper_size'] = 'O tamanho do papel da fatura.';
$lang['AdminCompanyBilling.!tooltip.inv_background'] = 'Faça upload do plano de fundo que aparecerá na fatura.';
$lang['AdminCompanyBilling.!tooltip.inv_logo'] = 'Faça o upload do logotipo que aparecerá na fatura.';
$lang['AdminCompanyBilling.!tooltip.inv_cache_compress'] = 'Compactar os arquivos PDF em cache para economizar espaço no disco. A ativação dessa opção pode diminuir o desempenho.';
$lang['AdminCompanyBilling.!tooltip.inv_cache'] = 'Salva uma cópia em cache de cada fatura no disco.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_str'] = 'Os números de fatura cujo comprimento de caractere for menor que o tamanho do preenchimento da fatura serão preenchidos à esquerda com o caractere fornecido.';
$lang['AdminCompanyBilling.!tooltip.inv_pad_size'] = 'O tamanho do preenchimento da fatura define o comprimento mínimo de caracteres dos números da fatura.';
$lang['AdminCompanyBilling.!tooltip.inv_increment'] = 'Os números de faturas subsequentes serão incrementados por esse valor.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_start'] = 'Os números das faturas começarão (e serão incrementados) a partir desse valor inicial.';
$lang['AdminCompanyBilling.!tooltip.inv_start'] = 'Os números das faturas começarão (e serão incrementados) a partir desse valor inicial.';
$lang['AdminCompanyBilling.!tooltip.inv_proforma_format'] = 'As tags disponíveis incluem: {num} - o número da fatura (obrigatório); {year} - o ano com quatro dígitos; {month} - o mês com dois dígitos; {day} - o dia do mês com dois dígitos.';
$lang['AdminCompanyBilling.!tooltip.inv_draft_format'] = 'As tags disponíveis incluem: {num} - o número da fatura (obrigatório); {year} - o ano com quatro dígitos; {month} - o mês com dois dígitos; {day} - o dia do mês com dois dígitos.';
$lang['AdminCompanyBilling.!tooltip.inv_format'] = 'As tags disponíveis incluem: {num} - o número da fatura (obrigatório); {year} - o ano com quatro dígitos; {month} - o mês com dois dígitos; {day} - o dia do mês com dois dígitos.';
$lang['AdminCompanyBilling.!tooltip.inv_type'] = 'O tipo de fatura que é criado por padrão. As faturas pro forma mudam para faturas padrão depois de terem sido pagas e fechadas.';
$lang['AdminCompanyBilling.!tooltip.notice_pending_autodebit'] = 'O número de dias antes de uma conta ser debitada automaticamente para enviar o e-mail de aviso de débito automático pendente.';
$lang['AdminCompanyBilling.!tooltip.third_notice'] = 'O número de dias antes ou depois do vencimento de uma fatura para enviar o terceiro e-mail de aviso de atraso.';
$lang['AdminCompanyBilling.!tooltip.second_notice'] = 'O número de dias antes ou depois do vencimento de uma fatura para enviar o segundo e-mail de aviso de atraso.';
$lang['AdminCompanyBilling.!tooltip.first_notice'] = 'O número de dias antes ou depois do vencimento de uma fatura para enviar o primeiro e-mail de aviso de atraso.';
$lang['AdminCompanyBilling.!tooltip.send_cancellation_notice'] = 'Essa opção define se os clientes podem receber avisos de cancelamento de serviço.';
$lang['AdminCompanyBilling.!tooltip.send_payment_notices'] = 'Essa opção define se os clientes podem receber qualquer um dos avisos de pagamento disponíveis.';
$lang['AdminCompanyBilling.!tooltip.late_fee_total_amount'] = 'Se o tipo de taxa for percentual, marque essa opção para calcular a taxa com base no valor total da fatura. Se essa opção não estiver marcada, a taxa será calculada com base apenas no valor não pago.';
$lang['AdminCompanyBilling.!tooltip.process_paid_service_changes'] = 'Se marcada, as alterações de serviço (ou seja, upgrades/downgrades) serão colocadas em fila e provisionadas somente depois de pagas. Caso contrário, elas serão provisionadas imediatamente.';
$lang['AdminCompanyBilling.!tooltip.show_client_tax_id'] = 'Marque para mostrar o campo ID do imposto na interface do cliente.';
$lang['AdminCompanyBilling.!tooltip.void_inv_canceled_service_days'] = 'Se a fatura associada a um serviço cancelado estiver vencida, ela só será anulada se não estiver vencida há mais tempo do que o número de dias selecionado.';
$lang['AdminCompanyBilling.!tooltip.void_invoice_canceled_service'] = 'Quando marcada, o cancelamento de serviços também anulará todas as faturas em aberto associadas ao serviço cancelado. Se essa fatura contiver itens de linha não associados ao serviço, os itens de linha do serviço serão removidos e a fatura não será anulada.';
$lang['AdminCompanyBilling.!tooltip.auto_paid_pending_services'] = 'Marque para permitir que a Blesta forneça automaticamente serviços que estejam pendentes e tenham uma fatura que tenha sido paga.';
$lang['AdminCompanyBilling.!tooltip.auto_apply_credits'] = 'Marque para permitir que a Blesta aplique automaticamente créditos a faturas em aberto (primeiro as faturas mais antigas).';
$lang['AdminCompanyBilling.!tooltip.client_prorate_credits'] = 'Marque para permitir créditos rateados para serviços ou opções configuráveis de serviços que tenham sofrido downgrade.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_package'] = 'Marque para permitir que os clientes alterem o pacote de serviços recorrentes.';
$lang['AdminCompanyBilling.!tooltip.client_change_service_term'] = 'Marque para permitir que os clientes alterem o prazo dos serviços recorrentes.';
$lang['AdminCompanyBilling.!tooltip.client_create_addons'] = 'Marque para permitir que os clientes solicitem complementos para qualquer um de seus serviços que os suportem.';
$lang['AdminCompanyBilling.!tooltip.synchronize_addons'] = 'Quando marcada, os serviços complementares recém-criados que correspondem aos termos mensais ou anuais da matriz serão rateados até a data de renovação da matriz.';
$lang['AdminCompanyBilling.!tooltip.clients_renew_services'] = 'Marque para permitir que os clientes renovem seus próprios serviços com antecedência.';
$lang['AdminCompanyBilling.!tooltip.clients_cancel_services'] = 'Marque para permitir que os clientes cancelem seus próprios serviços.';
$lang['AdminCompanyBilling.!tooltip.inv_lines_verbose_option_dates'] = 'Marque para incluir o intervalo de datas de serviço para cada item de linha de fatura de opção configurável.';
$lang['AdminCompanyBilling.!tooltip.inv_append_descriptions'] = 'Marque para anexar a versão de texto das descrições de pacotes aos itens de linha de serviço.';
$lang['AdminCompanyBilling.!tooltip.inv_group_services'] = 'Cria uma única fatura para serviços que são renovados no mesmo dia para um cliente. A desmarcação criará uma fatura separada para cada serviço.';
$lang['AdminCompanyBilling.!tooltip.inv_suspended_services'] = 'Marque para continuar faturando os serviços suspensos.';
$lang['AdminCompanyBilling.!tooltip.client_set_invoice'] = 'Marque para permitir que o cliente escolha o método de entrega de fatura de sua preferência (por exemplo, papel ou e-mail).';
$lang['AdminCompanyBilling.!tooltip.autodebit'] = 'Permite o débito automático de um cliente quando o pagamento é devido.';
$lang['AdminCompanyBilling.!tooltip.apply_inv_late_fees'] = 'Aplique uma taxa de atraso para abrir faturas com um número configurado de dias após o vencimento.';
$lang['AdminCompanyBilling.!tooltip.cancel_service_changes_days'] = 'As alterações de serviço na fila serão automaticamente canceladas quando a fatura não for paga durante o número de dias selecionado.';
$lang['AdminCompanyBilling.!tooltip.service_renewal_attempts'] = 'O número de tentativas e falhas no processamento de uma renovação de serviço antes que esse serviço seja desativado para não ser renovado automaticamente.';
$lang['AdminCompanyBilling.!tooltip.autodebit_attempts'] = 'O número de tentativas e falhas para processar uma conta de pagamento antes que essa conta de pagamento seja desativada para não ser debitada automaticamente.';
$lang['AdminCompanyBilling.!tooltip.suspend_services_days_after_due'] = 'O número de dias a esperar após o vencimento de uma fatura de um serviço antes de suspender o serviço.';
$lang['AdminCompanyBilling.!tooltip.autodebit_days_before_due'] = 'O número de dias antes do vencimento de uma fatura para débito automático na conta de pagamento padrão do cliente (se o cliente estiver configurado para débito automático).';
$lang['AdminCompanyBilling.!tooltip.quotation_deposit_percentage'] = 'A porcentagem de depósito inicial padrão para uma cotação.';
$lang['AdminCompanyBilling.!tooltip.quotation_dead_days'] = 'O número de dias após a expiração de uma cotação para defini-la como morta.';
$lang['AdminCompanyBilling.!tooltip.quotation_valid_days'] = 'O número de dias após a emissão de uma cotação para defini-la como expirada.';
$lang['AdminCompanyBilling.!tooltip.inv_days_before_renewal'] = 'O número de dias antes da renovação de uma fatura de serviço ou recorrente para gerar uma fatura.';
$lang['AdminCompanyBilling.!tooltip.coupon_quantity'] = 'A quantidade representa o número máximo de vezes que esse cupom pode ser usado antes de expirar.';
$lang['AdminCompanyBilling.!tooltip.coupon_term_value'] = 'Os termos devem ser inseridos como uma lista CSV (por exemplo, "1,3,4" significa 1 dia, 3 dias e 4 dias quando inseridos na linha "Dia").';
$lang['AdminCompanyBilling.!error.extension_zlib'] = 'A extensão Zlib é necessária para a compactação de faturas.';
$lang['AdminCompanyBilling.!error.minimum.format'] = 'A taxa O valor mínimo deve ser um número.';
$lang['AdminCompanyBilling.!error.amount.format'] = 'O valor da taxa deve ser um número.';
$lang['AdminCompanyBilling.!error.quotation_increment.valid'] = 'O valor de incremento de cotação deve ser um número.';
$lang['AdminCompanyBilling.!error.quotation_start.valid'] = 'O valor inicial da cotação deve ser um número.';
$lang['AdminCompanyBilling.!error.inv_increment.valid'] = 'O valor de incremento da fatura deve ser um número.';
$lang['AdminCompanyBilling.!error.inv_start.valid'] = 'O valor inicial da fatura deve ser um número.';
$lang['AdminCompanyBilling.!success.customization_updated'] = 'As configurações de personalização da fatura foram atualizadas com sucesso!';
$lang['AdminCompanyBilling.!success.latefees_updated'] = 'As configurações de Late Fees foram atualizadas com sucesso!';
$lang['AdminCompanyBilling.!success.deliverymethods_updated'] = 'As configurações de entrega de faturas foram atualizadas com sucesso!';
$lang['AdminCompanyBilling.!success.acceptedtypes_updated'] = 'As configurações de Accepted Payment Type foram atualizadas com sucesso!';
$lang['AdminCompanyBilling.!success.coupon_deleted'] = 'O cupom foi excluído com sucesso!';
$lang['AdminCompanyBilling.!success.coupon_updated'] = 'O cupom foi atualizado com sucesso!';
$lang['AdminCompanyBilling.!success.coupon_created'] = 'O cupom foi criado com sucesso!';
$lang['AdminCompanyBilling.!success.notices_updated'] = 'Os Avisos foram atualizados com sucesso!';
$lang['AdminCompanyBilling.!success.invoices_updated'] = 'As configurações de fatura e cobrança foram atualizadas com sucesso!';
$lang['AdminCompanyBilling.invoices.field.second_attempt_spacing'] = 'Espaçamento da segunda tentativa';
$lang['AdminCompanyBilling.invoices.field.second_attempt_threshold'] = 'Limite de espaçamento da segunda tentativa';
$lang['AdminCompanyBilling.invoices.field.first_attempt_spacing'] = 'Espaçamento da 1ª tentativa';
$lang['AdminCompanyBilling.invoices.field.first_attempt_threshold'] = 'Limite de espaçamento da 1ª tentativa';
$lang['AdminCompanyBilling.invoices.field.attempts'] = 'Tentativas';
$lang['AdminCompanyBilling.invoices.field.type'] = 'Tipo';
$lang['AdminCompanyBilling.invoices.field.service_actions'] = 'Ações de serviço';
$lang['AdminCompanyBilling.invoices.field.service_provisioning_attempts'] = 'Tentativas de provisionamento de serviços';
$lang['AdminCompanyBilling.!tooltip.second_attempt_threshold'] = 'O número de ações de serviço a serem tentadas antes de atrasar a próxima tentativa pelo valor especificado pela configuração de espaçamento da segunda tentativa';
$lang['AdminCompanyBilling.!tooltip.first_attempt_threshold'] = 'O número de ações de serviço a serem tentadas antes de atrasar a próxima tentativa pelo valor especificado pela configuração de espaçamento da primeira tentativa';
$lang['AdminCompanyBilling.!tooltip.service_attempts'] = 'O número de tentativas e falhas de processamento de uma ação de serviço antes que essa ação de serviço seja desativada da conclusão automática.';

