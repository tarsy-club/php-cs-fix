#!/usr/bin/env php
<?php

$file = realpath(__DIR__ . '/' . $argv[1]);
if (false === $file) {
    throw new RuntimeException('File not found');
}
echo $file;
