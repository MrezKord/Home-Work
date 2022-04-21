<?php 

class Account
{
    private int $accountNumber;
    private int $balance;

    public function __construct(int $accountNumber, int $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    /** 
     * account number
     * 
     * @return int
    */

    public function get_an(){
        return $this->accountNumber;
    }

    /**
     * account balance
     * 
     * @return int
    */

    public function get_balance(){
        return $this->balance;
    }

    /**
     * set account balance
     * 
     * @param $balance
     */

    public function set_balance($balance){
        $this->balance = $balance;
    }

    /**
     * account information
     * 
     * @return array
     */

    public function get_account_info(){
        return ['accountNumber' => $this->accountNumber, 'balance' => $this->balance];
    }
}
