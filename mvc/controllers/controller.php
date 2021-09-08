<?php

    class MvcController
    {
        public function template()
        {
            # Invokes a html file
            include "views/template.php";
        }

        public function linkControllerPages()
        {
            if (isset($_GET["action"]))
            {
                $linksController = $_GET["action"];
            } 
            else
            {
                $linksController = "index";
            }

            $response = LinkPages::linkModelPages($linksController);

            include $response;
        }
    }

?>