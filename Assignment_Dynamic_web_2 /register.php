
<?php
    include "include/header.php";
    include "include/database.php";


    ?>

<section class="career add-flex" id="career">
            <section id= "between-sec">
                <h1 class="custom-font">Register</h1>
                <h2 class="custom-font-secondary between-sec-color">Form</h2>
                <div class="main-container">
            <h3 class="custom-font-secondary">
                Personal Information
            </h3>
            <form class="form-section" action="include/register.db.php" method="POST">
                <table class="table table-section" align="center" cellspacing="10">
                    <tr class="table-content">
                        <td>First name:</td>
                        <td> <input type="text" class="input" placeholder="Please enter your first name" id="fname" name="fname" value="">
                            <span id="erroname"></span><br>
                        </td>


                    </tr>
                    <tr class="table-content">

                        <td>Last name:</td>
                        <td> <input type="text" class="input" placeholder="Please enter your last name" id="lname" name="lname" value="">
                            <span id="errolname"></span><br>
                        </td>

                    </tr>
                    <tr class="table-content">
                        <td>Mobie number:</td>
                        <td> <input type="text" class="input" placeholder="Please enter your mobile number" id="numberMobi" name="numberMobi" value="">
                            <span id="erroMobi"></span><br>
                        </td>

                    </tr>

                    <tr class="table-content">
                        <td>Home Address:</td>
                        <td>
                            <textarea class="input" placeholder="Please enter your postal address" id="homeAdd" name="homeAdd" cols='25' rows="5"></textarea>
                            <span id="erroHome"></span><br>
                        </td>

                    </tr>

                    <tr class="table-content">
                        <td>Email Address:</td>
                        <td><input type="email" class="input" placeholder="Please enter your email address" id="email" name="emailAdd" value=""><br>

                            <span id="erroEmail"></span><br>
                        </td>

                    </tr>


                    <tr class="table-content">
                        <td>Gender: </td>

                        <td>
                            <input type="radio" id="gender" name="gender" value="male">
                            Male
                            <input type="radio" id="gender" name="gender" value="female">
                            Female<br>
                            <span id="erroGender"></span><br>
                        </td>

                    </tr>

                    <tr class="input">
                        <td>State: </td>
                        <td> <select id="state" list="state" name="state" value="Select State"> 
                                <option selected="selected" value="Select State">Select State
                                <option value="NSW">NSW </option>
                                <option value="VIC">VIC </option>
                                <option value="WA"> WA </option>
                                <option value="QLS">QLS </option>
                                <option value="SA">SA </option>
                            </select>
                            <span id="erroState"></span><br>
                        </td>
                    </tr>
                    <tr class="table-content">
                        <td> How did you hear us? </td>
                        <td> 
                                <input type="checkbox" name="hearUs" id="hearUs" value="Web Site">WebSite 
                                <input type="checkbox" name="hearUs" id="hearUs" value="TV Ads">TV Ads
                                <input type="checkbox" name="hearUs" id="hearUs" value="Print Ads">Print Ads 
                                <input type="checkbox" name="hearUs" id="hearUs" value="Friends">Friends 
                        </td>
                            <span id="erroHear"></span><br>
                        </td>
                        
                    </tr>
                    <tr class="table-content">
                        <td> Would you recommend us? </td>
                        <td> <input type="radio" id="reco" name="reco" value="Yes">
                            <label for="male">Yes</label>
                            <input type="radio" id="reco" name="reco" value="No">
                            <label for="male">No</label>
                            <span id="erroreco"></span><br>
                        </td>
                    </tr>

                    <tr class="table-content">
                        <td>
                            <button type="button" class="input btn btn-submit" name="submit" onclick="getInfo()"> Register </button>
                            <button type="clear" class="input btn btn-submit" name="clear">Clear</button>
                        </td>

                    </tr>


                </table>
            </form>

        </div>
    </div>
            </section>
        </section>

        <?php
include "include/footer.php";

?>