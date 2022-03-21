<?php include_once('layouts/header.php');
if(empty($_POST)){
    header('location:errors/405_error.php');
}
function getQuestionValue($input){
    switch($input){
        case'bad':
        return '0';
        break;
        case'good':
        return '3';
        break;
        case'verygood':
        return '5';
        break;
        case'excellent':
        return '10';
        break;
        default:
        break;
    }
}
function getReviewgrades($input){
    $array=[];
    foreach($input AS $index=> $value){
        if($index == 'mob')
        continue;
        else{
           array_push($array,getQuestionValue($value)) ;
        }
    }
    return $array;
}
function getTotalReviewgrade($input){
   return array_sum($input);
}
function getReview($input){
    if($input < 25)
   $_['POST']['status']='Bad';
   elseif($input >= 25 && $input < 35 ) 
    $_['POST']['status']='Good';
    elseif($input >= 35 && $input < 45 ) 
    $_['POST']['status']='Very good';
    else 
    $_['POST']['status']='Excellent';
 return  $_['POST']['status'];
}
$phone_number=$_POST['mob'];
$review_Grades=getReviewgrades($_POST);
$total_review_grade=getTotalReviewgrade($review_Grades);
$review=getReview($total_review_grade);
 ?>
 <div style='padding-left:30px; padding-right:30px;'>
     <table class="table table-striped table-bordered" >
 <caption style='caption-side:top ;text-align:center; color:#000; font-size:2rem;'>Hospital Review</caption>
        <thead>
            <tr>
                <th scope="col">Questions</th>
                <th scope="col">Review</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Are you satisifed with cleanliness level?</th>
                <td>
                    <?=isset($_POST['question1'])?$_POST['question1']:"";?>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with services prices?</th>
                <td>
                <?=isset($_POST['question2'])?$_POST['question2']:"";?>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with nursing service</th>
                <td>
                <?=isset($_POST['question3'])?$_POST['question3']:"";?>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with the doctor's level?</th>
                <td>
                <?=isset($_POST['question4'])?$_POST['question4']:"";?>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with quiteness in hospital?</th>
                <td>
                <?=isset($_POST['question5'])?$_POST['question5']:"";?>
                </td>
            </tr>
            <tr class='alert <?= ($review == 'Bad')?'alert-danger':'alert-success'?>'>
                <th scope="row">Total review</th>
                <td >
                    <?= $review;?>
                </td>
            </tr>
        </tbody>
    </table>
    <div class='alert alert-warning text-center'><?= ($review == 'Bad')?"We will call you back on your number $phone_number":"Thank you."?><div>
</div>
<?php include_once('layouts/footer.php'); ?>
