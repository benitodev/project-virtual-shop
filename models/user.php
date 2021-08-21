


<?php
class User{
private $name;
private $surname;
private $email;
private $password;
private $type;
private $db;
public function __construct(){
$this->db = Database::db();
}

public function getName(){
  return $this->name;
}
public function getSurname(){
  return $this->surname;
}
public function getEmail(){
  return $this->email;
}
public function getPassword(){
  return $this->password;
}

public function getType(){
  return $this->type;
}

public function setName($name){
  $this->name = $this->db->real_escape_string($name);
}
public function setSurname($surname){
 $this->surname = $this->db->real_escape_string($surname);
}
public function setEmail($email){
  $this->email = $this->db->real_escape_string($email);
}
public function setPassword($password){
  $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);
} 

//for what niaaa?
public function setType($type){
  $this->name = $this->db->real_escape_string($type);
}
//claro recorda el return! ya que tienen que retornar el valor solo. Veamos con llaves y luego sin a ve que onda no recuerod ajaj
public function save(){
  $sql = "INSERT INTO usuarios VALUES(null, '{$this->getName()}', '{$this->getSurname()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user')";
  $save = $this->db->query($sql);
 echo $this->getName();
  var_dump($sql);
  return $save;
}

public function login($email, $passwordd){
 //get the user's email and password 

 $sql = "SELECT * FROM usuarios WHERE email = '$email'";
  $user = $this->db->query($sql);
  //vamos a ver en la hora de la verdaaa
  if ($user && $user->num_rows == 1) {
    
    $data = $user->fetch_object();
    $verify =  password_verify($passwordd, $data->contraseña);
   
    
    $response = false;
   if ($verify) {
     $response = $data;
   }
  }
  return $response;
}


}

?>