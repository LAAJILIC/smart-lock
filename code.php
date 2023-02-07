<?php
session_start();
include('databaseconfig.php');

if(isset($_POST['register_btn']))
{
    $fullname = $_POST['full_name'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $userProperties = [
        'phoneNumber' => '+49'.$phone,
        'password' => $password,
        'displayName' => $fullname,
     
    ];
    
    $createdUser = $auth->createUser($userProperties);
    
    if($createdUser)
    {
        $_SESSION['status'] = "User registered successuflly";
        header('Location: register.php');
        exit();
    }
    else   {
        $_SESSION['status'] = "User not created yet";
        header('Location: register.php');
        exit();
    }
}
if(isset($_POST['accurate_project']))
{
    //declare how data will be stored in firebase
    $project_title = $_POST['project'];
    $construction_location = $_POST['location'];
    $construction_company = $_POST['company'];
    $company_contact = $_POST['contact_email'];
    $project_date = $_POST['date'];
    $project_fdoor = $_POST['door'];
    
    //save data in firebase
    $postData = [
        'ptitle'=>$project_title,
        'plocation'=>$construction_location,
        'pcompany'=>$construction_company,
        'pcontact'=>$company_contact,
        'pdate'=>$project_date,
        'doorstatus'=>$project_fdoor,
    ];

    $ref_table = "projects";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result) {
        $_SESSION['status'] = "Door opened successuflly";
        header('Location: index.php');
    }
    else 
    {
        $_SESSION['status'] = "Door is still locked";
        header('Location: index.php');
    }
}

?>