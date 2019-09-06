<?php
// ======================================================
// Class pagination untuk frontend GET All
Class Paging_get_all
{
// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas)
	{
		if(empty($_GET['halaman']))
		{
			$posisi=0;
			$_GET['halaman']=1;
		}
		else
		{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas)
	{
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman)
	{
		$link_halaman = "";

		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif > 1)
		{
			$prev = $halaman_aktif-1;
			$link_halaman .= "<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&halaman=1> <i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i> </a></li>
							<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&halaman=$prev> <i class='fa fa-chevron-left'></i> </a></li> ";
		}
		else
		{ 
			$link_halaman .= " <li class='disabled'><a href=''> <i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i> </a>   <li class='disabled'><a href=''> <i class='fa fa-chevron-left'></i> </a> ";
		}

		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++)
		{
			if ($i < 1)
			continue;
			$angka .= "<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&halaman=$i> $i</a></li> ";
		}
			$angka .= " <li class='active'><a href=''> $halaman_aktif </a></li> ";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++)
			{
				if($i > $jmlhalaman)
				break;
				$angka .= "<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&halaman=$i> $i</a></li> ";
			}
				$angka .= ($halaman_aktif+2<$jmlhalaman ? " <li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&halaman=$jmlhalaman> $jmlhalaman </a></li> " : " ");

		$link_halaman .= "$angka";

		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman)
		{
			$next = $halaman_aktif+1;
			$link_halaman .= " <li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&halaman=$next> <i class='fa fa-chevron-right'></i> </a></li> 
							 <li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&halaman=$jmlhalaman> <i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i> </a></li> ";
		}
		else
		{
			$link_halaman .= " <li class='disabled'><a href='' > <i class='fa fa-chevron-right'></i> </a></li> <li class='disabled'><a href=''> <i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i> </a></li> ";
		}
		return $link_halaman;
	}
}

// ======================================================
// Class pagination untuk frontend BY ID
class Paging_by_id
{
	// Fungsi untuk mencek halaman dan posisi data
	function cariPosisi($batas)
	{
		if(empty($_GET['halaman']))
		{
			$posisi=0;
			$_GET['halaman']=1;
		}
		else
		{
			$posisi = ($_GET['halaman']-1) * $batas;
		}
		return $posisi;
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas)
	{
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman)
	{
		$link_halaman = "";

		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif > 1)
		{
			$prev = $halaman_aktif-1;
			$link_halaman .= "<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&id=$_GET[id]&halaman=1>  <i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i> </a></li>
							<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&id=$_GET[id]&halaman=$prev> <i class='fa fa-chevron-left'></i> </a></li> ";
		}
		else
		{ 
			$link_halaman .= " <li class='disabled'><a href=''> <i class='fa fa-chevron-left'></i><i class='fa fa-chevron-left'></i> </a></li>   <li class='disabled'><a href=''> <i class='fa fa-chevron-left'></i> </a></li> ";
		}

		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? " " : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++)
		{
			if ($i < 1)
			continue;
			$angka .= "<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&id=$_GET[id]&halaman=$i>$i</a><li> ";
		}
			$angka .= " <li class='active'><a href=''>$halaman_aktif</a><li> ";
			  
		for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++)
		{
			if($i > $jmlhalaman)
			break;
			$angka .= "<li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&id=$_GET[id]&halaman=$i>$i</a></li> ";
		}
			$angka .= ($halaman_aktif+2<$jmlhalaman ? " <li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&id=$_GET[id]&halaman=$jmlhalaman>$jmlhalaman</a></li> " : " ");

			$link_halaman .= "$angka";

		// Link ke halaman berikutnya (Next) dan terakhir (Last) 
		if($halaman_aktif < $jmlhalaman)
		{
			$next = $halaman_aktif+1;
			$link_halaman .= " <li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&id=$_GET[id]&halaman=$next> <i class='fa fa-chevron-right'></i> </a><li> 
							 <li><a href=$_SERVER[PHP_SELF]?mod=$_GET[mod]&id=$_GET[id]&halaman=$jmlhalaman>  <i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i> </a><li> ";
		}
		else
		{
			$link_halaman .= " <li class='disabled'><a href=''> Next >> </a></li> <li class='disabled'><a href=''> <i class='fa fa-chevron-right'></i><i class='fa fa-chevron-right'></i> </a> ";
		}
		return $link_halaman;
	}
}