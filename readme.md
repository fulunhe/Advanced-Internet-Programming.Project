based on laravel5.4

��װ����

1 �����ȡ��������
�����ȡ��  ����վ��Ŀ¼ִ��  composer update  ������չ���
2
��ȡ�����  �޸���վ��Ŀ¼.env �� config/database.php
��������ݿ���Ϣ �����ñ���һ��

3 ���ɱ���ͨѶ��KEY
php artisan key:generate

4 ִ������Ǩ��
1��Ǩ�Ʊ�ṹ
ִ�� php artisan migrate
2��Ǩ�Ʋ�������
php artisan db:seed

5  ��¼��̨ ��ʹ��  admin@admin.com  ���� 111111

6 �ʼ����ÿ�����Ҫ
1)=�޸�.evn�������� 
 
MAIL_DRIVER=smtp
MAIL_HOST=smtp.163.com
MAIL_PORT=465
MAIL_USERNAME=homework0820@163.com
MAIL_PASSWORD=homework0820
MAIL_ENCRYPTION=ssl
 
2���޸� config/mail.php

 'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'homework0820@163.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],