<?php

session_start();
require('vendor/autoload.php');

use Rakit\Validation\Validator;

include("connector.php");

if (isset($_POST['submit']))
{
    $validation = new Validator;
    $inputs = $_POST;
    $validator = $validation->make($inputs,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required|numeric|digits:10',
            'year_of_passing'=>'required|max:50',
            'course'=>'required|max:255',
    ]);
    $validator->validate();
    if ($validator->fails())
    {
         $_SESSION['errors'] = $validator->errors()->all();
         header("Location: codewalkerz.php");
    }
    else
    {
        try {
            $qry = "select * from codewalkerz where email = '".$inputs['email']."'";
            $result = mysqli_query($conn,$qry);
            if (mysqli_num_rows($result)>0)
            {
                $_SESSION['errors'] = ["Email Already registered"];
                header("Location: codewalkerz.php");
            }
            $q = "INSERT INTO `codewalkerz` ( `name`, `email`, `phone`, `year_of_passing`, `course`, `created_at`, `updated_at`) VALUES ('".$inputs['name']."', '".$inputs['email']."', '".$inputs['phone']."', '".$inputs['year_of_passing']."', '".$inputs['course']."', current_timestamp(), current_timestamp())";
            $result = mysqli_query($conn,$q);
        }
        catch (\Exception $exception)
        {
            echo  "<script>alert('Something went wrong');console.log('".$exception->getMessage()."')</script>";
        }
    }
}

$name = isset($_POST["name"]) ? $_POST["name"] : '';
$email= isset($_POST["email"]) ? $_POST["email"] : '';
$year= isset($_POST["year_of_passing"]) ? $_POST["year_of_passing"] : '';
$course = isset($_POST["course"]) ? $_POST["course"] : '';
$phone= isset($_POST["phone"]) ? $_POST["phone"] : '';


$result = false;
try
{
    $sql     = "select * from `codewalkerz` where `email`='$email' or `phone`='$phone'";
    $result  =  mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0)
    {
        $sql="INSERT INTO `codewalkerz` (`id`,`name`,`email`,`year_of_passing`,`course`,`phone`) VALUES (NULL,'$name','$email','$year','$course','$phone')";
        $result = mysqli_query($conn,$sql);
    }
}
catch (\Exception $exception)
{
    echo  "<script>alert('Something went wrong');console.log('".$exception->getMessage()."')</script>";
    $result = false;
}

if($result){
?>
<style>
#card {
    position: relative;
    width: 500px;
    display: block;
    margin: 40px auto;
    text-align: center;
    font-family: 'Source Sans Pro', sans-serif;
  }
  #upper-side {
    padding: 2em;
    background-color: rgb(36, 98, 36);
    display: block;
    color: #fff;
    border-top-right-radius: 8px;
    border-top-left-radius: 8px;
  }
  #checkmark {
    font-weight: lighter;
    fill: #fff;
    margin: -3.5em auto auto 80px;
  }
  
  #status {
    font-weight: lighter;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 1em;
    margin-top: -.2em;
    margin-bottom: 0;
  }
  #lower-side {
    padding: 2em 2em 5em 2em;
    background: #fff;
    display: block;
    border-bottom-right-radius: 8px;
    border-bottom-left-radius: 8px;
  }
  #message {
    margin-top: -.5em;
    color: #757575;
    letter-spacing: 1px;
  }
  #contBtn {
    position: relative;
    top: 1.5em;
    text-decoration: none;
    background: rgb(36, 98, 36);
    color: #fff;
    margin: auto;
    padding: .8em 3em;
    -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    border-radius: 25px;
    -webkit-transition: all .4s ease;
          -moz-transition: all .4s ease;
          -o-transition: all .4s ease;
          transition: all .4s ease;
  }
  #contBtn:hover {
    -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
    -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
    box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
    -webkit-transition: all .4s ease;
          -moz-transition: all .4s ease;
          -o-transition: all .4s ease;
          transition: all .4s ease;
  }
</style>
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
    <?xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
        <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
	c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
	c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
	c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
	c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
	c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
	C131.967,94.755,132.296,93.271,131.583,92.152z" />
        <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
      </svg>
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
  <p id='message'>
  <img src="./images/logo.png" height="150px" width="150px"></img>
  </p>
    <p id='message'>
                Congratulations, you have sucessfully registered.<br><br>
               <b> Click this link to join the whatsapp for further updates!!</b><br><br>
               <div style="border-radius:2px solid black; padding:10px; background-color:rgb(36, 98, 36);;border-radius:25px;">
               <div style="margin-top:5px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" height="40px" width="40px" version="1.1" id="Layer_1" viewBox="0 0 308 308" xml:space="preserve" stroke="#ffffff">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <g id="XMLID_468_"> <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156 c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687 c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887 c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153 c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348 c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802 c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922 c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0 c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458 C233.168,179.508,230.845,178.393,227.904,176.981z"/> <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716 c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396 c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188 l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677 c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867 C276.546,215.678,222.799,268.994,156.734,268.994z"/> </g> </g>

</svg></div><a style="font-size:25px; text-decoration:none; color:white; margin-left:20px;" href="https://chat.whatsapp.com/FnZoqa0qu1H1dknPIN1j7H">Click to join whatsapp group!! 
               </a>

               </div>
              </p>
    <a href="./codewalkerz.php" id="contBtn">Continue</a>
  </div>
</div>
<?php
}else{
?>
<style>
#card {
    position: relative;
    width: 500px;
    display: block;
    margin: 40px auto;
    text-align: center;
    font-family: 'Source Sans Pro', sans-serif;
  }
  #upper-side {
    padding: 2em;
    background-color: red;
    display: block;
    color: #fff;
    border-top-right-radius: 8px;
    border-top-left-radius: 8px;
  }
  #checkmark {
    font-weight: lighter;
    fill: #fff;
    margin: -3.5em auto auto 80px;
  }
  
  #status {
    font-weight: lighter;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 1em;
    margin-top: -.2em;
    margin-bottom: 0;
  }
  #lower-side {
    padding: 2em 2em 5em 2em;
    background: #fff;
    display: block;
    border-bottom-right-radius: 8px;
    border-bottom-left-radius: 8px;
  }
  #message {
    margin-top: -.5em;
    color: #757575;
    letter-spacing: 1px;
  }
  #contBtn {
    position: relative;
    top: 1.5em;
    text-decoration: none;
    background: red;
    color: #fff;
    margin: auto;
    padding: .8em 3em;
    -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
    border-radius: 25px;
    -webkit-transition: all .4s ease;
          -moz-transition: all .4s ease;
          -o-transition: all .4s ease;
          transition: all .4s ease;
  }
  #contBtn:hover {
    -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
    -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
    box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
    -webkit-transition: all .4s ease;
          -moz-transition: all .4s ease;
          -o-transition: all .4s ease;
          transition: all .4s ease;
  }
</style>
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
    <?xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      
      <h3 id='status'>
      Error
    </h3>
  </div>
  <div id='lower-side'>
    
  <p id='message'>
  <img src="./images/logo.png" height="150px" width="150px"></img>
</p>
  <p id='message'>
      oops! kindly verify your details 
    </p>
    <p id='message'>
      If error persists <a href="mailto:society.developers.2023@gmail.com">contact us</a>
    </p>
    <a href="./codewalkerz.php" id="contBtn">Continue</a>
  </div>
</div>

<?php
}
?>

<?php
//added to db now sending mail
//include("mailsender.php");
/* $link="</dummylink>";
$subject="Registration Accepted";
$body="Hello ".$name." your response has been recorded, Congratulations for registering in DAY 1 event see you there\n";
$body.=$link;
$body.=" \nWe wish you all the very best for the contest. Thank you for Participating";
sendamail($email,$subject,$body);
$bodynew="";
$bodynew.="\nName: ".$name;
$bodynew.="\Email: ".$email;
$bodynew.="\nYear of Passing: ".$year;
$bodynew.="\nCourse: ".$course;
$bodynew.="\nphone: ".$phone;
sendamail("society.developers.2023@gmail.com","new registration",$bodynew);
 */
/* if($result)
echo "success"; */
?>

