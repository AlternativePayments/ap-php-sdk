<?php

require_once '../vendor/autoload.php';

use AlternativePayments\Config;
Config :: setApiKey("rHErfc0m7n9GKFMNFSfNuO1QM7lFhCEh3mv0MKGR");
Config :: setApiUrl("http://ciapi.alternativepayments.com:8787/api");

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
                            <td><a href="index.php?option=transaction&action=create_new_transaction_sepa">Add SEPA transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_brazilpayboleto">Add BrazilPayBoleto transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_brazilpaybanktransfer">Add BrazilPayBankTransfer transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_teleingreso">Add Teleingreso transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_safetypay">Add SafetyPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_poli">Add POLi transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_ideal">Add IDEAL transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_trustpay">Add TrustPay transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_mistercash">Add MisterCash transaction</a></td></tr>
                        <tr>
                            <td><a href="index.php?option=transaction&action=create_new_transaction_przelewy24">Add Przelewy24 transaction</a></td></tr>
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