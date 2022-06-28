<?php
//Design a SavingsAccount class that stores a savings account’s annual interest rate and balance.
//The class constructor should accept the amount of the savings account’s starting balance.
//The class should also have methods for:subtracting the amount of a withdrawal
//adding the amount of a deposit
//adding the amount of monthly interest to the balance
//The monthly interest rate is the annual interest rate divided by twelve. To add the monthly interest
// to the balance, multiply the monthly interest rate by the balance, and add the result to the balance.
//Test the class in a program that calculates the balance of a savings account at the end of a period of time.
// It should ask the user for the annual interest rate, the starting balance, and the number of months that
// have passed since the account was established. A loop should then iterate once for every month, performing
// the following:
//Ask the user for the amount deposited into the account during the month. Use the class method to add this
// amount to the account balance. Ask the user for the amount withdrawn from the account during the month.
// Use the class method to subtract this amount from the account balance. Use the class method to calculate
// the monthly interest. After the last iteration, the program should display the ending balance, the total
// amount of deposits, the total amount of withdrawals, and the total interest earned.
class SavingsAccount
{
    private float $annualInterestRate;
    private float $balance;

    public function __construct($startingBalance)
    {
        $this->balance = $startingBalance;
    }

    public function setAnnualInterestRate($interestRate)
    {
        $this->annualInterestRate = $interestRate;
    }

    public function getAnnualInterestRate(): int
    {
        return $this->annualInterestRate;
    }

    public function withdraw(float $withdrawn): void
    {
        $this->balance -= $withdrawn;
    }

    public function addDeposit(float $deposit): void
    {
        $this->balance += $deposit;
    }

    public function interestPerMonth(float $interestRate, float $balance): float
    {

        return $interestRate / 12 / 100 * $balance;
    }

    public function interestToBalance(float $interestRate, float $balance): void
    {
        $this->balance += $this->interestPerMonth($interestRate, $balance);
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

$account = new SavingsAccount((float)readline("How much money is in the account?: "));
$account->setAnnualInterestRate((float)readline("Enter the annual interest rate: "));
$period = (int)readline("How long has the account been opened? Months: ");
$interestEarned = 0;
$monthlyDepositedSum = 0;
$withdrawnSum = 0;

for ($i = 1; $i <= $period; $i++) {
    $monthlyDeposited = (float)readline("Enter amount deposited for month: $i: ");
    $monthlyDepositedSum += $monthlyDeposited;
    $account->addDeposit($monthlyDeposited);
    $withdrawn = (float)readline("Enter amount withdrawn for month $i: ");
    $account->withdraw($withdrawn);
    $withdrawnSum += $withdrawn;
    $interestEarned += $account->interestPerMonth($account->getAnnualInterestRate(), $account->getBalance());
    $account->interestToBalance($account->getAnnualInterestRate(), $account->getBalance());

}

echo "Total deposited $" . number_format($monthlyDepositedSum, 2) . PHP_EOL;
echo "Total withdrawn: $" . number_format($withdrawnSum, 2) . PHP_EOL;
echo "Interest earned: $" . number_format($interestEarned, 2) . PHP_EOL;
echo "Total balance: $" . number_format($account->getBalance(), 2);
