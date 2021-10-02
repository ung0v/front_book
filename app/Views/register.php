<?= $this->extend("_Layout") ?>
<?= $this->section("content") ?>
<div class="row">
    <h2 style="text-align: center;">Đăng ký</h2>


    <div class="user-account">
        <div class="grid__item">

            <?php if (isset($message)) : ?>
                <div class="note form-success" id="ResetSuccess" style="display:block;color:red;">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            <div id="CustomerLoginForm">
                <form method="post" action="<?= base_url() ?>/public/register" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">



                    <label for="username" class="label--hidden">Tài khoản</label>
                    <input type="text" name="username" id="username" placeholder="Tài khoản" autocorrect="off" autocapitalize="off" autofocus="">



                    <label for="password" class="label--hidden">Mật khẩu</label>
                    <input type="password" value="" name="password" id="password" placeholder="Mật khẩu">

                    <label for="repassword" class="label--hidden">Nhập lại mật khẩu</label>
                    <input type="password" value="" name="repassword" id="password" placeholder="Nhập lại mật khẩu">

                    <label for="email" class="label--hidden">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="">
                    <label for="first_name" class="label--hidden">Họ</label>
                    <input type="text" name="first_name" id="first_name" placeholder="Họ" autocorrect="off" autocapitalize="off" autofocus="">
                    <label for="last_name" class="label--hidden">Tên</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Tên" autocorrect="off" autocapitalize="off" autofocus="">
                    <label for="phone_number" class="label--hidden">Số điện thoại</label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="Số điện thoại" autocorrect="off" autocapitalize="off" autofocus="">
                    <label for="address" class="label--hidden">Địa chỉ</label>
                    <input type="text" name="address" id="address" placeholder="Địa chỉ" autocorrect="off" autocapitalize="off" autofocus="">

                    <p>
                        <input type="submit" class="btn" value="Đăng ký">
                    </p>
                    <div class="link-wrapper">

                        <p style="text-align: center;">
                            <a href="<?= base_url() ?>/public/login" id="customer_register_link">Đăng nhập</a>
                        </p>
                    </div>
                </form>
            </div>






        </div>

    </div>
</div>
<?= $this->endSection() ?>