<?php  

class Studentinfo{

     public $server='localhost';
     public $username='root';
     public $password='';
     public $dbname='webb_1db';

    function getconnection(){
    	 $conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
    	 return $conn;
    }
    function insert_data($arr){

    	$n=$arr['name'];
    	$e=$arr['email'];
    	$p=$arr['password'];
      


		$sql = "insert into myguest(name,email,password)values('$n','$e','$p')";
        //echo $sql;die;
        $conn=$this->getconnection();

        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
          }


		if($conn->query($sql) === TRUE) {
		  $r= "New record created successfully";
		} else {
		  $r="Error: " . $sql . "<br>" . $conn->error;
		}

		return $r;
    }


    function delete_data($id){

    }
    function updatedata($arr,$id){

    }
    function getreport(){
      $sql="select * from myguest";
      $conn=$this->getconnection();

      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
        }


          $r=$conn->query($sql); 
          return $r;
    }

    function getguestdetail($id){
    	
    }

    function contactus($arr){
      $n=$arr['name'];
      $e=$arr['email'];
      $c=$arr['phone'];
      $m=$arr['message'];

      $sql="insert into contactus(name,email,phone,message)values('$n','$e','$c','$m')";
      $conn=$this->getconnection();
      if($conn->connect_error){
        die("connection faiied:".$conn->connect_error);
      }
      if($conn->query($sql)===TRUE){
         $r="thank you for messsage we will contact you soon";
      }
      else{
        $r="error:".$sql."<br>".$conn->error;
      }
      return $r;
    }
}





