 <?php
 include"studentinfo.php";
$r='';
if(isset($_POST['send'])){
  $obj=new Studentinfo();
  $data=array('name'=>$_POST["name"],'email'=>$_POST["email"],'phone'=>$_POST["phone"],'message'=>$_POST["message"]);
  $r=$obj->contactus($data);
}
 ?>
 <!DOCTYPE html>
<html>
<head>
  <link href="mycss2.css" rel="stylesheet">
 
  </head>
<body>
 <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : +91 7488435045</div>
        </div>
        <div class="screen-body-item">
          <form method="post" id="form" name="form">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" name="name"id="name" placeholder="NAME" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control"type="email" name="email" id="email" placeholder="EMAIL" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control"type="number" name="phone" id="phone" data-rule="minlen:4" placeholder="CONTACT NO" required>
            </div>
            <div id="error"></div>
            <div class="app-form-group message">
              <textarea name="message" id="message" cols="50" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="message"></textarea>
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button" name="send" id="send" disabled>SEND</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="credits">
      inspired by Us
        <svg class="dribbble" viewBox="0 0 200 200">
          <g stroke="#ffffff" fill="none">
            <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
            <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
            <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
            <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
          </g>
        </svg>
        Programming Classes
      </a>
    </div>
 
 </div>
<script src="js.js"></script>t 
</body>
</html>
