<?php
/**
 * bool
 * 30024167@qq.com
 * Mail 邮件发送
*/
class Mail
{
	protected $config;
	function __construct($config)
	{
		$this->config = $config;
	}

	public function send($to_user,$subject,$content)
	{
		
		// 判断是否使用html类型
		$type = $this->config['html'] ? 'Content-type: text/html;' : 'Content-type: text/plain;';

	    $cmd = [
	    	"EHLO {$this->config['smtp_name']}\r\n",
	    	"AUTH LOGIN\r\n",
	    	base64_encode($this->config['smtp_user'])."\r\n",
	    	base64_encode($this->config['smtp_pass'])."\r\n",
	    	"MAIL FROM: <{$this->config['smtp_user']}>\r\n",
	    	"RCPT TO: <{$to_user}>\r\n",
	    	"DATA\r\n",
	    	"From: \"{$this->config['smtp_name']}\"<{$this->config['smtp_user']}>\r\n",
	    	"To: <{$to_user}>\r\n",
	    	"Subject:{$subject}\r\n",
	    	$type."\r\n",
	    	"\r\n",
	    	$content." \r\n",
	    	".\r\n",
	    	"QUIT\r\n",
	    ];

	    $this->connect($cmd);

	    return true;
	}

	// 链接 发送
	protected function connect($cmd)
	{
	    //打开smtp服务器端口
	    $fp = @pfsockopen($this->config['smtp_host'], $this->config['smtp_port']);
	    $fp or die("Error: Cannot conect to ".$smtp_host);

	    // 执行命令
	    foreach ($cmd as $k => $v) {
	    	@fputs($fp, $v );

	    	// ************ 打印 *********** 
	    	$res= fgets($fp);
	    	echo "\n {$v} {$res} \n";
	    	// *****************************

	    	// sleep(1);
	    	// 延迟 0.5秒
	    	usleep(500000);
	    }
	}

}

// 使用

// 网易
// $config = [
// 	'smtp_host'	=>	'smtp.163.com',
// 	'smtp_port'	=>	25,
// 	'smtp_user'	=>	'bool1993@163.com',
// 	'smtp_pass'	=>	'****',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	true,
// ];


// sina 新浪 (text)
// $config = [
// 	'smtp_host'	=>	'smtp.sina.com',
// 	'smtp_port'	=>	25,
// 	'smtp_user'	=>	'bool1993@sina.com',
// 	'smtp_pass'	=>	'*******',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	true,
// ];


// sohu 搜狐 (beta)
// $config = [
// 	'smtp_host'	=>	'imap.sohu.com',
// 	'smtp_port'	=>	25,
// 	'smtp_user'	=>	'bool199308@sohu.com',
// 	'smtp_pass'	=>	'*******',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	false,
// ];


// ali 阿里 (text)
// $config = [
// 	'smtp_host'	=>	'smtp.aliyun.com',
// 	'smtp_port'	=>	25,
// 	'smtp_user'	=>	'bool1993@aliyun.com',
// 	'smtp_pass'	=>	'*******',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	false,
// ];

// 189 天翼 (beta)
// $config = [
// 	'smtp_host'	=>	'smtp.189.cn',
// 	'smtp_port'	=>	465,
// 	'smtp_user'	=>	'18101565682@189.cn ',
// 	'smtp_pass'	=>	'*******',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	false,
// ];


// Outlook (beta)
// $config = [
// 	'smtp_host'	=>	'smtp.live.com',
// 	'smtp_port'	=>	587,
// 	'smtp_user'	=>	'bool1993@outlook.com',
// 	'smtp_pass'	=>	'*******',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	true,
// ];

// 2980
// $config = [
// 	'smtp_host'	=>	'smtp.2980.com',
// 	'smtp_port'	=>	25,
// 	'smtp_user'	=>	'bool1993@2980.com',
// 	'smtp_pass'	=>	'*******',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	true,
// ];


// qq (beta)
// $config = [
// 	'smtp_host'	=>	'smtp.exmail.qq.com',
// 	'smtp_port'	=>	25,
// 	'smtp_user'	=>	'30024167@qq.com',
// 	'smtp_pass'	=>	'****',
// 	'smtp_name'	=>	'bool',
// 	'html'		=>	true,
// ];

$mail = new Mail($config);

$mail->send('bool1993@qq.com','subject123',' <h1>333333333333333</h1> <br> <a href="http://www.baidu.com"> baidu</a> <hr>')

?>