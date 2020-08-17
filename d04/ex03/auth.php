<?php
    function auth($login, $passwd){
        if ($login != "" && $passwd != "" && file_exists("../private/passwd")){
            $pass = hash('whirlpool', $passwd);
            $check = "";
    
            $data = unserialize(file_get_contents("../private/passwd"));
            foreach($data as $item){
                if($item['passwd'] == $pass && $item['login'] == $login){
                    return true;
                }
           }
            return false;
        } else
            return false;
    }
?>