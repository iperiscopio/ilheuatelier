<?php

    require("models/resources.php");

    $resource = new Resources();

    if ($_SERVER["REQUEST_METHOD"] === "GET") {   

        if (empty($id)) {

            http_response_code(405);
            die('{"message": "Method Not Allowed"}');
            
        } else if (!empty($id)) {

            http_response_code(202);

            var_dump('controller');
            var_dump(json_encode($resource->getResource($id)));

            echo json_encode($resource->getResource($id));
        }
    } else {

        http_response_code(405);
        die('{"message": "Method Not Allowed"}');
    }
