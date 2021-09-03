<?php 
require_once '../../akses/conn.php';


if($_GET['action'] == "table_data"){


		$columns = array( 
	                            0 =>'stud_id', 
	                            1 =>'nisn',
	                           
	                            
	                        );

		$querycount = $mysqli->query("SELECT count(stud_id) as jumlah FROM student");
		$datacount = $querycount->fetch_array();
	
  
        $totalData = $datacount['jumlah'];
            
        $totalFiltered = $totalData; 

        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order = $columns[$_POST['order']['0']['column']];
        $dir = $_POST['order']['0']['dir'];
            
        if(empty($_POST['search']['value']))
        {            
        	$query = $mysqli->query("SELECT stud_id,nisn FROM student order by $order $dir 
        																LIMIT $limit 
        																OFFSET $start");
        }
        else {
            $search = $_POST['search']['value']; 
            $query = $mysqli->query("SELECT stud_id,nisn FROM student WHERE nisn LIKE '%$search%' 
																		or nisn LIKE '%$search%' 
            															order by $order $dir 
            															LIMIT $limit 
            															OFFSET $start");


           $querycount = $mysqli->query("SELECT count(stud_id) as jumlah FROM student WHERE nisn LIKE '%$search%' 
       																						or nisn LIKE '%$search%'");
		   $datacount = $querycount->fetch_array();
           $totalFiltered = $datacount['jumlah'];
        }

        $data = array();
        if(!empty($query))
        {
            $no = $start + 1;
            while ($r = $query->fetch_array())
            {
                $nestedData['no'] = $no;
                
                $nestedData['nisn'] = $r['nisn'];
                $nestedData['aksi'] = "<a href='#' class='btn-warning btn-sm'>Ubah</a>&nbsp; <a href='#' class='btn-danger btn-sm'>Hapus</a>";
                $data[] = $nestedData;
                $no++;
            }
        }
          
        $json_data = array(
                    "draw"            => intval($_POST['draw']),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        echo json_encode($json_data); 

}