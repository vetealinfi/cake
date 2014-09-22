			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				

				<ul class="nav nav-list">
					<li class="">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">Grupos</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo $this->Html->url('/groups/add/'); ?>">
									<i class="menu-icon fa fa-plus purple"></i>
									Agregar Grupo
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo $this->Html->url('/groups/'); ?>">
									<i class="menu-icon fa fa-eye pink"></i>
									Ver Grupos
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">Usuarios</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo $this->Html->url('/users/add/'); ?>">
									<i class="menu-icon fa fa-plus purple"></i>
									Agregar Usuario
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo $this->Html->url('/users/'); ?>">
									<i class="menu-icon fa fa-eye pink"></i>
									Ver Usuarios
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">Eventos</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo $this->Html->url('/events/add/'); ?>">
									<i class="menu-icon fa fa-plus purple"></i>
									Agregar Evento
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo $this->Html->url('/events/'); ?>">
									<i class="menu-icon fa fa-eye pink"></i>
									Ver Eventos
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">Categor&iacute;as</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo $this->Html->url('/categories/add/'); ?>">
									<i class="menu-icon fa fa-plus purple"></i>
									Agregar Categor&iacute;a
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo $this->Html->url('/categories/'); ?>">
									<i class="menu-icon fa fa-eye pink"></i>
									Ver Categor&iacute;a
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->