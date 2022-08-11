<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';
use AlternativePayments\Config;

class AlternativePayments {

    // Merchant setup
    private $_publicKey = 'pk_test_xxxxxxxx';
    private $_secretKey = 'sk_test_xxxxxxxx';

    //DEV
    //private $_apiUrl = 'http://api.local/api';

    //TEST
    //private $_apiUrl = 'http://qaapi.alternativepayments.com/api';

    //LIVE
    private $_apiUrl = 'http://api.alternaativepayments.com/api';

    private $_successUrl = 'http://alternativepayments.com/message/success.html';
    private $_cancelUrl = 'http://alternativepayments.com/message/failure.html';


    public function getPublicKey() {
        return $this->_publicKey;
    }

    public function getApiUrl() {
        return $this->_apiUrl;
    }


    public function transaction($data = null) {
        $data = (object)$data;
        $opt = (object) array(
            'currency'              => isset($data->currency) && $data->currency ? $data->currency : '',
            'amount'                => isset($data->amount) && $data->amount ? $data->amount : '',
            'productDescription'    => isset($data->productDescription) && $data->productDescription ? $data->productDescription : '',
            'formPost'              => isset($data->formPost) && $data->formPost ? $data->formPost : '',
            'successUrl'            => isset($data->successUrl) && $data->successUrl ? $data->successUrl : $this->_successUrl,
            'cancelUrl'             => isset($data->cancelUrl) && $data->cancelUrl ? $data->cancelUrl : $this->_cancelUrl,
        );

        //echo '<pre>'.print_r($opt,true).'</pre>';
        //die();

        $return = (object) array(
            'status' => '',
            'msg' => '',
        );

        if ($opt->formPost) {
            // Set Secret Key
            Config::setApiKey($this->_secretKey);
            // Set Api url
            Config::setApiUrl($this->_apiUrl);
            
            try {
                //Check if js returns the token
                if (!isset($opt->formPost["APToken"])){
                    throw new Exception("The AP Token was not generated correctly");
                }

                $customer = new \AlternativePayments\Model\Customer();
                $customer->setEmail($opt->formPost["APEmail"]);
                $customer->setFirstName($opt->formPost["APFirstName"]);
                $customer->setLastName($opt->formPost["APLastName"]);
                $customer->setCountry($opt->formPost["APCountry"]);

                $customer->setState(isset($opt->formPost["APState"]) ? $opt->formPost["APState"] : null);
                $customer->setAddress(isset($opt->formPost["APAddress"]) ? $opt->formPost["APAddress"] : null);
                $customer->setAddress2(isset($opt->formPost["APAddress2"]) ? $opt->formPost["APAddress2"] : null);
                $customer->setCity(isset($opt->formPost["APCity"]) ? $opt->formPost["APCity"] : null);
                $customer->setZip(isset($opt->formPost["APZip"]) ? $opt->formPost["APZip"] : null);
                $customer->setBirthDate(isset($opt->formPost["APBirthDate"]) ? $opt->formPost["APBirthDate"] : null);
                if (isset($opt->formPost["APPhone"]))
                    $customer->setPhone($opt->formPost["APPhone"]);
                //fixed fields

                $transaction = new \AlternativePayments\Model\Transaction();
                $transaction->setAmount($opt->amount * 100);
                $transaction->setCurrency($opt->currency);
                $transaction->setToken($opt->formPost["APToken"]);
                $transaction->setDescription($opt->productDescription);
                $transaction->setIPAddress($this->get_client_ip());
            
                if (isset($opt->formPost["APPhoneVerificationPin"]) && isset($opt->formPost["APPhoneVerificationToken"])){
                    $phoneVerification = new \AlternativePayments\Model\PhoneVerification();
                    $phoneVerification->setPin($opt->formPost["APPhoneVerificationPin"]);
                    $phoneVerification->setToken($opt->formPost["APPhoneVerificationToken"]);
                    $transaction->setPhoneVerification($phoneVerification);

                }

                $redirectUrls = new \AlternativePayments\Model\RedirectUrls();
                $redirectUrls->setReturnUrl($opt->successUrl);
                $redirectUrls->setCancelUrl($opt->cancelUrl);
                $transaction->setRedirectUrls($redirectUrls);

                $transaction->setCustomer($customer);

                $result = \AlternativePayments\Transaction::post($transaction);

                //  var_dump($result);
                $resultArray = json_decode(json_encode($result), true);

                if (array_key_exists('Message', $resultArray)) {
                    $return->status = 'ERROR';
                    $return->msg = '<p>' . $resultArray['Message'] . '</p>';
                }
                else {
                    $return->status = 'OK';
                    $return->msg =  '<p>Your payment was successful.</p>';
                    $selectedpaymentoption = $resultArray["payment"]["paymentOption"];
                    switch ($selectedpaymentoption) {
                        case "SEPA":
                            header('Location: '. $opt->successUrl);
                            break;
                        default:
                            $redirectingurl = $resultArray["redirectUrl"];
                            header('Location: '.$redirectingurl);
                    }
                }
            }
            catch (Exception $e) {
                $return->status = 'ERROR';
                $return->msg = 'Error: '.$e->getMessage();
            }
        }

        return $return;
    }

    public function hostedTransaction($data = null) {
        $data = (object)$data;
        $opt = (object) array(
            'currency'              => isset($data->currency) && $data->currency ? $data->currency : '',
            'amount'                => isset($data->amount) && $data->amount ? $data->amount : '',
            'productDescription'    => isset($data->productDescription) && $data->productDescription ? $data->productDescription : '',
            'formPost'              => isset($data->formPost) && $data->formPost ? $data->formPost : '',
            'successUrl'            => isset($data->successUrl) && $data->successUrl ? $data->successUrl : $this->_successUrl,
            'cancelUrl'             => isset($data->cancelUrl) && $data->cancelUrl ? $data->cancelUrl : $this->_cancelUrl,
        );

        //echo '<pre>'.print_r($opt,true).'</pre>';
        //die();

        $return = (object) array(
            'status' => '',
            'msg' => '',
        );

        if ($opt->formPost != '') {
            // Set Secret Key
            Config::setApiKey($this->_secretKey);
            // Set Api url
            Config::setApiUrl($this->_apiUrl);
            
            try {
                $customer = new \AlternativePayments\Model\Customer();
                $customer->setEmail($opt->formPost["APEmail"]);
                $customer->setFirstName($opt->formPost["APFirstName"]);
                $customer->setLastName($opt->formPost["APLastName"]);
                $customer->setCountry($opt->formPost["APCountry"]);

                $customer->setState(isset($opt->formPost["APState"]) ? $opt->formPost["APState"] : null);
                $customer->setAddress(isset($opt->formPost["APAddress"]) ? $opt->formPost["APAddress"] : null);
                $customer->setAddress2(isset($opt->formPost["APAddress2"]) ? $opt->formPost["APAddress2"] : null);
                $customer->setCity(isset($opt->formPost["APCity"]) ? $opt->formPost["APCity"] : null);
                $customer->setZip(isset($opt->formPost["APZip"]) ? $opt->formPost["APZip"] : null);
                $customer->setBirthDate(isset($opt->formPost["APBirthDate"]) ? $opt->formPost["APBirthDate"] : null);
                if (isset($opt->formPost["APPhone"]))
                    $customer->setPhone($opt->formPost["APPhone"]);
                //fixed fields

                $transaction = new \AlternativePayments\Model\Transaction();
                $transaction->setAmount($opt->amount * 100);
                $transaction->setCurrency($opt->currency);
                $transaction->setDescription($opt->productDescription);
                $transaction->setIPAddress($this->get_client_ip());

                $redirectUrls = new \AlternativePayments\Model\RedirectUrls();
                $redirectUrls->setReturnUrl($opt->successUrl);
                $redirectUrls->setCancelUrl($opt->cancelUrl);
                $transaction->setRedirectUrls($redirectUrls);

                $transaction->setCustomer($customer);

                $result = \AlternativePayments\HostedTransaction::post($transaction);

                //  var_dump($result);
                $resultArray = json_decode(json_encode($result), true);

                if (array_key_exists('Message', $resultArray)) {
                    $return->status = 'ERROR';
                    $return->msg = '<p>' . $resultArray['Message'] . '</p>';
                }
                else {
                    $return->status = 'OK';
                    $return->msg =  '<p>Your payment was successful.</p>';

                    $redirectingurl = $resultArray["redirectUrl"];
                    header('Location: '.$redirectingurl);
                }
            }
            catch (Exception $e) {
                $return->status = 'ERROR';
                $return->msg = 'Error: '.$e->getMessage();
            }
        }

        return $return;
    }

    // Function to get the client IP address
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}

?>