���p�̏���

yum�ňȉ��̃p�b�P�[�W�𓱓�����
httpd
php
php-mbstring
php-pdo
php-mysql

httpd.conf�Ɉȉ���ǋL����
����ŃT�u���[�`����N���X��`�̎����ǂݍ��݂���
<Directory "�R���e���c�i�[�f�B���N�g��">
    php_value auto_prepend_file sub/sAutoLoad.php
</Directory>