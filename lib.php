<?php 
function AddNewUser($name,$email,$password,$newsletter_tiers,$behance){
        $co = mysqli_connect("localhost","root","","fatura");

         $qu = " INSERT INTO `user`(`name`, `email`, `password`, `newsletter_tiers`, `behance`) VALUES ('$name','$email','$password','$newsletter_tiers','$behance')";
        mysqli_query($co,$qu);

        $res = mysqli_affected_rows($co);
        if ($res == 1) {
            return true;
        }
        else{
            return false;
        }

    }

    function loginUser($email,$password){
        $co = mysqli_connect("localhost","root","","fatura");

        $qu = " SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'  ";
        
        $q = mysqli_query($co,$qu);

        $res = mysqli_fetch_assoc($q);

        return $res;


    }
    function loginadmin($username,$password){
        $co = mysqli_connect("localhost","root","","fatura");

        $qu = " SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'  ";
        
        $q = mysqli_query($co,$qu);

        $res = mysqli_fetch_assoc($q);

        return $res;


    }

    function ShowNewletters(){

        $co = mysqli_connect("localhost","root","","fatura");

        $qu = " SELECT * FROM `newsletter`";
        
        $q = mysqli_query($co,$qu);

        $Newletters=[];
        while($res = mysqli_fetch_assoc($q)){

            $Newletters[]=$res;
        }

        return $Newletters;


    }
    function ShowNewlettersss(){

        $co = mysqli_connect("localhost","root","","fatura");

        $qu = " SELECT * FROM `newslettes_leirss`";
        
        $q = mysqli_query($co,$qu);

        $Newletters=[];
        while($res = mysqli_fetch_assoc($q)){

            $Newletters[]=$res;
        }

        return $Newletters;


    }

    
    function unsubscripe($id){

        $co = mysqli_connect("localhost","root","","fatura");


        $qu = "DELETE FROM `user` WHERE `id` = '$id' ";
        mysqli_query($co,$qu);

        $res = mysqli_affected_rows($co);
        if ($res == 1) {
            return true;
        }
        else{
            return false;
        }
    }


    function ShowNewletter($newsletter_tier){

        $co = mysqli_connect("localhost","root","","fatura");

        $qu = " SELECT * FROM `newsletter` WHERE `newsletter_tier` = '$newsletter_tier' ";
        
        $q = mysqli_query($co,$qu);

        $Newletters=[];
        while($res = mysqli_fetch_assoc($q)){

            $Newletters[]=$res;
        }

        return $Newletters;


    }