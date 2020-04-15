<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

  function __construct()
  {
    // Construct the parent class
    parent::__construct();
  }

  public function news_get()
  {

    $id = $this->get('id');


    $news = $this->news_model->get_news_for_api();

    if ($news) {
      $this->response($news, 200);
    } else {
      $this->response(NULL, 404);
    }
  }
}