<?php
	header('Content-Type: application/json');
	
	include ('config.php');
	
	$result_array = array();
	
	$draw = $_REQUEST['draw'];
	$length = $_REQUEST['length'];
	$start = $_REQUEST['start'];
	$columns = $_REQUEST['columns'];
	$order_cols = $_REQUEST['order'];
	$search = $_REQUEST['search'];
	$data = array();
	
	// Column arrangement in grid. index to table column mapping array
		$col_set = array('T0.project_name','T0.land_address','T0.land_price','T0.main_image','T0.description','T0.gallery','T0.property_id','T0.property_type','T0.property_status','T0.other_details1','T0.landplan_image','T0.status','T0.date','T0.education1','T0.education2','T0.education3','T0.health1','T0.health2','T0.health3','T0.transportation1','T0.transportation2','T0.transportation3');
	
	// Where and Order By Clause string
	$order_by = "";
	$where = " WHERE T0.status = '1'";
	
	// Generate order by string
	// Loop over all ordered fields (inside array) received from datatable client
	foreach ($order_cols as $order_col){
		// if order by string is empty start order by clause with ORDER BY else append order by with comma
		$order_by .= (empty($order_by)) ? " ORDER BY " : ", ";
		
		$order_col_index = $order_col['column']; // Order column index no
		$order_col_dir = $order_col['dir']; // Order direction (asc/desc)
		
		// Generate order by string (convert index to table column + direction)
		$order_by .= $col_set[$order_col_index]." ".$order_col_dir." ";
	}
	
	// Generate where clause if search term is not empty (received with client's request)
	if (!empty($search['value'])){
		// get search term
		$term = $search['value'];
		
		$i = 0;
		
		// Loop over available columns
		foreach ($columns as $column){
			// Get current column name and searchable (true/false)
			$col_name = $column['name'];
			$col_searchable = $column['searchable'];
			
			// If current column is searchable
			if ($col_searchable == "true"){
				// if where string is empty start where clause with WHERE else append where string with OR
				$where .= (empty($where)) ? " WHERE " : " OR ";

				// Convert column index to table column + LIKE + 'search term'
				$where .= $col_set[$i]." LIKE '%".$term."%' ";
			}
			
			$i = $i + 1;
		}
	}
	
	$query = "SELECT
                    T0.id,
                    T0.project_name,
                    T0.land_address,
                    T0.land_price,
                    T0.main_image,
                    T0.description,
                    T0.gallery,
                    T0.property_id,
                    T0.property_type,
                    T0.property_status,
                    T0.other_details1,
                    T0.landplan_image,
                    T0.`status`,
                    T0.date
                    FROM mainlandproperty AS T0 ".$where." ".$order_by."
						LIMIT ".$start.", ".$length;

	
	$sql = mysqli_query($con_main, $query);
	
	$i = 0;

	$result_array['data'] = "";
	
	while ($row_1 = mysqli_fetch_assoc($sql)){
		/**** */
		$data['DT_RowId'] = "row_".$row_1['id'];
		//$data['id'] = $row_1['id'];
		$data['project_name'] = $row_1['project_name'];
		$data['land_address'] = $row_1['land_address'];
		$data['land_price'] = $row_1['land_price'];
		$data['file_main'] = $row_1['main_image'];
		$data['description'] = $row_1['description'];
		$data['gallery'] = $row_1['gallery'];
		$data['property_id'] = $row_1['property_id'];
        $data['property_type'] = $row_1['property_type'];
        $data['property_status'] = $row_1['property_status'];
        $data['other_details1'] = $row_1['other_details1'];
        $data['landplan_image'] = $row_1['landplan_image'];
        $data['status'] = $row_1['status'];
        $data['date'] = $row_1['date'];
        $education1['education1'] = $row_1['education1'];
        $education2['education2'] = $row_1['education2'];
        $education3['education3'] = $row_1['education3'];
        $health1['health1'] = $row_1['health1'];
        $health2['health2'] = $row_1['health2'];
        $health3['health3'] = $row_1['health3'];
        $transportation1['transportation1'] = $row_1['transportation1'];
        $transportation2['transportation2'] = $row_1['transportation2'];
        $transportation3['transportation3'] = $row_1['transportation3'];


		$result_array['data'][$i] = $data;
		$i = $i + 1;
    }

	$filtered_row_count_query = "SELECT
								    	COUNT(T0.id) AS ROW_COUNT,
                                        T0.project_name,
					                    T0.land_address,
					                    T0.land_price,
					                    T0.main_image,
					                    T0.description,
					                    T0.gallery,
					                    T0.property_id,
					                    T0.property_type,
					                    T0.property_status,
					                    T0.other_details1,
					                    T0.landplan_image,
					                    T0.`status`,
					                    T0.date,
					                    T0.education1,
					                    T0.education2,
					                    T0.education3,
					                    T0.health1,
					                    T0.health2,
					                    T0.health3,
					                    T0.transportation1,
					                    T0.transportation2,
					                    T0.transportation3
										FROM
										mainlandproperty AS T0 ".$where;

	$filtered_row_count_sql = mysqli_query($con_main, $filtered_row_count_query);
	$filtered_row_count = mysqli_fetch_assoc($filtered_row_count_sql);
	$filtered_records = $filtered_row_count['ROW_COUNT'];
	
	$full_row_count_sql = mysqli_query($con_main, "SELECT COUNT(T0.id) AS C FROM mainlandproperty AS T0");
	$full_row_count = mysqli_fetch_array($full_row_count_sql);
	
	$total_records = $full_row_count['C'];
	
	$result_array['draw'] = $draw; // Return same draw id received from datatable client request
	$result_array['recordsTotal'] = $total_records; // Return total record count in table
	$result_array['recordsFiltered'] = (!empty($search['value'])) ? $filtered_records : $total_records; // If search term is available return filtered records count or else total record count
	$result_array['query'] = $query; //For debugging
	
	mysqli_close($con_main);
	
	echo (json_encode($result_array));
?>