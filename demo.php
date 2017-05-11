<?php
require 'TSChinese.class.php';
$a = TSChinese::t2s('里士滿溫哥華機場');
echo '简体：',$a,PHP_EOL;
echo '繁体：',TSChinese::s2t($a),PHP_EOL;