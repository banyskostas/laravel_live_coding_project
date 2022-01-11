<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| talech confidential
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| TASK 1 (30min)
|--------------------------------------------------------------------------
|
| You have a warehouse where you want to add new and preview existing
| products. You need to write a simple API endpoints which can create
| a new product and display the list of products. 
| NOTE: There is no need to create any files cause they are already
| created for you.
| 
| Requirements:
| - Analyze products migration file and write the needed code.
| - List of products should be grouped by category and sorted by it's creation time
|   from latest to oldest.
| - Follow classes communication flow:
|       * Controller -> Service -> Repository
| - Classes that should be covered with unit tests:
|       * ProductContoller
|       * ProductService
*/

/*
|--------------------------------------------------------------------------
| TASK 2 (30min)
|--------------------------------------------------------------------------
| You need to draw a matrix as provided in the example.
| It should work with any given odd number (n).
|--------------------------------------------------------------------------
|
| input: n=1
| output:  
|     1
|
|----------------
|
| input: n=3
| output:
|     1 1 1  
|     0 1 0
|     1 1 1
|
|----------------
|
| input: n=5
| output:
|     1 1 1 1 1  
|     0 1 1 1 0  
|     0 0 1 0 0  
|     0 1 1 1 0
|     1 1 1 1 1
|
*/

Route::get('/', function() {
    // your 2nd task code:
    

    return view('welcome');
});