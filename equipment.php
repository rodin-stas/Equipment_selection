!-- // Инициализация глобальных переменных для JS -->
<script>
	window.systems = []
	window.gross = []
	window.viking = []
	window.marion = []
	window.filtersWaterPipes = []
	window.ufLamp = []
	window.solt = []
	window.uf = []
	window.obj = {}
</script>
<?php

//  Фильтры для водопровода 
			$filtersWaterPipes_id = array(613, 611, 623);
			$filtersWaterPipes_count = count($filtersWaterPipes_id);

			for($i = 0; $i < $filtersWaterPipes_count; ++$i) {
				$filtersWaterPipes[$i][0] = wc_get_product($filtersWaterPipes_id[$i]);
				$filtersWaterPipes[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($filtersWaterPipes_id[$i]), 'thumbnail' );
				?>
					<script>
						// Собираем данные для JS
						window.obj = {};
						window.obj.product = <?php echo $filtersWaterPipes[$i][0]?>;
						window.obj.urlPic = <?php echo json_encode($filtersWaterPipes[$i][1])?>;
						window.filtersWaterPipes.push(window.obj);
				</script>
				<?php
			};
// Уф лампа
$uf_id = array(3436);
$uf_id_count = count($uf_id);

for($i = 0; $i < $uf_id_count; ++$i) {
	$uf[$i][0] = wc_get_product($uf_id[$i]);
	$uf[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($uf_id[$i]), 'thumbnail' );
	?>
		<script>
			// Собираем данные для JS
			window.obj = {};
			window.obj.product = <?php echo $uf[$i][0]?>;
			window.obj.urlPic = <?php echo json_encode($uf[$i][1])?>;
			window.uf.push(window.obj);
	</script>
	<?php
};
// Соль
$solt_id = array(633);
$solt_id_count = count($solt_id);

for($i = 0; $i < $solt_id_count; ++$i) {
	$solt[$i][0] = wc_get_product($solt_id[$i]);
	$solt[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($solt_id[$i]), 'thumbnail' );
	?>
		<script>
			// Собираем данные для JS
			window.obj = {};
			window.obj.product = <?php echo $solt[$i][0]?>;
			window.obj.urlPic = <?php echo json_encode($solt[$i][1])?>;
			window.solt.push(window.obj);
	</script>
	<?php
};

// Гросс
		$gross_id = array(344);
		$gross_id_count = count($gross_id);
		
		for($i = 0; $i < $gross_id_count; ++$i) {
			$gross[$i][0] = wc_get_product($gross_id[$i]);
			$gross[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($gross_id[$i]), 'thumbnail' );
			?>
				<script>
					// Собираем данные для JS
					window.obj = {};
					window.obj.product = <?php echo $gross[$i][0]?>;
					window.obj.urlPic = <?php echo json_encode($gross[$i][1])?>;
					window.gross.push(window.obj);
			</script>
			<?php
		};

// Викинг
		$viking_id = array(346);
				$viking_id_count = count($viking_id);
				
				for($i = 0; $i < $viking_id_count; ++$i) {
					$viking[$i][0] = wc_get_product($viking_id[$i]);
					$viking[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($viking_id[$i]), 'thumbnail' );
					?>
						<script>
							// Собираем данные для JS
							window.obj = {};
							window.obj.product = <?php echo $viking[$i][0]?>;
							window.obj.urlPic = <?php echo json_encode($viking[$i][1])?>;
							window.viking.push(window.obj);
					</script>
					<?php
				};
// Марион
			$marion_id = array(355);
							$marion_id_count = count($marion_id);
							
							for($i = 0; $i < $marion_id_count; ++$i) {
								$marion[$i][0] = wc_get_product($marion_id[$i]);
								$marion[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($marion_id[$i]), 'thumbnail' );
								?>
									<script>
										// Собираем данные для JS
										window.obj = {};
										window.obj.product = <?php echo $marion[$i][0]?>;
										window.obj.urlPic = <?php echo json_encode($marion[$i][1])?>;
										window.marion.push(window.obj);
								</script>
								<?php
							};

		$systems_ids = array( 331, 332, 333 , 334, 335, 336, 337, 338, 394);
		$systems_ids_count = count($systems_ids);
		// получаем все системы питьевых фильтров
		for($i = 0; $i < $drink_water_filters_count; ++$i) {
			$drink_water_filters[$i][0] = wc_get_product($drink_water_filters_ids[$i]);
			$drink_water_filters[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($drink_water_filters_ids[$i]), 'thumbnail' );
			?>
				<script>
					// Собираем данные для JS
					window.obj = {};
					window.obj.product = <?php echo $drink_water_filters[$i][0]?>;
					window.obj.urlPic = <?php echo json_encode($drink_water_filters[$i][1])?>;
					window.drinkSystems.push(window.obj);
			</script>
			<?php
		};
		// получаем все объекты фильтров и их изображения
		for($i = 0; $i < $filter_cases_ids_count; ++$i) {
			$filter_cases[$i][0] = wc_get_product($filter_cases_ids[$i]);
			$filter_cases[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($filter_cases_ids[$i]), 'thumbnail' );
			?>
				<script>
					// Собираем данные для JS
					window.obj = {};
					window.obj.product = <?php echo $filter_cases[$i][0]?>;
					window.obj.urlPic = <?php echo json_encode($filter_cases[$i][1])?>;
					window.filterCases.push(window.obj);
			</script>
			<?php
		};
		// получаем все объекты корпусов фильтров и их изображения
		for($i = 0; $i < $filters_ids_count; ++$i) {
			$filters[$i][0] = wc_get_product($filters_ids[$i]);
			$filters[$i][1] = wp_get_attachment_url( get_post_thumbnail_id($filters_ids[$i]), 'thumbnail' );
			?>
				<script>
					// Собираем данные для JS
					window.obj = {}
					window.obj.product = <?php echo $filters[$i][0]?>
					window.obj.urlPic = <?php echo json_encode($filters[$i][1])?>
					window.filters.push(window.obj)
				</script>
			<?php
		};
		for($i = 0; $i < $systems_ids_count; ++$i) {
			// товар(product) ячейка [0]
			$systems[$i][0] = wc_get_product($systems_ids[$i]);
			// получаем ключи всех атрибутов, что затем получить их таксономию(значения)
				$attributes_keys = array_keys($systems[$i][0]->attributes);
				for($j = 0; $j < count($attributes_keys); ++$j) {
					$systems[$i][1][$j] = wc_get_product_terms( $systems_ids[$i] , $attributes_keys[$j]);
					// ячейка 2 - название атрибута, 3-4 - мин/макс значения атрибута
					$systems[$i][1][$j][] = $attributes_keys[$j];
					// ячейка 3-4 - мин/макс значения атрибута
					$systems[$i][1][$j][]=$systems[$i][1][$j][0]->name;
					$systems[$i][1][$j][]=$systems[$i][1][$j][1]->name;
				};
			//  изображение товара ячейка [][2]
			$systems[$i][2] = wp_get_attachment_url( get_post_thumbnail_id($systems_ids[$i]), 'thumbnail' );
			?>
			<script>
				// Собираем данные для JS
				window.obj = {};
				window.obj.product = <?php echo $systems[$i][0]?>;
				window.obj.attributes = <?php echo json_encode($systems[$i][1])?>;
				window.obj.urlPic = <?php echo json_encode($systems[$i][2])?>;
				window.systems.push(window.obj);
			</script>
			<?php
		}
		// echo "<pre>"; print_r($systems[0][0]); echo "</pre>";
 ?>