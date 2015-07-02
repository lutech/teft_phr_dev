  <div class="col-md-3" id="sidebar" role="navigation">
          <div class="list-group">
		  <?php
			  foreach ($sidenavlinks as $link => $linkname) {
					$isactive =($link == $page) ? 'active' : "";	
					$addstaricon =($linkname == "Service Providers") ? '<span class="glyphicon glyphicon-star"></span>' : "";	
					
					echo "<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$area}/{$link}\">{$addstaricon} {$linkname}</a>";
				
				}
			?>
          </div>
        </div><!--/span-->