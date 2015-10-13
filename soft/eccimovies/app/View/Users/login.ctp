<?php echo $this->Html->css('login'); ?>

<header id="principal-header-text-login">
    <h2> Ingresa a tu cuenta </h2>
</header>

<div class="users form">
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User'); ?>
    
    
        <div class="row text-center">
            <div class="col-md-8">
                <div class="form-group">
                   <?php // Campos para llenar informacion
				        echo $this->Form->input('username',array(
														      'label' => 'Email: ',
														       'type' => 'email',
                                                              'placeholder' => 'username@mail.com'
                                                                )
                                               );
                   ?>
                </div>
            </div>    
        </div>
    
        <div class="row text-center">
            <div class="col-md-8">
                <div class="form-group">
                   <?php // Campos para llenar informacion
				        echo $this->Form->input('password',array(
														      'label' => 'Contraseña:',
														       'type' => 'password'
                                                                )
                                               );
                   ?>
                </div>
            </div> 
        </div>
        
        <div class="row text-center">
            <div class="col-md-12">
                <?php echo $this->Form->button('Login',                                                                                                                                                                                                                                 array(
                                                        'type'=>'submit',
                                                        'id' => 'login-button',
                                                        'action'=>'logged'),
                                                         array(
                                                            'escape'=>false
                                                             )
                                             );
               ?>
            </div>            
        </div> 
    
        <div class="row text-right">          
             <div class="col-md-6">
                <label for="Reg" id="label-signup">¿Aún no tienes cuenta?</label>
            </div>
            <div class="col-md-2">
                    <?php echo $this->Form->button('Regístrate aquí!',                                                                                                                                                                   array(
                                                        'type'=>'submit',
                                                        'id' => 'button-signup',
                                                        'onclick' => "window.location = 'signup'"),
                                                        array(
                                                            'escape'=>false
                                                             )
                                                        );
                   ?>
            </div> 
        </div>
    
</div>
