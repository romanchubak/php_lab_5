<?php include  "lab_5_2.php"; ?>
<?php include "DoTable.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5_2</title>
        <meta charset="utf-8">
    </head>
    <body>
        <table>
            <tr>
                <td width="15%">
                    <form method="post" >
                        <label for="NameOfSubject">Ім'я предмету</label><br>
                        <input type="text" name="NameOfSubject"><br>
                        <label for="NumberOfTerm">Номер семестру</label><br>
                        <input type="text" name="NumberOfTerm"><br>
                        <label for="CountOfHours">Кількість годин</label><br>
                        <input type="text" name="CountOfHours"><br>
                        <label for="FormOfControl">Форма Контролю</label><br>
                        <input type="text" name="FormOfControl"><br>
                        <label for="FirstNameOfLector">Ім'я лектора</label><br>
                        <input type="text" name="FirstNameOfLector"><br>
                        <label for="SecondNameOfLector">Прізвище лектора</label><br>
                        <input type="text" name="SecondNameOfLector"><br>
                        <input type="submit" name="Add" placeholder="Додати" ><br>
                        <a href="index_5_3.php">lab 5_3</a><br>
                        <a href="index_5_4.php">lab 5_4</a><br>
                    </form>
                </td>
                <td width="85%">
                <?php echo doTable(array("Id","Ім'я предмету",
                                        "Номер семестру",
                                        "Кількість годин",
                                        "Форма Контролю",
                                        "Ім'я лектора",
                                        "Прізвище лектора")
                        ,$data) ?>
                </td>
            </tr>
        </table>
    </body>
</html>
