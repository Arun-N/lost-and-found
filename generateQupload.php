<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 22-10-2016
 * Time: 02:31 PM
 */


class question
{
    function generate($count)
    {
        for($i=1;$i<=$count;$i++)
        {
            echo

                '<div class="row">'.
                '<!--<div class="col-md-4">'.
                '</div>-->'.
                '<div class="col-md-12">'.
                '<div class="panel panel-trans">'.
                '<div class="panel-heading">
                                    QUESTION'.$i.
                           '</div>'.
                '<div class="panel-body">'.
                '<label for="ques_'.$i.'">Question</label>'.
                '<input type="text" class="form-control" id="ques_'.$i.'" name="ques_'.$i.'" placeholder="Enter the first question..." autofocus>'.
                '<div class="row"><div class="col-md-12"><br></div></div>'.

                '<!-- Question panel START -->'.

                '<label for="answer_block_'.$i.'">Answers</label>'.
                '<div id="answer_block_'.$i.'">'.
                '<div class="row">'.
                '<div class="col-md-6">'.
                '<div class="input-group">'.
                '<input type="text" class="form-control" id="opt'.$i.'1" name="opt'.$i.'1" placeholder="Answer 1" required>'.
                '<span class="input-group-addon">'.
                '<input type="radio" id="radio_ans'.$i.'1" name="correct_ans_q'.$i.'" value="1" checked >'.
                '</span>'.
                '</div>'.
                '</div>'.
                '<div class="col-md-6">'.
                '<div class="input-group">'.
                '<input type="text" class="form-control" id="opt'.$i.'2" name="opt'.$i.'2" placeholder="Answer 2" required>'.
                '<span class="input-group-addon">'.
                '<input type="radio" id="radio_ans'.$i.'2" name="correct_ans_q'.$i.'" value="2">'.
                '</span>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '<div class="row"><div class="col-md-12"><br></div></div>'.
                '<div class="row">'.
                '<div class="col-md-6">'.
                '<div class="input-group">'.
                '<input type="text" class="form-control" id="opt'.$i.'3" name="opt'.$i.'3" placeholder="Answer 3" required>'.
                '<span class="input-group-addon">'.
                '<input type="radio" id="radio_ans'.$i.'3" name="correct_ans_q'.$i.'" value="3" >'.
                '</span>'.
                '</div>'.
                '</div>'.
                '<div class="col-md-6">'.
                '<div class="input-group">'.
                '<input type="text" class="form-control" id="opt'.$i.'4" name="opt'.$i.'4" placeholder="Answer 4" required>'.
                '<span class="input-group-addon">'.
                '<input type="radio" id="radio_ans'.$i.'2" name="correct_ans_q'.$i.'" value="4" >'.
                '</span>'.
                '</div>'.
                '</div>'.
                '</div>'.
                '</div>'.

                '<!-- Question panel END -->'.

                '</div>'.
                '</div>'.
                '</div>'.
                '</div>';
        }
    }
}
