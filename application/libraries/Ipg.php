<?php


class Ipg
{
    function __construct()
    {
//    function Ipg()
//    {
        $CI = &get_instance();
        log_message('Debug', 'Payment  class is loaded.');
        $this->load();
    }

    function load()
    {
        include_once APPPATH . '/third_party/payment/au.com.gateway.client/GatewayClient.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.config/ClientConfig.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.component/RequestHeader.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.component/CreditCard.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.component/TransactionAmount.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.component/Redirect.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.facade/BaseFacade.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.facade/Payment.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.root/PaycorpRequest.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.root/PaycorpResponse.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.payment/PaymentInitRequest.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.payment/PaymentInitResponse.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.payment/PaymentCompleteRequest.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.payment/PaymentCompleteResponse.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.utils/IJsonHelper.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.helpers/PaymentInitJsonHelper.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.helpers/PaymentCompleteJsonHelper.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.utils/HmacUtils.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.utils/CommonUtils.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.utils/RestClient.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.enums/TransactionType.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.enums/Version.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.enums/Operation.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.facade/Vault.php';
        include_once APPPATH . '/third_party/payment/au.com.gateway.client.facade/Report.php';
//        include_once APPPATH . '/third_party/payment/au.com.gateway.client.facade/AmexWallet.php';
    }

}
