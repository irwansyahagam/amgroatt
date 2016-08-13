<div class="modal fade" id="modalplusshift2" role="dialog" style="padding-top:6%;">
  <div class="modal-dialog" style="width:80%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Modal Tambah Periode Shift</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="tglshift" id="tglshift"></input>
      <input type="hidden" name="kdshift1" id="kdshift1"></input>
        <div class="row">
          <div class="col-xs-6" style="width: 30%;padding-left: 0px;padding-right: 0px;">
          <div class="box">
          <div class="box-header">                              
          </div><!-- /.box-header -->
          <div class="box-body table-responsive" id="tbmodulshift2">
             <table id="example1" class="table table-bordered table-striped" style="font-size: 10px; width: 100%;" 
             id="jdwalpeg">
             <thead>
               <tr>
                 <td style="width: 1px;">&nbsp;</td>
                 <td style="width: 90px;">Nama Shift</td>
                 <td style="width: 1px;">Periode</td>
                 <td style="width: 1px;">Unit Periode</td>
               </tr>
             </thead>
             <tbody id="tbodymodshift">
             <?php 
             $no=1; 
             $sql=$this->db->get("NUM_RUN")->result_array(); 
             foreach($sql as $row){
             ?>
             <tr>
               <!--  <?php 
             /**          $sql=$this->db->query('select a."SCHCLASSID",a."SCHNAME", (extract(hour from a."STARTTIME"
                ) || '."':'".' || extract(minute from a."STARTTIME"
              )) as STARTTIME,(extract(hour from a."ENDTIME"
              ) || '."':'".' || extract(minute from a."ENDTIME"
              )) as ENDTIME,a."STARTTIME",a."ENDTIME" FROM public."SCHCLASS" a'); 
                       foreach ($sql->result() as $key){
                        echo '<tr id="trjdwalpeg">
                        <td style="width:1px;"><input type="checkbox" id="chkmodplusshhift" class="chkmodplusshhift"
                        name="chkmodplusshhift" value="'.$key->SCHCLASSID.'|'.$key->STARTTIME.'|'.$key->ENDTIME.'"></input></td>
                           <td style="width: 90px;">'.$key->SCHCLASSID.'-'.$key->SCHNAME.'['.$key->starttime.'-'.$key->endtime.']'.'</td>
                           
                           <td style="width: 1px;">&nbsp;</td>
                           <td style="width: 1px;">&nbsp;</td>
                           '; 
                       } **/ 
                       ?> -->
                       <td id="tdshift2"><input type="checkbox" id="chkshift2" class="chkshift2" name="chkshift2" 
                                        value=<?php echo $row['NUM_RUNID'].'|'.$row['UNITS'] ?> /><span style=" text-align: left;
                                        display: none; ">
                                        <?php echo $row['NUM_RUNID'].'|'.$row['UNITS']  ?></span></td>
                       <td><?php echo $row['NAME'] ?></td>
                       <td><?php echo $row['UNITS'] ?></td>
                       <td><?php 
                       if($row['UNITS']=="2"){
                       echo 'Bulan'; 
                       }else if($row['UNITS']=="1"){
                       echo 'Minggu'; 
                       }else if($row['UNITS']=="0"){
                       echo 'Hari'; 
                       }
                       ?></td>
               </tr>
               <?php }
               ?>
             </tbody>
            </table>
          </div>
          </div>
          </div>
                        <div class="col-xs-6" style="width: 70%;padding-left: 0px;padding-right: 0px;">
                            <div class="box">
                                <div class="box-header">                              
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" style="width: 60%;" id="tableshift2">
                                    <table id="example7" class="table table-bordered table-striped" style="padding-left: 0px;padding-right: 10px;font-size: 10px;">
                                        <thead>
                                            <tr>
                                            <td><input type="checkbox" id="chkshiftall1" name="chkshiftall1" class="chkshiftall1"> 
                                            </input></td>
                                                <td>&nbsp; </td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</th>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</th>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>13</td>
                                                <td>14</td>
                                                <td>15</th>
                                                <td>16</td>
                                                <td>17</td>
                                                <td>18</td>
                                                <td>19</td>
                                                <td>20</td>
                                                <td>21</th>
                                                <td>22</td>
                                                <td>23</td>
                                                <td>24</td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyshift" class="tbodyshift">
                                        </tbody>
                                     </table>   
                             </div>
                        </div>   

                    </div>
      </div>

      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-success" id="simpanshhiftadd" onclick="">OK</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>
<!--javascript:simpanshiftadd(); --> 
<script type="text/javascript">
  function simpanshiftadd(){
    
  }
</script>
