<?php
if(isset($_POST)){
if($_POST['uname'] == 'admin' && $_POST['upwd'] == 'admin'){
echo "�û���½�ɹ�";
}else{
echo "�û���¼ʧ��";
}
}
?>