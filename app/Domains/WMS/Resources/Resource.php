<?php

namespace Market\WMS\Resources;

class Resource
{
      public function __construct()
      {
          $this->model=app()->make($this->model);
//          $this->request=app()->make($this->request);
      }

      public function fields()
      {
          return [];
      }
      public function rules()
      {
          $rules = [];
          $fields=$this->fields();
          foreach($fields as $field)
          {
           $rules[$field->getKey()]=$field->getRules();
          }
          return $rules;
     }
}
