based on laravel5.4

安装方法

1 代码获取不在描述
代码获取后  在网站根目录执行  composer update  加载扩展组件
2
获取代码后  修改网站根目录.env 和 config/database.php
里面的数据库信息 请设置保持一致

3 生成本地通讯的KEY
php artisan key:generate

4 执行数据迁移
1）迁移表结构
执行 php artisan migrate
2）迁移测试数据
php artisan db:seed

5  登录后台 请使用  admin@admin.com  密码 111111

6 邮件设置可能需要
1)=修改.evn给贴出来 
 
MAIL_DRIVER=smtp
MAIL_HOST=smtp.163.com
MAIL_PORT=465
MAIL_USERNAME=homework0820@163.com
MAIL_PASSWORD=homework0820
MAIL_ENCRYPTION=ssl
 
2）修改 config/mail.php

 'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'homework0820@163.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],