<?php
// �洢���ݵ��ļ�
$filename = 'data.dat';        
 
// ָ��ҳ�����
header('Content-type: text/html; charset=utf-8');
 
if(!file_exists($filename)) {
    die($filename . ' �����ļ�������');
}
 
// ��ȡ���������ļ�
$data = file_get_contents($filename);
 
// �����з��ָ������
$data = explode(PHP_EOL, $data);
 
// �����ȡһ������
$result = $data[array_rand($data)];
 
// ȥ������Ļ��з������������
$result = str_replace(array("\r","\n","\r\n"), '', $result);
 
echo 'document.write("'.htmlspecialchars($result).'");';