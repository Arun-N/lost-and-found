<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 24-10-2016
 * Time: 10:35 PM
 */
class question
{
    public $id='';

    function generate(){

        $this->id= $_GET['id'];
        $conn= mysqli_connect('localhost','root','','lostfound');
        $q="SELECT * FROM `question` WHERE `obj_id`='$this->id'";
        $res=mysqli_query($conn,$q);
        $count=0;

        $answers=array();
        while ($row=mysqli_fetch_array($res))
        {
            $count++;
            $ques=$row['question'];
            $ans=$row['answer'];
            $answers[]=$ans;
            $opt=unserialize($row['options']);

            echo
            '<div class="row">'.
                        '<div class="col-md-12">'.
                            '<div class="panel panel-trans">'.
                                '<div class="panel-heading">'.
                                    '<h3 class="text-center">Question'.' '.$count.'</h3>'.
                                '</div>'.
                                '<div class="panel-body">'.
                                    '<h3>'.$ques.'</h3>'.
'<div class="row"><div class="col-md-12"><br></div></div>'.
'<div class="row">'.
    '<div class="col-md-6">'.
        '<label for="q1_ans1"><input type="radio" name="radio_answer'.$count.'" id="q1_ans1" value='.$opt[0].'  checked>&nbsp;&nbsp;'.$opt[0].'</label>'.
    '</div>'.
    '<div class="col-md-6">'.
        '<label for="q1_ans2"><input type="radio" name="radio_answer'.$count.'" id="q1_ans2" value='.$opt[1].'>&nbsp;&nbsp;'.$opt[1].'</label>'.
    '</div>'.
'</div>'.

'<div class="row"><div class="col-md-12"><br><br></div></div>'.

'<div class="row">'.
    '<div class="col-md-6">'.
        '<label for="q1_ans3"><input type="radio" name="radio_answer'.$count.'" id="q1_ans3" value='.$opt[2].'>&nbsp;&nbsp;'.$opt[2].'</label>'.
    '</div>'.
    '<div class="col-md-6">'.
        '<label for="q1_ans4"><input type="radio" name="radio_answer'.$count.'" id="q1_ans4" value='.$opt[3].'>&nbsp;&nbsp;'.$opt[3].'</label>'.
    '</div>'.
'</div>'.
'</div>'.
'</div>'.
'</div>'.
'</div>';



        }
$_SESSION['answers']=$answers;
$_SESSION['qcount']=$count;


    }
}