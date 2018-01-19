<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;

trait ConfirmRequestTrait
{
  public function validator($factory)
  {
    if(method_exists($this, 'beforeValidate')) {
      $this->beforeValidate();
    }

    $rules = array_merge($this->rules(), [
      'confirming' => 'required|accepted',
    ]);

    $validator = $factory->make(
      $this->all(),
      $rules,
      $this->messages(),
      $this->attributes()
    );

    $validator->after(function ($validator) {
      $failed = $validator->failed();

      unset($faild['confirming']);

      if(count($failed) === 0){
        $this->merge(['confirming' => 'true']);
      }

      if(method_exists($this, 'afterValidate')) {
        $this->afterValidate($validator);
      }
    });

    return $validator;
  }

  protected function formatErrors(Validator $validator)
  {
    $errors = parent::formatErrors($validator);

    unset($errors['confirming']);

    return $errors;
  }
}
