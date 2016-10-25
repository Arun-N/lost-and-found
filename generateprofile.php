<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 17/10/2016
 * Time: 1:33 PM
 */

class obj
{

    function generate($res)
    {
        $conn= mysqli_connect('localhost','root','','lostfound');
        $q=mysqli_query($conn,"SELECT * FROM `object` WHERE `uid`='$res'");
        if($q)
        {
            while ($row=mysqli_fetch_array($q))
            {
                    echo '<div class="col-md-4">'.
                        '<div class="input-group">'.
                        '<span class="input-group-addon"><img href="object.php?id='.$row['obj_id'].'" src="objimg/'.$row['img_url'].'" height="150px" width="150px"></span>'.
                        '<h3>&nbsp;&nbsp;'.$row['obj_name'].'</h3>'.
                        '</div>'.
                        '</div>';

            }
        }

    }


}