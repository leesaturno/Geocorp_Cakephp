<!-- header logo: style can be found in header.less -->
        <header class="header">
          <!--<a href="/" class="logo" width="90%" height="90%">
               
            <span><?= $this->Html->image('Corposalud1.png', array('class' => 'img-circle', 'width'=>'25%', 'height'=>'60%')); ?></span>  <span style="color:#0000cc"> Corpo</span> <br>&nbsp;<span style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;Salud</span>
            </a>!-->
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <ul class="dropdown-menu">
                              
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                        <li>
                                    </ul>
                                </li>
                              
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <ul class="dropdown-menu">
                                
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <ul class="dropdown-menu">
                       
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <?php if ($current_user['rols_id']==2): ?>





     
        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon icon-user-md" style="font-size:20px;color:#fff;"></i>&nbsp;&nbsp;&nbsp;
                                <span style="font-size:17px;color:#fff;"><?php if ($current_user['rols_id']==2): echo 'Doctor' ;
  endif; ?><i class="caret"></i></span>
                            </a><?php endif; ?>

 <?php if ($current_user['rols_id']==1): ?>





     
        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user-secret" style="font-size:35px;color:#fff;"></i>
                                <span style="font-size:20px;color:#fff;"><?php if ($current_user['rols_id']==1): echo 'Administrador';
                                  endif;  ?><i class="caret"></i></span>
                            </a><?php endif; ?>                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-black">
                                     <?= $this->Html->image('avatar04.png', array('class' => 'img-circle')); ?>
                                    <p>
                                        <?php echo $current_user['email']; ?>
                                        
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                     <?php echo $this->Html->link('Respaldo BD', array('controller' => 'users', 'action' => 'database_mysql_dump'),array('class' => 'fa fa-download btn btn-default btn-flat'))?>
            
                                    </div>
                                    <div class="pull-right">
                                        <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout'),array('class' => 'fa fa-sign-out btn btn-default btn-flat'))?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>