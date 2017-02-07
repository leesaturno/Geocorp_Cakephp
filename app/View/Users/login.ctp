
<style>@import url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700");

body {
    font-family: Open Sans;
    font-size: 14px;
    line-height: 1.42857;
   
    height: 350px;
    padding: 0;
    margin: 0;
}
.container-login {
    min-height: 0;
    width: 480px;
    color: #333333;
    margin-top: 0;
    padding: 0;
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.container-login > section {
  
    margin-left: 0;
    margin-right: 0;
    padding-bottom: 10px;
}
#top-bar {
    display: inherit;
}
.nav-tabs.nav-justified {
    border-bottom: 0 none;
    width: 100%;
}
.nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
    float: none;
}
.container-login .nav-tabs.nav-justified > li > a,
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #ea533f;
    border: medium none;
    color: #ffffff;
    margin-bottom: 0;
    margin-right: 0;
    border-radius: 0;
}
.container-login .nav-tabs.nav-justified > .active > a,
.container-login .nav-tabs.nav-justified > .active > a:hover,
.container-login .nav-tabs.nav-justified > .active > a:focus {
    background: #ffffff;
    color: #333333;
}
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #de2f18;
}
.tabs-login {
    background: #ffffff;
    border: medium none;
    margin-top: 30%;
    padding: 10px 30px;
}
.container-login h2 {
    color: #ea533f;
}
.form-control {
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #999999;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #333333;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.container-login .checkbox {
    margin-top: -15px;
}
.container-login button {
    background-color: #9d1414;
    border-color: #e73e28;
    color: #ffffff;
    border-radius: 0;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
    width: 100%;
}
.container-login button:hover,
.container-login button:focus {
    background: #801111;
    border-color: #be2815;
}</style>
<div class="login-body">
    <article class="container-login center-block">
		<section>
			
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> Accesso</h2>						
				    <?= $this->Flash->render('auth') ?>
<?= $this->Form->create('',array('role' => 'form', 'id'=>'login-form')) ?>
						<div class="form-group ">
							 <?php echo $this->Form->input('email', ['label'=>'  ', 'placeholder'=>'Usuario', 'class'=>'form-control','tabindex'=>'1']);?>
						</div>
						<div class="form-group ">
							<?php echo $this->Form->input('password', ['id'=>'key', 'for'=>'key','label'=>false, 'placeholder'=>'Contraseña', 'class'=>'form-control','tabindex'=>'2']);?>
						</div>
						
						<br/>
						<div class="form-group ">				
              			<?= $this->Form->button(__('Login', ['id'=>'btn-login', 'class'=>'btn btn-lg btn-primary', 'value'=>'Log in'])); ?>
									
 								<?= $this->Form->end() ?>
								
						</div>
					</form>			
				</div>
			</div>
		</section>
	</article>
</div>