					<form>
						<label><span>Search/Filter</span></label>
						<input type="search" />
						
						<?php foreach($filterable AS $filter): ?>
						<select><option>Filter <?php echo $filter ?></option><option>Nothing to see here</option></select>
						<?php endforeach ?>
					</form>
