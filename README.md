# Foobar

phpunit/phpunit implement for Turing.com Coding Challenge Test Problems.

## Installation

Install PHP unit in the root folder.

```bash
composer require phpunit/phpunit
```

## Turing Class

The first problem in Turing.com Coding Challenge. This class can process the string to make a score

```php
/**
* Rules
*/
// Keep the score for a baseball game with strange rules. 
// -> "numeric" - record a new score.
// -> "D" - Delete previous score from the record.
// -> "C" - Record a new score that is the sum of the previous two scores.
// -> "+" - Record a new score that is double the previous score.
// Return the sum of all the scores record.

/**
* Example
*/
$input = "10 10 C";
$total = 40;

$input = "10 10 C D";
$total = 20;

$input = "10 + +";
$total = 70;

$input = "10 100 200 D C + 10";
$total = 450;

$input = "D";
$total = 0;
```

## Kurawa Class
Kurawa class given validated parentheses 

```php
/**
* Given a string containing just the characters '{','}','(',')','[',']', determine if the input string valid.
*/
//An input string is valid if :
//-> Open brackets must be closed by the same type of brackets.
//-> Open brackets must be closed in the correct order.

/**
* Example.
*/
$input = "{}";
$output = True;

$input = "()[]({[]})";
$output = True;

$input = "[({([{[([])]}])})]";
$output = True;

$input = "{";
$output = False;

$input = "[({([{[([])]}])})";
$output = False;
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Tips
😃 [A Cup of Coffe](https://trakteer.id/ignatha/tip)