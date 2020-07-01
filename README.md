# Laravel Package

This is a scaffolding for creating a laravel package from scratch. It provides necessary files, configurations and dependencies.

## Installation

```sh
composer create-project bakle/laravel-package package-name
```

## Structure

#### composer.example.json

This is the file you are going to need to create your package. It provides the necessary dependencies for a laravel package, including dev dependencies and package discovery.

#### config
It contains the package config files.

#### database
It contains the migrations and factories of your package.

#### resources
It contains the views and translations files of your package.

#### routes
It contains your package route file.

#### src
This is the main folder. It contains the **PackageServiceProvider** and your package main class. Also it contains a **Commands** folder to include your package Artisan Commands.

#### tests
It contains a **Unit** folder to store your unit test and a **TestCase** class from
[Orchestra Test Bench Package](https://github.com/orchestral/testbench), of course you can add any folders you need.

#### .php_cs
This is the configuration file wich contains rules for [PHP-CS-FIXER](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

## Notes

You can remove from the **Service Provider** class any methods you don´t need. Maybe you just need to load **config** files and **migrations**. This is why this scaffolding provides a great flexibility to remove or add what you need.