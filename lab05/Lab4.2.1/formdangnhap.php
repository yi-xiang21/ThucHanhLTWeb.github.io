<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $errors = [];
    $username = '';
    $hobbies = '';
    $selected_gender = '';
    $selected_province = '';
    $processing_complete = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = trim($_POST['username'] ?? '');
        $pass = $_POST['password'] ?? '';
        $passcf = $_POST['confirm_password'] ?? '';
        $selected_gender = $_POST['gender'] ?? '';
        $hobbies = trim($_POST['hobbies'] ?? '');
        $selected_province = $_POST['province'] ?? '';

        if ($pass !== $passcf) {
            $errors['password'] = "Xác nhận mật khẩu không khớp với Mật khẩu đã nhập. Vui lòng nhập lại.";
        }


        if (empty($username)) {
            $errors['username'] = "Tên đăng nhập không được để trống.";
        }

        if (count($errors) === 0) {

            $processing_complete = true;
        } else {
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Đăng ký thành viên</title>
    </head>

    <body>

        <?php
        // Hiển thị thông báo thành công
        if ($processing_complete) {
            echo "<h3 style='color: green;'>✅ Đăng ký thành công! Dữ liệu đã được xử lý.</h3>";
        }
        ?>

        <h2>Đăng ký thành viên</h2>
        <form style="background-color: #f9f9f9;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="form-control">

            <?php if (isset($errors['password'])): ?>
                <p style="color: red; font-weight: bold;"><?php echo $errors['password']; ?></p>
            <?php endif; ?>

            <label for="username">Tên đăng nhập (*):</label>
            <input type="text" id="username" name="username" required value="<?php echo htmlspecialchars($username); ?>"><br>
            <?php if (isset($errors['username'])): ?>
                <span style="color: red; font-size: 0.9em;"><?php echo $errors['username']; ?></span>
            <?php endif; ?><br>

            <label for="password">Mật khẩu (*):</label>
            <br>
            <input type="password" id="password" name="password" required><br><br>

            <label for="confirm_password">Nhập lại mật khẩu (*):</label><br>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <label for="gender">Giới tính (*):</label><br>
            <input type="radio" id="male" name="gender" value="Nam" required <?php if ($selected_gender === 'Nam') echo 'checked'; ?>>
            <label for="male">Nam</label><br>
            <input type="radio" id="female" name="gender" value="Nữ" required <?php if ($selected_gender === 'Nữ') echo 'checked'; ?>>
            <label for="female">Nữ</label><br><br>

            <label for="hobbies">Sở thích:</label><br>
            <textarea id="hobbies" name="hobbies"><?php echo htmlspecialchars($hobbies); ?></textarea><br><br>

            <label for="image">Hình ảnh (tùy chọn):</label>
            <input type="file" id="image" name="image" accept="image/*"><br><br>

            <label for="province">Tỉnh (*):</label>
            <select id="province" name="province" required>
                <option value="">Chọn tỉnh</option>
                <option value="Hà Nội" <?php if ($selected_province === 'Hà Nội') echo 'selected'; ?>>Hà Nội</option>
                <option value="Hồ Chí Minh" <?php if ($selected_province === 'Hồ Chí Minh') echo 'selected'; ?>>Hồ Chí Minh</option>
                <option value="Đà Nẵng" <?php if ($selected_province === 'Đà Nẵng') echo 'selected'; ?>>Đà Nẵng</option>
                <option value="Khánh Hòa" <?php if ($selected_province === 'Khánh Hòa') echo 'selected'; ?>>Khánh Hòa</option>
            </select><br><br>

            <input type="submit" value="Đăng ký" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </form>

    </body>

    </html>

</body>
</body>

</html>