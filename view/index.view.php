<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="view/style.css "type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <title>Forma</title>
</head>
<body>
<ul>

<?php
if(isset($_POST ['send'])){
    foreach ($_POST as $label => $item){
      $item = htmlspecialchars($item); //atvaizduojamas kodas kaip paprasta eilute - konvertuojama, nevykdomas kodas
      echo "<li>$label:$item</li>";
    }
    //echo $_POST['lastname'];
}
?>
</ul>

<form method="post">
<h5>Duomenų informacija</h5>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">El. pašto adresas:<link href="https://www.post.lt/pasto-kodu-ir-adresu-paieska"></link><span class="required">*</span></label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputEmail" name="email" required/>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Slaptažodis:<span class="required">*</span></label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword" name="password" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Patvirtinti slaptažodį:<span class="required">*</span></label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword" name="password" required/>
    </div>
  </div>
    
  <div class="form-group row">
    <label for="checkbox" class="col-2"></label>
    <div class="col-sm-5">
    <div class="form-check-label"><input type="checkbox" class="form-check-input" id="check" name="checkbox" required/>
    Sutinku su <a href="https://termly.io/resources/templates/terms-and-conditions-template/" target="blank">taisyklėmis</a><span class="required">*</span></div>
  </div>
  </div>

  <h5>Pasitikrinkite sąskaitos adresą</h5>

  <div class="form-group row">
    <label for="inputGender" class="col-sm-2 col-form-label">Lytis<span class="required">*</span></label>
    <div class="col-sm-5">
      <div class="input-group-prepend"></div>
    <select class="custom-select" id="inputGroupSelect" name="gender" required/>
      <option selected>Moteris</option>
      <option value="Vyras">Vyras</option>
      <option value="Nenurodysiu">Nenurodysiu</option>
    </select>
  </div>
  </div>
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Vardas:<span class="required">*</span></label>
    <div class="col-sm-5">
      <input type="name" class="form-control" id="inputName" name="fname" required/>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputSurname" class="col-sm-2 col-form-label">Pavardė:<span class="required">*</span></label>
    <div class="col-sm-5">
      <input type="surname" class="form-control" id="inputSurname" name="lname" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Gatvė, namo (buto) nr.:<span class="required">*</span></label>
    <div class="col-3">
      <input type="text" class="form-control" name="street" required/>
    </div>
    <div class="col-2">
      <input type="text" class="form-control" name="apartNr" required/>
    </div>
    </div>

  <div class="form-group row">
    <label for="inputPostCode" class="col-sm-2 col-form-label">Pašto kodas:<span class="required">*</span></label>
    <div class="col-3">
    <input type="text" class="form-control" name="postCode" required/>
    </div>
    <div class="col-2">
    <span>Pašto kodo <a href="https://www.post.lt/pasto-kodu-ir-adresu-paieska"
        target="blank">paieška</a></span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputCountry" class="col-sm-2 col-form-label">Šalis<span class="required">*</span></label>
    <div class="col-sm-5">
      <div class="input-group-prepend"></div>
    <select class="custom-select" id="inputGroupSelect" name="country" required/>
      <option selected>-</option>
      <option value="Lietuva">Lietuva</option>
      <option value="Kita">Kita</option>
    </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Telefonas:<span class="required">*</span></label>
    <div class="col-sm-5">
      <input type="phone" class="form-control" id="inputPhoneNumber" name="phoneNumber" required/>
    </div>
  </div>


  <div class="form-group row">
    <label for="textarea" class="col-sm-2 col-form-label">Papildoma informacija
    <div class="emptyarea">(Pavyzdžiui, vartelių/durų kodas)</div></label>
    <div class="col-sm-5">
    <textarea class="form-control" id="textarea" name="textArea" rows="3"></textarea>
  </div>
</div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <div class="info">Prašome užpildyti visus pažymėtus laukus<span class="required">*</span></div>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <input type="submit" class="btn btn-primary" value="Registruotis" name="send">
  </div>
  </div>
</form>

</body>
</html>

