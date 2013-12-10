Parsers
=======
At the moment, two parsers are available.

Blockchain.info
---------------
This parser uses blockchain.info API to retrieve information about addresses and transactions. It is easy to setup, but can be quite slow.

Blockchain.info + Bitcoind combined
-----------------------------------
This parser uses blockchain.info API to retrieve information about addresses and bitcoind json-rpc API to retrieve information about transactions. It is faster, but requires bitcoind.

You can add your own parser as long as it implements Bitcont\Bitcoin\Clients\IParser interface.


Examples
========

```php
// create new blockchain.info parser
$bitcoin = new Bitcont\Bitcoin\Clients\BlockchainInfo\Client;

// get bitcoin address
$address = $bitcoin->getAddress('1Kug5MazR3c8VsBn61JZdvzdix49K7CCES'); // returns IAddress
$address->getId(); // returns '1Kug5MazR3c8VsBn61JZdvzdix49K7CCES'

// get bitcoin transaction
$transaction = $bitcoin->getTransaction('b26369a892dcc3408afcf96af42d0313e1e3c4eed8124ba57506483b6fa3ffc6'); // returns ITransaction
$transaction->getId(); // returns 'b26369a892dcc3408afcf96af42d0313e1e3c4eed8124ba57506483b6fa3ffc6'

// get transaction inputs
$inputs = $transaction->getInputs(); // returns array of IInput

// get the first input's info
$value = $inputs[0]->getValue(); // returns the number of satoshis (integer)
$sender = $inputs[0]->getAddress(); // returns the sender address

// get transaction outputs
$outputs = $transaction->getOutputs(); // returns array of IOutput

// get the last output's value
$value = end($outputs)->getValue(); // returns the number of satoshis (integer)
$recipient = end($outputs)->getAddress(); // returns the recipient address

// get all transactions for an address
$transactions = $bitcoin->getTransactions($address); // returns array of ITransaction (oldest first)
```


Installation
============
Installation via composer recommended.


Requirements
============
PHP 5.3 or higher.