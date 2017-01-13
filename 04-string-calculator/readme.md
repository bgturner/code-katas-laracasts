# String Calculator

The goal of this is to create a class that can add numbers that are passed as strings.

So for example calling `stringCalculator` (or something like that method) should give us:

1. When passed an empty string, assume it is zero.
2. When passed a comma separated list of numbers, it adds those numbers
	* For example: When passed `'1,2,3'` it should return `'6'`
3. Numbers greater than or equal to 1000 are ignored
	* For example: When passed `'1,2,3,1000'` it should return `'6'`

There are additional things that Jeffry includes, the new thing in this Kata is the use of more meaningful exceptions. Specifically this includes how to write more meaningful `phpspec` tests which require more meaningful exceptions.

