<?php 
session_start();
setlocale(LC_TIME, 'tr_TR');
$kullaniciAdSoyad = $_SESSION['kullaniciAdSoyad'];
$kullaniciId = $_SESSION['kullaniciId'];
include("dbConnect.php");
?>
<html>
    <head>
        <title>Kişisel Gelir Gider Yönetimi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.docs.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/js/datatable/css/jquery.dataTables.css">
        <script type="text/javascript" language="javascript" src="assets/js/datatable/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/js/datatable/extensions/TableTools/css/dataTables.tableTools.css">
        <script type="text/javascript" language="javascript" src="assets/js/datatable/extensions/TableTools/js/dataTables.tableTools.js"></script>
        <script>
            String.prototype.buyukHarf=function() {
                var str = [];
                for(var i = 0; i < this.length; i++) {
                    var ch = this.charCodeAt(i);
                    var c = this.charAt(i);
                    if(ch == 105) str.push('İ');
                    else if(ch == 305) str.push('I');
                    else if(ch == 287) str.push('Ğ');
                    else if(ch == 252) str.push('Ü');
                    else if(ch == 351) str.push('Ş');
                    else if(ch == 246) str.push('Ö');
                    else if(ch == 231) str.push('Ç');
                    else if(ch >= 97 && ch <= 122) str.push(c.toUpperCase());
                    else str.push(c);
                }
                return str.join('');
            }
            
            $(function() {
                $(".tarih").datepicker({ dateFormat: 'dd/mm/yy' });
                
                $.datepicker.regional['tr'] = {
                    closeText: 'kapat',
                    prevText: '&#x3c;geri',
                    nextText: 'ileri&#x3e',
                    currentText: 'bugün',
                    monthNames: ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran',
                    'Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
                    monthNamesShort: ['Oca','Şub','Mar','Nis','May','Haz',
                    'Tem','Ağu','Eyl','Eki','Kas','Ara'],
                    dayNames: ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],
                    dayNamesShort: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
                    dayNamesMin: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
                    weekHeader: 'Hf',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''};
                $.datepicker.setDefaults($.datepicker.regional['tr']);
                    
                $(".datatable").DataTable({
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath" : "assets/js/datatable/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                        "aButtons": [
                            "copy",
                            "print",
                            {
                                "sExtends":    "collection",
                                "sButtonText": "Kaydet",
                                "aButtons":    [ "csv", "xls", "pdf" ]
                            }
                        ]
                    }
                });
            });
        </script>
    </head>
    <body>
            <div class="container-fluid">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h3 style="margin-top: 10px;">Ev-Hane Gelir Gider Yönetimi</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div id="ek_header" class="pull-right"></div>
                </div>
                <div style="clear: both;"></div>
                <div class="panel panel-default">
                    <div class="panel-body">
                    <div  class="panel panel-default">
                        <div class="panel-body">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo "Merhaba $kullaniciAdSoyad" ?> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="logout.php">Güvenli Çıkış</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Menü <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="loginUser.php">Anasayfa</a></li>
                                    <li><a href="Gelir.php">Gelirler</a></li>
                                    <li><a href="Gider.php">Giderler</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-12">
                <div class="row">
                <div style="float: right;">
                    <script>
                    $(function() {
                        $("#kategori").change(function() {
                            var id = $(this).val();
                            window.location = '?ay=10&yil=2018&tur=gider&kategori='+id;
                        });
                    });
                    </script>
                </div>
                <div class="clear"></div>
                <h3>GİDER Kayıtlar</h3>
                <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Ay / Yıl</th>
                                <th>Tarih</th>
                                <th width="10%">Kategori</th>
                                <th width="25%">Açıklama</th>
                                <th></th>
                                <th style="text-align: right;" width="15%">İşlem Tutarı</th>
                            </tr>
                             <?php 
                            $kullaniciId = $_SESSION['kullaniciId'];
                            $query = $conn->query("SELECT * FROM kullanicigiderleri WHERE kullanicigiderId = $kullaniciId");
                            $sorusayisi = 1;
                            $toplamGider = 0;
                            $tr = "</tr><tr>";
                            if($query->rowCount() > 0){
                                while($row = $query->fetch()){
                                    $giderMiktar = $row['giderMiktar'];
                                    $giderkategoriAd = $row['giderkategoriAd'];
                                    $giderDate = $row['giderDate'];
                                    $giderId = $row['giderId'];
                                    $giderAciklama = $row['giderAciklama'];
                                    $toplamGider += $giderMiktar;
                                    ?>
                                    <tr>
                                        <td><?php echo strftime('%B/%Y',time())?></td>
                                        <td><?php echo $giderDate?></td>
                                        <td><?php echo $giderkategoriAd ?></td>
                                        <td><?php echo $giderAciklama ?></td>
                                        <td style="text-align: center;">
                                                <a href="deleteGider.php?id=<?php echo $giderId ?>" class="btn btn-danger" title="Sil" >SİL</a>
                                        </td>
                                        <td style="text-align: right;"><?php echo $giderMiktar ?></td>
                                    </tr>
                                    <?php
                                }
                            }else{ ?>
                            <tr>
                                <td>Bos</td>
                                <td>Bos</td>
                                <td>Bos</td>
                                <td>Bos</td>
                                <td>Bos</td>
                                <td>Bos</td>
                            </tr>
                            <?php } ?> 
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th style="text-align: right;" colspan="3">TOPLAM: <?php echo $toplamGider?></th>
                        </tr>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
    </body>       
</html>