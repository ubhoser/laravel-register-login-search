<?php

class SearchController extends BaseController {

  public function postSearch()
  {
    $term = e(Input::get('term'));
    $persons = Person::where('first_name', 'LIKE', '%' . $term . '%')->get();

    //var_dump($persons);exit;

    foreach ($persons as $key => $person) {
      //var_dump($person['last_name']);exit;
    }

    return View::make('search.result')
      ->with(array(
        'persons' => $persons,
        'term' => $term,
        'title' => 'Result page'
      ));
    
  }

}
