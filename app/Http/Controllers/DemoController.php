<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function __construct( Request $req )
    {
      $this->req = $req;
    }

    public function home()
    {
      $title = 'Home';
      return $this->view_spf( $title, 'home');
    }

    public function contact()
    {
      $title = 'Contact Us';
      return $this->view_spf( $title, 'contact');
    }

    public function about()
    {
      $title = 'About Us';
      return $this->view_spf( $title, 'about');
    }

    public function blog()
    {
      $title = 'My Blog';
      return $this->view_spf( $title, 'blog');
    }

    private function view_spf( $title = null, $view_name = null )
    {
      if( $this->req->input('spf') == 'navigate' ) {
        $response = response()->json([
          'title' => $title,
          'body' => [
            'content' => view( $view_name, ['title' => $title] )->renderSections()['content'] // renderSections()[ section name ]
          ]
        ]);
      }
      else {
        $response = view( $view_name, ['title' => $title] );
      }
      return $response;
    }

}
