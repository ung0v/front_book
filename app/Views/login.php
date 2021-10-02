<?= $this->extend("_Layout") ?>
<?= $this->section("content") ?>
<div class="row">
    <h2 style="text-align: center;">Đăng nhập</h2>


    <div class="user-account">
        <div class="grid__item">

            <?php if (isset($errorMessage)) : ?>
                <div class="note form-success" id="ResetSuccess" style="display:block;color:red;">
                    Sai tên đăng nhập hoặc mật khẩu
                </div>
            <?php endif; ?>
            <div id="CustomerLoginForm">
                <form method="post" action="<?= base_url() ?>/public/login" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">



                    <label for="username" class="label--hidden">Tài khoản</label>
                    <input type="text" name="username" id="username" placeholder="Tài khoản" autocorrect="off" autocapitalize="off" autofocus="">



                    <label for="password" class="label--hidden">Mật khẩu</label>
                    <input type="password" value="" name="password" id="password" placeholder="Mật khẩu">



                    <p>
                        <input type="submit" class="btn" value="Đăng nhập">
                    </p>
                    <div class="link-wrapper">

                        <p style="text-align: center;">
                            <a href="<?= base_url() ?>/public/register" id="customer_register_link">Đăng ký</a>
                        </p>
                    </div>
                </form>
            </div>






        </div>

    </div>
</div>
<?= $this->endSection() ?>