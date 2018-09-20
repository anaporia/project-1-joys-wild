<?php
// define variables and set to empty values
$nameError = $emailError = $messageError = $phoneError = "";
$name = $mail = $message = $phone = "";
$error =[];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $error["nameError"] = "Veuillez remplir ce champ.";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $error["nameError"] = "Seulement les lettres et espaces sont autorisés.";
        }
    }
    if (empty($_POST["mail"])) {
        $error["emailError"] = "Veuillez remplir ce champ.";
    } else {
        $email = test_input($_POST["mail"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error["emailError"] = "Le format n'est pas valide.";
        }
    }
    if (empty($_POST["phone"])) {
        $error["phoneError"] = "Veuillez remplir ce champ.";
    } else {
        $phone = test_input($_POST["phone"]);
        // check if name only contains letters and whitespace
        if (!preg_match("#^\+?[0-9\./, -]{6,20}$#",$phone)) {
            $error["phoneError"] = "Seulement les chiffres sont autorisés.";
        }
    }
    if (empty($_POST["message"])) {
        $error["messageError"] = "Veuillez remplir ce champ.";
    } else {
        $message = test_input($_POST["message"]);
    }
    if (count($error) == 0){
        $send = "Yes data !!!! Even more data !!!! Always data !!!!!!! Mouahaha !!!";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo strip_tags($_SERVER["contact.php"]);?>">
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php if(isset($_POST["name"])) echo $_POST["name"]; ?>" required/>
        <p class="error">* <?php echo $nameError;?></p>
    </div>
    <div class="form-group">
        <label for="mail">E-mail :</label>
        <input type="email" class="form-control" name="mail" id="mail" value="<?php if(isset($_POST["mail"])) echo $_POST["mail"]; ?>" required>
        <p class="error">* <?php echo $emailError;?></p>
    </div>
    <div class="form-group">
        <label for="phone">Telephone number:</label>
        <input type="text" class="form-control" name="phone" id="phone" value="<?php if(isset($_POST["phone"])) echo $_POST["phone"]; ?>"required>
        <p class="error">* <?php echo $phoneError;?></p>
    </div>
    <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" name="message" id="message" placeholder="Your message" value="<?php if(isset($_POST["message"])) echo $_POST["message"]; ?>" required></textarea>
        <p class="error">* <?php echo $messageError;?></p>
    </div>

    <div class="button">
        <input type="submit" class="btn btn-primary" value="Send">
    </div>
    <div id="send">
        <p><?php echo $send; ?></p>
    </div>
</form>