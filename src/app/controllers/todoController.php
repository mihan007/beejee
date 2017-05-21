<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Todo;
use App\Service\TodoService;
//use App\Service\AuthService;
use App\Model\Comment;

class TodoController extends Controller
{
    protected $todoService;

    function __construct()
    {
        parent::__construct();
        $this->todoService = new TodoService();
        /*$this->authService = new AuthService();*/
    }

    public function add()
    {
        $email = $_POST['exampleInputEmail'];
        $body = $_POST['text'];
        $todo = new Todo();
        $todo->email = $email;
        $todo->body = $body;

        $this->todoService->add($todo);
        /*$this->view->render('todo.html.twig');*/
        header("Location:/");
    }

    public function index()
    {
        $todos = $this->todoService->getAll();
        $data = array('todos' => $todos);
        $this->view->render('todos.html.twig', $data);
    }

    public function descemail()
    {
        $todo = $this->todoService->sortdescemail();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function ascemail()
    {
        $todo = $this->todoService->sortascemail();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function descdate()
    {
        $todo = $this->todoService->sortdescdate();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function ascdate()
    {
        $todo = $this->todoService->sortascdate();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }
}
