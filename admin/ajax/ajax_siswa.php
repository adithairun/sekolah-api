<?php 
require_once '../../akses/conn.php';


if($_GET['action'] == "table_data"){


		$columns = array( 
	                            0 =>'id_siswa', 
	                            1 =>'nama_siswa',
	                            2 =>'nis',
	                            3 =>'jk',
	                            4 =>'nisn',
	                            5 =>'tempat_lahir',
	                            6 =>'tanggal_lahir',
	                            7 =>'nik',
	                            8 =>'agama',
	                            9 =>'alamat',
	                            10 =>'kelurahan',
	                            11 =>'kecamatan',
	                            12 =>'hp',
	                            13 =>'email',
	                            14 =>'nama_ayah',
	                            15 =>'pendidikan_ayah',
	                            16 =>'pekerjaan_ayah',
	                            17 =>'nama_ibu',
	                            18 =>'pendidikan_ibu',
	                            19 =>'pekerjaan_ibu',
	                            20 =>'rombel',
	                            21 =>'tingkat',
	                            22 =>'jurusan',
	                            23 =>'sekolah_asal',
	                            24 =>'update_terakhir',
	                           
	                           
	                            
	                        );

		$querycount = $mysqli->query("SELECT count(id_siswa) as jumlah FROM data_siswa");
		$datacount = $querycount->fetch_array();
	
  
        $totalData = $datacount['jumlah'];
            
        $totalFiltered = $totalData; 

        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order = $columns[$_POST['order']['0']['column']];
        $dir = $_POST['order']['0']['dir'];
            
       if(empty($_POST['search']['value']))
        {            
        	$query = $mysqli->query("SELECT id_siswa,nama_siswa,nis,jk,nisn,tempat_lahir,tanggal_lahir,nik,agama,alamat,kelurahan,kecamatan,hp,email,nama_ayah,pendidikan_ayah,pekerjaan_ayah,nama_ibu,pendidikan_ibu,pekerjaan_ibu,rombel,tingkat,jurusan,sekolah_asal,update_terakhir FROM data_siswa order by $order $dir 
        																LIMIT $limit 
        																OFFSET $start");
        }
        else {
            $search = $_POST['search']['value']; 
            $query = $mysqli->query("SELECT id_siswa,nama_siswa,nis,jk,nisn,tempat_lahir,tanggal_lahir,nik,agama,alamat,kelurahan,kecamatan,hp,email,nama_ayah,pendidikan_ayah,pekerjaan_ayah,nama_ibu,pendidikan_ibu,pekerjaan_ibu,rombel,tingkat,jurusan,sekolah_asal,update_terakhir FROM data_siswa WHERE nisn LIKE '%$search%' 
																		or nama_siswa LIKE '%$search%' 
            															order by $order $dir 
            															LIMIT $limit 
            															OFFSET $start");


           $querycount = $mysqli->query("SELECT count(id_siswa) as jumlah FROM data_siswa WHERE nama_siswa LIKE '%$search%' 
       																						or nama_siswa LIKE '%$search%'");
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
                $nestedData['nama_siswa'] = $r['nama_siswa'];
                $nestedData['nis'] = $r['nis'];
                $nestedData['jk'] = $r['jk'];
                $nestedData['nisn'] = $r['nisn'];
                $nestedData['tempat_lahir'] = $r['tempat_lahir'];
                $nestedData['tanggal_lahir'] = $r['tanggal_lahir'];
                $nestedData['nik'] = $r['nik'];
                $nestedData['agama'] = $r['agama'];
                $nestedData['alamat'] = $r['alamat'];
                $nestedData['kelurahan'] = $r['kelurahan'];
                $nestedData['kecamatan'] = $r['kecamatan'];
                $nestedData['hp'] = $r['hp'];
                $nestedData['email'] = $r['email'];
                $nestedData['nama_ayah'] = $r['nama_ayah'];
                $nestedData['pendidikan_ayah'] = $r['pendidikan_ayah'];
                $nestedData['pekerjaan_ayah'] = $r['pekerjaan_ayah'];
				$nestedData['nama_ibu'] = $r['nama_ibu'];
                $nestedData['pendidikan_ibu'] = $r['pendidikan_ibu'];
                $nestedData['pekerjaan_ibu'] = $r['pekerjaan_ibu'];
                $nestedData['rombel'] = $r['rombel'];
                $nestedData['tingkat'] = $r['tingkat'];
                $nestedData['jurusan'] = $r['jurusan'];
                $nestedData['sekolah_asal'] = $r['sekolah_asal'];
                $nestedData['update_terakhir'] = $r['update_terakhir'];
               
               
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