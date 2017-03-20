<?php

namespace ProjetTLI\Controller;

use ProjetTLI\Pdo\DatabaseHelper;

/**
 * Class IndexController
 */
class IndexController extends Controller
{
    public function index()
    {
	$db = new DatabaseHelper();
	$users = $db->executeQuery('SELECT * FROM user');

	$response = $this->render('Home/index.html.twig', ['users' => $users]);	

        $this->execute($response);
    }

	public function test()
{
	$response = $this->render('Home/index.html.twig', ['users' => []]);
	$this->execute($response);
}
}
