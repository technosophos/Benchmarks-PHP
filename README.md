# Benchmarks for PHP

This is a simple repository of PHP benchmarks.

If you would like to contribute, please fork and issue a PULL request.
I'd love to make this a decent repository of PHP microbenchmarks.

## SPLObjectStorage vs. Arrays

This test was sparked by the an [old benchmarking article](http://www.technosophos.com/content/set-objects-php-arrays-vs-splobjectstorage)
that I wrote a few years ago.

## How to Write Microbenchmarks

Simplicity is key. The goal is to test *just one thing* without
accidentally introducing any other performance factors.
