<?php
//DONE
//The object of the class Account represents a bank account that has a balance (meaning some amount of money).
// The accounts are used as follows:
//$bartos_account = new Account("Barto's account", 100.00);
//$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);
//echo "Initial state";
//echo $bartos_account;
//echo $bartos_swiss_account;
//$bartos_account->withdrawal(20);
//echo "Barto's account balance is now: " . $bartos_account->balance();
//$bartos_swiss_account->deposit(200);
//echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->balance();
//echo "Final state";
//echo $bartos_account;
//echo $bartos_swiss_account;
//Your first account
//Create a program that creates an account with the balance of 100.0, deposits 20.0 and prints the account.
//Note! do all the steps described in the exercise exactly in the described order!
//Your first money transfer
//Create a program that:
//Creates an account named "Matt's account" with the balance of 1000
//Creates an account named "My account" with the balance of 0
//Withdraws 100.0 from Matt's account
//Deposits 100.0 to My account
//Prints both accounts
//Money transfers
//In the above program, you made a money transfer from one person to another. Let us next create a method that
// does the same!
//Create the method:
//function transfer(Account $from, Account $to, int $howMuch) { }
//The method transfers money from one account to another. You do not need to check that the from account
// has enough balance.
//After completing the above, make sure that your main method does the following:
//Creates an account "A" with the balance of 100.0
//Creates an account "B" with the balance of 0.0
//Creates an account "C" with the balance of 0.0
//Transfers 50.0 from account A to account B
//Transfers 25.0 from account B to account C
class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function withdrawal(int $withdrawn): int
    {
        return $this->balance = $this->balance - $withdrawn;
    }

    public function balance(): int
    {
        return $this->balance;
    }

    public function deposit(int $amountOfDeposit): int
    {
        return $this->balance = $this->balance + $amountOfDeposit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    function transfer(Account $from, Account $to, int $howMuch): string
    {
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
        return $from->getName() . " account balance is: " . $from->balance() . PHP_EOL .
            $to->getName() . " account balance is: " . $to->balance() . PHP_EOL;
    }

}

$bartosAccount = new Account("Barto's account", 100.00);
$bartosSwissAccount = new Account("Barto's account in Switzerland", 1000000.00);
echo "Initial state" . PHP_EOL;
echo "Barto's account balance is: " . $bartosAccount->balance() . PHP_EOL;
echo "Barto's Swiss account balance is: " . $bartosSwissAccount->balance() . PHP_EOL;
$bartosAccount->withdrawal(20);
echo "Barto's account balance is now: " . $bartosAccount->balance() . PHP_EOL;
$bartosSwissAccount->deposit(200);
echo "Barto's Swiss account balance is now: " . $bartosSwissAccount->balance() . PHP_EOL;
echo "Final state" . PHP_EOL;
echo $bartosAccount->balance() . PHP_EOL;
echo $bartosSwissAccount->balance() . PHP_EOL;
function createAccount(string $name, int $balance): object
{
    return $person = new Account($name, $balance);
}

function deposit(object $person, int $deposit): string
{
    $person->deposit($deposit);
    return $person->getName() . "'s account balance is: " . $person->balance() . PHP_EOL;
}

function transfer(object $personWhoTransfers, object $personWhoGetsTransfer, int $sum): string
{
    $personWhoTransfers->withdrawal($sum);
    $personWhoGetsTransfer->deposit($sum);
    return $personWhoTransfers->getName() . "'s account balance is: " . $personWhoTransfers->balance() . PHP_EOL .
        $personWhoGetsTransfer->getName() . "'s account balance is: " . $personWhoGetsTransfer->balance() . PHP_EOL;
}

$testAccount = createAccount("Sandra", 100.0);
echo deposit($testAccount, 20);
$matt = createAccount("Matt account", 1000);
$myAccount = createAccount("My account", 0);
echo transfer($matt, $myAccount, 100);
$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);
echo $a->transfer($a, $b, 50);
echo $b->transfer($b, $c, 25);


