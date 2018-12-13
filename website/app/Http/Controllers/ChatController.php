<?php

namespace App\Http\Controllers;

use GrahamCampbell\Flysystem\Facades\Flysystem;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChatController extends Controller
{
  public function __construct()
  {
    $this->data = 'app/data.json';

    // On applique le middleware seulement aux controllers concernés par le chat reactif
    $this->middleware('ajaxOnly', ['only' => [
      'getData',
      'postData',
      'postMessage'
    ]]);

    // On empêche de retourner dans la page login si on est déjà connecté
    $this->middleware('notLogged', ['only' => ['login', 'loginValidate']]);
    // On applique le middleware faisant en sorte que seul une personne connectée a accès au chat
    $this->middleware('logged', ['except' => ['login', 'loginValidate']]);
  }

  public function index()
  {
    return view('chat');
  }

  public function login()
  {
    return view('login');
  }

  public function logoff()
  {
    session_destroy();
    return redirect('/chat');
  }

  public function loginValidate(Request $request)
  {
    $nickname = $request->input('nickname');

    // On vérifie que le pseudonyme est correct
    if ($nickname) {
      // On attribue la session contenant le pseudonyme
      $_SESSION['nickname'] = $nickname;
    }

    // Et on redirige vers le chat ou en arrière - selon si la connexion a réussie
    return redirect('/chat/login');
  }

  public function getData()
  {
    $data = Flysystem::read($this->data);

    // Il faut créé le contenu du fichier si il est vide
    if (empty($data)) {
      $base = array(
        'channel' => array(
          array('name' => '#canal-1', 'messages' => array()),
          array('name' => '#canal-2', 'messages' => array()),
          array('name' => '#canal-3', 'messages' => array()),
          array('name' => '#canal-4', 'messages' => array()),
          array('name' => '#canal-5', 'messages' => array()),
          array('name' => '#canal-6', 'messages' => array()),
          array('name' => '#canal-7', 'messages' => array())
        )
      );

      Flysystem::put($this->data, json_encode($base));
      return redirect('/');
    }

    return $data;
  }

  public function postData(Request $request)
  {
    $author = $_SESSION['nickname'];
    $channel = $request->input('channel'); 
    $message = $request->input('message'); // À protéger
    $data = json_decode(Flysystem::read($this->data), true);
    $date = Carbon::now()->toDateTimeString();

    if (!empty($message)) {
      $messageToSend = array(
        'date' => $date,
        'author' => $author,
        'content' => $message
      );

      // On envoi le nouveau message dans le canal correspondant
      array_push($data['channel'][$channel]['messages'], $messageToSend);

      // Et on enregistre les nouvelles données dans le fichier JSON
      Flysystem::put($this->data, json_encode($data));
    }
  }
}
