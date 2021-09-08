<?php

    class LinkPages
    {
        public static function linkModelPages($linksModel)
        {
            if ($linksModel == "login" ||
                $linksModel == "users" ||
                $linksModel == "edit" ||
                $linksModel == "exit")
            {    
                $module = "views/modules/".$linksModel.".php";
            }
            else if($linksModel == "index")
            {
                $module = "views/modules/signup.php";
            }
            else
            {
                $module = "views/modules/notfound.php";
            }

            return $module;
        }
    }
?>