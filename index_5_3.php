<?php include  "lab_5_3.php";
      include "DoTable.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5_3</title>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="">
            <tr>
                <td>
                  <?php echo doTable(array("Id","Ім'я предмету",
                                          "Номер семестру",
                                          "Кількість годин",
                                          "Форма Контролю",
                                          "Ім'я лектора",
                                          "Прізвище лектора")
                          ,$data) ?>
                </td>
                <td>
                    <?php echo doTable(array("Ім'я Лектора", "Прізвище Лектора"),
                                      $lecturers)?>
                </td>
            </tr>
        </table>
        <a href="index_5_2.php">lab 5_2</a><br>
        <a href="index_5_4.php">lab 5_4</a><br>
    </body>
</html>
