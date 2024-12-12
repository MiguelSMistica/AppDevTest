<?php

class BankTransaction
{
    public $bank_name;
    public $transaction;
    private $account_no;
    private $amount;
    private $savings_amount;

    public function __construct($bank_name, $transaction, $account_no, $amount, $savings_amount = 10000)
    {
        $this->bank_name=$bank_name;
        $this->transaction=$transaction;
        $this->account_no=$account_no;
        $this->amount=$amount;
        $this->savings_amount=$savings_amount;
    }

    public function getInfo()
    {
        echo 'Bank Name: ' . $this->bank_name . '<br>';
        echo 'Customer Account No. : ' . $this->account_no . '<br>';
        echo 'Type of Transaction: ' . $this->transaction . '<br>';
        echo 'Current Balance: ' . $this->savings_amount . '<br>';
        echo 'Amount: ' . $this->amount . '<br>';
    }

    public function newBalance()
    {
        if($this->transaction === 'W'){
            $newBalance = $this->savings_amount - $this->amount;
            return $newBalance >= 0 ? $newBalance : "Insufficient Funds";
        }
        elseif($this->transaction === 'D'){
            $newBalance = $this->savings_amount + $this->amount;
            return $newBalance;
        }
        else{
            return "Unable to process this transaction! Invalid transaction type!";
        }
    }  
}

$customer1 = new BankTransaction('BDO', 'W','ACNO0000001',3000);
$customer2 = new BankTransaction('BPI', 'D','ACNO0000002',3000);
$customer3 = new BankTransaction('METROBANK', 'AB','ACNO0000003',3000);

echo 'Object: Customer 1' . '<br>';
$customer1 -> getInfo();
echo 'New Balance: ' . $customer1->newBalance() . '<br><br>';

echo 'Object: Customer 2' . '<br>';
$customer2 -> getInfo();
echo 'New Balance: ' . $customer2->newBalance() . '<br><br>';

echo 'Object: Customer 3' . '<br>';
$customer3 -> getInfo();
echo 'New Balance: ' . $customer3->newBalance() . '<br><br>';





?>