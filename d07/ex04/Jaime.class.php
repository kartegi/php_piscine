<?php
    class Jaime extends Lannister {
        public function sleepWith($name){
                switch (get_class($name)) {
                    case "Tyrion":
                        print("Not even if I'm drunk !" . PHP_EOL);
                        break;
                    case "Sansa":
                        print("Let's do this." . PHP_EOL);
                        break;
                    case "Cersei":
                        print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
                        break;                
                }
        }
    }
?>