Basic-PHP-Assignment
====================
In this assignemnt you will create some basic PHP functions and generate some simple HTML using PHP.

multtable.php
-------------
This file should accept 4 paramaters passed via the URL in a GET request.

-min-multiplicand
-max-multiplicand
-min-multiplier
-max-multiplier

It should check than the min is in fact less than or equal to the max multiplicand and multiplier respectivley. If it is not, it should print the message "Minimum [multiplicand|multiplier] larger than maximum.". It should also check that the values returned are integers for each paramater. If it is not it should print 1 message for each invalid input "[min-multiplicand...max-multiplier] must be an integer.". It should check that all 4 paramaters exist for each missing paramater it should print "Missing paramater [min-multiplicand ... max-multiplier].".

If all of the above conditions are met, it should produce a multiplication table that is (max-multiplicand - min-multiplicand + 2) tall and (max-multiplier - min-multiplier + 2) wide. The upper left cell should be empty. The left column should have integers running from min-multiplicand through max-multiplicand inclusive. The top row should have integers running from min-multiplicand to max-multiplicand inclusive. Every cell within the table should be the product of the corrisponding multiplicand and multiplier.

To accomplish the above task you will want to work with loops to dynamically create rows and within each row, loop to create the cells. It should output as a valid HTML5 document.

loopback.php
------------
This file should accept either a GET or POST for input. That GET or POST will have an unknown number of key/value pairs. The page should return a JSON object (remember, this is almost identicle to an object literal in JavaScript) of the form {"Type":"[GET|POST]",{"key1":"value1", ... ,"keyn":"valuen"}}. Behaviour if a key is passed in and no value is specified is undefined. If no key value pairs are passed it it should return {"Type":"[GET|POST", null}. You are welcome to use built in JSON function in PHP to produce this output.
