<?php

    // echo $_GET['params']; 
    $param = explode('/', rtrim($_GET['params'], "/"));
    // var_dump ($param);
    
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            http_response_code(401);
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode([
                'error' => 'uuwi sa accomodation, bibili ng aso ng chuk ng isda',
                'status' => 401
            ]);
            break;
        case 'POST':
            switch ($param[0]) {
                case 'login':
                    echo "Login method called";
                    break;
                case 'register':
                    echo "Register method called";
                    break;
                default:
                    http_response_code(400);
                    header('Content-Type: application/json; charset=utf-8');
                    echo json_encode([
                        'error' => 'masamang hiling',
                        'status' => 400
                    ]);
                    break;
            }
            break;
        case 'PATCH':
            echo "PATCH method called";
            break;
        case 'PUT':
            echo "PUT method called";
            break;
        case 'DELETE':
            echo "DELETE method called";
            break;



        default:
            http_response_code(400);
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode([
                'error' => 'masamang hiling',
                'status' => 400
            ]);
            break;
    }
