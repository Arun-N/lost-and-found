<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 17-10-2016
 * Time: 04:42 AM
 */


class single
{

    public $obj_name='';
    public $img_url='';
    public $id='';


    function __construct()
    {
       $this->id=$_GET['id'];
        $this->retrieve();


    }

    /**
     *
     */
    public function retrieve()
    {

        $conn= mysqli_connect('localhost','root','','lostfound');
        $q=mysqli_query($conn,"SELECT * FROM `object` WHERE `obj_id`='$this->id'");
        if($q) {
            $row = mysqli_fetch_assoc($q);
            $this->img_url = $row['img_url'];

            $this->obj_name = $row['obj_name'];
            $_SESSION['oid']=$row['uid'];

            $d=unserialize($row['date']);
            $status=$row['status'];
        }
        $d1=date_create('',timezone_open("Asia/Kolkata"));
        $_SESSION['d']=$d;
        $_SESSION['d1']=$d1;
        $dif=date_diff($d1,$d);

        $_SESSION['difdate']=$dif;
        $_SESSION['ostatus']=$status;
    }

    /**
     * @return null
     */
    public function getImgUrl()
    {
        return $this->img_url;
    }

    /**
     * @return null
     */
    public function getObjName()
    {
        return $this->obj_name;
    }



    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null
     */

}
?>