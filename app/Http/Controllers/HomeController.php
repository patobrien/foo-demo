<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // Request $request

    public function index(Request $request) {

      // data base call

      // super global array

      /*if (isset($_POST['title'])) {
        $title = $_POST['title'];
      }
      if (isset($_POST['content'])) {
        $content = $_POST['content'];
      }
      // reverse
      if (isset($_POST['title_reverse'])) {
        $title = strrev($_POST['title_reverse']);
      }
      if (isset($_POST['content_reverse'])) {
        $content = strrev($_POST['content_reverse']);
      }*/

      $title = $request->input('title');
      $content = $request->input('content');

      $title_reverse = $request->input('title_reverse');
      $content_reverse = $request->input('content_reverse');

      if (isset($title_reverse)) {
        $title = strrev($title_reverse);
      }
      if (isset($content_reverse)) {
        $content = strrev($content_reverse);
      }

      if (!isset($title)) {
        $title = 'Welcome to Foo - default';
      }
      if (!isset($content)) {
        $content = 'default text';
      }

      // return view('homepage')->with('title',$title)->with('text',$content);
      return view('homepage',['title' => $title,'text' => $content]);
    }

}
