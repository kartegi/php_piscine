<?php
    if ($_POST && $_POST['submit'] == 'OK' && $_POST['passwd'] != "" && $_POST['login'] != ""){
        $pass = hash('whirlpool', $_POST['passwd']);
        $login_ERR = "";

        if(!file_exists("../private")){
            mkdir("../private");
        } elseif (file_exists("../private/passwd")){
            $data = unserialize(file_get_contents("../private/passwd"));
            foreach($data as $item){
                if($item['login'] == $_POST['login']){
                    $login_ERR = 'match';
                }
            }
        }
        if($login_ERR != 'match'){
            $account = array('login' => $_POST['login'], 'passwd' => $pass);
            $data[] = $account;
            file_put_contents('../private/passwd', serialize($data));
            echo "OK\n";
        } else
            echo "ERROR\n";
    }
    else
        echo "ERROR\n";
?>