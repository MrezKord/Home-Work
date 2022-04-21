<?php 

class User
{
    private string $name;
    private Account $account;

    /**
     * Constructor
     * 
     * @param string $name => user name
     * @param Account $account => Account information
     */

    public function __construct(string $name, Account $account)
    {
        $this->name = $name;
        $this->account = $account;
    }

    /**
     * get inforamation user
     * 
     * @return string
     */

    public function get_user(){
        // return ['name' => $this->name, 'information' => $this->account->get_account_info()];
        $accountNumber = $this->account->get_an();
        $balance = $this->account->get_balance(); 
        return "User $this->name has an account with the number $accountNumber and $balance balance";
    }

    /**
     * add to balance
     * 
     * @param $extera
     */

    public function add_balance(int $extera){
        $new_balance = $extera + $this->account->get_balance();
        $this->account->set_balance($new_balance);
    }

    /**
     * Reduce balance
     * 
     * @param $reduce
     */

    public function reduce_balance(int $reduce){
        $new_balance = $this->account->get_balance() - $reduce;
        if ($new_balance < 0) {
            trigger_error("Inventory is insufficient", E_USER_ERROR);
        }else {
            $this->account->set_balance($new_balance);
        }
    }

    /**
     * chenge username
     * 
     * @param $name
     */

    public function chenge_username($name){
        if (strlen($name) >= 3) {
            $this->name = $name;
        }else {
            trigger_error("The name must be longer than two characters", E_USER_ERROR);
        }
    }



}