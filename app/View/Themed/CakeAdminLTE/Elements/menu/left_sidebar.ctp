
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">                
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="">
           <span><?= $this->Html->image('Corposalud.png', array('class' => '', 'width'=>'100%', 'height'=>'100%')); ?></span>
            
        </div>
        <!-- search form -->
       
        <!-- /.search form --> <br>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-pregnant_woman" style="font-size:30px;color:red;"></i>
                    <span style="font-size:20px;">Pacientes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                   
                    <li><?php echo $this->Html->link(__('<i class="icon icon-list-numbered"></i>Lista de Patientes'), array('controller'=>'patients','action' => 'index'), array('class' => 'btn btn-default', 'style'=>'color:#000;font-size:18px;','escape' => false)); ?></li>
                     <li><?php echo $this->Html->link(__('<i class="icon icon-medkit"></i>Nuevo'), array('controller'=>'patients','action' => 'add'), array('class' => 'btn btn-primary', 'style'=>'color:#000;font-size:18px;','escape' => false)); ?></li>   
                </ul>
            </li>      
            <?php if ($current_user['rols_id']==1): ?>      
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-user-md" style="font-size:30px;color:red;"></i>
                    <span style="font-size:20px;">Doctores</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link(__('<i class="icon icon-list-numbered"></i>Lista de Doctores'), array('controller'=>'doctors','action' => 'index'), array('class' => 'btn btn-default', 'style'=>'color:#000;font-size:18px;','escape' => false)); ?></li>
                     <li><?php echo $this->Html->link(__('<i class="icon icon-user-plus"></i>Nuevo'), array('controller'=>'doctors','action' => 'add'), array('class' => 'btn btn-primary', 'style'=>'color:#000;font-size:18px;','escape' => false)); ?></li>  
                </ul>
            </li> </a><?php endif; ?>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-profile" style="font-size:30px;color:red;"></i>
                    <span style="font-size:20px;">Informes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><?php echo $this->Html->link(__('<i class="icon icon-list-numbered"></i>Lista de Informes'), array('controller'=>'informs','action' => 'index'), array('class' => 'btn btn-default', 'style'=>'color:#000;font-size:18px;', 'escape'  => false)); ?></li>
                     <li><?php echo $this->Html->link(__('<i class="icon icon-clipboard-add"></i>Nuevo'), array('controller'=>'informs','action' => 'add'), array('class' => 'btn btn-primary', 'style'=>'color:#000;font-size:18px;','escape' => false)); ?></li>  
                </ul>
            </li>
            <li class="treeview">
                <a href="/ecografias">
                    <i class="icon icon-image" style="font-size:30px;color:red;"></i> <span style="font-size:20px;">Ecografias</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><?php echo $this->Html->link(__('<i class="icon icon-list-numbered"></i>Lista de Ecografias'), array('controller'=>'ultrasounds','action' => 'index'), array('class' => 'btn btn-default', 'style'=>'color:#000;font-size:18px;','escape' => false)); ?></li>
                     <li><?php echo $this->Html->link(__('<i class="icon icon-plus"></i>Nuevo'), array('controller'=>'ultrasounds','action' => 'add'), array('class' => 'btn btn-primary', 'style'=>'color:#000;font-size:18px;','escape' => false)); ?></li>  
                                
                </ul>
            </li>
           <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="badge pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="pages/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>                                
                    <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                </ul>!-->
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>