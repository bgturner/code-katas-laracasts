# Prime Factors Challenge

First popularized by [Uncle Bob](http://butunclebob.com/ArticleS.UncleBob.ThePrimeFactorsKata).

* Use TDD to build a `prime_factors` class.
* Can feed it a single number.
* Returns an array that contains all prime factors of that number.

## Goals

I'm wanting to try out PHPSpec and TDD in general. Specifically how it can fit into my workflow using Tmux and Vim.

## Results

I was able to setup and use `phpspec` as well as make use of `gulp` to automate testing. Additionally I was able to review some repetative things in my workflow and abstract them out using better tools inside of Vim.

## Setup

To use this sandbox, change to this directory and issue `composer install`. This will install `phpspec` locally. You will then need to add this local version of `phpspec` to your `$PATH`. Do this by executing: `alias phpspec=./vendor/bin/phpspec`.

If you want to watch the project and run the tests whenever a file is saved, install gulp globally and then install the npm dependencies for this project:

* `npm install -g gulp`
* `npm install`
* `gulp`

