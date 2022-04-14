<?php
  session_start ();
 ?>

<!DOCTYPE html>
<html lang="de">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />


  <style type="text/css">
  #einkaufsliste {
    position: absolute;
    height: auto;
    width: 200px;
    left: 260px;
    top: 0px;
  }
  </style>

  <style type="text/css">

      table {
        border: 2px solid black;
        background-color: #57FEFF;
      }
      th {
        border-bottom: 5px solid #000;
      }
      td {
        border-bottom: 2px solid #666;
      }

  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="index2.php" class="nav-link">
          <span class="link-text logo-text">Stock.me</span>
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>

      <li class="nav-item">
        <a href="einkaufsliste.php" class="nav-link">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="basket-shooping"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512"
            class="fa-solid fa-basket-shopping">
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M171.7 191.1H404.3L322.7 35.07C316.6 23.31 321.2 8.821 332.9 2.706C344.7-3.409 359.2 1.167 365.3 12.93L458.4 191.1H544C561.7 191.1 576 206.3 576 223.1C576 241.7 561.7 255.1 544 255.1L492.1 463.5C484.1 492 459.4 512 430 512H145.1C116.6 512 91 492 83.88 463.5L32 255.1C14.33 255.1 0 241.7 0 223.1C0 206.3 14.33 191.1 32 191.1H117.6L210.7 12.93C216.8 1.167 231.3-3.409 243.1 2.706C254.8 8.821 259.4 23.31 253.3 35.07L171.7 191.1zM191.1 303.1C191.1 295.1 184.8 287.1 175.1 287.1C167.2 287.1 159.1 295.1 159.1 303.1V399.1C159.1 408.8 167.2 415.1 175.1 415.1C184.8 415.1 191.1 408.8 191.1 399.1V303.1zM271.1 303.1V399.1C271.1 408.8 279.2 415.1 287.1 415.1C296.8 415.1 304 408.8 304 399.1V303.1C304 295.1 296.8 287.1 287.1 287.1C279.2 287.1 271.1 295.1 271.1 303.1zM416 303.1C416 295.1 408.8 287.1 400 287.1C391.2 287.1 384 295.1 384 303.1V399.1C384 408.8 391.2 415.1 400 415.1C408.8 415.1 416 408.8 416 399.1V303.1z"/>
              ></path>
            </g>
          </svg>
          <span class="link-text">Einkaufsliste</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="vorrat.php" class="nav-link">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="box-open"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 512"
            class="fa-solid fa-box-open">
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M75.23 33.4L320 63.1L564.8 33.4C571.5 32.56 578 36.06 581.1 42.12L622.8 125.5C631.7 143.4 622.2 165.1 602.9 170.6L439.6 217.3C425.7 221.2 410.8 215.4 403.4 202.1L320 63.1L236.6 202.1C229.2 215.4 214.3 221.2 200.4 217.3L37.07 170.6C17.81 165.1 8.283 143.4 17.24 125.5L58.94 42.12C61.97 36.06 68.5 32.56 75.23 33.4H75.23zM321.1 128L375.9 219.4C390.8 244.2 420.5 255.1 448.4 248L576 211.6V378.5C576 400.5 561 419.7 539.6 425.1L335.5 476.1C325.3 478.7 314.7 478.7 304.5 476.1L100.4 425.1C78.99 419.7 64 400.5 64 378.5V211.6L191.6 248C219.5 255.1 249.2 244.2 264.1 219.4L318.9 128H321.1z"
              ></path>
            </g>
          </svg>
          <span class="link-text">Vorrat</span>
        </a>
      </li>

      <li class="nav-item" id="themeButton">
        <a href="index.php" class="nav-link">
          <svg
            class="theme-icon"
            id="lightIcon"
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="login"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            class="svg-inline--fa fa-moon-stars fa-w-16 fa-7x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7a150.3 150.3 0 0 0-76.1 130.8c0 94 85.4 165.4 178.5 147.7z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <span class="link-text">Ausloggen</span>
        </a>
      </li>
    </ul>
  </nav>

<body>
<!--
  <div id="einkaufsliste">


  <h1>Einkaufsliste</h1>

    <button onclick="addNewItem(); updateList();">Neuen Eintrag hinzufügen</button>

    <ul id="list">

    </ul>

    <script>

      let shoppingItems = getShoppingItemsFromLocalStorage();

      updateList();

      function getShoppingItemsFromLocalStorage() {
          let items = localStorage.getItem('shoppingItems');

          if (items == null || items == '') {
              items = [];
            } else {
              items = items.split(',');
            }

            return items;
          }

          function addNewItem() {
            let item = prompt('Was möchtest du hinzufügen?');

            if (item != null) {
              shoppingItems.push(item);
              localStorage.setItem('shoppingItems', shoppingItems);
            }
          }

          function removeItem(itemIndex) {
            shoppingItems.splice(itemIndex, 1);
            localStorage.setItem('shoppingItems', shoppingItems);
          }

          function updateList() {
            document.getElementById('list').innerHTML = '';

            for (let index = 0; index < shoppingItems.length; index += 1) {
              document.getElementById('list').innerHTML += '<li>' + shoppingItems[index] +
                ' <button onclick="removeItem(' + index + '); updateList();">X</button></li>';
              }
            }
    </script>
  </div>

      <form action="#" method="post">
        <fieldset style = "width: 120px; margin:  0px auto;">
          <legend>Produktname:</legend>
          <input type="text" name="Produktname">
        </fieldset>
        <fieldset style = "width: 120px; margin:  0px auto;">
          <legend>Anzahl:</legend>
          <input type="text" name="Anzahl">
        </fieldset>
        <fieldset style = "width: 120px; margin:  0px auto;">
          <legend>Laden:</legend>
          <input type="text" name="Laden">
        </fieldset style = "width: 120px; margin:  0px auto;">
        <input type="submit" value="Speichern">
      </form>
-->

      <center>
          <h1>Einkaufsliste</h1>
          <h2>Produkt hinzufügen</h2>

          <form action="testausführung.php" method="post">

              <p>
                  <fieldset style = "width: 120px; margin:  0px auto;">
                  <label for="Produktname">Produktname:</label>
                  <input type="text" name="Produktname" id="Produktname">
                  </fieldset>
              </p>

              <p>
                  <fieldset style = "width: 120px; margin:  0px auto;">
                  <label for="Produktkategorie">Produktkategorie:</label>
                  <input type="text" name="Produktkategorie" id="Produktkategorie">
                  </fieldset>
              </p>

              <p>
                  <fieldset style = "width: 120px; margin:  0px auto;">
                  <label for="Menge">Menge:</label>
                  <input type="text" name="Menge" id="Menge">
                  </fieldset>
              </p>

              <p>
                  <fieldset style = "width: 120px; margin:  0px auto;">
                  <label for="Ablaufdatum">Ablaufdatum:</label>
                  <input type="text" name="Ablaufdatum" id="Ablaufdatum">
                  </fieldset>
              </p>

              <p>
                  <fieldset style = "width: 120px; margin:  0px auto;">
                  <label for="Laden">Laden:</label>
                  <input type="text" name="Laden" id="Laden">
                  </fieldset>
              </p>

              <input type="submit" value="Hinzufügen">

              <p></p>

          </form>

          <?php

          $conn = mysqli_connect("10.35.232.77:3306","k174708_db","mJl70!m0","k174708_stockmeapp");

          // Check connection
          if($conn === false){
              die("ERROR: Could not connect. "
                  . mysqli_connect_error());
          }

          $sqlget = "SELECT * FROM Einkaufsliste2";
          $sqldata = mysqli_query($conn, $sqlget) or die("Error");
?>
          <table style="background-color:#ffffff;>"
<?php
            echo "<tr><th>Produktname</th><th>Produktkategorie</th><th>Menge</th><th>Ablaufdatum</th><th>Laden</th></tr>";

          while ($row = mysqli_fetch_array($sqldata)) { //MYSQLI_ASSOC
            echo "<tr><td>";
            echo $row['Produktname'];
            echo "</td><td>";
            echo $row['Produktkategorie'];
            echo "</td><td>";
            echo $row['Menge'];
            echo "</td><td>";
            echo $row['Ablaufdatum'];
            echo "</td><td>";
            echo $row['Laden'];
            echo "</td><td>"; ?>
            <td><input type="button" value="Löschen"></td> <?php
            echo "</td></tr>";
          }

          echo "</table>";

           ?>
           <script>
           $('input[type="button"]').click(function(e){
              $(this).closest('tr').remove()
           })
           </script>

      </center>

      <?php
      function einkauf_done()
      {
          $db = new mysqli("10.35.232.77:3306","k174708_db","mJl70!m0","k174708_stockmeapp");

          $sql_insert="insert into vorrat(anzahl,mhd,name) select (Menge,Ablaufdatum,Produktname) from Einkaufsliste2";

          $truncatetable= mysql_query("TRUNCATE TABLE Einkaufsliste2");

            if($truncatetable !== FALSE)
              {
                echo("All rows have been deleted.");
              }
              else
              {
                echo("No rows have been deleted.");
              }
       }
       ?>

       <center>
         <br><button onclick="done()">Einkauf abgeschlossen</button>
       </center>

       <script type="javascript">
       function done()
       {
         var result ="<?php einkauf_done(); ?>"
       }
       </script>

</body>


</html>