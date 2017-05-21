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
        $username = $_POST['exampleInputName'];
        $body = $_POST['text'];


        $todo = new Todo();

        $todo->email = $email;
        $todo->username = $username;
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

    public function descname()
    {
        $todo = $this->todoService->sortdecsname();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function ascname()
    {
        $todo = $this->todoService->sortacsname();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function descemail()
    {
        $todo = $this->todoService->sortdecsemail();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function ascemail()
    {
        $todo = $this->todoService->sortacsemail();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function descdate()
    {
        $todo = $this->todoService->sortdecsdate();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }

    public function ascdate()
    {
        $todo = $this->todoService->sortacsdate();
        $data = array('todo' => $todo);
        $this->view->render('todo.html.twig', $data);
    }
}
