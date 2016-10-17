<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 17-10-2016
 * Time: 03:32 AM
 */

class obj
{

    function generate($res)
    {
        $conn= mysqli_connect('localhost','root','','lostfound');
        $q=mysqli_query($conn,"SELECT * FROM `object`");
        if($q)
        {
            while ($row=mysqli_fetch_array($q))
            {
                if(in_array($row['obj_id'],$res))
                {
                    echo '<div class="col-md-4">'.
                            '<div class="input-group">'.
                                '<span class="input-group-addon"><img href="object.php?id='.$row['obj_id'].'" src="objimg/'.$row['img_url'].'" height="150px" width="150px"></span>'.
                                '<a href="object.php?id='.$row['obj_id'].'">&nbsp;&nbsp;'.$row['obj_name'].'</a>'.
                            '</div>'.
                        '</div>';
                }
            }
        }

    }


}