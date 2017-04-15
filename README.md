PHP Intro
=========

A *very* basic introduciton to PHP:

* Cookies
* Sessions
* Saving input to files

Beware that any user input should be sanitized in order to avoid unwanted code injections from hackers.
See ["The Complete PHP Form"](https://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete) example on W3 Schools.

```
// santitize input sample
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
```

## Microlite '81 / HTML Kickstart

In the `microlite` folder you'll find a responsive page sample made by 99lime.

Games and programming are related. 
The "open source" role playing game Microlite '81 is used as inspiration here. 

Is a demonstration of "HTML Kickstart" combined with PHP. 
User input and random dice throws form a character sheet. 
The cookie can save the information as long as it exists. When the user returns, 
PHP will get the roleplaying character again. The solution is not persistent, 
since the data are stored in the client browser via a cookie. 

## Sources

* [99lime: HTML Kickstart](http://99lime.com/)


