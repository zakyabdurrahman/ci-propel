<?php

namespace App\Controllers;

require_once __DIR__ . '/../orm/generated-conf/config.php';

use News\News as NewsNews;

class News extends BaseController {
  public function new() {
    //display form

    helper('form');
    $data["title"] = "Create new news";
    return view('templates/header', $data) 
      . view('news/create')
      . view('templates/footer');

    
  }

  public function create() {
    helper('form');

    $data = $this->request->getPost(['headline']);

    if (! $this->validateData($data, [
      'headline' => 'required|alpha'
      ])) 
    {
      return $this->new();
    }

    //get data

    $post = $this->validator->getValidated();

    $news = new NewsNews();

    $news->setHeadline($post['headline']);
    $news->save();

    

    return view('templates/header', ['title' => 'Success page'])
      . view('news/success')
      . view('templates/footer');
  }

  
}

?>