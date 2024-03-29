<?php
//Define DB credentials
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'binc_barbers';

//Paths
const BASE_PATH = '/PRG02-2022-2023/sem/week4/assignment/';
const INCLUDES_PATH = __DIR__ . '/';

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});
