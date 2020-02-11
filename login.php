<!DOCTYPE html>
<html>
<head>
    <link href="css/hlavni.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
</head>
<body>
 <h1>Registrace</h1>
    <form class="prihlaseni" method="post" action="index.php">
        <table>
            <tr>
                <td>                    
                </td>
                <td>
                    <p class="pozor" id="pozor_r_uzivatel"></p>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label for="r_uzivatel">Uživatelské jméno:</label>
                </td>
                <td>
                    <input class="stil" type="text" name="r_uzivatel" id="r_uzivatel">
                </td>
            </tr>
           <tr>
                <td>                    
                </td>
                <td>
                    <p class="pozor" id="pozor_r_heslo">heslo musí mít více než 5 znaků</p>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label for="r_heslo">Heslo:</label>
                </td>
                <td class="relative">
                    <input class="stil" type="password" name="r_heslo" id="r_heslo">
                </td>
                
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <p class="pozor" id="pozor_email">email má nespravný tvar</p>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label for="email">E-mail:</label>
                </td>
                <td>
                    <input class="stil" type="email" name="email" id="email" required>
                </td>
                
            </tr>
            <tr>
                <td>
                 
                </td>
                <td>
                    <input class="odeslat" type="hidden" name="cesta" value="prihlaseni">
                    <input class="odeslat" type="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>