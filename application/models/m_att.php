<?php

class m_att extends CI_Model{

function __construct(){
parent::__construct();
}

  public function get()
  {
    $this->db->select('*');
    //$this->db->like('tanggal','2013-');
    $this->db->order_by('tanggal','asc');
    return $this->db->get('tbl_pendapatan');
  }
  // select all 
  public function getall($nmtabel,$order){
    $this->db->select('*');
    //$this->db->like('tanggal','2013-');
    $this->db->order_by($order,'asc');
    return $this->db->get($nmtabel);
  }
  // get cuti 
  function getcutiupd($id,$tgl1){
	$sql='select A."USERID",U."Name",A."startspecday",A."endspecday",
A."yuanying" as alasan,A."date", A."dateid",d."DEPTNAME",d."DEPTID", 
c."LEAVENAME" as namaizin from public."USER_SPEDAY" A
INNER JOIN public."USERINFO" U
ON A."USERID"=U."USERID" inner join public."LEAVECLASS" c
on A."dateid"=c."LEAVEID" inner join public."DEPARTMENTS" d
on U."DEFAULTDEPTID"=d."DEPTID" where A."USERID"='."'$id'".' and 
A."startspecday"='."'$tgl1'".'';
$query=$this->db->query($sql); 
return $query;  

  }
  


  // report bkpp 
  function repbkpp($userid,$tgl1,$tgl2,$idclass){
    $sql='select * from public."USER_SPEDAY" a inner join public."LEAVECLASS" b 
on a."dateid"=b."LEAVEID" where a."startspecday" between '."'$tgl1'".' and '."'$tgl2'".'
 and a."endspecday"  between '."'$tgl1'".' and '."'$tgl2'".' and a."USERID"='."'$userid'".'
   and cast(a."dateid" as character)='."'$idclass'".'';
    $query=$this->db->query($sql); 
    return $query; 
  }

  // get jam for report 
  function getjamrepharian($userid,$tgl1,$tgl2){
    $sql='SELECT * FROM public."NUM_RUN_DEIL" a inner join 
        public."USER_OF_RUN" b on a."NUM_RUNID"=b."NUM_OF_RUN_ID" where  b."STARTDATE"<='."'$tgl1'".'
      AND b."ENDDATE">='."'$tgl2'".' and b."USERID"='."'$userid'".' and a."STARTTIME"!='."'1900-01-01 00:00:00'".' 
AND a."ENDTIME"!='."'1900-01-01 00:00:00'".''; 
    $query=$this->db->query($sql); 
    return $query; 
  }

  // scan masuk or scan pulang sistem 
  function scanmaspul($userid,$tgl){
    $sql=' SELECT * FROM public."CHECKINOUT" where "USERID"='."'$userid'".' 
    and CAST("CHECKTIME" AS date)='."'$tgl'".' AND "CHECKTYPE"='."'I'".'
    order by "CHECKTIME" ASC limit 1'; 
    $query=$this->db->query($sql); 
    return $query; 
  }

  // scan pulang 
  function scanpulang($userid,$tgl){
    $sql=' SELECT * FROM public."CHECKINOUT" where "USERID"='."'$userid'".' 
    and CAST("CHECKTIME" AS date)='."'$tgl'".' AND "CHECKTYPE"='."'O'".'
        order by "CHECKTIME" DESC limit 1'; 
    $query=$this->db->query($sql); 
    return $query;     
  }

  // function get department 
  public function getdepartment(){
  $this->db->select('*'); 
    $this->db->order_by('DEPTID','asc'); 
    return $this->db->get('DEPARTMENTS'); 
  }
// cek row schedule normal 
  function getshcedulenormal($iduser,$tgl1){
    //$sql=$this->db->get_where('USER_OF_RUN',array('USERID'=>$iduser,'STARTDATE'=>$tgl1)); 
    $thn=explode('-',$tgl1)[0]; 
    $bln=explode('-', $tgl1)[1];   
    $sql='select * from public."USER_OF_RUN" where "USERID"='."'$iduser'".'
          and extract(year from "STARTDATE")='."'$thn'".' and 
          extract(month from "STARTDATE")='."'$bln'".'';
    $query=$this->db->query($sql);        
    return $query; 
  }


// get array schedule sementara 
  function getschsementara($userid,$tgl1,$flag=1){
    $bln=explode('-', $tgl1)[1]; 
    $thn=explode('-', $tgl1)[0]; 
   // $sql=$this->db->get_where('USER_TEMP_SCH',array('USERID'=>$userid,'COMETIME'=>$tgl1,'FLAG'=>$flag)); 
   $sql='select * from public."USER_TEMP_SCH" where "USERID"='."'$userid'".' and "FLAG"='."'$flag'".' and 
   extract (MONTH from "COMETIME")='."'$bln'".' and extract(YEAR from "COMETIME")='."'$thn'".'
   '; 
    //cast ("COMETIME" as date)='."'$tgl1'".''; 
   $query=$this->db->query($sql);      
    return $query;  
  }

// get chart sakit 
  public function getsakit($thn,$sakit="1"){ // 1 adalah kode sakit pada leave class 
    return $this->db->query('select EXTRACT (MONTH FROM a."startspecday")
                    as bln, count(a."USERID") as jlh from public."USER_SPEDAY" a
                    where extract(year from a."startspecday")='.$thn.' AND a."dateid"='.$sakit.' GROUP BY EXTRACT(MONTH FROM a."startspecday") 
                    order by extract(month from a."startspecday") asc '); 
  }

  // get chart izin 
  public function getizin($thn,$izin="3"){ // 3 adalah kode izin pada leave class 
    return $this->db->query('select EXTRACT (MONTH FROM a."startspecday")
                    as bln, count(a."USERID") as jlh from public."USER_SPEDAY" a
                    where extract(year from a."startspecday")='.$thn.' AND a."dateid"='.$izin.' GROUP BY EXTRACT(MONTH FROM a."startspecday") 
                    order by extract(month from a."startspecday") asc '); 
  }
  // get kehadiran 
  public function gethadir($thn,$type="I"){ // get data count kehadiran pegawai 
    return $this->db->query('SELECT COUNT(x."jlh") as jlh,x."bln" from (select COUNT(a."USERID") as jlh,EXTRACT(MONTH from a."CHECKTIME") AS                    bln from public."CHECKINOUT" a 
                          where EXTRACT(YEAR from a."CHECKTIME")='.$thn.' AND a."CHECKTYPE"='."'$type'".'
                          group by a."USERID",
                        EXTRACT(YEAR from a."CHECKTIME"), EXTRACT (MONTH from a."CHECKTIME"))X
                        group by x."bln" order by x."bln" asc'); 
  }
//get machine
function getmachine(){
  $sql=$this->db->query("select * from machine order by id");
  return $sql;
}

function selectdata($where=''){
  return $this->db->query("select * from $where; ");
}

//GET pegawai hasil pencarian
function getpegawaicari ($where,$idcari){
  return $this->db->query(" where $idcari;");
}

// GET pendidikan 
function getpendidikan($idpendi){
  $sql=$this->db->get_where('PENDIDIKAN',array('IDPENDIDIKAN'=>$idpendi)); 
  if($sql->num_rows()>0){
  return $sql->row()->NAMAPEND;
  }else{
      return ''; 
  } 
}
// get skor pendidikan 
function getskorpendidikan($kdpendi){
  $sql=$this->db->get_where('PENDIDIKAN',array('IDPENDIDIKAN'=>$kdpendi)); 
  if($sql->num_rows()>0){
  return $sql->row()->skor; 
  }else{
    return ''; 
  }
}
// get departments 
function getdepartment3($kddep){
  $sql=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$kddep)); 
  if($sql->num_rows()>0){
  return $sql->row()->DEPTNAME; 
  }else{
    return ''; 
  } 
}


// get golongan master 
function getgolonganmaster($kdgol){
  $sql=$this->db->get_where('golonganmaster',array('kd_golongan'=>$kdgol)); 
  if($sql->num_rows()>0) {
  return $sql->row()->golongan; 
  }else{
    return ''; 
  }
}
// get skor golongan master 
function getskorgolomas($kdgol)
{
  $sql=$this->db->get_where('golonganmaster',array('kd_golongan'=>$kdgol)); 
  if($sql->num_rows()>0){
  return $sql->row()->skor;
    }else{
      return ''; 
    } 
}


function insertdata($table,$data){
  return $this->db->insert($table,$data);
}

//get Department
function getdepart(){
		$sql=$this->db->query(
		'select count("USERID") as jmlh,"DEFAULTDEPTID","DEPTNAME" from (
		select a."USERID",a."DEFAULTDEPTID",b."DEPTNAME" from public."USERINFO" a
		 inner join public."DEPARTMENTS" b on a."DEFAULTDEPTID"=b."DEPTID") x 
		 group by "DEFAULTDEPTID","DEPTNAME" ORDER by "DEPTNAME"
		'); 
		return $sql; 
 // return $this->db->query('select "DEPTID","DEPTNAME" from public."DEPARTMENTS"');
}
// get data presensi 
function getdatapresensi($tgl1,$tgl2,$user){
  $sql='SELECT a."USERID", u."Name", 
      u."Badgenumber" AS PIN, u."SSN" as SSN, u."DEFAULTDEPTID" as DefaultDeptID1, 
      u."CardNo" as CardNo,case when a."CHECKTYPE"='."'I'".' then '."'Masuk'".' else '."'Pulang'".' end as checktype1, a."CHECKTIME", a."SENSORID", 
      a."WorkCode",d."DEPTNAME",a."VERIFYCODE" as verifycode1,a."UserExtFmt" as UserExtFmt  
      FROM public."CHECKINOUT" a 
      INNER JOIN  "USERINFO" u on a."USERID"=u."USERID"
      INNER JOIN "DEPARTMENTS" d  on d."DEPTID" = u."DEFAULTDEPTID" 
      WHERE  (a."CHECKTIME" Between '."'$tgl1'".' And '."'$tgl2'".') 
      AND (a."USERID" IN ('."'$user'".'))
      ORDER BY  "DEFAULTDEPTID",CAST("Badgenumber" as integer)+0, "CHECKTIME"'; 
      $query=$this->db->query($sql); 
      return $query; 
      
  }

// function getmaxnumber
function getmaxid(){
  $sql=$this->db->query('SELECT
  MAX(cast("USERINFO"."Badgenumber" AS integer)) as noid
FROM
  public."USERINFO"');
  if($sql->row()->noid=="NULL"){
    return '1';
  }else{
    return $sql->row()->noid+1; 
  }
}

// get generate kode pendidikan
function getpendid(){
  $sql=$this->db->query('SELECT MAX(cast("PENDIDIKAN"."IDPENDIDIKAN" AS integer)) as kodependi from public."PENDIDIKAN"');
  $kdpen=$sql->row()->kodependi+1; 
  return $kdpen;
}


// get jadwal unit  jadwal shift 
function getjdwalpeg($kdunit,$tgl1,$tgl2){
  $sql=$this->db->query('SELECT U."DEFAULTDEPTID",U."USERID",U."Badgenumber",U."Name" as 
    FUserName,N."NAME" as FShiftName,N."NUM_RUNID", N."STARTDATE" as FShiftStartDate,N."ENDDATE" as FShiftEndDate,N."CYLE" as 
    FShiftCycle,N."UNITS" as FShiftUnit,             
 R."STARTDATE" as FStartDate, R."ENDDATE" as FEndDate, T.FCount                                                     
 FROM ((public."USERINFO" U left join public."USER_OF_RUN" R on U."USERID"=R."USERID")
 left join public."NUM_RUN" N on R."NUM_OF_RUN_ID"=N."NUM_RUNID")                                                                
 left join (select "USERID",Count("USERID") as FCount from public."USER_TEMP_SCH"
 where "FLAG"='."'1'".' and "COMETIME">='."'$tgl1'".' and "LEAVETIME"<='."'$tgl2'".' group by "USERID") T on U."USERID"=T."USERID"         
 WHERE "DEFAULTDEPTID" In ('."'$kdunit'".') 
 ORDER BY  "DEFAULTDEPTID","Badgenumber"'); 
  return $sql; 
}


 // get time schedule 
 function getschpegawai($user){
    $sql=$this->db->query('SELECT a."USERID",cast(a."COMETIME" as date) as "COMETIME", a."SCHCLASSID",b."SCHNAME" from public."USER_TEMP_SCH" a
inner join public."SCHCLASS" b on a."SCHCLASSID"=b."SCHCLASSID" WHERE "USERID"='."'$user'".'  group by a."USERID",a."COMETIME",b."SCHCLASSID",b."SCHNAME"'); 
    return $sql; 
 } 
 // hapus user temp schedule 
 function hapususertempsch($tgl,$userid){
  $sql=$this->db->query('delete from public."USER_TEMP_SCH" where  cast("COMETIME" as date)='."'$tgl'".' AND "USERID"='."'$userid'".''); 
  return $sql; 
 }

// hapus administrator 
 function hpsadminis($kduser){
  
 }

// get system log 

function getsystemlog(){
	$sql=$this->db->query('select * from public."SystemLog"'); 
	return $sql; 
}
// simpan system log 
function simpanlog($arr){
	$sql=$this->db->insert('SystemLog',$arr); 
	return $sql; 
}

// get pegawai hadir 
function gethadir2($bln,$thn){
  if(!empty($bln) && !empty($thn)){
  $sql='SELECT x."USERID",x."Name",x."checktime",x."SSN" from (SELECT a."USERID",b."Name", cast(a."CHECKTIME" as date) as 
checktime,b."SSN"  FROM public."CHECKINOUT" a inner join public."USERINFO" b 
on a."USERID"=b."USERID" GROUP by a."USERID",b."Name",a."CHECKTIME",b."SSN")x 
where extract(month FROM x."checktime")='."'$bln'".' 
and extract(year from x."checktime")='."'$thn'".' 
group by x."USERID",x."Name",x."checktime",x."SSN" ORDER BY x."USERID" '; 
  }else{
    $sql=''; 
  }
$query=$this->db->query($sql); 
return $query; 
}
// get jumlah hadir pertanggal 
function gethdrpertanggal($tgl){
  if(!empty($tgl)){
    $sql='select count(x."USERID") as jlh from (
        select a."USERID" from public."CHECKINOUT" a where cast(a."CHECKTIME" as date)='."'$tgl'".'
        group by a."USERID")x'; 
  }else{
    $sql=''; 
  }
  $query=$this->db->query($sql); 
  return $query; 
}


//get alpha pegawai 
function getalphapeg($bln,$thn){
  if(!empty($bln) && !empty($thn)){
    $sql='--get jadwal pegawai 
      SELECT U."DEFAULTDEPTID",U."USERID",U."SSN",U."Badgenumber",U."Name" as 
    FUserName,N."NAME" as FShiftName,N."NUM_RUNID", N."STARTDATE" as FShiftStartDate,N."ENDDATE" as FShiftEndDate,N."CYLE" as 
    FShiftCycle,N."UNITS" as FShiftUnit,             
    R."STARTDATE" as FStartDate, R."ENDDATE" as FEndDate, T.FCount                                                     
    FROM ((public."USERINFO" U left join public."USER_OF_RUN" R on U."USERID"=R."USERID")
    left join public."NUM_RUN" N on R."NUM_OF_RUN_ID"=N."NUM_RUNID" )                                                             
    left join (select "USERID",Count("USERID") as FCount from public."USER_TEMP_SCH"
    group by "USERID") T on U."USERID"=T."USERID" WHERE  U."USERID" not in (
    select x."USERID" from public."CHECKINOUT" x
      where extract(month FROM x."CHECKTIME")='."'$bln'".' 
      and extract(year from x."CHECKTIME")='."'$thn'".' 
    ) AND extract(month from R."STARTDATE")='."'$bln'".'  
      AND extract(year from R."STARTDATE")='."'$thn'".'
    ORDER BY  "DEFAULTDEPTID","Badgenumber"'; 
  }else{
    $sql=''; 
  }
  $query=$this->db->query($sql); 
  return $query; 
}

// get all departments 
function getalldept($iddept){
  $sql=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$iddept)); 
  return $sql; 
}

// get pencarian 
function getpencarian($nama){
  $sql=$this->db->query('select * from public."USERINFO" where "Name" like '."'%$nama%'".''); 
  return $sql; 
}


// getizin pegawai 
function getizinpeg($bln,$thn){
if(!empty($bln) && !empty($thn)){
  $sql='select A."USERID",U."Name",U."SSN",A."startspecday",A."endspecday",
A."yuanying" as alasan,A."date", A."dateid",d."DEPTNAME",
c."LEAVENAME" as namaizin from public."USER_SPEDAY" A
INNER JOIN public."USERINFO" U
ON A."USERID"=U."USERID" inner join public."LEAVECLASS" c
on A."dateid"=c."LEAVEID" inner join public."DEPARTMENTS" d
on U."DEFAULTDEPTID"=d."DEPTID" 
where extract(month FROM A."startspecday")='."'$bln'".'
and extract(year from A."startspecday")='."'$thn'".' and A."dateid"='."'3'".'  
order by A."startspecday" desc'; 
}else{
  $sql=''; 
}
$query=$this->db->query($sql); 
return $query; 
}
// getsakit pegawai 
function getsakitpegawai($bln,$thn){
if(!empty($bln) && !empty($thn)){
    $sql='select A."USERID",U."Name",U."SSN",A."startspecday",A."endspecday",
A."yuanying" as alasan,A."date", A."dateid",d."DEPTNAME",
c."LEAVENAME" as namaizin from public."USER_SPEDAY" A
INNER JOIN public."USERINFO" U
ON A."USERID"=U."USERID" inner join public."LEAVECLASS" c
on A."dateid"=c."LEAVEID" inner join public."DEPARTMENTS" d
on U."DEFAULTDEPTID"=d."DEPTID" 
where extract(month FROM A."startspecday")='."'$bln'".'
and extract(year from A."startspecday")='."'$thn'".' and A."dateid"='."'1'".'  
order by A."startspecday" desc';
}else{
  $sql=''; 
}
$query=$this->db->query($sql); 
return $query; 
}

// get sakit pertanggal 
function getsakitpertanggal($userid,$tgl){
  if(!empty($userid) && !empty($tgl)){
    $sql='select A."USERID",U."Name",U."SSN",A."startspecday",A."endspecday",
    A."yuanying" as alasan,A."date", A."dateid",d."DEPTNAME",
    c."LEAVENAME" as namaizin from public."USER_SPEDAY" A
    INNER JOIN public."USERINFO" U
    ON A."USERID"=U."USERID" inner join public."LEAVECLASS" c
    on A."dateid"=c."LEAVEID" inner join public."DEPARTMENTS" d
    on U."DEFAULTDEPTID"=d."DEPTID" 
    where A."startspecday"='."'$tgl'".' and A."dateid"='."'$userid'".'
    order by A."startspecday" desc'; 
  }else{
    $sql=''; 
  }
  $query=$this->db->query($sql); 
  return $query;
}

function getsakitpertgl1($tgl,$dateid){
  if(!empty($tgl)){
    $sql='select count("USERID") as jlh from (select a."USERID" from public."USER_SPEDAY" a 
          inner join public."USERINFO" u on 
          a."USERID"=u."USERID" inner join public."LEAVECLASS" c 
          on a."dateid"=c."LEAVEID" where a."dateid"='."'$dateid'".' and 
          a."startspecday">='."'$tgl'".')x'; 
  }else{
    $sql=''; 
  }
  $query=$this->db->query($sql); 
  return $query; 
}
// get alpha pertanggal 
function getalphapertgl($tgl){
  if(!empty($tgl)){
    $sql=' select count("USERID") as jlh from (
          SELECT U."USERID"                                                     
          FROM ((public."USERINFO" U left join public."USER_OF_RUN" R on U."USERID"=R."USERID")
          left join public."NUM_RUN" N on R."NUM_OF_RUN_ID"=N."NUM_RUNID" )                                                             
          left join (select "USERID",Count("USERID") as FCount from public."USER_TEMP_SCH"
          group by "USERID") T on U."USERID"=T."USERID" WHERE  U."USERID" not in (
          select x."USERID" from public."CHECKINOUT" x
          where  x."CHECKTIME"='."'$tgl'".'
          ) AND  R."STARTDATE"='."'$tgl'".'
          ORDER BY  "DEFAULTDEPTID","Badgenumber"
          )x ';
  }else{
    $sql=''; 
  }
  $query=$this->db->query($sql); 
  return $query; 
}
// simpan jadwal sementara 
function simpanjdwalsemntra($arr){
  $sql=$this->db->insert('USER_TEMP_SCH',$arr); 
  return $sql; 
}



}
