# CodeIgniter Base Setup

This is a CodeIgniter install with some added features:
- Static laravel like routing
- UhOh! errors
- and a couple of my custom helper files

## Static Laravel like routing

This is a routing system similar to laravel. It has awesome features like:
- Create routes based on the HTTP verb request, helping to create a RESTful web service.
- Create named routes.
- and many others

The routing library is from [this repo](https://github.com/Patroklo/codeigniter-static-laravel-routes) by Joseba Juániz ([@Patroklo](http://twitter.com/Patroklo))

## UhOh! errors

Awesome error messages with full backtraces and a view of the line with error

It catches all errors including:

* E_PARSE
* E_ERROR
* E_USER_ERROR
* E_COMPILE_ERROR
* E_ERROR
* E_USER_ERROR
* E_PARSE
* E_WARNING
* E_USER_WARNING
* E_STRICT
* E_NOTICE
* E_RECOVERABLE_ERROR

The UhOh! error library is from [this repo](https://github.com/dhrrgn/codeigniter-uhoh) by Dan Horrigan (http://dhorrigan.com)

## Debug helper

This is a debugging function to help speed up development.

The code is taken from (https://github.com/joostvanveen/codeigniter-best-practises) by Joost van Veen (https://github.com/joostvanveen)

## Route Helper

This is a route helper function to help utilize the named routes from the static laravel routing library

## Notification Helper

This is a notification helper that is using the base template of Twitter Bootstrap 3.x's Alert