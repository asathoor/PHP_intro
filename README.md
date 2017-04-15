PHP Intro
=========

> "What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there's really no way that users can tell what you have up your sleeve."
> Source: [What is PHP?](http://php.net/manual/en/intro-whatis.php).

Since PHP is *executed on the server* you'll need a **server**. An Apache server can do this. That's why you need
to install a server on your local computer. Here you can use any localhost solution, like XAMPP, MAMP, or set up a
lamp server on Linux.

## Learn Basic PHP

What you'll find here is a *very* basic introduciton to PHP. The files in the folder will teach you to:

* Create and Use Cookies (`cookie.php`)
* Create and Use Sessions (`session.php`)
* Saving form input to files (`form.php`)
* Display the images from a folder (`simple_gallery.php`)

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

The sanitizing part was omited in order to make the code more easy to understand.
But in production it's better to be safe than sorry.

## Microlite '81 / HTML Kickstart

Here's a PHP sample for inspiration.

In the `microlite` folder you'll find a responsive page sample made by 99lime. 
The HTML was cut into small modules like: header.php for the header part.
The filenames resemble the structure of a WordPress template. 
Transforming this code to a WordPress template would be simple.
But it's off topic here. 

Games and programming are related. 
The "open source" role playing game Microlite '81 is used as inspiration here. 

Is a demonstration of "HTML Kickstart" combined with PHP. 
User input and random dice throws form a character sheet. 
The cookie can save the information as long as it exists. When the user returns, 
PHP will get the roleplaying character again. The solution is not persistent, 
since the data are stored in the client browser via a cookie. 

## Sources

* [99lime: HTML Kickstart](http://99lime.com/)


