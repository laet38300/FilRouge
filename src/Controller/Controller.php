<?php

namespace ProjetTLI\Controller;

use GuzzleHttp\Psr7\Response;
use Twig_Environment;
use Twig_Loader_Filesystem;

/**
 * Class Controller
 * @package ProjetTLI\Controller
 */
abstract class Controller
{
    /**
     * Render a view with Smarty
     *
     * @param $viewLocation
     * @param array $params
     *
     * @return Response
     */
    protected final function render($viewLocation, array $params = [])
    {
        $loader = new Twig_Loader_Filesystem('../src/Resources/views');
        $twig = new Twig_Environment($loader);

        if (isset($_SESSION['user'])) {
            $twig->addGlobal('user', $_SESSION['user']);
        }

        $response = new Response();
        $response->getBody()->write($twig->render($viewLocation, $params));

        return $response;
    }

    /**
     * Send the response to the browser
     *
     * @param Response $response
     */
    protected final function execute(Response $response)
    {
        if ($response->getStatusCode() == 200) {
            foreach ($response->getHeaders() as $headerName => $headerValue) {
                header($headerName . ': ' . $headerValue[0]);
            }

            echo $response->getBody();
        } else {
            echo $response->getStatusCode();
        }
    }
}