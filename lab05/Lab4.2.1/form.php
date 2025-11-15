<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Nhập thông tin</legend>
        <form action="./xulyform.php" method="get" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>Nhập tên SP:</td>
                    <td><input type="text" name="tensp"></td>
                </tr>
                <tr>
                    <td>Cach tim:</td>
                    <td><input type="radio" name="ct" value="1" checked="checked">gan dung
                        <input type="radio" name="ct" value="0">chinh xac
                    </td>
                </tr>
                <tr>
                    <td>
                        Loai SP
                    </td>
                    <td>
                        <input type="checkbox" name="loai[]" value="1">Tat Ca
                        <input type="checkbox" name="loai[]" value="2">Loai 1
                        <input type="checkbox" name="loai[]" value="3">Loai 2
                        <input type="checkbox" name="loai[]" value="4">Loai 3
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>