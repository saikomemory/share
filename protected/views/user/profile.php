<div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="row span10">
            <section class="offset2 block well">
                              <form action="" method="POST" class="form-horizontal">
                <legend>会员注册</legend>
                <div class="control-group">
                  <label class="control-label">用户名</label>
                  <div class="controls">
                    <input type="text" name="user[username]" value="" placeholder="请填写用户名" class="title">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">邮箱</label>
                  <div class="controls">
                    <input type="text" name="user[email]" placeholder="邮箱" value="" class="email">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">密码</label>
                  <div class="controls">
                    <input type="password" name="user[password]" placeholder="密码不能少于6位" class="title">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">重复密码</label>
                  <div class="controls">
                    <input type="password" name="user[repassword]" placeholder="重复密码" class="title">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">验证码</label>
                  <div class="controls">    
                      <img alt="点击换图" title="点击换图" style="cursor:pointer" padding="10" id="yw0" src="/share/index.php?r=user/captcha&amp;v=528e12786e885" />                      <input type="text" name="user[varifyCode]" placeholder="验证码" >
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="注册" class="btn btn-primary"><a href="login.htm" > 已经有账号?点击这里登录</a>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>