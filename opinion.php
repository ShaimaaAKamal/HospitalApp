<?php include_once('layouts/header.php');
if(empty($_POST)){
    header('location:errors/405_error.php');
}
?>
<form method='POST' action='result.php' style='padding-left:20px; padding-right:20px;' >
    <input type='hidden' name='mob' value=<?=isset($_POST['phone'])?$_POST['phone']:"";?>>
    <table class="table table-striped table-bordered" >
    <caption style='caption-side:top ;text-align:center; color:#000; font-size:2rem;'>Hospital Survey</caption>
        <thead>
            <tr>
                <th scope="col">Questions</th>
                <th scope="col">Bad</th>
                <th scope="col">Good</th>
                <th scope="col">Verygood</th>
                <th scope="col">Excellent</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Are you satisifed with cleanliness level?</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question1" value="bad" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question1" value="good" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question1" value="verygood" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question1" value="excellent" required >
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with services prices?</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question2" value="bad" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question2" value="good" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question2" value="verygood" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question2" value="excellent" required >
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with nursing service</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question3" value="bad" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question3" value="good" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question3" value="verygood" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question3" value="excellent" required >
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with the doctor's level?</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question4" value="bad" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question4" value="good" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question4" value="verygood" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question4" value="excellent" required >
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Are you satisifed with quiteness in hospital?</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question5" value="bad" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question5" value="good" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question5" value="verygood" required >
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" name="question5" value="excellent" required >
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div class='text-center'>
    <button type="submit" class="btn btn-primary">Result</button>

    </div>

</form>
<?php include_once('layouts/footer.php'); ?>