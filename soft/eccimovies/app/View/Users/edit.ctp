<?php echo $this->Html->css('addresses'); ?>
<?php echo $this->Html->css('signup');
echo $this->Html->css('general');?>
<?php
// Si soy administrador
if($user_id != null && $admin || $custom)
{
	?>
    <nav class="navbar navbar-inverse" id="navigation-bar">
      <div class="container-fluid">
        <div>
          <ul class="nav nav-pills nav-justified" role="tablist">
            <li ><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
            <li class="active"><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?></li> 
            <li><a href="#">Financial Entities</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <hr>

    <div class="title">
    <h2> <?php echo __('Update User'); ?> </h2>
    </div>

    <hr>

    <?php echo $this->Form->create('User', array('class' => 'form-horizontal', 'role' => 'form'));?>
    <div class="updateProduct_form">
        <?php
                echo $this->Form->input('username', array(  'type' => 'hidden',
                                                        'div' => 'form-group',
                                                        'label' => array('class' => 'control-label col-sm-2')
                                                    )
                                       );
                echo $this->Form->input('first_name', array(  'div' => 'form-group',
                                                        'label' => array(
                                                                            'class' => 'control-label col-sm-2',
                                                                            'text' => 'First Name'
                                                                        )
                                                    )
                                       );
                echo $this->Form->input('last_name', array( 'div' => 'form-group',
                                                        'label' => array(
                                                                            'class' => 'control-label col-sm-2',
                                                                            'text' => 'Last Name'
                                                                        )
                                                    )
                                       );
                echo $this->Form->input('password', array('div' => 'form-group',
                                                          
                                                                'label' => array(
                                                                                    'class' => 'control-label col-sm-2',
                                                                                    'text' => 'New Password'
                                                                                    
                                                                                ),
                                                                'name'=> 'pass',
                                                                'value' => ''
                                                                )
                                       );
                echo $this->Form->input('password', array('div' => 'form-group',
                                                        'label' => array(
                                                                            'class' => 'control-label col-sm-2',
                                                                            'text' => 'Confirm Password'
                                                                            
                                                                        ),
                                                          'name'=> 'confirm',
                                                          'value'=> ''
                                                            )
                                       );
                echo $this->Form->input('birthday', array( 'div' => 'form-group',
                                                           'type' => 'date',
                                                           'dateFormat' => 'DMY','minYear' => date('Y') - 100,'maxYear' => date('Y'),
                          
                                                            'label' => array(
                                                                                'class' => 'control-label col-sm-2',
                                                                                'text' => 'Birthday'
                                                                            )
                                                            )
                                       );
                echo $this->Form->input('gender', array( 'div' => 'form-group',
                                                        'options' => array('M' => 'Male','F' => 'Female'),
                                                            'label' => array(
                                                                                'class' => 'control-label col-sm-2',
                                                                                'text' => 'Gender'
                                                                            )
                                                          )
                                       );
                ?>
    </div>
    <hr>
    <div id= "action" style="text-align:center">
        <?php echo $this->Form->submit(__('Update', true), array('name' => 'ok', 'div' => false)); ?>
        &nbsp;
        <?php echo $this->Form->submit(__('Cancel', true), array('name' => 'cancel', 'formnovalidate' => true, 'div' => false)); ?>
    </div>
    <?php echo $this->Form->end(); ?>
    <?php
}
// Si no estoy loggeado o si no soy admin
else
{
	?> <h1> NOTHING TO DO HERE... </h1> <?php
}

?>
<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
echo $this->Js->writeBuffer(); ?>