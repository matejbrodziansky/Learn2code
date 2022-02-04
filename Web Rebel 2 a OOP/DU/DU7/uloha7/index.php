<?php
	include_once '_partials/_header.php'; 	// konci otvaracim <main> tagom
?>

<table>
	<thead>
		<tr>
			<th>item #</th>
			<?php 
				foreach ($data[0] as $key=>$value) {
					echo "<th>$key</th>".PHP_EOL;
				};
			?>
		</tr>
	</thead>
	<tfoot>
		<?php 
			$index = 1;
			foreach ($data as $book) {
				echo ($index % 2 == 0 ) ? "<tr>" : "<tr class='odd'>";
					echo "<td>$index</td>";
						foreach ($book as $info) {
							echo "<td>$info</td>";
						};
					echo "</tr>".PHP_EOL;
				$index += 1;
			};
		?>
	</tfoot>
</table>

<?php
	include_once '_partials/_footer.php';  // zacina zatvaracim </main> tagom
?>