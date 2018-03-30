# mail
php发送邮件sdk


# 参数说明

名称 | 类型 |描述
---|---|---
smtp_host | smtp服务器地址 | string
smtp_port | smtp服务器端口 | int
smtp_user | 账号 | string
smtp_pass | 密码 | string
smtp_pass | 是否支持html | bool

# 使用案例
```
// 网易
$config = [
 	'smtp_host'	=>	'smtp.163.com',
 	'smtp_port'	=>	25,
 	'smtp_user'	=>	'bool1993@163.com',
 	'smtp_pass'	=>	'****',
 	'smtp_name'	=>	'bool',
 	'html'		=>	true,
];

$mail = new Mail($config);
$mail->send('bool1993@qq.com','subject123',' <h1>33</h1> <a href="http://www.baidu.com"> baidu</a> <hr>')

```
