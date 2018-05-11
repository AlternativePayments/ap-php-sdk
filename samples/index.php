<?php

require_once '../vendor/autoload.php';

use AlternativePayments\Config;
Config :: setApiKey("sk_test_jQdgJUtHeOnGCxxxxxxxxxxxx");
Config :: setApiUrl("https://api.alternativepayments.com/api");

?>
<html>
    <head>        
        <title>Alternative Payments test examples</title>
    </head>
    <body>
        <table>
            <tr>
                <td><strong>Options:</strong></td>
            </tr>
            <tr>
                <td><a href="index.php?option=customer&action=add">Add customer</a></td>
                <td><a href="index.php?option=customer&action=get">Get customer</a></td>
                <td><a href="index.php?option=customer&action=getall">Get all customers</a></td>
            </tr>
            <tr>
                <td><table>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_sms_pin">Create SMS PIN</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_plan_sepa">Create Plan SEPA</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_subscription_sepa">Create Subscription SEPA</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_sepa">Create SEPA transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_bancodechile">Create BancoDeChile transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_bancodeoccidente"> Create BancoDeOccidente transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_bancodobrasil"> Create BancoDoBrasil transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_brazilpayboleto">Create BrazilPayBoleto transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_brazilpaybanktransfer">Create BrazilPayBankTransfer transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_brazilpaychargecard">Create BrazilPayChargeCard transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_banamex">Create Banamex Transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_argencard">Create ArgenCard transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_cashu">Create CashU transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_directpayeu">Create DirectPayEU Transaction</a></td><tr>
						<tr>               
                            <td><a href="index.php?option=transaction&action=create_new_transaction_teleingreso">Create Teleingreso transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_safetypay">Create SafetyPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_sofort">Create Sofort transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_alipay">Create AliPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_tenpay">Create TenPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_mcoinz">Create mCoinz transaction</a></td></tr>
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_mybank">Create MyBank transaction</a></td></tr>	
						<tr>
							<td><a href="index.php?option=transaction&action=create_new_transaction_paysafe">Create PaySafe transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_unionpay">Create UnionPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_eps">Create EPS transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_verkkopankki">Create Verkkopankki transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_poli">Create POLi transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_ideal">Create IDEAL transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_trustpay">Create TrustPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_bancontact">Create BanContact transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_przelewy24">Create Przelewy24 transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_qiwi">Create Qiwi transaction</a></td></tr>
						<tr>                     
                    </table></td>
                <td><a href="index.php?option=transaction&action=get">Get transaction</a></td>
                <td><a href="index.php?option=transaction&action=getall">Get all transactions</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=subscription&action=add">Add subscription</a></td>
                <td><a href="index.php?option=subscription&action=get">Get subscription</a></td>
                <td><a href="index.php?option=subscription&action=getall">Get all subscriptions</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=plan&action=add">Add plan</a></td>
                <td><a href="index.php?option=plan&action=get">Get plan</a></td>
                <td><a href="index.php?option=plan&action=getall">Get all plans</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=refund&action=add">Add refund</a></td>
                <td><a href="index.php?option=refund&action=get">Get refund</a></td>
                <td><a href="index.php?option=refund&action=getall">Get all refunds</a></td>
            </tr>
            <tr>
                <td><a href="index.php?option=void&action=add">Add void</a></td>
                <td><a href="index.php?option=void&action=get">Get void</a></td>
                <td><a href="index.php?option=void&action=getall">Get all voids</a></td>
            </tr>
        </table>
<?php              
        if ( isset($_GET["option"]) && isset($_GET["action"]) ) {
            try {
                require_once $_GET["option"].'/'.$_GET["action"].".php";
            } catch (\AlternativePayments\Error\ApiException $exc) {
                echo $exc->getMessage();
            } catch (\AlternativePayments\Error\PaymentException $exc) {
                echo $exc->getMessage();
            } catch (\AlternativePayments\Error\InvalidParameterException $exc) {
                echo $exc->getParameter() . "<br>";
                echo $exc->getMessage();
            } catch (Exception $exc) {
                var_dump($exc);
                echo $exc->getMessage();
            }
            
        }        
?>
    </body>
</html>