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
    public $q1='';
    public $q2='';
    public $a1='';
    public $a2='';

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
        }
        $qA=array();
        $qS=array();
        $qq=mysqli_query($conn,"SELECT * FROM `question` WHERE `obj_id`='$this->id'");

        while ($r=mysqli_fetch_array($qq))
        {
            $qA[]=$r['question'];
            $qS[]=$r['answer'];

        }

        $this->q1=$qA[0];
        $this->q2=$qA[1];
        $this->a1=$qS[0];
        $this->a2=$qS[1];

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
    public function getQ1()
    {
        return $this->q1;
    }

    /**
     * @return null
     */
    public function getQ2()
    {
        return $this->q2;
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
    public function getA1()
    {
        return $this->a1;
    }

    /**
     * @return null
     */
    public function getA2()
    {
        return $this->a2;
    }
}
?>