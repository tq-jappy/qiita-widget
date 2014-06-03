#!/usr/bin/env php
<?php

$css = trim(shell_exec('recess --compress ./Source/style.less'));
# $script = trim(shell_exec('coffee -p -c ./Source/script.coffee  | uglifyjs -nc'));
$script = trim(shell_exec('coffee -p -c ./Source/script.coffee'));
$script = str_replace('<!--%css%-->', $css, $script);
echo $script;
