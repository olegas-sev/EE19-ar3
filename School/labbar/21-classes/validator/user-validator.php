<?php


class UserValidator
{
  // Egenskaper
  private $data;
  public $error = [];
  private $fields = ['username', 'password', 'passwordRepeat'];

  // Konstruktor
  public function __construct($postData)
  {
    $this->data = $postData;
  }

  // Metoder
  public function ValidateUsername()
  {
    if (strlen($this->data['username']) < 4 || strlen($this->data['username']) > 12) {
      array_push($this->error, "Användarnamnet ska vara mellan 4 och 12 tecken!");
    }
  }
  public function ValidateEmail()
  {
    // echo "<p>{$this->data['email']}</p>";
  }
  public function ValidatePassword()
  {
    if ($this->data['password'] !== $this->data['passwordRepeat']) {
      array_push($this->error, "Lösenord ska vara samma!");
    }
  }
}
