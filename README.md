# TSChinese

## 简介

PHP简繁汉字互转类，支持2512个汉字。如有不足请指出，字库需要不断完善。

必须在UTF-8编码的情况下使用，否则会报错。

宇润的博客：http://blog.yurunsoft.com

## 用法

### 代码
```php
$a = TSChinese::t2s('里士滿溫哥華機場');
echo '简体：',$a,PHP_EOL;
echo '繁体：',TSChinese::s2t($a),PHP_EOL;
```

### 输出结果

```php
简体：里士满温哥华机场
繁体：裡士滿溫哥華機場
```