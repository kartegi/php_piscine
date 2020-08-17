<?php
    if ($_POST && $_POST['submit'] == 'OK' && $_POST['newpw'] != "" && $_POST['login'] != "" && file_exists("../private/passwd")){
        $pass = hash('whirlpool', $_POST['newpw']);
        $old_pass = hash('whirlpool', $_POST['oldpw']);
        $passwd = "";

        $data = unserialize(file_get_contents("../private/passwd"));
        foreach($data as $key => $item){
            if($item['passwd'] == $old_pass && $item['login'] == $_POST['login']){
                $passwd = 'match';
                $data[$key]['passwd'] = $pass;
            }
       }
       if ($passwd == 'match'){
            file_put_contents('../private/passwd', serialize($data));
           echo "OK\n";
       } else
            echo "ERROR\n";
    } else
        echo "ERROR\n";
?>