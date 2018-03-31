## mail
php发送邮件sdk


## 参数说明

名称 | 类型 |描述
---|---|---
smtp_host | smtp服务器地址 | string
smtp_port | smtp服务器端口 | int
smtp_user | 发送账号 | string
smtp_pass | 发送密码 | string
smtp_pass | 是否支持html | bool

## 使用案例

[使用文档](https://github.com/chenbool/mail/wiki/%E7%BD%91%E6%98%93%E9%82%AE%E7%AE%B1)


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

## 支持邮箱

```
网易
$config = [
	'smtp_host'	=>	'smtp.163.com',
	'smtp_port'	=>	25,
	'smtp_user'	=>	'bool1993@163.com',
	'smtp_pass'	=>	'****',
	'smtp_name'	=>	'bool',
	'html'		=>	true,
];


sina 新浪 (text)
$config = [
	'smtp_host'	=>	'smtp.sina.com',
	'smtp_port'	=>	25,
	'smtp_user'	=>	'bool1993@sina.com',
	'smtp_pass'	=>	'*******',
	'smtp_name'	=>	'bool',
	'html'		=>	true,
];


sohu 搜狐 (beta)
$config = [
	'smtp_host'	=>	'imap.sohu.com',
	'smtp_port'	=>	25,
	'smtp_user'	=>	'bool199308@sohu.com',
	'smtp_pass'	=>	'*******',
	'smtp_name'	=>	'bool',
	'html'		=>	false,
];


ali 阿里 (text)
$config = [
	'smtp_host'	=>	'smtp.aliyun.com',
	'smtp_port'	=>	25,
	'smtp_user'	=>	'bool1993@aliyun.com',
	'smtp_pass'	=>	'*******',
	'smtp_name'	=>	'bool',
	'html'		=>	false,
];

189 天翼 (beta)
$config = [
	'smtp_host'	=>	'smtp.189.cn',
	'smtp_port'	=>	465,
	'smtp_user'	=>	'18101565682@189.cn ',
	'smtp_pass'	=>	'*******',
	'smtp_name'	=>	'bool',
	'html'		=>	false,
];


Outlook (beta)
$config = [
	'smtp_host'	=>	'smtp.live.com',
	'smtp_port'	=>	587,
	'smtp_user'	=>	'bool1993@outlook.com',
	'smtp_pass'	=>	'*******',
	'smtp_name'	=>	'bool',
	'html'		=>	true,
];

2980
$config = [
	'smtp_host'	=>	'smtp.2980.com',
	'smtp_port'	=>	25,
	'smtp_user'	=>	'bool1993@2980.com',
	'smtp_pass'	=>	'*******',
	'smtp_name'	=>	'bool',
	'html'		=>	true,
];


qq (beta)
$config = [
	'smtp_host'	=>	'smtp.exmail.qq.com',
	'smtp_port'	=>	25,
	'smtp_user'	=>	'30024167@qq.com',
	'smtp_pass'	=>	'****',
	'smtp_name'	=>	'bool',
	'html'		=>	true,
];
```
