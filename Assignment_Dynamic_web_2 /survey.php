
<?php
    include "include/header.php";
    include "include/database.php";

    ?>

<section class = "contact-us" id= "contact">
            <section  class = "container">
                <section class="center add-padding-right">
                    <h1 class = "custom-font">Survey</h1>
                    <ol class="table-list">
                            <li>Need improvements</li>
                            <li>Satisfactory</li>
                            <li>Good</li>
                            <li>Very Good</li>
                            <li>Excellent</li>
                        </ol></h2>
                </section>
                <section class = "form-container add-flex"
                    <form action = "include/survey.db.php" method="POST">
                        <input type="text" id = "num1" class="input" placeholder="Durability" name = "survey1" required>
                        <input type="text" id = "num2" class="input" placeholder="Style/Design" name = "survey2" required>
                        <input type="text" id = "num3" class="input" placeholder="Eco friendliness" name = "survey3" required>
                        <input type="text" id = "num4" class="input" placeholder="Customer service" name = "survey4" required>
                        <input type="text" id = "num5" class="input" placeholder="Quality of product" name = "survey5" required>
                        <textarea id ="comment" name="comment" class="text-area" placeholder="What else we need to improve?" required></textarea>
                        <button type="submit" class="input btn btn-submit" onclick="Survey()"> Submit </button>
                        <button type="submit" class="input btn btn-submit" onclick="refresh()"> Clear </button>
                    </form>
                </section>
            </section>
        </section>

        <?php
include "include/footer.php";

?>