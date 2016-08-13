<?php
ob_start();?>

    <page backtop="3mm" backbottom="3mm" backleft="3mm" backright="3mm">
        <table cellspacing="0" style="width: 100%; font-size: 10px">
        <tr>
            <td style="width: 100%;text-align: center;">
                <span style="font-size: 18px"><b>
                    Rekap absen <?php echo $tgl1.' s.d '.$tgl2; ?> 
                </b><br/>
                    <b>Pada RSUD MEURAXA KOTA BANDA ACEH</b>
                </span><br>
            </td>
               <td style="width: 100%; color: #444444; text-align: left;">
                   
                </td>
            </tr>
        </table> 
         <table cellspacing="0" style="width: 100%; font-size: 10px">
        <tr>
            <td style="width: 100%;text-align: left;">
                <span style="font-size: 18px"><b> </b></span><br>
                 <br>
                <b><span style="font-size: 11px"></span></b>
            </td>
        </tr>
        </table> 
       <?php echo $html;?>


        <table cellspacing="0" style="width: 100%; font-size: 10px">
        <tr>
            <td style="width: 100%;text-align: left;padding-left: 490px;">
                <span style="font-size: 12px;margin-right:900px;"><b><br/>
                
                    &nbsp;&nbsp;BANDA ACEH, <?php echo date('d-M-Y');?><br/>
                    &nbsp; Rumah Sakit Umum Daerah Meuraxa<br/> 
                    &nbsp; Kota Banda Aceh<br />
                    &nbsp; Direktur
                    <br/><br/> <br/><br/>
                    &nbsp; Dr.dr.Syahrul, Sp.S-K<br/>
                    &nbsp; Pembina Utama Muda <br/>
                    &nbsp; Nip.19620202 198903 1 001
                </b><br/>
                
                    
                    <b></b>
                </span><br>
            </td>
               <td style="width: 100%; color: #444444; text-align: left;">
                   
                </td>
            </tr>
        </table> 
         <table cellspacing="0" style="width: 100%; font-size: 10px">
        <tr>
            <td style="width: 100%;text-align: left;">
                <span style="font-size: 18px"><b> </b></span><br>
                 <br>
                <b><span style="font-size: 11px"></span></b>
            </td>
        </tr>
        </table> 
    </page>
<?php
    $content = ob_get_clean();
    //$link='D:/xampp/htdocs/rsza/lib/';
    //$link=base_url().'lib/';
    require_once('./lib/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('p', 'A4', 'fr',true, 'UTF-8', 3);
        ini_set("memory_limit", "500M");
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('flaporan.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>