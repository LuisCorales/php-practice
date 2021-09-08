<?php

    class LinkPages
    {
        public static function linkModelPages($linksModel)
        {
            if ($linksModel == "aboutus" ||
                $linksModel == "services" ||
                $linksModel == "contact")
            {    
                $module = "views/modules/".$linksModel.".php";
            }
            else if($linksModel == "index")
            {
                $module = "views/modules/home.php";
            }
            else
            {
                $module = "views/modules/notfound.php";
            }

            return $module;
        }
    }
?>